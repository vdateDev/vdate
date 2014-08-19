<?php defined('SYSPATH') or die('No direct script access.');

class Model_Sprav extends ORM {
    
    protected $_table_name = 'sprav';
    
    protected $_has_many = array(
        'languages' => array(
            'model' => 'SpravLanguage',
            'foreign_key' => 'sprav_id',
        ),
    );
    
    public function filters() {
        
        return array(
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
        );
    }
    
    
    public function add_sprav($data, $languages, $category) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $category_id=self::get_category_id($category);
        
        $values = Arr::extract($data, array('status', 'category_id', 'created_at','type'));
        $values['category_id']=$category_id;
        $this->values($values);
        $this->save();
        
        foreach($languages AS $lang) {
         
            $this->languages->add_language($this->id, $lang->key, $data[$lang->key]);
            
        }
        
        return $this;
    }
    
    public function edit_sprav($data, $languages) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status',  'updated_at','type'));
        
        $this->values($values);
        $this->update();
        
        $sprav_languages = $this->languages->find_all();
        
        foreach ($sprav_languages AS $sprav_lang) {
            
            $sprav_lang->edit_language($data[$sprav_lang->language]);
            
        }
        
        return $this;
    }
    
    public static function get_sprav_backend($category) {
        
        $data = ORM::factory('Sprav')
                    ->join('sprav_languages')
                    ->on('sprav.id', '=', 'sprav_languages.sprav_id')                    
                    ->select(
                        array('sprav_languages.text', 'name')
                    )
                    ->join('sprav_categories')
                    ->on('sprav.category_id', '=', 'sprav_categories.id')  
                    ->where('sprav_languages.language', '=', 'en')
                    ->where('sprav_categories.name', '=', $category) 
                    ->order_by('sort', 'ASC');
        
        
        $data = $data->find_all();
        
        return $data;
    }
    
    
    
  
    public static function count_by_status($status) {
        
        return self::factory('Sprav')->where('status', '=', $status)->count_all();
        
    }
    

   
    public static function count_by_category($category) {
        return self::factory('Sprav')->where('category_id', '=', $category)->count_all();
        
    }
    
    public static function get_category_id($category) {
        
        $id_category=DB::select('id')->from('sprav_categories')->where('name', '=', $category)->execute();
        return $id_category[0]['id'];
    }
    
    public static function get_list_by_category($category,$lang,$type=NULL) {
        
        $data = ORM::factory('Sprav')
            ->join('sprav_languages')
            ->on('sprav.id', '=', 'sprav_languages.sprav_id')                    
            ->select(
                array('sprav_languages.text', 'name')
            )
            ->join('sprav_categories')
            ->on('sprav.category_id', '=', 'sprav_categories.id')  
            ->where('sprav_languages.language', '=', $lang)
            ->where('sprav_categories.name', '=', $category) 
            ->where('sprav.status', '=', 1) 
            ->order_by('sort', 'ASC');
        
        if (isset($type)) {
            $data->where_open()
                  ->where('type', '=', 0)->or_where('type', '=', $type)
                  ->where_close();
        }
        
        
        $data = $data->find_all();
        
        return $data;
        
    }
    
    public static function get_sprav_frontend($lang,$category=NULL) {
        
        $data = ORM::factory('Sprav')
                    ->join('sprav_languages')
                    ->on('sprav.id', '=', 'sprav_languages.sprav_id')                    
                    ->select(
                        array('sprav_languages.text', 'name')
                    )
                    ->join('sprav_categories')
                    ->on('sprav.category_id', '=', 'sprav_categories.id')  
                    ->where('sprav_languages.language', '=', $lang)
                    ->where('status','=','1')
                    ->order_by('sort', 'ASC');
        
        if (isset($category)) {
            $data->where('sprav_categories.name', '=', $category) ;
        }
        
        
        $data = $data->find_all();
        
        return $data;
    }
}