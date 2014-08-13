<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Admins extends Controller_Backend {
    
    public function action_index() {
        
        $admins = Model_User::get_admins();
        
        $this->template->content = View::factory('backend/admins/index')
                                    ->bind('admins', $admins);
    }
    
    public function action_add() {
     
        $mUser = Model::factory('User');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            try {
                
                $mUser->add_admin($post);
                
                $this->session->set('backend_success_message', 'Data saved successfully!');
                $this->other_redirect($post, $mUser->id); 
                
            } catch (ORM_Validation_Exception $e) {
                
                $errors = $e->errors();
                
            }
        }
        
        $roles = Model_Role::get_roles();
        
        $this->template->content = View::factory('backend/admins/add')                                    
                                    ->bind('roles', $roles)
                                    ->bind('data', $post)
                                    ->bind('errors', $errors);
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id', 0);
        
        $user = ORM::factory('User', $id);
        
        if (!$user->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('directory' => 'backend', 'controller' => 'admins'))));
            
        }
        
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            try {
                
                $user->update_admin($post);
                
                $this->session->set('backend_success_message', 'Data saved saccessfully!');
                $this->other_redirect($post, $user->id); 
                
            } catch (ORM_Validation_Exception $e) {
                
                $errors = $e->errors();
                
            }
            
        }
        
        $data = $user->as_array();
        $roles = Model_Role::get_roles();
        $role = $user->get_admin_role();
        
        $data['role'] = $role->id;
        
        $this->template->content = View::factory('backend/admins/edit')                                    
                                    ->bind('data', $data)
                                    ->bind('roles', $roles)
                                    ->bind('errors', $errors);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $user = ORM::factory('User', $id);
        
        if ($user->loaded()) {
            
            $user->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'admins'))));
    }
}