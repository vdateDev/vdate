<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrderGifts extends ORM {
    
    protected $_table_name = 'order_gifts';
    
    protected $_has_many = array(
        'items' => array(
            'model' => 'OrderItemGifts',
            'foreign_key' => 'order_id',
        ),
    );
    
    public function filters() {
        
        return array(
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
        );
    }
    
    
    public function add_order($data,$id_from,$id_to) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'created_at', 'text','delivery'));
        $values['id_from']=$id_from;
        $values['id_to']=$id_to;
        $values['close_code']=strtolower(Text::random('alnum', 64));
        $this->values($values);
        $this->save();
        
        foreach($data['items'] as $key=>$val ) {
            $this->items->add_item($this->id,$val);
        }
        
        return $this;
    }
    
    public function edit_order($data) {
        
        if (!$this->loaded()) {

            return; 
            
        }
        $values=array();
        $values['status']=$data['status'];
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public function letter_after_order($user_email,$language) {
        
        $settings = Kohana::$config->load('site');
        $girl=Model_User::get_profile($this->id_to);
        $total_cost=  Model_OrderGifts::get_total_cost($this->id);
        
        /*------------------Letter to man--------------*/
        $letter = Model_Letter::get_letter_by_key('mail_man_order_gifts', $language);
        $subject = str_replace('{{site}}', $settings['site_name'], $letter->subject);
        $search = array('{{site}}','{{girl}}','{{order_number}}','{{order_content}}','{{close_link}}');
        
        $data = array();
        $data['site'] = $settings['site_name'];
        $data['girl'] = $girl->firstname.'(ID-'.$girl->user_id.')';
        $data['order_number']=$this->id;
        $gifts=  Model_OrderItemGifts::get_gifts_of_order($this->id, $language);
        $data['order_content']=View::factory('frontend/gifts/letter_order')->bind('gifts', $gifts)
                                                                           ->bind('total_cost',$total_cost)
                                                                           ->set('delivery_cost', $this->delivery);
        $data['close_link']=Route::url('default',array('language'=>$language,'controller'=>'manaccount','action'=>'orders','id'=>$this->id));
        
        $message = str_replace($search, $data, $letter->text);
        
        //add to admin letters
        $adminletter=Model::factory('AdminLetters');
        $data=array('subject'=>$subject,'text'=>$message);
        $adminletter->add_letter(3,$this->id_from,$data);
        
        Email::factory($subject, $message)
                        ->from($settings['admin_email'])
                        ->to($user_email)
                        ->send();
        
        /*------------------Letter to admin--------------*/
        $man=Model_User::get_profile($this->id_from);
        
        $letter = Model_Letter::get_letter_by_key('mail_admin_order_gifts', 'en');
        $subject = str_replace('{{site}}', $settings['site_name'], $letter->subject);
        $search = array('{{site}}','{{girl}}', '{{man}}', '{{order_number}}','{{order_content}}');
        
        $data = array();
        $data['site'] = $settings['site_name'];
        $data['girl'] = $girl->firstname.'(ID-'.$girl->user_id.')';
        $data['man']=$man->firstname.'(ID-'.$man->user_id.')';
        $data['order_number']=$this->id;
        $gifts=  Model_OrderItemGifts::get_gifts_of_order($this->id, 'en');
        $data['order_content']=View::factory('frontend/gifts/letter_order')->bind('gifts', $gifts)
                                                                           ->bind('total_cost',$total_cost)
                                                                           ->set('delivery_cost', $this->delivery);
        
        $message = str_replace($search, $data, $letter->text);
        
        //add to admin letters
        $adminletter=Model::factory('AdminLetters');
        $data=array('subject'=>$subject,'text'=>$message);
        $adminletter->add_letter(2,$this->id_from,$data);

        
    }
    
    static public function count_orders($status=NULL) {
        
        $orders=ORM::factory('orderGifts');
        
        if (isset($status)) {
            
            $orders->where('status', '=', $status);
            
        }
        
        
        return $orders->count_all();
        
    }
    
    static public function get_orders_backend($status=NULL,$limit=NULL,$offset=NULL) {
        
        $orders=ORM::factory('OrderGifts')
                ->join('men')
                ->on('OrderGifts.id_from','=','men.user_id')
                ->select(
                        array('men.firstname','man_firstname')
                        )
                ->join('girls')
                ->on('OrderGifts.id_to','=','girls.user_id')
                ->select(
                        array('girls.firstname','girl_firstname')
                        );
        
        if (isset($status) and $status<4) {
            $orders->where('OrderGifts.status','=',$status);
        }
        
        if (isset($limit)) {
            
            $orders->limit($limit);
            
        }
        
        if (isset($offset)) {
            
            $orders->offset($offset);

        }
                
        return $orders->find_all();
    }
    
    static public function get_order($id) {
        
        $order=ORM::factory('OrderGifts')
                ->where('OrderGifts.id','=',$id)
                ->join('men')
                ->on('OrderGifts.id_from','=','men.user_id')
                ->select(
                        array('men.firstname','man_firstname')
                        )
                ->join('girls')
                ->on('OrderGifts.id_to','=','girls.user_id')
                ->select(
                        array('girls.firstname','girl_firstname')
                        );
    
                
        return $order->find();
    }
    
    public static function get_total_cost($order_id) {
        $sum=ORM::factory('OrderGifts',$order_id);
        $sum_cost=  Model_OrderItemGifts::sum_cost($sum->id)+$sum->delivery;
        return $sum_cost;
    }
    
    

}