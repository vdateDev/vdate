<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrderItemGifts extends ORM {
    
    protected $_table_name = 'item_order_gifts';
    
    public function filters() {
        
        return array(

        );
    }
    

    public function add_item($order_id,$gift_id) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values['order_id']=$order_id;
        $values['gift_id']=$gift_id;
        $values['cost']=ORM::factory('Gifts',$gift_id)->cost;
        
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public static function get_gifts_of_order($order_id,$language) {
        
        $gifts=ORM::factory('OrderItemGifts')
                ->where('order_id', '=', $order_id)
                ->join('gifts_languages')
                ->on('gifts_languages.gift_id', '=', 'orderItemGifts.gift_id')
                ->select(array('gifts_languages.name','name'))
                ->where('gifts_languages.language', '=', $language)
                ->find_all();
        
        return $gifts;
        
    }
    
    public static function sum_cost($order_id) {
        $sum=ORM::factory('OrderItemGifts') 
                ->where('order_id','=',$order_id)
                ->select(array(DB::expr('sum(cost)'),'sum_cost'))
                ->find();
        return $sum->sum_cost;
    }

    
  
}