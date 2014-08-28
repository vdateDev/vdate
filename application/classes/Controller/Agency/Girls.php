<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Agency_Girls extends Controller_Agency {
    
    public function action_index() {
        
        $limit = Kohana::$config->load('girls')->get('backend_per_page');
        
        $get=$this->request->query();
        if (!isset($get['status'])) $status=3; else   $status= Arr::get($get, 'status');
        
        if (isset($get['firstname'])) {
             
            $firstname=trim($get['firstname']);
            
        } else $firstname='';
            
        if (isset($get['lastname'])) {
            
            $lastname=trim($get['lastname']);
            
        } else $lastname='';
        
        if (isset($get['login'])) {
            
            $login=trim($get['login']);
            
        } else $login='';
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'agency/pagination/basic',
            'total_items' => Model_Girls::count_girls($this->user->id,$status,$firstname,$lastname,$login),
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        $girls = Model_Girls::get_girls_backend($this->user->id, $status,$firstname,$lastname,$login,$limit, $pagination->offset);
        
        $this->template->content = View::factory('agency/girls/index')
                                    ->set('pagination', $pagination)
                                    ->set('girls', $girls)
                                    ->set('status',$status)
                                    ->set('firstname',$firstname)
                                    ->set('lastname',$lastname)
                                    ->set('login',$login);
        
    }
    
    public function action_add() {
        
        $user=Model::factory('User');
        $errors_user=array();
        $errors_girl=array();
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $passport = isset($_FILES['passport']) ? $_FILES['passport'] : NULL;
            $girl_passport = isset($_FILES['girl_passport']) ? $_FILES['girl_passport'] : NULL;
            
            $user_validate=$user->validate($post);
            $check_user=$user_validate->check();
            
            $girl_validate=$user->girl->validate($post);
            $check_girl=$girl_validate->check();
            
            $post['role']=4;
            $post['agency_id']=$this->user->id;
            
             if ($check_user and $check_girl) {
                $user->add_user($post);
                $user->girl->add_girl($user->id, $post, $passport, $girl_passport);
                $user->girl->send_letter_registration($user->girl->firstname,$user->girl->lastname,$user->girl->email,$user->girl->agency_id);
                $this->session->set('backend_success_message', 'Data saved successfully!');
                $this->other_redirect($post, $user->id);
             } else {
                $errors_user=$user_validate->errors('validation');
                $errors_girl=$girl_validate->errors('validation');
             }
            
        }
        
        $errors=Arr::merge($errors_girl, $errors_user);
        
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
        
        $this->template->content = View::factory('agency/girls/add')
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
            
            $this->redirect(strtolower(Route::url('agency', array('controller' => 'girl'))));
            
        }
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $post['agency_id']=$this->user->id;
            
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
        
        $girl=$user->girl;
        $data=$girl->as_array();
        
        $photos=  Model_Photos::get_photos_by_user($user->id);
        $list_photos=  View::factory('agency/photos/list')
                            ->bind('photos', $photos);
                
        
        $this->template->content = View::factory('agency/girls/edit')
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
                                    ->bind('photos',$list_photos);
    }
    
    public function action_delete() {
        
       /* $id = (int) $this->request->param('id');
     
        $user = ORM::factory('User', $id);
        
        if ($user->loaded()) {
            
            $user->girl->delete_all_images();
            $user->girl->delete();
            $user->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('agency', array('controller' => 'girls'))));*/
    }

}