<?php defined('SYSPATH') or die('No direct script access.');

class Model_Gifts extends ORM {
    
    protected $_table_name = 'gifts';
    
    protected $_has_many = array(
        'languages' => array(
            'model' => 'GiftsLanguage',
            'foreign_key' => 'gift_id',
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
    
    
    public function add_gifts($data, $languages, $file) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'created_at', 'group_id','cost'));
        
        if (!empty($file)) {
            
            $values['image'] = $this->upload_image($file);
            
        }
        
        $this->values($values);
        $this->save();
        
        foreach($languages AS $lang) {
         
            $this->languages->add_language($this->id, $lang->key, $data[$lang->key]);
            
        }
        
        return $this;
    }
    
    public function edit_gifts($data, $languages, $file) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'updated_at','group_id','cost','type'));
        
        if (!empty($file)) {
            
            $values['image'] = $this->upload_image($file);
            
        }
        
        $this->values($values);
        $this->update();
        
        $gifts_languages = $this->languages->find_all();
        
        foreach ($gifts_languages AS $gifts_lang) {
            
            $gifts_lang->edit_language($data[$gifts_lang->language]);
            
        }
        
        return $this;
    }
    
    public function upload_image($image) {
        
        if (!Upload::valid($image) OR !Upload::not_empty($image) OR !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            
            return;
            
        }
        
        $settings = Kohana::$config->load('gifts')->as_array();
        
        $original = $image['name'];
        $tmp = explode('.', $original);
        $ext = end($tmp);
        
        $filename = strtolower(Text::random('alnum', 32)).'.'.$ext;
        
        $dir = DOCROOT.'upload/gifts/';
        
        if ($file = Upload::save($image, NULL, $dir)) {
            
            $im = Image::factory($file);
            $master = Image::WIDTH;
            
            if ($im->width < $im->height) {
                
                $master = Image::HEIGHT;
                
            }
            
            if ($im->width<$settings['image_width']) $settings['image_width']=$im->width;
            if ($im->height<$settings['image_height']) $settings['image_height']=$im->height;
            
            $im->resize($settings['image_width'], $settings['image_height'], $master)
               ->crop($settings['image_width'], $settings['image_height'])
               ->save($dir.$filename);
            
            unlink($file);
            
            return $filename;
        }
        
        return FALSE;
    }
    
    public function delete_image() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        if (HTML::isset_img('upload/gifte/'.$this->image)) {
            unlink(DOCROOT.'upload/gifts/'.$this->image);
        }
        
        $this->image = NULL;
        $this->update();
    }
    
    public static function get_gifts_backend($group_id=NULL, $status=NULL, $created_at_start=NULL, $created_at_end=NULL,  $sort=NULL, $limit = NULL, $offset = NULL) {
        
        $gifts = ORM::factory('Gifts')
                    ->join('gifts_languages','left')
                    ->on('gifts.id', '=', 'gifts_languages.gift_id')                    
                    ->select(
                        array('gifts_languages.name', 'name')
                    )
                    ->join('gift_groups_languages')
                    ->on('gifts.group_id', '=', 'gift_groups_languages.group_id')                    
                    ->select(
                        array('gift_groups_languages.name', 'name_group')
                    )
                    ->where('gifts_languages.language', '=', 'en')
                    ->where('gift_groups_languages.language', '=', 'en');

        
        if ($group_id>0) {
            
            $gifts->where('gifts.group_id', '=', $group_id);
        }
        
        if ($status<2) {
            
            $gifts->where('gifts.status', '=', $status);
        }
        
        if ($sort<=0) {
            
            $gifts->order_by('sort', 'ASC');
        }
        
        if ($sort==1) {
            
            $gifts->order_by('name', 'ASC');
        }
        
        if ($sort==2) {
            
            $gifts->order_by('name', 'DESC');
        }
        
        if ($created_at_start!="") {
            
            $gifts->where('gifts.created_at', '>= ', strtotime($created_at_start));
        }
        
        if ($created_at_end!="") {
            
            $gifts->where('gifts.created_at', '<= ', strtotime($created_at_end));
        }
        
        if (isset($limit)) {
            
            $gifts->limit($limit);
            
        }
        
        if (isset($offset)) {
            
            $gifts->offset($offset);

        }
        
        $gifts = $gifts->find_all();
        
        return $gifts;
    }

    
   
    public static function count_by_status($status) {
        
        return self::factory('Gifts')->where('status', '=', $status)->count_all();
        
    }
    
    public static function count_backend($group_id=NULL, $status=NULL, $created_at_start=NULL, $created_at_end=NULL) {
        
        $gifts=self::factory('Gifts');
        
        if ($group_id>0) {
            
            $gifts->where('gifts.group_id', '=', $group_id);
        }
        
        if ($status<2) {
            
            $gifts->where('gifts.status', '=', $status);
        }
        
        if ($created_at_start!="") {
            
            $gifts->where('gifts.created_at', '>= ', strtotime($created_at_start));
        }
        
        if ($created_at_end!="") {
            
            $gifts->where('gifts.created_at', '<= ', strtotime($created_at_end));
        }
        
        return $gifts->count_all();
        
        
    }
    
    public static function get_gifts_fronted_by_group($lang,$id_parent) {
        
        $gifts=ORM::factory('Gifts')
                ->join('gifts_languages')
                ->on('gifts.id', '=', 'gifts_languages.gift_id')
                ->where('gifts.status','=','1')
                ->select(
                        array('gifts_languages.name','name')
                )
                ->where('gifts.group_id','=',$id_parent)
                ->where('gifts_languages.language', '=', $lang)
                ->order_by('sort', 'ASC')
                ->find_all();
        
        return $gifts;
        
    }
}