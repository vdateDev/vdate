<?php defined('SYSPATH') or die('No direct script access.');

class Model_Language extends ORM {
    
    protected $_table_name = 'languages';
    
    public function rules() {
        
        return array(
            'name' => array(
                array('not_empty'),
                array('max_length', array(':value', 255)),
            ),
            'key' => array(
                array('not_empty'),
                array('max_length', array(':value', 255)),
            ),
        );
    }
    
    public function filters() {
        
        return array(
            'name' => array(
                array('trim'),                
            ),
            'key' => array(
                array('trim'),                
            ),
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
        );
    }
    
    public function edit($data) {
        
        if (!$this->loaded()) {
            
            return NULL;
            
        }
        
        $values = Arr::extract($data, array('name', 'key', 'updated_at', 'default', 'status'));
        
        if ($values['default'] == 1 AND $this->default != $values['default']) {
            
            $this->change_default($values['default']);
            
        } else {
            
            unset($values['default']);
            
        }
        
        $this->values($values);
        $this->update();
        
        return $this;
    }
    
    public function change_default() {
        
        $languages = self::factory('Language')->where('status', '=', 1)->find_all();
        
        foreach ($languages AS $language) {
            
            if ($language->default == 1) {
                
                $language->default = 0;
                $language->update();
            }
        }
    }

    public static function get_languages() {
        
        return self::factory('Language')->order_by('sort', 'ASC')->find_all();

    }

    public static function get_languages_frontend() {
        
        return self::factory('Language')->where('status', '=', 1)->order_by('sort', 'ASC')->find_all();
        
    }
    
    public static function get_default() {
        
        return self::factory('Language')->where('default', '=', 1)->where('status', '=', 1)->find();
        
    }
    
    public function add_lang($data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'created_at','name','key', 'default'));
        
        if ($values['default'] == 1) {
            
            $this->change_default($values['default']);
            
        } 
        
        $this->values($values);
        $this->save();
        
        return $this;
    }
}