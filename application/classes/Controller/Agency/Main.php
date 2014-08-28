<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Agency_Main extends Controller_Agency {
    
    public function action_index() {
        
        $this->template->content = View::factory('agency/main/index')
                                        ->bind('access', $this->access);
        
    }
    
    
}