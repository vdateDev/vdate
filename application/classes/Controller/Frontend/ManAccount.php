<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_ManAccount extends Controller_Frontend {
    
    public $template   = 'frontend/layout';
    
    public function before() {
        
        parent::before();
        
        if ($this->auth->logged_in()) {
            
            $this->widgets['ChatNow']=Widget::load('Chat_ChatNow');
            $this->widgets['LeftProfileMenu']=Widget::load('Menu_LeftProfileMenu');
            
        }
    }
    
    public function action_index() {
        
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
        
        $this->template->content= View::factory('frontend/manaccount/settings')
                                ->bind('language',$this->language);
        
        
    }
    
    public function action_womenOnline () {
        
        $limit = Kohana::$config->load('girls')->get('frontend_per_page');
        $online_time_diff = Kohana::$config->load('users')->get('online_diff_time');
        $time=time()-$online_time_diff;
        
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'frontend/pagination/floating',
            'total_items' => Model_Girls::count_girl_online($time),
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
        
        $girls=  Model_Girls::get_online($time, $limit,$sort,$pagination->offset);
        
         $this->template->content= View::factory('frontend/manaccount/womenonline')
                                ->bind('language',$this->language)
                                ->bind('girls',$girls)
                                ->bind('pagination',$pagination)
                                ->bind('sort',$sort);
        
    }
    
  
    
}