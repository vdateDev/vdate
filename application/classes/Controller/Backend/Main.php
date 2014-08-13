<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Main extends Controller_Backend {
    
    public function action_index() {
        
        $this->template->content = View::factory('backend/main/index')
                                        ->bind('access', $this->access);
        
    }
    
    
}