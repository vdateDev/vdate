<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Credits extends Controller_Frontend {

    public $template   = 'frontend/layoutCredits';
    public $page;

   
    public function action_index() {     
        
        $this->page_title = 'Purchase Credits';
        $this->page_description = 'Purchase Credits';
        $this->page_keywords = 'Purchase Credits';
        $this->page_name = 'Purchase Credits';
        
    }
    
    
} 