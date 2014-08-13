<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Settings extends Controller_Backend {
    
    public function action_edit() {
        
        $settings = Kohana::$config->load('site');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            foreach($post['CONFIG'] as $key => $value) {               
                
                $settings->set($key, $value);
                
            }
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'settings', 'action' => 'edit'))));
        }
        
        $this->template->content = View::factory('backend/settings/edit')
                                    ->bind('settings', $settings);
    }
}