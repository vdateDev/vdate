<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Gifts extends Controller_Backend {
    
    public function action_index() {
        
        $limit = Kohana::$config->load('gifts')->get('backend_per_page');
        
        $get=$this->request->query();
        $group_id= Arr::get($get, 'group_id');
        if (!isset($get['status'])) $status=2; else   $status= Arr::get($get, 'status');
        $created_at_start= Arr::get($get, 'created_at_start');
        $created_at_end= Arr::get($get, 'created_at_end');
        $sort= Arr::get($get, 'sort');
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'backend/pagination/basic',
            'total_items' => ORM::factory('Gifts')->count_backend($group_id,$status,$created_at_start, $created_at_end)
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        $categories=Model_GiftGroups::get_tree_backend(0,'backend/gifts/select',$group_id);
        $gifts = Model_Gifts::get_gifts_backend($group_id,$status,$created_at_start, $created_at_end, $sort, $limit, $pagination->offset);
        $this->template->content = View::factory('backend/gifts/index')
                                    ->set('pagination', $pagination)
                                    ->set('gifts', $gifts)
                                    ->set('categories',$categories)
                                    ->set('status',$status)
                                    ->set('created_at_start',$created_at_start)
                                    ->set('created_at_end',$created_at_end)
                                    ->set('sort',$sort);
        
    }
    
    public function action_add() {
        
        $languages = Model_Language::get_languages_frontend();
        
        $mGifts = Model::factory('Gifts');
        
       
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
                                    
            $image = isset($_FILES['image']) ? $_FILES['image'] : NULL;
            
            $mGifts->add_gifts($post, $languages, $image);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $mGifts->id);
        }
        
        if (isset($post['group_id'])) $cur_parent=$post['group_id']; else $cur_parent=0;
      
        $categories=Model_GiftGroups::get_tree_backend(0,'backend/gifts/select',$cur_parent);
        $this->template->content = View::factory('backend/gifts/add')
                                    ->bind('data', $post)
                                    ->bind('languages', $languages)
                                    ->bind('categories', $categories);
        
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');

        $gifts = ORM::factory('Gifts', $id);
        
        if (!$gifts->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'gifts'))));
            
        }
        
        $languages = Model_Language::get_languages_frontend();
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            if (isset($post['delete_image'])) {
                
                $gifts->delete_image();
                
            } else {
            
                $image = isset($_FILES['image']) ? $_FILES['image'] : NULL;

                $gifts->edit_gifts($post, $languages, $image);
            }
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $gifts->id);
        }
        
        $tmp_gifts = $gifts->as_array();
        $gifts_languages = $gifts->languages->find_all();
        
        $tmp = array();
        foreach($gifts_languages AS $gifts_lang) {
            
            $tmp[$gifts_lang->language] = $gifts_lang->as_array();
            
        }
        
        $data = Arr::merge($tmp, $tmp_gifts);
        
        $categories=Model_GiftGroups::get_tree_backend(0,'backend/gifts/select',$data['group_id']);
        
        $this->template->content = View::factory('backend/gifts/edit')
                                    ->bind('data', $data)
                                    ->bind('languages', $languages)
                                    ->bind('categories',$categories);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $gifts = ORM::factory('Gifts', $id);
        
        if ($gifts->loaded()) {
            
            $gifts->delete_image();
            $gifts->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'gifts'))));
    }
    
    public function action_status() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $id = Arr::get($post, 'id');
            $status = Arr::get($post, 'status');
            
            if (!empty($id)) {
                
                $gifts = ORM::factory('Gifts', $id);
                
                if ($gifts->loaded()) {
                    
                    $gifts->status = $status;
                    $gifts->update();
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

                    $gifts = ORM::factory('Gifts', $value);
                    
                    if ($gifts->loaded()) {
                        
                        $gifts->sort = $key + 1;
                        $gifts->update();
                        
                    }
                }
            }
            
            $this->ajax = json_encode(array('success' => TRUE));
            
        }
    }
}