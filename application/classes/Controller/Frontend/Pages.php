<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Pages extends Controller_Frontend {

    public $template   = 'frontend/layoutMain';
    public $page;

    public function before() {
        
        parent::before();
        
        $this->widgets['MainMenu'] = Widget::load('MainMenu');     
        
        if ($this->action == 'contact') {
            
            
            $this->page = Model_Page::get_page_by_url($this->action, $this->language);
            
            
        } else {
            
            $this->page = Model_Page::get_page_by_url($this->request->param('url'), $this->language);
            
        }
        
        if (!$this->page->loaded()) {
            
            throw new HTTP_Exception_404;
        
        }
        
        $this->page_title = $this->page->page_title;
        $this->page_description = $this->page->page_description;
        $this->page_keywords = $this->page->page_keywords;
        $this->page_name = $this->page->page_h1;
    }
    
    public function action_index() {     
        
        $content = $this->page->text;
        
        $this->template->content = View::factory('frontend/pages/index')
                                    ->bind('content', $content);
        
    }
    
    public function action_contact() {
        
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            $errors = array();
            
            foreach ($post AS $k => $v) {
                
                if (empty($v) AND ($k == 'name' OR $k == 'email' OR $k == 'message')) {
                    
                    $errors[] = $k;
                    
                }
                
                if ($k == 'captcha') {
                    
                    $captcha = Captcha::valid($v);
                    
                    if (!$captcha) {
                        
                        $errors[] = $k;
                        
                    }
                }
            }
            
            if (empty($errors)) {
            
                $settings = Kohana::$config->load('site');

                $data = Arr::extract($post, array('site', 'name', 'email', 'message'));
                $data['site'] = $settings['site_name'];

                $letter = Model_Letter::get_letter_by_key('contact_admin_mail', 'en');

                $subject = str_replace('{{site}}', $data['site'], $letter->subject);
                $search = array('{{site}}', '{{name}}', '{{email}}', '{{message}}');

                $message = str_replace($search, $data, $letter->text);

                Email::factory($subject, $message)
                        ->from($data['email'])
                        ->to($settings['admin_email'])
                        ->send();

                $this->set_site_message('contact_form');
                
                $this->redirect(strtolower(Route::url('contact', array('language' => $this->language))));
            }
            
            
        }
        
        $captcha = Captcha::instance();
        
        $content = $this->page->text;
        
        $this->template->content = View::factory('frontend/pages/contact')
                                        ->bind('post', $post)
                                        ->bind('errors', $errors)
                                        ->bind('captcha', $captcha)
                                        ->bind('content', $content);
    }
} 