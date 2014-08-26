<?php defined('SYSPATH') or die('No direct script access.');

class Model_Girls extends ORM {
    
    
    protected $_table_name = 'girls';

    
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
            'serie_passport' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'number_pasport' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'city' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'address' => array(
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
    
    public static function get_girl($id) {
        
            $girl= self::factory('Girls')
                ->join('users')
                ->on('girls.user_id', '=', 'users.id')
                ->select(
                    array('users.username', 'username')
                )
                ->where('girls.id', '=', $id)
                ->find();
            return $girl;
        
    }
    
    
    public function add_girl($id,$data, $passport, $girl_passport) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array( 'created_at','user_id','firstname','lastname','email','serie_passport','number_passport',
                                            'passport_photo','girl_with_passport','birthday','country','region','city','address','height','weight',
                                            'eyes','hair','place_work','education','religion','marital_status','smoking','drinking','children','phone',
                                            'hobbies','about','relationships','agency_id','video'));
        $values['user_id']=$id;
        
        if (!empty($passport)) {
            
            $values['passport_photo'] = $this->upload_image($passport,'passport');
            
        }
        
        if (!empty($girl_passport)) {
            
            $values['girl_with_passport'] = $this->upload_image($girl_passport,'girl_passport');
            
        }

      
        
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public function edit_girl($data, $passport, $girl_passport) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
         $values = Arr::extract($data,  array( 'updated_at','firstname','lastname','email','serie_passport','number_passport',
                                            'passport_photo','girl_with_passport','birthday','country','region','city','address','height','weight',
                                            'eyes','hair','place_work','education','religion','marital_status','smoking','drinking','children','phone',
                                            'hobbies','about','relationships','agency_id','video'));
        
      if (!empty($passport)) {
            
            $values['passport_photo'] = $this->upload_image($passport,'passport');
            
        } else $values['passport_photo']=$this->passport_photo;
        
        if (!empty($girl_passport)) {
            
            $values['girl_with_passport'] = $this->upload_image($girl_passport,'girl_passport');
            
        } else $values['girl_with_passport']=$this->girl_with_passport;

                
        $this->values($values);
        $this->update();

        return $this;
    }
    
    public function upload_image($image,$directory) {
        
        if (!Upload::valid($image) OR !Upload::not_empty($image) OR !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            
            return;
            
        }
        
        
        $original = $image['name'];
        $tmp = explode('.', $original);
        $ext = end($tmp);
        
        $filename = strtolower(Text::random('alnum', 32)).'.'.$ext;
        
        $dir = DOCROOT.'upload/girls/'.$directory.'/';
        
        if ($file = Upload::save($image, NULL, $dir)) {
            
            $im = Image::factory($file);
            $master = Image::WIDTH;
            
            if ($im->width < $im->height) {
                
                $master = Image::HEIGHT;
                
            }
            
            $im->save($dir.$filename);

            unlink($file);
            
            return $filename;
        }
        
        return FALSE;
    }
    
    public function delete_passport() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        if (HTML::isset_img('upload/girls/passport/'.$this->passport_photo)) {
            unlink(DOCROOT.'upload/girls/passport/'.$this->passport_photo);
        }
        
        $this->passport_photo = NULL;
        $this->update();
    }
    
    public function delete_girl_passport() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        if (HTML::isset_img('upload/girls/girl_passport/'.$this->girl_with_passport)) {
            unlink(DOCROOT.'upload/girls/girl_passport/'.$this->girl_with_passport);
        }
        
        $this->girl_with_passport = NULL;
        $this->update();
    }

    
    public function delete_all_images() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        if (HTML::isset_img('upload/girls/passport/'.$this->passport_photo)) {
            unlink(DOCROOT.'upload/girls/passport/'.$this->passport_photo);
        }
        
        if (HTML::isset_img('upload/girls/girl_passport/'.$this->girl_with_passport)) {
            unlink(DOCROOT.'upload/girls/girl_passport/'.$this->girl_with_passport);
        }
    }
    
    public static function get_girls_backend($agency=NULL, $status=NULL, $firstname=NULL, $lastname=NULL, $login=NULL,$limit = NULL, $offset = NULL) {
        
        $girls = ORM::factory('Girls')
                    ->join('agency','left')
                    ->on('girls.agency_id', '=', 'agency.id')
                    ->select(
                            array('agency.name','agency_name')
                        )
                    ->join('users')
                    ->on('users.id','=','girls.user_id')
                    ->select(
                            array('users.username','username'),
                            array('users.status','status')
                        )
                    ->order_by('girls.firstname', 'ASC');
        
        if (isset($agency) and $agency>0) {
            
            $girls->where('girls.agency_id', '=', $agency);
            
        }
        
        if (isset($status) and $status<3){
            
            $girls->where('users.status', '=', $status);
            
        }
        
        if (isset($firstname) and $firstname!='') {
            
            $girls->where('girls.firstname', 'like', '%'.$firstname.'%');
        }
        
        if (isset($lastname) and $lastname!='') {
            
            $girls->where('girls.lastname', 'like', '%'.$lastname.'%');
        }
        
        if (isset($login) and $login!='') {
            
            $girls->where('users.username', 'like', '%'.$login.'%');
        }
        
        if (isset($limit)) {
            
            $girls->limit($limit);
            
        }
        
        if (isset($offset)) {
            
            $girls->offset($offset);

        }
        
        $girls = $girls->find_all();
        
        return $girls;
    }
    
    public static function count_girls($agency=NULL,$status=NULL,$firstname=NULL,$lastname=NULL,$login=NULL) {
        
        $girls = ORM::factory('Girls')                    
                    ->join('users')
                    ->on('users.id','=','girls.user_id')
                    ->select(
                            array('users.username','username'),
                            array('users.status','status')
                    );
        
        if (isset($agency) and $agency>0) {
            
            $girls->where('girls.agency_id', '=', $agency);
            
        }
        
        if (isset($status) and $status<3) {
            
            $girls->where('users.status', '=', $status);
            
        }
        if (isset($firstname) and $firstname!='') {
            
            $girls->where('girls.firstname', 'like', '%'.$firstname.'%');
        }
        
        if (isset($lastname) and $lastname!='') {
            
            $girls->where('girls.lastname', 'like', '%'.$lastname.'%');
        }
        
        if (isset($login) and $login!='') {
            
            $girls->where('users.username', 'like', '%'.$login.'%');
        }
        
        
        return $girls->count_all();
        
    }
    
    public function send_letter_registration($firstname, $lastname,$email,$agency) {
        
        $settings = Kohana::$config->load('site');
        
        $agency=ORM::factory('Agency',$agency);
        
        /*------------------Letter to admin--------------*/
        $letter = Model_Letter::get_letter_by_key('mail_admin_registration_girl', 'en');
        $subject = str_replace('{{site}}', $settings['site_name'], $letter->subject);
        $search = array('{{site}}','{{girl}}','{{agency}}');
        
        $data = array();
        $data['site'] = $settings['site_name'];
        $data['girl'] = $firstname.' '.$lastname;        
        $data['agency']=$agency->name;
        
        $message = str_replace($search, $data, $letter->text);
        
        Email::factory($subject, $message)
                        ->from($email)
                        ->to($settings['admin_email'])
                        ->send();
        
        /*------------------Letter to agency--------------*/
        $letter = Model_Letter::get_letter_by_key('mail_agency_registration_girl', 'en');
        $subject = str_replace('{{site}}', $settings['site_name'], $letter->subject);
        $search = array('{{site}}','{{girl}}','{{agency}}');
        
        $data = array();
        $data['site'] = $settings['site_name'];
        $data['girl'] = $firstname.' '.$lastname;        
        $data['agency']=$agency->name;
        
        $message = str_replace($search, $data, $letter->text);
        
        Email::factory($subject, $message)
                        ->from($email)
                        ->to($agency->email)
                        ->send();
        
        /*------------------Letter to girl -------------------*/
        $letter = Model_Letter::get_letter_by_key('mail_girl_registration_girl', 'en');
        $subject = str_replace('{{site}}', $settings['site_name'], $letter->subject);
        $search = array('{{site}}','{{girl}}','{{agency}}');
        
        $data = array();
        $data['site'] = $settings['site_name'];
        $data['girl'] = $firstname.' '.$lastname;        
        $data['agency']=$agency->name;
        
        $message = str_replace($search, $data, $letter->text);
        
        Email::factory($subject, $message)
                        ->from($settings['admin_email'])
                        ->to($email)
                        ->send();

    }
    
    public static function get_girl_frontend($id) {
        $girl=ORM::factory('Girls')
             ->join('users')
             ->on('users.id','=','girls.user_id')
             ->where('user_id', '=', $id)
             ->where('users.status','=','1')
             ->find();
        
        return $girl;
                
    }
    
    public static function get_new_girls($time,$time_online,$limit=NULL) {
        
        $girls=ORM::factory('User')
                    ->join('girls')
                    ->on('girls.user_id','=','user.id')
                    ->select(
                            array('girls.firstname','firstname'),
                            array('girls.country','country'),
                            array('girls.city','city'),
                            array('girls.birthday','birthday')
                        )
                    ->where('girls.created_at','>=',$time)
                    ->where('user.status','=','1')
                 /*  ->where('user.last_activity','>=',$time_online)*/
                    ->join('user_photos','LEFT')
                    ->on('user_photos.user_id','=','user.id')
                    ->on('user_photos.default_image','=',DB::expr('1'))
                    ->select(
                    array('user_photos.photo','photo'),
                    array('user_photos.default_image','default_image')
                    )
                    ->order_by( DB::expr('RAND()'));
        
        if (isset($limit)) {
            $girls->limit($limit);
        }
                    
        return $girls->find_all();            
        
    }
    
    public static function count_girl_online($time) {
         $girls=ORM::factory('User')
            ->join('girls')
            ->on('girls.user_id','=','user.id')
            ->where('user.status','=',1)
            /* ->where('user.last_activity','>=',$time)*/;
          return $girls->count_all();
    }
    
    public static function get_online($time,$limit=NULL,$sort=NULL,$offset=NULL) {
        
        $girls=ORM::factory('User')
            ->join('girls')
            ->on('girls.user_id','=','user.id')
            ->select(
                    array('girls.firstname','firstname'),
                    array('girls.city','city'),
                    array('girls.country','country'),
                    array('girls.birthday','birthday'),
                    array('girls.weight','weight'),
                    array('girls.height','height')
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
            
            if($sort=='activity')  $girls->order_by('user.last_activity','DESC');
            if($sort=='age')  $girls->order_by('girls.birthday','DESC');
            if($sort=='name')  $girls->order_by('girls.firstname','ASC');
            if($sort=='city')  $girls->order_by('girls.city','ASC');
            
        } else {
            $girls->order_by( DB::expr('RAND()'));
        }
        
        if (isset($limit)) {
            $girls->limit($limit);
        }
        
        if (isset($offset)) {
            
            $girls->offset($offset);

        }
                    
        return $girls->find_all(); 
        
    }
    
    public function get_weight() {
        
        $weight=ORM::factory('Weight',$this->weight);
        return $weight->get_weight_kg_ibs();
    }
    
    public function get_height() {
        
        $height=ORM::factory('Height',$this->height);
        return $height->get_height_cm_feet();
        
    }
    

}