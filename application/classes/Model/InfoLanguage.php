<?php defined('SYSPATH') or die('No direct script access.');

class Model_InfoLanguage extends ORM {
    
    protected $_table_name = 'infos_languages';
    
    public function filters() {
        
        return array(
            'language' => array(
                array('trim'),
            ),
            'text' => array(
                array('strip_tags'),
                array('trim'),                
            ),
        );
        
    }

    public function add_language($id, $key, $data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('info_id', 'language', 'text'));
        $values['language'] = $key;
        $values['info_id'] = $id;
                
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