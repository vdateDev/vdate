<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Agency_VirtualGifts extends Controller_Agency {
    
    public function action_index() {
        
        $limit = Kohana::$config->load('virtualgifts')->get('backend_per_page');
        
        $get=$this->request->query();
        if (!isset($get['status'])) $status=2; else   $status= Arr::get($get, 'status');
        $created_at_start= Arr::get($get, 'created_at_start');
        $created_at_end= Arr::get($get, 'created_at_end');
        $sort= Arr::get($get, 'sort');
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'agency/pagination/basic',
            'total_items' => ORM::factory('VirtualGifts')->count_backend($status,$created_at_start, $created_at_end)
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        $gifts = Model_VirtualGifts::get_gifts_backend($status,$created_at_start, $created_at_end, $sort, $limit, $pagination->offset);
        $this->template->content = View::factory('agency/virtualgifts/index')
                                    ->set('pagination', $pagination)
                                    ->set('gifts', $gifts)
                                    ->set('status',$status)
                                    ->set('created_at_start',$created_at_start)
                                    ->set('created_at_end',$created_at_end)
                                    ->set('sort',$sort);
        
    }
    
    public function action_add() {
        
        $languages = Model_Language::get_languages_frontend();
        
        $mGifts = Model::factory('VirtualGifts');
        
       
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
                                    
            $image = isset($_FILES['image']) ? $_FILES['image'] : NULL;
            
            $mGifts->add_gifts($post, $languages, $image);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $mGifts->id);
        }
        
        $this->template->content = View::factory('agency/virtualgifts/add')
                                    ->bind('data', $post)
                                    ->bind('languages', $languages);
        
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');

        $gifts = ORM::factory('VirtualGifts', $id);
        
        if (!$gifts->loaded()) {
            
            $this->redirect(strtolower(Route::url('agency', array('controller' => 'virtualgifts'))));
            
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
        
        $this->template->content = View::factory('agency/virtualgifts/edit')
                                    ->bind('data', $data)
                                    ->bind('languages', $languages);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $gifts = ORM::factory('VirtualGifts', $id);
        
        if ($gifts->loaded()) {
            
            $gifts->delete_image();
            $gifts->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('agency', array('controller' => 'virtualgifts'))));
    }
    
    public function action_status() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $id = Arr::get($post, 'id');
            $status = Arr::get($post, 'status');
            
            if (!empty($id)) {
                
                $gifts = ORM::factory('VirtualGifts', $id);
                
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

                    $gifts = ORM::factory('VirtualGifts', $value);
                    
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