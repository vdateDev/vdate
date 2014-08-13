<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Agency extends Controller_Backend {
    
    public function action_index() {
        
        $limit = Kohana::$config->load('agency')->get('backend_per_page');
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'backend/pagination/basic',
            'total_items' => ORM::factory('Agency')->count_all(),
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        $agency = Model_Agency::get_agency_backend($limit, $pagination->offset);
        $this->template->content = View::factory('backend/agency/index')
                                    ->set('pagination', $pagination)
                                    ->set('agency', $agency);
        
    }
    
    public function action_add() {
        
        
        $user=Model::factory('User');
     
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
                                    
            $contract = isset($_FILES['contract']) ? $_FILES['contract'] : NULL;
            $certificate = isset($_FILES['certificate']) ? $_FILES['certificate'] : NULL;
            $passport = isset($_FILES['passport']) ? $_FILES['passport'] : NULL;
            $post['role']=3;
             try {
                $user->add_user($post);
                $user->agency->add_agency($user->id,$post, $contract, $certificate, $passport);
                $user->agency->send_letter_registration($user->username,$user->email,$user->agency->name);
                $this->session->set('backend_success_message', 'Data saved successfully!');
                $this->other_redirect($post, $user->id);
             } catch (ORM_Validation_Exception $e) {
                  $errors = $e->errors();
             }
            
        }
        
        $this->template->content = View::factory('backend/agency/add')
                                    ->bind('data', $post)
                                    ->bind('errors',$errors);
        
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');
       
        $user=ORM::factory('User',$id);
        
        if (!$user->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'agency'))));
            
        }
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            if (isset($post['delete_image_certificate'])) {
                
                $user->agency->delete_certificate();
            
            } else if(isset($post['delete_image_passport'])) {
                $user->agency->delete_passport();
            } else if (isset($post['delete_image_contract'])) {
                $user->agency->delete_contract();
            } else {
            
                $contract = isset($_FILES['contract']) ? $_FILES['contract'] : NULL;
                $certificate = isset($_FILES['certificate']) ? $_FILES['certificate'] : NULL;
                $passport = isset($_FILES['passport']) ? $_FILES['passport'] : NULL;

             
                try {
                    $post['role']=3;
                    $user->edit_user($post);
                    $user->agency->edit_agency($post, $contract,$certificate,$passport);
                    $this->session->set('backend_success_message', 'Data saved successfully!');
                    $this->other_redirect($post, $user->id);
                 } catch (ORM_Validation_Exception $e) {
                      $errors = $e->errors();
                 }
                
                
            }
        }
        
        $agency=$user->agency;
        $data=$agency->as_array();
        $this->template->content = View::factory('backend/agency/edit')
                                    ->bind('data', $data)
                                    ->bind('user',$user)
                                    ->bind('languages', $languages);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $user = ORM::factory('User', $id);
               
        if ($user->loaded()) {
            
            $user->agency->delete_all_images();
            $user->agency->delete();
            $user->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'agency'))));
    }

}