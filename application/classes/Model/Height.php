<?php defined('SYSPATH') or die('No direct script access.');

class Model_Height extends ORM {
    
    protected $_table_name = 'height';
    
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
    
    public static function get_height() {
        
        return self::factory('Height')->order_by('sort', 'ASC')->find_all();

    }
    
    public function add_height($data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'created_at','zna'));
        
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public static function get_height_frontend() {
        
          $height= self::factory('Height')->order_by('sort', 'ASC')
                  ->where('status','=','1')
                  ->find_all();
          
          return $height;
          
    }
 
    public static function cm_to_feet($val) {
        
        $zna=array();
        $zna['feet']=floor($val/30.48);
        $inches=$val-$zna['feet']*30.48;
        $zna['inches'] = round($inches/2.54);
        return $zna;
    }
}