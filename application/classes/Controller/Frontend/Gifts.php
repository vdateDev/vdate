<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Gifts extends Controller_Frontend {
    
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
        
        $settings = Kohana::$config->load('site');
        $groups=  Model_GiftGroups::get_groups_frontend_by_parent($this->language,0);
        $delivery=$settings['cost_delivery'];
                
        $this->template->content = View::factory('frontend/gifts/index')  
                                    ->bind('language',$this->language)
                                    ->bind('groups', $groups)
                                    ->bind('girl',$girl)
                                    ->bind('delivery',$delivery);
    }
    
    public function action_order() {
        if ($this->request->method()==HTTP_Request::POST) {
           $post=$this->request->post();
           $order=Model::factory('OrderGifts');
           $order=$order->add_order($post,$this->user->id,$post['girl']);
           $total_cost=  Model_OrderGifts::get_total_cost($order->id);
           if ($total_cost<=$this->user->men->balance) {
                $this->user->men->balance= $this->user->men->balance-$total_cost;
                $order->letter_after_order($this->user->email,$this->language);
                $this->set_site_message('order_gifts_flowers');
           } else {
                $order->delete();
                $this->set_site_message('error_order_gifts_and_flowers');
           }
        }
        $this->redirect(Route::url('default',array('language'=>$this->language,'controller'=>'manaccount')));
    }
    
}

