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
        
        $values = Arr::extract($data, array('status', 'created_at','user_id','firstname','lastname','email','serie_passport','number_passport',
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
        
         $values = Arr::extract($data,  array('status', 'updated_at','firstname','lastname','email','serie_passport','number_passport',
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
    
    public static function get_girls_backend($agency=NULL, $status=NULL,$limit = NULL, $offset = NULL) {
        
        $girls = ORM::factory('Girls')
                    ->join('agency','left')
                    ->on('girls.agency_id', '=', 'agency.id')
                    ->select(
                            array('agency.name','agency_name')
                        )
                    ->order_by('girls.firstname', 'ASC');
        
        if (isset($agency) and $agency>0) {
            
            $girls->where('girls.agency_id', '=', $agency);
            
        }
        
        if (isset($status) and $status<2){
            
            $girls->where('girls.status', '=', $status);
            
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
    
    public static function count_girls($agency=NULL,$status=NULL) {
        
        $girls = ORM::factory('Girls');
        
        if (isset($agency) and $agency>0) {
            
            $girls->where('girls.agency_id', '=', $agency);
            
        }
        
        if (isset($status) and $status<2) {
            
            $girls->where('girls.status', '=', $status);
            
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

}