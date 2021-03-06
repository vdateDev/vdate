<?php defined('SYSPATH') or die('No direct script access.');

class Model_NewsLanguage extends ORM {
    
    protected $_table_name = 'news_languages';
    
    public function filters() {
        
        return array(
            'name' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'announcement' => array(
                array('trim'),                
                array('strip_tags'),
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
                array('trim'),
            ),
            'page_keywords' => array(
                array('trim'),
            ),
        );
        
    }

    public function add_language($id, $key, $data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('news_id', 'name', 'announcement', 'language', 'text', 'page_title', 'page_h1', 'page_description', 'page_keywords'));
        
        if (empty($values['announcement'])) {
            
            $values['announcement'] = HTML::cut_text($values['text']);
            
        }
        $values['language'] = $key;
        $values['news_id'] = $id;
                
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public function edit_language($data) {
        
        if (!$this->loaded()) {
            
            return;
            
        }

        $values = Arr::extract($data, array('name', 'announcement', 'text', 'page_title', 'page_h1', 'page_description', 'page_keywords'));
        $this->values($values);
        
        $this->update();
        
        return $this;
    }
}