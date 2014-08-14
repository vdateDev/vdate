<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Men extends Controller_Backend {
    
    public function action_index() {
        
        $limit = Kohana::$config->load('men')->get('backend_per_page');
        
        $get=$this->request->query();
        if (!isset($get['status'])) $status=2; else   $status= Arr::get($get, 'status');
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'backend/pagination/basic',
            'total_items' => Model_Men::count_men($status),
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        $men = Model_Men::get_men_backend($status,$limit, $pagination->offset);
                
        $this->template->content = View::factory('backend/men/index')
                                    ->set('pagination', $pagination)
                                    ->set('men', $men)
                                    ->set('status',$status);
        
    }
    
    public function action_add() {
        
        
        $user=Model::factory('User');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();

            $post['role']=5;
             try {
                $user->add_user($post);
                $user->men->add_men($user->id, $post);
                $user->men->send_letter_registration($user->men->firstname,$user->men->lastname,$user->men->email);
                $this->session->set('backend_success_message', 'Data saved successfully!');
                $this->other_redirect($post, $user->id);
             } catch (ORM_Validation_Exception $e) {
                  $errors = $e->errors();
             }
            
        }
        
        $eyes=Model_Sprav::get_list_by_category('eyes', 'en');
        $hair=Model_Sprav::get_list_by_category('hair', 'en');
        $education=Model_Sprav::get_list_by_category('education', 'en');
        $religion=Model_Sprav::get_list_by_category('religion', 'en');
        $marital_status=Model_Sprav::get_list_by_category('marital', 'en',2);
        $smoking=Model_Sprav::get_list_by_category('smoking', 'en');
        $drinking=Model_Sprav::get_list_by_category('drinking', 'en');
        $height=  Model_Height::get_height_frontend();
        $weight=  Model_Weight::get_weight_frontend();
        $country=array();
        $region=array();
       
        
        $this->template->content = View::factory('backend/men/add')
                                    ->bind('data', $post)
                                    ->bind('eyes',$eyes)
                                    ->bind('hair',$hair)
                                    ->bind('education',$education)
                                    ->bind('religion',$religion)
                                    ->bind('marital_status',$marital_status)
                                    ->bind('smoking',$smoking)
                                    ->bind('drinking',$drinking)
                                    ->bind('height',$height)
                                    ->bind('weight',$weight)
                                    ->bind('country',$country)
                                    ->bind('region',$region)
                                    ->bind('errors',$errors);
        
    }
    
    
    public function action_edit() {
        
        $id = $this->request->param('id');
        
        $user=ORM::factory('User',$id);
        
        if (!$user->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'men'))));
            
        }
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
             
                try {
                    $post['role']=5;
                    $user->edit_user($post);
                    $user->men->edit_man($post);
                    $this->session->set('backend_success_message', 'Data saved successfully!');
                    $this->other_redirect($post, $user->id);
                 } catch (ORM_Validation_Exception $e) {
                      $errors = $e->errors();
                 }
        }
        
                
        $eyes=Model_Sprav::get_list_by_category('eyes', 'en');
        $hair=Model_Sprav::get_list_by_category('hair', 'en');
        $education=Model_Sprav::get_list_by_category('education', 'en');
        $religion=Model_Sprav::get_list_by_category('religion', 'en');
        $marital_status=Model_Sprav::get_list_by_category('marital', 'en',2);
        $smoking=Model_Sprav::get_list_by_category('smoking', 'en');
        $drinking=Model_Sprav::get_list_by_category('drinking', 'en');
        $height=  Model_Height::get_height_frontend();
        $weight=  Model_Weight::get_weight_frontend();
        $country=array();
        $region=array();
                
        $man=$user->men;
        $data=$man->as_array();
        
        $this->template->content = View::factory('backend/men/edit')
                                    ->bind('data', $data)
                                    ->bind('user',$user)
                                    ->bind('eyes',$eyes)
                                    ->bind('hair',$hair)
                                    ->bind('education',$education)
                                    ->bind('religion',$religion)
                                    ->bind('marital_status',$marital_status)
                                    ->bind('smoking',$smoking)
                                    ->bind('drinking',$drinking)
                                    ->bind('height',$height)
                                    ->bind('weight',$weight)
                                    ->bind('country',$country)
                                    ->bind('region',$region);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
     
        $user = ORM::factory('User', $id);
        
        if ($user->loaded()) {
            
            $user->men->delete();
            $user->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'men'))));
    }

}