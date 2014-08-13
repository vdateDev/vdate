<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend extends Controller_Base {
    
    public $template = 'backend/layout';
    public $access = array();    
    
    public function before() {
        parent::before();
        
        I18n::lang('backend');
        
        /*if (!$this->auth->logged_in()) {           
            $this->redirect(strtolower(Route::url('backend_auth', array('directory' => 'backend', 'action' => 'login'))));
            
        } else {
            
          /*  $role = $this->user->get_admin_role();
            $this->access = Model_RolesControllers::get_role_controllers($role->id);
            
            if (empty($this->access)) {
                
                $this->redirect(strtolower(Route::url('default')));
                
            } else if (!HTML::access($this->controller, $this->access)) {
            
                throw HTTP_Exception::factory(404, 'Access denied!');
                
            }*/
       /* }*/
        
 
        if (!$this->request->is_ajax()) {
            
            $this->template->access     = $this->access;
            $this->template->user       = $this->user;
            $this->template->controller = $this->controller;
            $this->template->action     = $this->action;
            $this->template->session    = $this->session;
            $this->template->content    = NULL;
            $this->template->category   = $this->request->param('category');
        }
    }

    /**
     * Just redirect for backend
     * $post = $_POST array with buttons
     */
    public function other_redirect($post, $some_id = NULL) {
        
        if (isset($post['save']) AND isset($some_id)) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => $this->controller, 'action' => 'edit', 'id' => $some_id))));
            
        }
        if (isset($post['save_and_add'])) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => $this->controller, 'action' => 'add'))));
            
        }
        if (isset($post['save_and_back'])) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => $this->controller))));
            
        }
        
        $this->redirect($this->request->referrer());
    }
    
    public function other_redirect_sprav($post, $some_id = NULL) {
        
        if (isset($post['save']) AND isset($some_id)) {
            
            $this->redirect(strtolower(Route::url('backend_sprav', array('controller' => $this->controller, 'category'=>$this->request->param('category'), 'action' => 'edit', 'id' => $some_id))));
            
        }

        if (isset($post['save_and_add'])) {
            
            $this->redirect(strtolower(Route::url('backend_sprav', array('controller' => $this->controller,'category'=>$this->request->param('category'), 'action' => 'add'))));
            
        }
        if (isset($post['save_and_back'])) {
            
            $this->redirect(strtolower(Route::url('backend_sprav', array('controller' => $this->controller,'category'=>$this->request->param('category') ,'action'=>'index'))));
            
        }
        
        $this->redirect($this->request->referrer());
    }
    
    
}