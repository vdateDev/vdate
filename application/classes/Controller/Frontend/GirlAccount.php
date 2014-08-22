<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_GirlAccount extends Controller_Frontend {
    
    public $template   = 'frontend/layout';
    
    public function before() {
        
        parent::before();
        
        if ($this->auth->logged_in()) {
            
            $this->widgets['ChatNow']=Widget::load('Chat_ChatNow');
            $this->widgets['LeftProfileMenu']=Widget::load('Menu_LeftProfileMenu');
            
        }
    }
    
    public function action_index() {
        
            $attention=  Model_Page::get_page_by_url('attention-for-girl-account', $this->language);
        
            $this->template->content= View::factory('frontend/girlaccount/profile')
                               ->bind('user',$this->user)
                               ->bind('attention',$attention)
                               ->bind('language',$this->language);
        
    }
    
    public function action_settings() {
        
        if ($this->request->method()== HTTP_Request::POST)    {
            
            $post=$this->request->post();
            
            $old_password = Arr::get($post, 'old_password');
            $password = Arr::get($post, 'password');
            $password_confirm = Arr::get($post, 'password_confirm');
            
            $old_hash = $this->auth->hash_password($old_password);
            
            if ($old_hash == $this->user->password) { 
                 
                if ($password==$password_confirm and $password!='')  {
                    
                    $this->user->update_user($post, array('password'));
                    
                    $this->set_site_message('success_password_change');
                    
                    $this->redirect(strtolower(Route::url('default', array('language' => $this->language, 'controller' => 'account', 'action' => 'settings'))));
                    
                } else {
                    
                     $this->set_site_message('new_password_error');
                     
                }
                
             } else {
                 
                 $this->set_site_message('old_password_error');
                 
             }

            
        }
        
        $this->template->content= View::factory('frontend/girlaccount/settings')
                                ->bind('language',$this->language);
        
        
    }
    
    public function action_menOnline () {
        
        $limit = Kohana::$config->load('men')->get('frontend_per_page');
        $online_time_diff = Kohana::$config->load('users')->get('online_diff_time');
        $time=time()-$online_time_diff;
        
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'frontend/pagination/floating',
            'total_items' => Model_Men::count_men_online($time),
        ))->route_params(array(
            'language' => $this->language,
            'controller' => $this->controller,   
            'action' => $this->action,
        ));
        
        $get=$this->request->query();
        
        if (isset($get['sort'])) {
            
            $sort=$get['sort'];
            
        } else {
            $sort='activity';
        }
        
        $men=  Model_Men::get_online($time, $limit,$sort,$pagination->offset);
        
         $this->template->content= View::factory('frontend/girlaccount/manonline')
                                ->bind('language',$this->language)
                                ->bind('men',$men)
                                ->bind('pagination',$pagination)
                                ->bind('sort',$sort);
        
    }
    
  
    
}