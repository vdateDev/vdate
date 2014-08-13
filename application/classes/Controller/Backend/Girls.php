<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Girls extends Controller_Backend {
    
    public function action_index() {
        
        $limit = Kohana::$config->load('girls')->get('backend_per_page');
        
        $get=$this->request->query();
        $agency_id= Arr::get($get, 'agency_id');
        if (!isset($get['status'])) $status=2; else   $status= Arr::get($get, 'status');
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'backend/pagination/basic',
            'total_items' => Model_Girls::count_girls($agency_id,$status),
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        $girls = Model_Girls::get_girls_backend($agency_id, $status,$limit, $pagination->offset);
        $agency=  Model_Agency::get_agency_backend();
        
        $this->template->content = View::factory('backend/girls/index')
                                    ->set('pagination', $pagination)
                                    ->set('girls', $girls)
                                    ->set('agency_id',$agency_id)
                                    ->set('status',$status)
                                    ->set('agency',$agency);
        
    }
    
    public function action_add() {
        
        
        $user=Model::factory('User');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
                                    
            $passport = isset($_FILES['passport']) ? $_FILES['passport'] : NULL;
            $girl_passport = isset($_FILES['girl_passport']) ? $_FILES['girl_passport'] : NULL;
            $post['role']=4;
             try {
                $user->add_user($post);
                $user->girl->add_girl($user->id, $post, $passport, $girl_passport);
                $user->girl->send_letter_registration($user->girl->firstname,$user->girl->lastname,$user->girl->email,$user->girl->agency_id);
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
        $agency=  Model_Agency::get_agency_backend();
       
        
        $this->template->content = View::factory('backend/girls/add')
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
                                    ->bind('agency',$agency)
                                    ->bind('errors',$errors);
        
    }
    
    
    public function action_edit() {
        
        $id = $this->request->param('id');
        
        $user=ORM::factory('User',$id);
        
        if (!$user->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'girl'))));
            
        }
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            if (isset($post['delete_image_passport'])) {
                
                $user->girl->delete_passport();
            
            } else if(isset($post['delete_image_girl_passport'])) {
                
                $user->girl->delete_girl_passport();
                
            } else {
            
                $passport = isset($_FILES['passport']) ? $_FILES['passport'] : NULL;
                $girl_passport = isset($_FILES['girl_passport']) ? $_FILES['girl_passport'] : NULL;
             
                try {
                    $post['role']=4;
                    $user->edit_user($post);
                    $user->girl->edit_girl($post, $passport,$girl_passport);
                    $this->session->set('backend_success_message', 'Data saved successfully!');
                    $this->other_redirect($post, $user->id);
                 } catch (ORM_Validation_Exception $e) {
                      $errors = $e->errors();
                 }
                
                
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
        $agency=  Model_Agency::get_agency_backend();
        
        $girl=$user->girl;
        $data=$girl->as_array();
        
        $this->template->content = View::factory('backend/girls/edit')
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
                                    ->bind('region',$region)
                                    ->bind('agency',$agency);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
     
        $user = ORM::factory('User', $id);
        
        if ($user->loaded()) {
            
            $user->girl->delete_all_images();
            $user->girl->delete();
            $user->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'girls'))));
    }

}