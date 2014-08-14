<?php defined('SYSPATH') or die('No direct script access.');

class Model_Men extends ORM {
    
    protected $_table_name = 'men';

    
    public function filters() {
        
        return array(
            'birthday' => array(
                array('trim'),
                array(array($this, 'set_date')),
            ),
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
            'firstname' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'lastname' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'city' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'place_work' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'children' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'phone' => array(
                array('trim'),
                array('strip_tags'),
            ),
        );
    }
    
    public function set_date($value) {
        
        if (empty($value)) {
            
            return time();
            
        }
        
        return strtotime($value);
    }
    
    public static function get_men($id) {
        
            $men= self::factory('Men')
                ->join('users')
                ->on('men.user_id', '=', 'users.id')
                ->select(
                    array('users.username', 'username')
                )
                ->where('men.id', '=', $id)
                ->find();
            return $men;
        
    }
    
    
    public function add_men($id,$data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'created_at','user_id','firstname','lastname','email','birthday','country','region','city','height','weight',
                                            'eyes','hair','place_work','education','religion','marital_status','smoking','drinking','children','phone',
                                            'hobbies','about','relationships'));
        $values['user_id']=$id;
        
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public function edit_man($data) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
         $values = Arr::extract($data,  array('status', 'updated_at','firstname','lastname','email','birthday','country','region','city','height','weight',
                                            'eyes','hair','place_work','education','religion','marital_status','smoking','drinking','children','phone',
                                            'hobbies','about','relationships'));
        
        $this->values($values);
        $this->update();

        return $this;
    }
    
    
    public static function get_men_backend($status=NULL,$limit = NULL, $offset = NULL) {
        
        $men = ORM::factory('Men')
                    ->order_by('men.firstname', 'ASC');
        
        if (isset($status) and $status<2){
            
            $men->where('men.status', '=', $status);
            
        }
        
        if (isset($limit)) {
            
            $men->limit($limit);
            
        }
        
        if (isset($offset)) {
            
            $men->offset($offset);

        }
        
        $men = $men->find_all();
        
        return $men;
    }
    
    public static function count_men($status=NULL) {
        
        $men = ORM::factory('Men');
        
        if (isset($status) and $status<2) {
            
            $men->where('men.status', '=', $status);
            
        }
        
        return $men->count_all();
        
    }
    
    public function send_letter_registration($firstname, $lastname,$email) {
        
        $settings = Kohana::$config->load('site');
        
        /*------------------Letter to admin--------------*/
        $letter = Model_Letter::get_letter_by_key('mail_admin_registration_man', 'en');
        $subject = str_replace('{{site}}', $settings['site_name'], $letter->subject);
        $search = array('{{site}}','{{man}}');
        
        $data = array();
        $data['site'] = $settings['site_name'];
        $data['man'] = $firstname.' '.$lastname;        
        
        $message = str_replace($search, $data, $letter->text);
        
        Email::factory($subject, $message)
                        ->from($email)
                        ->to($settings['admin_email'])
                        ->send();
        
        
        /*------------------Letter to man -------------------*/
        $letter = Model_Letter::get_letter_by_key('mail_man_registration_man', 'en');
        $subject = str_replace('{{site}}', $settings['site_name'], $letter->subject);
        $search = array('{{site}}','{{man}}');
        
        $data = array();
        $data['site'] = $settings['site_name'];
        $data['man'] = $firstname.' '.$lastname;        
        
        $message = str_replace($search, $data, $letter->text);
        
        Email::factory($subject, $message)
                        ->from($settings['admin_email'])
                        ->to($email)
                        ->send();

    }

}