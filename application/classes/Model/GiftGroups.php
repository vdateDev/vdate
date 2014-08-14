<?php defined('SYSPATH') or die('No direct script access.');

class Model_GiftGroups extends ORM {
    
    protected $_table_name = 'gift_groups';
    
    protected $_has_many = array(
        'languages' => array(
            'model' => 'GiftGroupsLanguage',
            'foreign_key' => 'group_id',
        ),
    );
    
    public function filters() {
        
        return array(
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
        );
    }
    
    
    public function add_group($data, $languages, $file) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'group_id', 'created_at'));
        
        $this->values($values);
        $this->save();
        
        foreach($languages AS $lang) {
         
            $this->languages->add_language($this->id, $lang->key, $data[$lang->key]);
            
        }
        
        return $this;
    }
    
    public function edit_group($data, $languages) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'url', 'group_id', 'updated_at'));
        
        $this->values($values);
        $this->update();
        
        $group_languages = $this->languages->find_all();
        
        foreach ($group_languages AS $group_lang) {
            
            $group_lang->edit_language($data[$group_lang->language]);
            
        }
        
        return $this;
    }
    
    public static function get_groups_backend() {
        
        $groups = ORM::factory('GiftGroups')
                    ->join('gift_groups_languages')
                    ->on('giftgroups.id', '=', 'gift_groups_languages.group_id')                    
                    ->select(
                        array('gift_groups_languages.name', 'name')
                    )
                    ->where('gift_groups_languages.language', '=', 'en')
                    ->order_by('sort', 'ASC');
        
        
        $groups = $groups->find_all();
        
        return $groups;
    }
    
    public static function get_groups_backend_by_parent($id_parent) {
        
        $groups = ORM::factory('GiftGroups')
                    ->join('gift_groups_languages')
                    ->on('giftgroups.id', '=', 'gift_groups_languages.group_id')                    
                    ->select(
                        array('gift_groups_languages.name', 'name')
                    )
                    ->where('giftgroups.group_id', '=', $id_parent)
                    ->where('gift_groups_languages.language', '=', 'en')
                    ->order_by('sort', 'ASC');
        
        
        $groups = $groups->find_all();
        
        return $groups;
    }
    
    
  
    public static function count_by_status($status) {
        
        return self::factory('GiftGroups')->where('status', '=', $status)->count_all();
        
    }
    
    public static function get_tree_backend($id_parent,$tpl,$cur_parent=NULL){

        $groups=  Model_GiftGroups::get_groups_backend_by_parent($id_parent) ;
        $tree=View::factory($tpl)
                         ->bind('groups', $groups)
                         ->bind('cur_parent',$cur_parent);
         return $tree;

    }
   
    public static function count_by_parent($id_parent,$status=NULL) {
        
        $groups=self::factory('GiftGroups')->where('group_id', '=', $id_parent);
        if (isset($status)) {
            $groups->where('status', '=', $status);
        }
        return $groups->count_all();
        
    }
    
    public static function get_groups_frontend_by_parent($lang,$id_parent) {
        
        $groups = ORM::factory('GiftGroups')
                    ->join('gift_groups_languages')
                    ->on('giftgroups.id', '=', 'gift_groups_languages.group_id')                    
                    ->select(
                        array('gift_groups_languages.name', 'name')
                    )
                    ->where('giftgroups.group_id', '=', $id_parent)
                    ->where('gift_groups_languages.language', '=', $lang)
                    ->where('giftgroups.status','=','1')
                    ->order_by('sort', 'ASC');
        
        
        $groups = $groups->find_all();
        
        return $groups;
    }
    
    public static function get_groups_with_gifts($lang,$id_parent,$tpl) {
        
        $groups=self::get_groups_frontend_by_parent($lang, $id_parent);
        $res='';
        if (count($groups)>0) { 
            foreach ($groups as $group) {
                $gifts=  Model_Gifts::get_gifts_fronted_by_group($lang,$group->id);
                $res.=View::factory($tpl)
                    ->bind('group',$group)
                    ->bind('gifts',$gifts);
            } 
        } else {
            $group=NULL;
            $gifts=  Model_Gifts::get_gifts_fronted_by_group($lang,$id_parent);
            $res.=View::factory($tpl)
                ->bind('group',$group)
                ->bind('gifts',$gifts);
        }

        return $res;
    }

}