<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_VirtualGifts extends Controller_Frontend {
    
    public $template   = 'frontend/layoutMain';
    
    public function before() {
        
        parent::before();
        
        $this->widgets['MainMenu'] = Widget::load('MainMenu');        
    }
    
    public function action_index() {
        
        
        $gifts= Model_VirtualGifts::get_gifts_frontend($this->language);
                
        $this->template->content = View::factory('frontend/virtualgifts/index')  
                                        ->bind('gifts', $gifts);
    }
    
}

