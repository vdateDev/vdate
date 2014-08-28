<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrderVirtualGifts extends ORM {
    
    protected $_table_name = 'order_virtualgifts';
    
    protected $_has_many = array(
        'items' => array(
            'model' => 'OrderItemVirtualGifts',
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
        
        $values = Arr::extract($data, array('status', 'created_at', 'text'));
        $values['id_from']=$id_from;
        $values['id_to']=$id_to;
        $this->values($values);
        $this->save();
        
        foreach($data['items'] as $key=>$val ) {
            $this->items->add_item($this->id,$val);
        }
        
        return $this;
    }
    

    
    public function letter_after_order($user_email,$language) {
        
        $settings = Kohana::$config->load('site');
        $girl=Model_User::get_profile($this->id_to);
        $total_cost=  Model_OrderVirtualGifts::get_total_cost($this->id);
        
        /*------------------Letter to man--------------*/
        $letter = Model_Letter::get_letter_by_key('mail_man_order_virtualgifts', $language);
        $subject = str_replace('{{site}}', $settings['site_name'], $letter->subject);
        $search = array('{{site}}','{{girl}}','{{order_content}}');
        
        $data = array();
        $data['site'] = $settings['site_name'];
        $gifts=  Model_OrderItemVirtualGifts::get_gifts_of_order($this->id, $language);
        $data['order_content']=View::factory('frontend/virtualgifts/letter_order')->bind('gifts', $gifts)
                                                                                  ->bind('total_cost',$total_cost);
        
        $message = str_replace($search, $data, $letter->text);
        
        //add to admin letters
        $adminletter=Model::factory('AdminLetters');
        $data=array('subject'=>$subject,'text'=>$message);
        $adminletter->add_letter(3,$this->id_from,$data);
        
        Email::factory($subject, $message)
                        ->from($settings['admin_email'])
                        ->to($user_email)
                        ->send();
        
        /*------------------Letter to girl--------------*/
        $man=Model_User::get_profile($this->id_from);
        
        $letter = Model_Letter::get_letter_by_key('mail_girl_receiving_gifts', 'en');
        $subject = str_replace('{{site}}', $settings['site_name'], $letter->subject);
        $search = array('{{site}}', '{{man}}','{{order_content}}');
        
        $data = array();
        $data['site'] = $settings['site_name'];
        $data['man']=$man->firstname.'(ID-'.$man->user_id.')';
        $gifts=  Model_OrderItemVirtualGifts::get_gifts_of_order($this->id, 'en');
        $data['order_content']=View::factory('frontend/virtualgifts/letter_order_girl')->bind('gifts', $gifts);
        
        $message = str_replace($search, $data, $letter->text);
        
        //add to admin letters
        $adminletter=Model::factory('AdminLetters');
        $data=array('subject'=>$subject,'text'=>$message);
        $adminletter->add_letter(3,$this->id_to,$data);
        
        Email::factory($subject, $message)
                ->from($settings['admin_email'])
                ->to($girl->email)
                ->send();

        
    }
    
    public static function get_total_cost($order_id) {
        $sum=ORM::factory('OrderVirtualGifts',$order_id);
        $sum_cost=  Model_OrderItemVirtualGifts::sum_cost($sum->id);
        return $sum_cost;
    }
    
    public static function cnt_gifts_by_user($user_id,$status=NULL) {
        $gifts=ORM::factory('OrderVirtualGifts')
                ->where('id_to','=',$user_id)
                ->join('item_order_virtualgifts')
                ->on('item_order_virtualgifts.order_id','=','OrderVirtualGifts.id');
        
        if (isset($status)) {
            $gifts->where('OrderVirtualGifts.status', '=', $status);
        }
        
        return $gifts->count_all();
                
    }
    
    public static function update_status($user_id) {
          $gifts=ORM::factory('OrderVirtualGifts')
                ->where('id_to','=',$user_id)
                ->where('status','=',0)
                ->find_all();
          
          foreach ($gifts as $item) {
              
            if ($item->loaded()) {
            
                $item->status=1;
                $item->update();
            
             }

          }
    }
    
    

}