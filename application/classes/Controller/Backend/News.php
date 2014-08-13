<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_News extends Controller_Backend {
    
    public function action_index() {
        
        $limit = Kohana::$config->load('news')->get('backend_per_page');
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'backend/pagination/basic',
            'total_items' => ORM::factory('News')->count_all(),
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        $news = Model_News::get_news_backend($limit, $pagination->offset);
        $this->template->content = View::factory('backend/news/index')
                                    ->set('pagination', $pagination)
                                    ->set('news', $news);
        
    }
    
    public function action_add() {
        
        $languages = Model_Language::get_languages_frontend();
        
        $mNews = Model::factory('News');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
                                    
            $image = isset($_FILES['image']) ? $_FILES['image'] : NULL;
            
            $mNews->add_news($post, $languages, $image);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $mNews->id);
        }
        
        $this->template->content = View::factory('backend/news/add')
                                    ->bind('data', $post)
                                    ->bind('languages', $languages);
        
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');

        $news = ORM::factory('News', $id);
        
        if (!$news->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'news'))));
            
        }
        
        $languages = Model_Language::get_languages_frontend();
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            if (isset($post['delete_image'])) {
                
                $news->delete_image();
                
            } else {
            
                $image = isset($_FILES['image']) ? $_FILES['image'] : NULL;

                $news->edit_news($post, $languages, $image);
            }
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $news->id);
        }
        
        $tmp_news = $news->as_array();
        $news_languages = $news->languages->find_all();
        
        $tmp = array();
        foreach($news_languages AS $news_lang) {
            
            $tmp[$news_lang->language] = $news_lang->as_array();
            
        }
        
        $data = Arr::merge($tmp, $tmp_news);
        
        $this->template->content = View::factory('backend/news/edit')
                                    ->bind('data', $data)
                                    ->bind('languages', $languages);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $news = ORM::factory('News', $id);
        
        if ($news->loaded()) {
            
            $news->delete_image();
            $news->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'news'))));
    }
    
    public function action_status() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $id = Arr::get($post, 'id');
            $status = Arr::get($post, 'status');
            
            if (!empty($id)) {
                
                $news = ORM::factory('News', $id);
                
                if ($news->loaded()) {
                    
                    $news->status = $status;
                    $news->update();
                }
            }
            
            $this->ajax = json_encode($status == 0 ? 'Unpublished' : 'Published');
        }
    }
}