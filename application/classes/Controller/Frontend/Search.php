<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Search extends Controller_Frontend {

    public $template   = 'frontend/layout';
    public $page;

    public function before() {
        

        
        parent::before();
    }
    
    public function action_index() {     
        
        $lang = $this->request->param('lang');
        
        if($lang == NULL) {
            $lang = 'en';
        }
        
        $data = array();
        
        foreach($_GET as $key => $val) {
            $data[$key] = $val;
        }
        
        $dbSpr = array();
        
        $dbSpr['weigth']    = Model::factory('Weight')->get_weight();
        $dbSpr['height']    = Model::factory('Height')->get_height();
        $dbSpr['country']   = array('1'=>'USA','2'=>'Ukraine');
        $dbSpr['children']  = array(1,2,3,4,5);
        $dbSpr['english']   = array('no','yes');
        $dbSpr['regions']   = array('Alaska','Texas','Oklahoma');
        $dbSpr['hair']      = Model::factory('Sprav')->get_sprav_frontend($lang,'hair');
        $dbSpr['smoking']   = Model::factory('Sprav')->get_sprav_frontend($lang,'smoking');
        $dbSpr['drinking']  = Model::factory('Sprav')->get_sprav_frontend($lang,'drinking');
        $dbSpr['eyes']      = Model::factory('Sprav')->get_sprav_frontend($lang,'eyes');
        $dbSpr['religions']      = Model::factory('Sprav')->get_sprav_frontend($lang,'religion');
        
        $searchFormID        = View::factory('frontend/search/ById')
                                ->bind('data',$data);
        $searchFormSimple    = View::factory('frontend/search/Simple')
                                ->bind('spr',$dbSpr)
                                ->bind('data',$data);
        $searchFormAdvanced  = View::factory('frontend/search/Advanced')
                                ->bind('spr',$dbSpr)
                                ->bind('data',$data);
        
        
        $result = NULL;
        
        if(count($data) > 0) {
            $result = Model_Search::change($this->user,$data);
        }
        
        $this->template->content = View::factory('frontend/search/Index')
                                    ->bind('ById',$searchFormID)
                                    ->bind('Simple',$searchFormSimple)
                                    ->bind('Advanced',$searchFormAdvanced)
                                    ->bind('Result',$result);
    }
    
    public function action_by_id() {
        
    }
    
    public function action_simple() {
        
    }
    
    public function action_advanced() {
        
    }
} 