<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Auth extends Controller_Frontend {
    
    public $template   = 'frontend/layoutMain';
    
    public function before() {
        
        parent::before();
        
        $this->widgets['MainMenu'] = Widget::load('MainMenu');        
    }
    
    public function action_login() {
        
    }
    
    public function action_registration() {
        
        $errors_user=array();
        $captcha_arr=array();
        $errors_man=array();
        
        if ($this->request->method()== HTTP_Request::POST) {
            
            $post=$this->request->post();
            $user=Model::factory('User');
            
            $captcha=Arr::get($post, 'captcha');
            $user_validate=$user->validate($post);
            $check_user=$user_validate->check();
            
            $man_validate=$user->men->validate($post);
            $check_man=$man_validate->check();
            
            $captcha_validate=  Captcha::valid($captcha);
            
            if (!$captcha_validate) {
                $captcha_arr['captcha'] = __('wrong_captcha_number');
            }
            
            if ($check_user AND $check_man AND empty($captcha_arr)) {
                
                    $post['role']=5;
                    $post['status']=1;
                    $user->add_user($post);
                    $user->men->add_man($user->id,$post);
                    $user->men->send_letter_registration($user->men->firstname,$user->men->lastname,$user->email);
                    
                   // $this->set_site_message('after_register');
                    
                    $this->redirect(strtolower(Route::url('default')));
                
            } else {
                
                $errors_user = $user_validate->errors('validation');
                $errors_man = $man_validate->errors('validation');
            }
            
        }
        
        $errors = Arr::merge($errors_user, $errors_man, $captcha_arr);
        $page = Model_Page::get_page_by_url($this->action, $this->language);
        
        if (!$page->loaded()) {
            
            throw new HTTP_Exception_404;
        
        }
        
        $captcha = Captcha::instance();
        
        $content=$page->text;
        
        $this->page_name = $page->page_h1;
        $this->page_description = $page->page_description;
        $this->page_keywords = $page->page_keywords;
        $this->page_title = $page->page_title;
        
        $this->template->content= View::factory('frontend/auth/registration')
                                        ->bind('content', $content)
                                        ->bind('errors', $errors)
                                        ->bind('captcha',$captcha)
                                        ->bind('data',$post)
                                        ->bind('language',$this->language);
    }
    
}