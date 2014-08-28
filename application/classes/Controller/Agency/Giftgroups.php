<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Agency_GiftGroups extends Controller_Agency {
    
    public function action_index() {
  
        $groups =Model_GiftGroups::get_tree_backend(0,'agency/giftGroups/tree');
        $this->template->content = View::factory('agency/giftGroups/index')
                                        ->set('groups', $groups);
        
    }
    
    public function action_add() {
        
        $languages = Model_Language::get_languages_frontend();
        
        $mGroups = Model::factory('GiftGroups');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
                                    
            $image = isset($_FILES['image']) ? $_FILES['image'] : NULL;
            
            $mGroups->add_group($post, $languages, $image);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $mGroups->id);
        }
        
        $groups=$mGroups->get_groups_backend_by_parent(0);
       
        $this->template->content = View::factory('agency/giftGroups/add')
                                    ->bind('data', $post)
                                    ->bind('languages', $languages)
                                    ->bind('groups', $groups);
         
        
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');

        $groups = ORM::factory('GiftGroups', $id);
        
        if (!$groups->loaded()) {
            
            $this->redirect(strtolower(Route::url('agency', array('controller' => 'giftGroups'))));
            
        }
        
        $languages = Model_Language::get_languages_frontend();
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            $groups->edit_group($post, $languages);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $groups->id);
        }
        
        $tmp_groups = $groups->as_array();
        $group_languages = $groups->languages->find_all();
        
        $tmp = array();
        foreach($group_languages AS $group_lang) {
            
            $tmp[$group_lang->language] = $group_lang->as_array();
            
        }
        
        $data = Arr::merge($tmp, $tmp_groups);
        
         $list_groups=$groups->get_groups_backend_by_parent(0);
        
        $this->template->content = View::factory('agency/giftGroups/edit')
                                    ->bind('data', $data)
                                    ->bind('groups', $list_groups)
                                    ->bind('languages', $languages);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $groups = ORM::factory('GiftGroups', $id);
        
        if ($groups->loaded()) {
            
            $groups->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('agency', array('controller' => 'giftGroups'))));
    }
    
    public function action_status() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $id = Arr::get($post, 'id');
            $status = Arr::get($post, 'status');
            
            if (!empty($id)) {
                
                $groups = ORM::factory('GiftGroups', $id);
                
                if ($groups->loaded()) {
                    
                    $groups->status = $status;
                    $groups->update();
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

                    $group = ORM::factory('GiftGroups', $value);
                    
                    if ($group->loaded()) {
                        
                        $group->sort = $key + 1;
                        $group->update();
                        
                    }
                }
            }
            
            $this->ajax = json_encode(array('success' => TRUE));
            
        }
    }
}