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
    
    public function validate($post) {
        
        $validation = Validation::factory($post)            
            ->bind(':params', $post)
            ->rule('firstname', 'not_empty')
            ->rule('lastname', 'not_empty')
            ->labels(array(
                'firstname' => 'first name',
                'lastname' => 'last name',
            ));
            
        return $validation;
        
    }
    
    public function set_date($value) {
        
        if (empty($value)) {
            
            return time();
            
        }
        
        return strtotime($value);
    }
    
    public static function get_man($id) {
        
            $men= self::factory('Men')
                ->join('users')
                ->on('men.user_id', '=', 'users.id')
                ->select(
                    array('users.username', 'username'),
                    array('users.status', 'status')
                )
                ->where('men.id', '=', $id)
                ->find();
            return $men;
        
    }
    
    
    public function add_man($id,$data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('created_at','user_id','firstname','lastname','email','birthday','country','region','city','height','weight',
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
        
         $values = Arr::extract($data,  array( 'updated_at','firstname','lastname','email','birthday','country','region','city','height','weight',
                                            'eyes','hair','place_work','education','religion','marital_status','smoking','drinking','children','phone',
                                            'hobbies','about','relationships'));
        
        $this->values($values);
        $this->update();

        return $this;
    }
    
    
    public static function get_men_backend($status=NULL, $firstname=NULL, $lastname=NULL, $login=NULL,$limit = NULL, $offset = NULL) {
        
        $men = ORM::factory('Men')
                    ->join('users')
                    ->on('users.id','=','men.user_id')
                    ->select(
                            array('users.username','username'),
                            array('users.status','status')
                            )
                    ->order_by('men.firstname', 'ASC');
        
        if (isset($status) and $status<3){
            
            $men->where('users.status', '=', $status);
            
        }
        
        if (isset($firstname) and $firstname!='') {
            
            $men->where('men.firstname', 'like', '%'.$firstname.'%');
        }
        
        if (isset($lastname) and $lastname!='') {
            
            $men->where('men.lastname', 'like', '%'.$lastname.'%');
        }
        
        if (isset($login) and $login!='') {
            
            $men->where('users.username', 'like', '%'.$login.'%');
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
    
    public static function count_men($status=NULL,$firstname=NULL,$lastname=NULL,$login=NULL) {
        
        $men = ORM::factory('Men')
                    ->join('users')
                    ->on('users.id','=','men.user_id')
                    ->select(array('users.username','username'),
                             array('users.status','status')
                            );
        
        if (isset($status) and $status<3) {
            
            $men->where('users.status', '=', $status);
            
        }
        
        if (isset($firstname) and $firstname!='') {
            
            $men->where('men.firstname', 'like', '%'.$firstname.'%');
        }
        
        if (isset($lastname) and $lastname!='') {
            
            $men->where('men.lastname', 'like', '%'.$lastname.'%');
        }
        
        if (isset($login) and $login!='') {
            
            $men->where('users.username', 'like', '%'.$login.'%');
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
    
    public static function get_online($time,$limit=NULL,$sort=NULL,$offset=NULL) {
        
        $men=ORM::factory('User')
            ->join('men')
            ->on('men.user_id','=','user.id')
            ->select(
                    array('men.firstname','firstname'),
                    array('men.city','city'),
                    array('men.country','country'),
                    array('men.birthday','birthday'),
                    array('men.weight','weight'),
                    array('men.height','height')
                )
          /*  ->where('user.last_activity','>=',$time)*/
            ->where('user.status','=','1')
            ->join('user_photos','LEFT')
            ->on('user_photos.user_id','=','user.id')
            ->on('user_photos.default_image','=',DB::expr('1'))
            ->select(
                    array('user_photos.photo','photo'),
                    array('user_photos.default_image','default_image')
                    );
            
        
        if (isset($sort)) {
            
            if($sort=='activity')  $men->order_by('user.last_activity','DESC');
            if($sort=='age')  $men->order_by('men.birthday','DESC');
            if($sort=='name')  $men->order_by('men.firstname','ASC');
            if($sort=='city')  $men->order_by('men.city','ASC');
            
        } else {
            $men->order_by( DB::expr('RAND()'));
        }
        
        if (isset($limit)) {
            $men->limit($limit);
        }
        
        if (isset($offset)) {
            
            $men->offset($offset);

        }
                    
        return $men->find_all(); 
        
    }
    
    public static function count_men_online($time) {
         $men=ORM::factory('User')
            ->join('men')
            ->on('men.user_id','=','user.id')
            ->where('user.status','=',1)
            /* ->where('user.last_activity','>=',$time)*/;
          return $men->count_all();
    }
    
    public static function get_man_frontend($id) {
        $girl=ORM::factory('Men')
             ->join('users')
             ->on('users.id','=','men.user_id')
             ->where('user_id', '=', $id)
             ->where('users.status','=','1')
             ->find();
        
        return $girl;
                
    }
    
    public function get_weight() {
        
        $weight=ORM::factory('weight',$this->weight);
        return $weight->get_weight_kg_ibs();
    }
    
    public function get_height() {
        
        $height=ORM::factory('height',$this->height);
        return $height->get_height_cm_feet();
        
    }
    


}