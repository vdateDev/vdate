<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Agency_Men extends Controller_Agency {
    
    public function action_index() {
        
        $limit = Kohana::$config->load('men')->get('backend_per_page');
        
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
            'total_items' => Model_Men::count_men($status,$firstname,$lastname,$login),
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        $men = Model_Men::get_men_backend($status, $firstname, $lastname, $login, $limit, $pagination->offset);
                
        $this->template->content = View::factory('agency/men/index')
                                    ->set('pagination', $pagination)
                                    ->set('men', $men)
                                    ->set('firstname',$firstname)
                                    ->set('lastname',$lastname)
                                    ->set('login',$login)
                                    ->set('status',$status);
        
    }
    
    public function action_add() {
        
        
        $user=Model::factory('User');
        $errors_user=array();
        $errors_man=array();
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $post['role']=5;
            
            $user_validate=$user->validate($post);
            $check_user=$user_validate->check();
            
            $man_validate=$user->men->validate($post);
            $check_man=$man_validate->check();
            
            if ($check_user and $check_man)
            {
                $user->add_user($post);
                $user->men->add_man($user->id, $post);
                $user->men->send_letter_registration($user->men->firstname,$user->men->lastname,$user->men->email);
                $this->session->set('backend_success_message', 'Data saved successfully!');
                $this->other_redirect($post, $user->id);
             } else {
                 $errors_user=$user_validate->errors('validation');
                 $errors_man=$man_validate->errors('validation');
                 
             }
            
        }
        
        $errors=Arr::merge($errors_man, $errors_user);
        
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
       
        
        $this->template->content = View::factory('agency/men/add')
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
            
            $this->redirect(strtolower(Route::url('agency', array('controller' => 'men'))));
            
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
        
        $photos=  Model_Photos::get_photos_by_user($user->id);
        $list_photos=  View::factory('agency/photos/list')
                            ->bind('photos', $photos);
        
        $this->template->content = View::factory('agency/men/edit')
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
        
        $id = (int) $this->request->param('id');
     
        $user = ORM::factory('User', $id);
        
        if ($user->loaded()) {
            
            $user->men->delete();
            $user->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('agency', array('controller' => 'men'))));
    }
    


}