<?php defined('SYSPATH') or die('No direct script access.');

class Model_LetterLanguage extends ORM {
    
    protected $_table_name = 'letters_languages';
    
    public function add_language($id, $key, $data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('letter_id', 'language', 'subject', 'text'));
        $values['language'] = $key;
        $values['letter_id'] = $id;
                
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public function edit_language($data) {
        
        if (!$this->loaded()) {
            
            return;
            
        }

        $values = Arr::extract($data, array('subject', 'text'));
        $this->values($values);
        $this->update();
        
        return $this;
    }
}