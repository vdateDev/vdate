<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {
    
    protected $auth;
    protected $user;

    protected $controller;
    protected $action;
    
    protected $session = NULL;


    protected $widgets = array();

    protected $content;
    protected $ajax;
	
    public function before() {
        
        $this->auto_render = !$this->request->is_ajax();
        
        if ($this->auto_render === TRUE) {
            parent::before();
        }
        
        $this->session = Session::instance();
        $this->auth = Auth::instance();
        
        if ($this->auth->logged_in()) {
            
            //$this->user = $this->auth->get_user();
            
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