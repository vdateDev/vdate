<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Agency_Auth extends Controller_Frontend {
    
    public $template = 'agency/layout_login';
    
    public function before() {
        parent::before();
        
        if ($this->action != 'logout' AND $this->auth->logged_in()) {
            
            throw new HTTP_Exception_404;
            
        }
    }

    public function action_login() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $data = Arr::extract($post, array('login', 'password', 'remember'));
            
            $tmp_user = Model_User::get_user_by_login($data['login']);
            
            if ($tmp_user->loaded() ) {
            
                $status = $this->auth->login($data['login'], $data['password'], isset($data['remember']));
                
                if ($status) {
                
                    $this->redirect(strtolower(Route::url('agency')));
                
                } else {
                    
                    $this->redirect(strtolower(Route::url('default')));
                    
                }
            }
        }        
        
        $this->template->content = View::factory('agency/auth/login');
    }
    
    public function action_logout() {
        
        if ($this->auth->logout(FALSE, TRUE)) {
            
            $this->redirect(strtolower(Route::url('default', array('language' => $this->language))));
            
        }
        
    }
}