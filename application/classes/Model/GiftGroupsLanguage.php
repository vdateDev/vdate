<?php defined('SYSPATH') or die('No direct script access.');

class Model_GiftGroupsLanguage extends ORM {
    
    protected $_table_name = 'gift_groups_languages';
    
    public function filters() {
        
        return array(
            'name' => array(
                array('trim'),
                array('strip_tags'),
            ),
        );
        
    }

    public function add_language($id, $key, $data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('group_id', 'name','language'));
        
        $values['language'] = $key;
        $values['group_id'] = $id;
                
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public function edit_language($data) {
        
        if (!$this->loaded()) {
            
            return;
            
        }

        $values = Arr::extract($data, array('name'));
        $this->values($values);
        
        $this->update();
        
        return $this;
    }
}