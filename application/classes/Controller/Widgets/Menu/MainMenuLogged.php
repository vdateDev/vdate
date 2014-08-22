<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menu_MainMenuLogged extends Controller_Widgets {
        
    public $template = 'widgets/Menu/MainMenuLogged';

    public function action_index() {
              
        $controller = strtolower(Request::initial()->controller());
        $action = strtolower(Request::initial()->action());
        
        $this->template->bind('language', $this->language)
                        ->bind('controller',$controller)
                        ->bind('action',$action)
                        ->bind('role',$this->user_role);

      
  
    }
}