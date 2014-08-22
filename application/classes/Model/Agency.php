<?php defined('SYSPATH') or die('No direct script access.');

class Model_Agency extends ORM {
    
    protected $_table_name = 'agency';

    
    public function filters() {
        
        return array(
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
            'name' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'director' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'contact_person' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'addresss' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'contact_phone' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'skype' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'working_time' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'beneficiary_name' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'beneficiary_account' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'beneficiary_address' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'beneficiary_phone' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'beneficiiary_bank_name' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'aba_swift_national_id' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'beneficiary_bank_address' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'bank_name' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'bank_address' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'bank_swift_code' => array(
                array('trim'),
                array('strip_tags'),
            ),
        );
    }
    
    public function validate($post) {
        
        $validation = Validation::factory($post)            
            ->bind(':params', $post)
            ->rule('name', 'not_empty')
            ->labels(array(
                'name' => 'agency name',
            ));
            
        return $validation;
        
    }
    
    
    public function add_agency($id,$data, $contract, $certificate, $passport) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('created_at', 'name', 'director', 'contact_person','address', 'contact_phone','skype','email',
                                            'working_time','signed_contract','certificate','passport','beneficiary_name','beneficiary_account','beneficiary_address',
                                            'beneficiary_phone','beneficiary_bank_name','aba_swift_national_id','beneficiary_bank_address','country','bank_name',
                                            'bank_address','bank_city','bank_country','bank_swift_code','comments','user_id'));
        
        $values['user_id']=$id;
        
        if (!empty($contract)) {
            
            $values['signed_contract'] = $this->upload_image($contract,'contract');
            
        }
        
        if (!empty($certificate)) {
            
            $values['certificate'] = $this->upload_image($certificate,'certificate');
            
        }
        if (!empty($passport)) {
            
            $values['passport'] = $this->upload_image($passport,'passport');
            
        }
      
        
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public function edit_agency($data, $contract, $certificate, $passport) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
         $values = Arr::extract($data, array( 'updated_at', 'name', 'director', 'contact_person','address', 'contact_phone','skype','email',
                                            'working_time','signed_contract','certificate','passport','beneficiary_name','beneficiary_account','beneficiary_address',
                                            'beneficiary_phone','beneficiary_bank_name','aba_swift_national_id','beneficiary_bank_address','country','bank_name',
                                            'bank_address','bank_city','bank_country','bank_swift_code','comments'));
        
      if (!empty($contract)) {
            
            $values['signed_contract'] = $this->upload_image($contract,'contract');
            
        } else $values['signed_contract']=$this->signed_contract;
        
        if (!empty($certificate)) {
            
            $values['certificate'] = $this->upload_image($certificate,'certificate');
            
        } else $values['certificate']=$this->certificate;
        
        if (!empty($passport)) {
            
            $values['passport'] = $this->upload_image($passport,'passport');
            
        } else $values['passport']=$this->passport;
                
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
        
        $dir = DOCROOT.'upload/agency/'.$directory.'/';
        
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
    
    public function delete_certificate() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        if (HTML::isset_img('upload/agency/certificate/'.$this->certificate)) {
            unlink(DOCROOT.'upload/agency/certificate/'.$this->certificate);
        }
        
        $this->certificate = NULL;
        $this->update();
    }
    
    public function delete_passport() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        if (HTML::isset_img('upload/agency/passport/'.$this->passport)) {
            unlink(DOCROOT.'upload/agency/passport/'.$this->passport);
        }
        
        $this->passport = NULL;
        $this->update();
    }
    
    public function delete_contract() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        if (HTML::isset_img('upload/agency/contract/'.$this->signed_contract)) {
            unlink(DOCROOT.'upload/agency/contract/'.$this->signed_contract);
        }
        
        $this->signed_contract = NULL;
        $this->update();
    }
    
    public function delete_all_images() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        if (HTML::isset_img('upload/agency/contract/'.$this->signed_contract)) {
            unlink(DOCROOT.'upload/agency/contract/'.$this->signed_contract);
        }
        
        if (HTML::isset_img('upload/agency/passport/'.$this->passport)) {
            unlink(DOCROOT.'upload/agency/passport/'.$this->passport);
        }
        
        if (HTML::isset_img('upload/agency/certificate/'.$this->certificate)) {
            unlink(DOCROOT.'upload/agency/certificate/'.$this->certificate);
        }
    }
    
    public static function get_agency_backend($limit = NULL, $offset = NULL) {
        
        $agency = ORM::factory('Agency')
                    ->join('users')
                    ->on('users.id','=','agency.user_id')
                    ->select(array('users.status','status'))
                    ->order_by('name', 'ASC');
        
        if (isset($limit)) {
            
            $agency->limit($limit);
            
        }
        
        if (isset($offset)) {
            
            $agency->offset($offset);

        }
        
        $agency = $agency->find_all();
        
        return $agency;
    }
    
    public static function get_agency_frontend($limit = NULL, $offset = NULL) {
        
        $agency = ORM::factory('Agency')
                    ->join('users')
                    ->on('users.id','=','agency.user_id')
                    ->where('users.status', '=', 1)
                    ->order_by('name', 'ASC');
        
        if (isset($limit)) {
            
            $agency->limit($limit);
            
        }
        
        if (isset($offset)) {
            
            $agency->offset($offset);

        }
        
        $agency = $agency->find_all();
        
        return $agency;
    }
    
    public function send_letter_registration($username,$email,$agency) {
        
        $settings = Kohana::$config->load('site');
        
        
        /*------------------Letter to admin--------------*/
        $letter = Model_Letter::get_letter_by_key('mail_admin_agency_registration', 'en');
        $subject = str_replace('{{site}}', $settings['site_name'], $letter->subject);
        $search = array('{{site}}','{{username}}','{{agency}}');
        
        $data = array();
        $data['site'] = $settings['site_name'];
        $data['username'] = $username;        
        $data['agency']=$agency;
        
        $message = str_replace($search, $data, $letter->text);
        
        Email::factory($subject, $message)
                        ->from($email)
                        ->to($settings['admin_email'])
                        ->send();
        
        /*------------------Letter to agency--------------*/
        $letter = Model_Letter::get_letter_by_key('mail_agency_registration', 'en');
        $subject = str_replace('{{site}}', $settings['site_name'], $letter->subject);
        $search = array('{{site}}','{{username}}','{{agency}}');
        
        $data = array();
        $data['site'] = $settings['site_name'];
        $data['username'] = $username;        
        $data['agency']=$agency;
        
        $message = str_replace($search, $data, $letter->text);
        
        Email::factory($subject, $message)
                        ->from($settings['admin_email'])
                        ->to($email)
                        ->send();

    }

}