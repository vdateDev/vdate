<?php defined('SYSPATH') or die('No direct script access.');

class Model_SeoLanguage extends ORM {
    
    protected $_table_name = 'seo_languages';
    
    
    public function add_language($id, $key, $data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('seo_id', 'language', 'page_title', 'page_h1', 'page_description', 'page_keywords'));
        
        $values['language'] = $key;
        $values['seo_id'] = $id;
                
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public function edit_language($data) {
        
        if (!$this->loaded()) {
            
            return;
            
        }

        $values = Arr::extract($data, array('name', 'page_title', 'page_h1', 'page_description', 'page_keywords'));
        $this->values($values);
        
        $this->update();
        
        return $this;
    }
    
}