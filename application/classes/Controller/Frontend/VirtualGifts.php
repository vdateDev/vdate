<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_VirtualGifts extends Controller_Frontend {
    
    public $template   = 'frontend/layout';
    
    public function before() {
        
        parent::before();
        
        if ($this->auth->logged_in()) {
            
            $this->widgets['ChatNow']=Widget::load('Chat_ChatNow');
            
        }
    }
    
    public function action_index() {
        
        $id=$this->request->param('id');
        if ($id>0) {
            $girl=  Model_User::get_profile($id);
        }
        
        $gifts= Model_VirtualGifts::get_gifts_frontend($this->language);
                
        $this->template->content = View::factory('frontend/virtualgifts/index')  
                                        ->bind('gifts', $gifts)
                                        ->bind('girl',$girl)
                                        ->bind('language',$language);
    }
    
    public function action_order() {
        if ($this->request->method()==HTTP_Request::POST) {
           $post=$this->request->post();
           $order=Model::factory('OrderVirtualGifts');
           $order=$order->add_order($post,$this->user->id,$post['girl']);
           $total_cost=  Model_OrderVirtualGifts::get_total_cost($order->id);
           if ($total_cost<=$this->user->men->balance) {
                $this->user->men->balance= $this->user->men->balance-$total_cost;
                $this->user->men->update();
                $order->letter_after_order($this->user->email,$this->language);
                $this->set_site_message('order_virtual_gifts');
           } else {
                $order->delete();
                $this->set_site_message('error_order_virtual_gifts');
           }
           $this->redirect(Route::url('default',array('language'=>$this->language,'controller'=>'profile','action'=>'girl','id'=>$post['girl'])));
        } else {
            $this->redirect(Route::url('default',array('language'=>$language,'controller'=>'manaccount')));
        }
        
    }
    
}

