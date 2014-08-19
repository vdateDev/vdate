<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend extends Controller_Base {
    
    public $template = 'frontend/layout';
    public $footer;
    public $settings;
    
    public $page_name = NULL;
    public $page_sname = NULL;
    
    public $page_title = NULL;
    public $page_keywords = NULL;
    public $page_description = NULL;
    
    public $view = NULL;
    
    public $language = NULL;
    
    public function before() {
        
        parent::before();
        
        $this->language = $this->request->param('language');
        
        I18n::lang($this->language.'-'.$this->language);
        
        if (!$this->request->is_ajax()) {
        
            $this->settings = Kohana::$config->load('site');

            $seo = Model_Seo::get_seo_frontend($this->language, $this->controller, $this->action);

            if ($seo->loaded()) {

                $this->page_title = $seo->page_title;            
                $this->page_description = $seo->page_description;
                $this->page_keywords = $seo->page_keywords;
                $this->page_name = $seo->page_h1;
            }

            $this->template->controller = $this->controller;
            $this->template->action     = $this->action;
            $this->template->content    = NULL;
        }
        
    }
    
    public function after() {
        
        if (!$this->request->is_ajax()) {
        
            $this->template->page_name = $this->page_name;
            $this->template->page_sname = $this->page_sname;

            $this->template->page_title = $this->page_title;
            $this->template->page_description = $this->page_description;
            $this->template->page_keywords = $this->page_keywords;
            
            $this->template->view = $this->view;
            
            $this->template->widgets = $this->widgets;
                        
            $this->template->footer = NULL; /*View::factory('frontend/templates/footer', array('session' => $this->session))  
                                            ->bind('language', $this->language)                                            
                                            ->bind('settings', $this->settings);*/
        }
        
        parent::after();
    }
    
    public function set_site_message($key) {
        
        $info_message = Model_Info::get_info_by_key($key, $this->language);
        
        $msg = array();
        $msg['type'] = $info_message->type;
        $msg['time'] = $info_message->time;
        $msg['text'] = $info_message->text;
        
        if ($info_message->loaded()) {

            $this->session->set('site_message', $msg);

        }
        
    }
}