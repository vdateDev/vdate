<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Agency_Height extends Controller_Agency {
    
    public function action_index() {
        
        $height = Model_Height::get_height();
        
        $this->template->content = View::factory('agency/height/index')
                                    ->set('height', $height);
        
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');
        
        $height = ORM::factory('Height', $id);
        
        if (!$height->loaded()) {
            
            $this->redirect(Route::url('agency', array('controller' => 'height')));
                    
        }
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            $height->edit($post);

            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $height->id);

        }
        $data=$height->as_array();
        
        $this->template->content = View::factory('agency/height/edit')
                                    ->set('data', $data);
    }
    
    public function action_status() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $id = Arr::get($post, 'id');
            $status = Arr::get($post, 'status');
            
            if (!empty($id)) {
                
                $height = ORM::factory('Height', $id);
                
                if ($height->loaded()) {
                    
                    $height->status = $status;
                    $height->update();
                }
            }
            
            $this->ajax = json_encode($status == 0 ? 'Unpublished' : 'Published');
        }
    }
    
    public function action_sort() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $list = Arr::get($post, 'listItem');
            
            if (!empty($list)) {
            
                foreach ($list AS $key => $value) {

                    $height = ORM::factory('Height', $value);
                    
                    if ($height->loaded()) {
                        
                        $height->sort = $key + 1;
                        $height->update();
                        
                    }
                }
            }
            
            $this->ajax = json_encode(array('success' => TRUE));
        }
    }
    
    public function action_add() {
        
       
        $height = Model::factory('Height');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
                                    
                      
            $height->add_height($post);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $height->id);
        }
        
        $this->template->content = View::factory('agency/height/add')
                                    ->bind('data', $post);
         
        
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $height = ORM::factory('Height', $id);
        
        if ($height->loaded()) {
            
            $height->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('agency', array('controller' => 'height'))));
    }
}