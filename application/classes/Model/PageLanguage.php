<?php defined('SYSPATH') or die('No direct script access.');

class Model_PageLanguage extends ORM {
    
    protected $_table_name = 'pages_languages';
    
    public function filters() {

        return array(
            'name' => array(
                array('trim'),
            ),
            'language' => array(
                array('trim'),
            ),
            'text' => array(
                array('trim'),
            ),
            'page_title' => array(
                array('trim'),
            ),
            'page_h1' => array(
                array('trim'),
            ),
            'page_description' => array(
                array('strip_tags'),
                array('trim'),
            ),
            'page_keywords' => array(
                array('strip_tags'),
                array('trim'),
            ),
        );
        
    }
    
    public function add_language($id, $key, $data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('page_id', 'name', 'language', 'text', 'page_title', 'page_h1', 'page_description', 'page_keywords'));
        $values['language'] = $key;
        $values['page_id'] = $id;
                
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public function edit_language($data) {
        
        if (!$this->loaded()) {
            
            return;
            
        }

        $values = Arr::extract($data, array('name', 'text', 'page_title', 'page_h1', 'page_description', 'page_keywords'));
        $this->values($values);
        $this->update();
        
        return $this;
    }
}