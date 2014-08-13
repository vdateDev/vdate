<?php defined('SYSPATH') or die('No direct script access.');

class Model_Pages extends ORM {
    
    protected $_table_name = 'pages';
    
    protected $_has_many = array(
        'languages' => array(
            'model' => 'PageLanguage',
            'foreign_key' => 'page_id',
        ),
    );
    
    public function filters() {

        return array(
            'url' => array(
                array('trim'),
            ),
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
        );
        
    }
    
    public function add_page($data, $languages) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'url', 'created_at'));
        $this->values($values);
        $this->save();
        
        foreach($languages AS $lang) {
         
            $this->languages->add_language($this->id, $lang->key, $data[$lang->key]);
            
        }
        
        return $this;
    }
    
    public function edit_page($data, $languages) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'url', 'updated_at'));
        $this->values($values);
        $this->update();
        
        $page_languages = $this->languages->find_all();
        
        foreach ($page_languages AS $page_lang) {
            
            $page_lang->edit_language($data[$page_lang->language]);
            
        }
        
        return $this;
    }
    
    public static function get_backend_pages() {
        
        $pages = self::factory('Pages')
                    ->join('pages_languages')
                    ->on('pages.id', '=', 'pages_languages.page_id')
                    ->select(
                        array('pages_languages.name', 'name')
                    )
                    ->where('pages_languages.language', '=', 'ru')
                    ->order_by('pages_languages.name', 'ASC')
                    ->find_all();
        
        return $pages;
    }
    
    public static function getPages() {
        
        $pages = self::factory('Pages')
                    ->join('pages_languages')
                    ->on('pages.id', '=', 'pages_languages.page_id')
                    ->select(
                        array('pages_languages.name', 'name')
                    )
                    ->where('pages_languages.language', '=', 'ru')
                    ->order_by('pages_languages.name', 'ASC')
                    ->find_all();
        
        return $pages;
    }
    
    public static function get_page_by_url($url, $language) {
        
        $page = self::factory('Page')
                    ->join('pages_languages')
                    ->on('pages.id', '=', 'pages_languages.page_id')
                    ->select(
                        array('pages_languages.name', 'name'),
                        array('pages_languages.page_h1', 'page_h1'),
                        array('pages_languages.page_title', 'page_title'),
                        array('pages_languages.page_keywords', 'page_keywords'),
                        array('pages_languages.page_description', 'page_description'),
                        array('pages_languages.text', 'text')                            
                    )
                    ->where('pages_languages.language', '=', $language)
                    ->where('pages.url', '=', $url)
                    ->where('pages.status', '=', 1)
                    ->find();
                
        return $page;
        
    }
}