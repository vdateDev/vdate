<?php defined('SYSPATH') or die('No direct script access.');

class Model_SlideshowLanguage extends ORM {
    
    protected $_table_name = 'slideshow_languages';
    
    
    public function add_language($id, $key, $data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('slide_id', 'language', 'text'));
        
        $values['language'] = $key;
        $values['slide_id'] = $id;
                
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public function edit_language($data) {
        
        if (!$this->loaded()) {
            
            return;
            
        }

        $values = Arr::extract($data, array('text'));
        $this->values($values);
        
        $this->update();
        
        return $this;
    }
    
}