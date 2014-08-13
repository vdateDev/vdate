<?php defined('SYSPATH') or die('No direct script access.');

class Model_Letter extends ORM {
    
    protected $_table_name = 'letters';
    
    protected $_has_many = array(
        'languages' => array(
            'model' => 'LetterLanguage',
            'foreign_key' => 'letter_id',
        ),
    );
    
    public function filters() {
        
        return array(
            'name' => array(
                array('trim'),
            ),
            'fields_list' => array(
                array('strip_tags'),
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
    
    public function add_letter($data, $languages) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('name', 'key', 'fields_list', 'status', 'created_at'));
        $this->values($values);
        $this->save();
        
        foreach($languages AS $lang) {
         
            $this->languages->add_language($this->id, $lang->key, $data[$lang->key]);
            
        }
        
        return $this;
        
    }
    
    public function edit_letter($data, $languages) {
       
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('name', 'status', 'updated_at'));
        $this->values($values);
        $this->update();
        
        $letters_languages = $this->languages->find_all();
        
        foreach ($letters_languages AS $letter_lang) {
            
            $letter_lang->edit_language($data[$letter_lang->language]);
            
        }
        
        return $this;
        
    }

    public static function get_letters_backend() {
        
        return self::factory('Letter')->order_by('sort', 'ASC')->find_all();
        
    }
    
    public static function get_letter_by_key($key, $language = NULL) {
        
        if (!isset($language)) {
            
            $default = Model_Language::get_default();
            $language = $default->key;
        }
        
        $letter = self::factory('Letter')
                    ->join('letters_languages')
                    ->on('letter.id', '=', 'letters_languages.letter_id')
                    ->select(
                        array('letters_languages.subject', 'subject'),
                        array('letters_languages.text', 'text')
                    )
                    ->where('letters_languages.language', '=', $language)
                    ->where('letter.key', '=', $key)
                    ->where('status', '=', 1)
                    ->find();
        
        return $letter;
    }
}