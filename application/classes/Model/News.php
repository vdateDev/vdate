<?php defined('SYSPATH') or die('No direct script access.');

class Model_News extends ORM {
    
    protected $_table_name = 'news';
    
    protected $_has_many = array(
        'languages' => array(
            'model' => 'NewsLanguage',
            'foreign_key' => 'news_id',
        ),
    );
    
    public function filters() {
        
        return array(
            'date_news' => array(
                array('trim'),
                array(array($this, 'set_date')),
            ),
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
        );
    }
    
    public function set_date($value) {
        
        if (empty($value)) {
            
            return time();
            
        }
        
        return strtotime($value);
    }
    
    public function add_news($data, $languages, $file) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'url', 'date_news', 'created_at'));
        
        if (!empty($file)) {
            
            $values['image'] = $this->upload_image($file);
            
        }
        
        $this->values($values);
        $this->save();
        
        foreach($languages AS $lang) {
         
            $this->languages->add_language($this->id, $lang->key, $data[$lang->key]);
            
        }
        
        return $this;
    }
    
    public function edit_news($data, $languages, $file) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'url', 'date_news', 'updated_at'));
        
        if (!empty($file)) {
            
            $values['image'] = $this->upload_image($file);
            
        }
        
        $this->values($values);
        $this->update();
        
        $news_languages = $this->languages->find_all();
        
        foreach ($news_languages AS $news_lang) {
            
            $news_lang->edit_language($data[$news_lang->language]);
            
        }
        
        return $this;
    }
    
    public function upload_image($image) {
        
        if (!Upload::valid($image) OR !Upload::not_empty($image) OR !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            
            return;
            
        }
        
        $settings = Kohana::$config->load('news')->as_array();
        
        $original = $image['name'];
        $tmp = explode('.', $original);
        $ext = end($tmp);
        
        $filename = strtolower(Text::random('alnum', 32)).'.'.$ext;
        
        $dir = DOCROOT.'upload/news/';
        
        if ($file = Upload::save($image, NULL, $dir)) {
            
            $im = Image::factory($file);
            $master = Image::WIDTH;
            
            if ($im->width < $im->height) {
                
                $master = Image::HEIGHT;
                
            }
            
            $im->resize($settings['medium_image_width'], $settings['medium_image_height'], $master)
               ->crop($settings['medium_image_width'], $settings['medium_image_height'])
               ->save($dir.'medium_'.$filename);
            
            Image::factory($file)
                    ->resize($settings['big_image_width'], $settings['big_image_height'], $master)
                    ->crop($settings['big_image_width'], $settings['big_image_height'], $master)
                    ->save($dir.'big_'.$filename);
            
            unlink($file);
            
            return $filename;
        }
        
        return FALSE;
    }
    
    public function delete_image() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        if (HTML::isset_img('upload/news/big_'.$this->image)) {
            unlink(DOCROOT.'upload/news/big_'.$this->image);
        }
        
        if (HTML::isset_img('upload/news/medium_'.$this->image)) {
            unlink(DOCROOT.'upload/news/medium_'.$this->image);
        }
        
        $this->image = NULL;
        $this->update();
    }
    
    public static function get_news_backend($limit = NULL, $offset = NULL) {
        
        $news = ORM::factory('News')
                    ->join('news_languages')
                    ->on('news.id', '=', 'news_languages.news_id')                    
                    ->select(
                        array('news_languages.name', 'name')
                    )
                    ->where('news_languages.language', '=', 'en')
                    ->order_by('date_news', 'DESC');
        
        if (isset($limit)) {
            
            $news->limit($limit);
            
        }
        
        if (isset($offset)) {
            
            $news->offset($offset);

        }
        
        $news = $news->find_all();
        
        return $news;
    }
    
    public static function get_news_frontend($language, $limit = NULL, $offset = NULL) {
        
        $news = self::factory('News')
                    ->join('news_languages')
                    ->on('news.id', '=', 'news_languages.news_id')
                    ->select(
                        array('news_languages.name', 'name'),
                        array('news_languages.announcement', 'announcement')
                    )
                    ->where('news.status', '=', 1)
                    ->where('news_languages.language', '=', $language)
                    ->order_by('news.date_news', 'DESC');
        
        if (isset($limit)) {
            
            $news->limit($limit);
            
        }
        
        if (isset($offset)) {
            
            $news->offset($offset);
            
        }
        
        $news = $news->find_all();
        
        return $news;
    }
    
    public static function get_one($id, $url, $language) {
        
        $news = self::factory('News')
                    ->join('news_languages')
                    ->on('news.id', '=', 'news_languages.news_id')
                    ->select(
                        array('news_languages.name', 'name'),
                        array('news_languages.page_title', 'page_title'),
                        array('news_languages.page_h1', 'page_h1'),
                        array('news_languages.page_keywords', 'page_keywords'),
                        array('news_languages.page_description', 'page_description'),
                        array('news_languages.text', 'text')
                    )
                    ->where('news.id', '=', $id)
                    ->where('news.url', '=', $url)
                    ->where('news_languages.language', '=', $language)
                    ->where('news.status', '=', 1)
                    ->find();
        
        return $news;
    }
    
    public static function count_by_status($status) {
        
        return self::factory('News')->where('status', '=', $status)->count_all();
        
    }
}