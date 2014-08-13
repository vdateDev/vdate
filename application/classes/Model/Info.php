<?php defined('SYSPATH') or die('No direct script access.');

class Model_Info extends ORM {
    
    protected $_table_name = 'infos';
    
    protected $_has_many = array(
        'languages' => array(
            'model' => 'InfoLanguage',
            'foreign_key' => 'info_id',
        ),
    );
    
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
    
    public function add_info($data, $languages) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('key', 'name', 'type', 'time', 'status', 'created_at'));
        $this->values($values);
        $this->save();
        
        foreach($languages AS $lang) {
         
            $this->languages->add_language($this->id, $lang->key, $data[$lang->key]);
            
        }
        
        return $this;
    }
    
    public function edit_info($data, $languages) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array( 'name', 'type', 'time', 'status', 'updated_at'));
        $this->values($values);
        $this->update();
        
        $info_languages = $this->languages->find_all();
        
        foreach ($info_languages AS $info_lang) {
            
            $info_lang->edit_language($data[$info_lang->language]);
            
        }
        
        return $this;
    }
    
    public static function get_infos_backend() {
        
        return self::factory('Info')->order_by('sort', 'ASC')->find_all();
        
    }
    
    public static function get_info_by_key($key, $language) {
        
        return self::factory('Info')
                ->join('infos_languages')
                ->on('info.id', '=', 'infos_languages.info_id')
                ->select(
                    array('infos_languages.text', 'text')
                )
                ->where('info.key', '=', $key)
                ->where('infos_languages.language', '=', $language)
                ->where('info.status', '=', 1)
                ->find();
        
    }
}