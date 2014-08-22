<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Gifts extends Controller_Frontend {
    
    public $template   = 'frontend/layout';
    
    public function before() {
        
        parent::before();
        
        if ($this->auth->logged_in()) {
            
            $this->widgets['ChatNow']=Widget::load('Chat_ChatNow');
            
        }
    }
    
    public function action_index() {
        
        
        $groups=  Model_GiftGroups::get_groups_frontend_by_parent($this->language,0);
                
        $this->template->content = View::factory('frontend/gifts/index')  
                                    ->bind('lang',$this->language)
                                    ->bind('groups', $groups);
    }
    
}

