<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Gifts extends Controller_Frontend {
    
    public $template   = 'frontend/layoutMain';
    
    public function before() {
        
        parent::before();
        
        $this->widgets['MainMenu'] = Widget::load('MainMenu');        
    }
    
    public function action_index() {
        
        
        $groups=  Model_GiftGroups::get_groups_frontend_by_parent(0);
        
        $this->template->content = View::factory('frontend/gifts/index')                                    
                                    ->bind('groups', $groups);
    }
    
}

