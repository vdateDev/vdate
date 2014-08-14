<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Reviews extends Controller_Backend {
    
    public function action_index() {
        
        $limit = Kohana::$config->load('reviews')->get('backend_per_page');
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'backend/pagination/basic',
            'total_items' => ORM::factory('Reviews')->count_all(),
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        $reviews = Model_Reviews::get_reviews_backend($limit, $pagination->offset);
        $this->template->content = View::factory('backend/reviews/index')
                                    ->set('pagination', $pagination)
                                    ->set('reviews', $reviews);
        
    }
    
    
    public function action_edit() {
        
        $id = $this->request->param('id');

        $reviews = ORM::factory('Reviews', $id);
        
        if (!$reviews->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'reviews'))));
            
        }
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();

            $reviews->edit_review($post);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $reviews->id);
        }
        
        $data = $reviews->as_array();
        
        $this->template->content = View::factory('backend/reviews/edit')
                                    ->bind('data', $data);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $reviews = ORM::factory('Reviews', $id);
        
        if ($reviews->loaded()) {
            
            $reviews->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'reviews'))));
    }

}