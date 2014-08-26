<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {
    
    protected $auth;
    protected $user;
    protected $user_role;

    protected $controller;
    protected $action;
    
    protected $session = NULL;


    protected $widgets = array();

    protected $content;
    protected $ajax;
    
    protected $orders_status=array( '0' => 'New',
                                    '1' => 'In work',
                                    '2' => 'Canceled by user',
                                    '3' => 'Delivered',
                );
    
    
	
    public function before() {
        
        $this->auto_render = !$this->request->is_ajax();
        
        if ($this->auto_render === TRUE) {
            parent::before();
        }
        
        $this->session = Session::instance();
        $this->auth = Auth::instance();
        
        if ($this->auth->logged_in()) {
            
            $this->user = $this->auth->get_user();
            $this->user_role = $this->user->get_admin_role();
            
        }
        
        $this->controller = strtolower($this->request->controller());
        $this->action = strtolower($this->request->action());
    }
    
    public function after() {
	
        if ($this->request->is_ajax()) {
		
            $this->response->headers('Content-type', 'application/json; charset='.Kohana::$charset);   
            $this->response->body($this->ajax);            
			
        } 
		
        parent::after();
    }	
}