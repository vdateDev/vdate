<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_OrderGifts extends Controller_Backend {
    
    public function action_index() {
        
        $limit = Kohana::$config->load('orders')->get('backend_per_page');
        
        $get=$this->request->query();
        
        if (!isset($get['status'])) $status=5; else   $status= Arr::get($get, 'status');
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'backend/pagination/basic',
            'total_items' => Model_OrderGifts::count_orders($status),
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        
        $orders = Model_OrderGifts::get_orders_backend($status,$limit, $pagination->offset);
        
        $this->template->content = View::factory('backend/ordergifts/index')
                                    ->set('pagination', $pagination)
                                    ->bind('orders', $orders)
                                    ->bind('arr_status',$this->orders_status)
                                    ->bind('status', $status);
    }
    
    
    public function action_edit() {
        $id=$this->request->param('id');
        
 
        
        if ($this->request->method()==HTTP_Request::POST) {
            $post=$this->request->post();
            $ordergifts=ORM::factory('OrderGifts',$id);
            $ordergifts=$ordergifts->edit_order($post);
			
		   if (isset($post['delete_image1'])) {
                
                $ordergifts->delete_image(1);
                
            } else if (isset($post['delete_image2'])) {
                
                $ordergifts->delete_image(2);
            } else {
            
                $image1 = isset($_FILES['photo1']) ? $_FILES['photo1'] : NULL;
                $image2 = isset($_FILES['photo2']) ? $_FILES['photo2'] : NULL;
                $ordergifts=$ordergifts->edit_order($post,$image1,$image2);
				
				if (isset($post['deny'])) {
					 $ordergifts->status=3;
					 $ordergifts->update();
				}
				
				if (isset($post['confirm'])) {
					 $ordergifts->status=2;
                                         $ordergifts->date_depature=time();
					 $ordergifts->update();
					 $ordergifts->send_photo_to_man();
					 $this->session->set('backend_success_message', 'Photos sended to man!');
				}
                
               
            }
			
        }
        
        $order=  Model_OrderGifts::get_order($id);
        $gifts=  Model_OrderItemGifts::get_gifts_of_order($order->id, 'en');
        
        $total_cost=  Model_OrderGifts::get_total_cost($id);
        
        $this->template->content = View::factory('backend/ordergifts/edit')
                            ->bind('arr_status',$this->orders_status)
                            ->bind('order', $order)
                            ->bind('gifts',$gifts)
                            ->bind('total_cost',$total_cost);
    }
    

    

    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $letter = ORM::factory('AdminLetters', $id);
        
        if ($letter->loaded()) {
            
            $letter->status_del_admin=1;
            $letter->update();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'adminletters', 'action'=>'inbox'))));
    }
    

}