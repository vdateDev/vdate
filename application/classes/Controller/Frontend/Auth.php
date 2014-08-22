<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Auth extends Controller_Frontend {
    
    public $template   = 'frontend/layout';
    
    public function before() {
        
        parent::before();
        
        if ($this->auth->logged_in()) {
            
            $this->widgets['ChatNow']=Widget::load('Chat_ChatNow');
            
        }
    }
    
    public function action_login() {
        
           
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $data = Arr::extract($post, array('email', 'password', 'remember'));
            
            $tmp_user = Model_User::get_user_by_login($data['email']);
            
            if ($tmp_user->loaded()) {
                
                 if ($tmp_user->status == 2 or $tmp_user->status==0)  {
                    
                    $this->set_site_message('blocked_account');
                    
                } else {
                    
                    $status = $this->auth->login($data['email'], $data['password'], isset($data['remember']));
                    
                    if ($status) {
                        
                        $this->set_site_message('sign_in_success');
                        
                    } else {
                        
                        $this->set_site_message('sign_in_error');
                        
                    }
                }
                
            } else {
                
                $this->set_site_message('sign_in_error');
                
            }
        }
        
        $this->redirect(strtolower(Route::url('default', array('language' => $this->language))));
        
    }
    
    public function action_logout() {
        
        if ($this->auth->logout(FALSE, TRUE)) {
            
            $this->set_site_message('logout');
            
            $this->redirect(strtolower(Route::url('default', array('language' => $this->language))));
            
        }
        
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
        
        $online_time_diff = Kohana::$config->load('users')->get('online_diff_time');
        $time=time()-$online_time_diff;
        $limit = Kohana::$config->load('girls')->get('count_girls_registration_form');
        $girls=  Model_Girls::get_online($time, $limit);
        
        $this->template->content= View::factory('frontend/auth/registration')
                                        ->bind('content', $content)
                                        ->bind('girls',$girls)
                                        ->bind('errors', $errors)
                                        ->bind('captcha',$captcha)
                                        ->bind('data',$post)
                                        ->bind('language',$this->language);
    }
    
}