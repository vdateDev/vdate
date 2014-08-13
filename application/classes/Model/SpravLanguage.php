<?php defined('SYSPATH') or die('No direct script access.');

class Model_SpravLanguage extends ORM {
    
    protected $_table_name = 'sprav_languages';
    
    public function filters() {
        
        return array(
            'text' => array(
                array('trim'),
                array('strip_tags'),
            ),
        );
        
    }

    public function add_language($id, $key, $data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('sprav_id', 'text','language'));
        
        $values['language'] = $key;
        $values['sprav_id'] = $id;
                
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