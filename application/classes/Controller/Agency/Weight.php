<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Agency_Weight extends Controller_Agency {
    
    public function action_index() {
        
        $weight = Model_Weight::get_weight();
        
        $this->template->content = View::factory('agency/weight/index')
                                    ->set('weight', $weight);
        
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');
        
        $weight = ORM::factory('Weight', $id);
        
        if (!$weight->loaded()) {
            
            $this->redirect(Route::url('agency', array('controller' => 'weight')));
                    
        }
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            $weight->edit($post);

            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $weight->id);

        }
        $data=$weight->as_array();
        
        $this->template->content = View::factory('agency/weight/edit')
                                    ->set('data', $data);
    }
    
    public function action_status() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $id = Arr::get($post, 'id');
            $status = Arr::get($post, 'status');
            
            if (!empty($id)) {
                
                $weight = ORM::factory('Weight', $id);
                
                if ($weight->loaded()) {
                    
                    $weight->status = $status;
                    $weight->update();
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

                    $weight = ORM::factory('Weight', $value);
                    
                    if ($weight->loaded()) {
                        
                        $weight->sort = $key + 1;
                        $weight->update();
                        
                    }
                }
            }
            
            $this->ajax = json_encode(array('success' => TRUE));
        }
    }
    
    public function action_add() {
        
       
        $weight = Model::factory('Weight');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
                                    
                      
            $weight->add_weight($post);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $weight->id);
        }
        
        $this->template->content = View::factory('agency/weight/add')
                                    ->bind('data', $post);
         
        
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $weight = ORM::factory('Weight', $id);
        
        if ($weight->loaded()) {
            
            $weight->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('agency', array('controller' => 'weight'))));
    }
}