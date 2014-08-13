<?php defined('SYSPATH') or die('No direct script access.');

class Model_Weight extends ORM {
    
    protected $_table_name = 'weight';
    
    public function rules() {
        
        return array(
            'zna' => array(
                array('not_empty'),
            ),
        );
    }
    
    public function filters() {
        
        return array(
            'zna' => array(
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
        
        $values = Arr::extract($data, array('zna', 'updated_at','status'));
        
        $this->values($values);
        $this->update();
        
        return $this;
    }
    
    public static function get_weight() {
        
        return self::factory('Weight')->order_by('sort', 'ASC')->find_all();

    }
    
    public function add_weight($data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'created_at','zna'));
        
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public static function get_weight_frontend() {
        
          $weight= self::factory('Weight')->order_by('sort', 'ASC')
                  ->where('status','=','1')
                  ->find_all();
          
          return $weight;
          
    }
}