<?php defined('SYSPATH') or die('No direct script access.');

class Model_Reviews extends ORM {
    
    protected $_table_name = 'news_reviews';
    
    public function filters() {
        
        return array(
            'name' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'email' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
        );
        
    }
    
    public function validate($post) {
        
        $validation = Validation::factory($post)            
            ->bind(':params', $post)
            ->rule('name', 'not_empty')
            ->rule('email', 'not_empty')
            ->rule('email', 'email')
            ->rule('comment', 'not_empty')    

            ->labels(array(
                'name' => 'name',
                'email' => 'E-mail',
                'comment' => 'Comment',
            ));
            
        return $validation;
        
    }
    
    
    public function add_review($id, $data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('news_id', 'email', 'name', 'comment','created_at'));
        $values['news_id'] = $id;
                
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public function edit_review($data) {
        
        if (!$this->loaded()) {
            
            return;
            
        }

        $values = Arr::extract($data, array('comment','email','name','updated_at','status'));
        $this->values($values);
        $this->update();
        
        return $this;
    }
    
    public function count_by_news($news_id) {
        
        $reviews=self::factory('Reviews')
                ->where('news_id', '=', $news_id)
                ->where('status', '=', 1)
                ->count_all();
        return $reviews;
        
    }
    
    public static function get_reviews_by_news($news_id,$status=NULL) {
        
        $reviews=self::factory('Reviews')
                ->where('news_id','=',$news_id);
                
        
        if (isset($status)) {
            $reviews->where('status', '=', $status);
        }
        $reviews->order_by('created_at', 'DESC');
        
        return $reviews->find_all();
        
    }
    
    public static function get_reviews_backend($limit = NULL, $offset = NULL) {
        $reviews = ORM::factory('Reviews')
                ->join('news','left')
                ->on('news.id','=','reviews.news_id')
                ->join('news_languages','left')
                ->on('news.id','=','news_languages.news_id')
                ->select(
                        array('news_languages.name','news_name')
                )
                ->where('news_languages.language','=','en')
                ->order_by('reviews.created_at', 'DESC');
        
        if (isset($limit)) {
            $reviews->limit($limit);
        }
        if (isset($offset)) {

            $reviews->offset($offset);
        }
        
        $reviews=$reviews->find_all();
        
        return $reviews;
        
    }
}