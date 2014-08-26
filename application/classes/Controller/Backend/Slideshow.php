<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Slideshow extends Controller_Backend {
    
    public function action_index() {
        
        $limit = Kohana::$config->load('slideshow')->get('backend_per_page');
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'backend/pagination/basic',
            'total_items' => ORM::factory('SlideShow')->count_all(),
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        $slides = Model_SlideShow::get_backend_slides($limit, $pagination->offset);
        
        $this->template->content = View::factory('backend/slideshow/index')
                                    ->bind('pagination', $pagination)
                                    ->bind('slides', $slides);
    }
    
    public function action_add() {
     
        $mSlideshow = Model::factory('SlideShow');
         
        $languages = Model_Language::get_languages_frontend();
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            try {
                
                $image = isset($_FILES['image']) ? $_FILES['image'] : NULL;
                
                $mSlideshow->add_slide($post, $image,$languages);
                
                $this->session->set('backend_success_message', 'Data saved successfully!');
                $this->other_redirect($post, $mSlideshow->id);
                
            } catch (ORM_Validation_Exception $e) {
                
                $errors = $e->errors();
                
            }
            
        }
        
        $this->template->content = View::factory('backend/slideshow/add')                                    
                                    ->bind('data', $post)
                                    ->bind('errors', $errors)
                                    ->bind('languages', $languages);
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');

        $slide = ORM::factory('SlideShow', $id);
        
        $languages = Model_Language::get_languages_frontend();
        
        if (!$slide->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'slideshow'))));
            
        }
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            try {
                
                if (isset($post['delete_image'])) {
                
                    $slide->delete_image(TRUE);
                
                } else {

                    $image = isset($_FILES['image']) ? $_FILES['image'] : NULL;

                    $slide->edit_slide($post, $image, $languages);
                }

                $this->session->set('backend_success_message', 'Data saved successfully!');
                $this->other_redirect($post, $slide->id);
                
            } catch (ORM_Validation_Exception $e) {
                
                $errors = $e->errors();
                
            }
            
        }
        
        $tmp_slide = $slide->as_array();
        $slide_languages = $slide->languages->find_all();
        
        $tmp = array();
        foreach($slide_languages AS $slide_lang) {
            
            $tmp[$slide_lang->language] = $slide_lang->as_array();
            
        }
        
        $data = Arr::merge($tmp, $tmp_slide);
        
        $this->template->content = View::factory('backend/slideshow/edit')                                    
                                    ->bind('data', $data)
                                    ->bind('errors', $errors)
                                    ->bind('languages', $languages);;
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $slide = ORM::factory('SlideShow', $id);
        
        if ($slide->loaded()) {
            
            $slide->delete_image();
            $slide->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'slideshow'))));
    }
    
    public function action_sort() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $list = Arr::get($post, 'listItem');
            
            if (!empty($list)) {
            
                foreach ($list AS $key => $value) {

                    $slide = ORM::factory('SlideShow', $value);
                    
                    if ($slide->loaded()) {
                        
                        $slide->sort = $key + 1;
                        $slide->update();
                        
                    }
                }
            }
            
            $this->ajax = json_encode(array('success' => TRUE));
            
        }
    }

    public function action_status() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $id = Arr::get($post, 'id');
            $status = Arr::get($post, 'status');
            
            if (!empty($id)) {
                
                $news = ORM::factory('SlideShow', $id);
                
                if ($news->loaded()) {
                    
                    $news->status = $status;
                    $news->update();
                }
            }
            
            $this->ajax = json_encode($status == 0 ? 'Unpublished' : 'Published');
        }
    }
}