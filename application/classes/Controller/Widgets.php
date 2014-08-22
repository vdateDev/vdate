<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс виджетов
 */
class Controller_Widgets extends Controller_Template {

    protected $auth = NULL;
    protected $user = NULL;
    protected $user_role = NULL;
    
    protected $language = NULL;
    protected $settings = NULL;
    

    public function  before() {
        parent::before();
                
        if (Request::current()->is_initial()) {
            
            $this->auto_render = FALSE;            
        }
        
        $this->auth = Auth::instance();
        
        if ($this->auth->logged_in()) {
            
            $this->user = $this->auth->get_user();
            $this->user_role = $this->user->get_user_role();
            
        }
        
        $this->language = Request::initial()->param('language');
        $this->settings = Kohana::$config->load('site');
    }
}
