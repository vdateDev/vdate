<?php


class ads {


		static function show_ads($limit,$name_file) {
		
			global $_currency;		
			global $_placed_by;
						
			$_sql='SELECT * FROM `dom_ads` WHERE status=1 order by updated_at desc, created_at desc limit '.$limit;			
			$result=mysql::query($_sql,0);

			return system::show_tpl(array('result'=>$result,'_currency'=>$_currency,'_placed_by'=>$_placed_by),$name_file);
			
		}

		static function show_tabs($name_file) {
		
			global $_currency;		
			global $_placed_by;
						
			$_sql='SELECT * FROM `dom_adstypes` WHERE status=1 order by updated_at desc, created_at desc';			
			$result=mysql::query($_sql,0);

			return system::show_tpl(array('tabs'=>$result,'_currency'=>$_currency,'_placed_by'=>$_placed_by),$name_file);
			
		}

		static function get_ads_for_tab($id,$limit) {
		
			/*if ($id == 6) $__add = ' and prem_type IN (1, 2, 3, 4, 5, 6) '; else*/ $__add = '';
		
			if (isset($_SESSION['tabs'][$id]) and $_SESSION['tabs'][$id]!=99) {				
				$_sql='SELECT * FROM `dom_ads` WHERE status=1 AND ad_type = '.$id.' '.$__add.' ORDER BY sort desc, created_at desc, id desc LIMIT '.$_SESSION['tabs'][$id]['from'].', '.$_SESSION['tabs'][$id]['step'];		
			} else {
				$_sql='SELECT * FROM `dom_ads` WHERE status=1 AND ad_type = '.$id.' '.$__add.' order by sort desc, created_at desc, id desc LIMIT '.$limit;		
			}
			
            if($id==99){
                $_sql='SELECT * FROM `dom_ads` WHERE status=1 '.$__add.' order by sort desc, created_at desc, id desc LIMIT '.$limit;		
            }
			$result=mysql::query($_sql,0);
			
			return $result;
		
		}		
		
		/* ------------------------------------------------------------------------------------------------------------------------------------------ */
		
		static function show_ad ($id, $name_file) {

			global $_currency;			
			global $_placed_by;
			
			$_sql='SELECT * FROM `dom_ads` WHERE status=1 and id='.mysql_escape_string($id);
			
			$result=mysql::query_one($_sql,0);
			
			if (!$result) {
				die (get_tpl('/tpl/mainpage/404.tpl.html'));
			}
					
			return system::show_tpl(array('obj'=>$result,'_currency'=>$_currency,'_type_add'=>$_type_add,'_placed_by'=>$_placed_by),$name_file);	
			
		}

		static function show_data($date_input,$time=false) {

			$date = strtotime($date_input);
			
			//Время
			if($time) $time = ' G:i';
			else $time = '';
					
			//Месяца
			$month = date('m', $date);
		
			//Года
			$year = date('Y', $date);			
		
			if($time) $result_date = date('j', $date).'.'.$month.'.'.$year.' '.$time;
			else $result_date = date('j', $date).'.'.$month.'.'.$year;
			
			return $result_date;			
						
		}
		
		static function get_name_of_param_by_id ($table,$pole,$id) {
		
			$result = mysql::query_findpole('SELECT '.$pole.' as pole FROM `'.$table.'` WHERE id = '.$id, 'pole', 0);
			if ($result) return $result; else return '';
		
		}
		
		static function get_list_vip() {
		
			$result = mysql::query('SELECT * FROM `dom_ads` WHERE status = 1 AND vip = 1',0);			
			return $result; 
		
		}
		
		static function get_list_sos() {
		
			$result = mysql::query('SELECT * FROM `dom_ads` WHERE status = 1 AND sos = 1',0);			
			return $result; 
		
		}
		
		static function show_hot () {
						 
			$_sql = 'SELECT * FROM `dom_ads` WHERE status = 1 AND hot = 1 ORDER BY rand() LIMIT 1';	
			$result = mysql::query_one($_sql,0);
			
			return $result;
		
		}
		
		/*  Недвижимость по областям Украины и Зарубежная недвижимость	*/	
		static function show_ads_for_countries ($is_ukraine,$limit) {
		
			if ($is_ukraine == 1) {
				$_sql = 'SELECT * FROM `dom_ads` WHERE status = 1 AND country = 1 ORDER BY sort desc, created_at desc, id desc LIMIT '.$limit;	
			} else {
				$_sql = 'SELECT * FROM `dom_ads` WHERE status = 1 AND country <> 1 ORDER BY sort desc, created_at desc, id desc LIMIT '.$limit;	
			}
				
			$result = mysql::query($_sql,0);
			
			return $result;
		
		}
        
        static function count_first_page ($is_ukraine) {
		
			if ($is_ukraine == 1) {
				$_sql = 'SELECT count(*) as count FROM `dom_ads` WHERE status = 1 AND country = 1';	
			} else {
				$_sql = 'SELECT count(*) as count FROM `dom_ads` WHERE status <> 1 AND country = 1';	
			}
				
		    return mysql::query_one($_sql,0)->count;
			
		}
		
		static function count_ads ($_count='') {
					
			$_sql = 'SELECT count(*) as count FROM `dom_ads` WHERE status = 1'.$_count;						
			$result = mysql::query_findpole($_sql,'count',0);
			
			return $result;
		
		}
		
		static function tab_is_active ($tab_id) {
		
			if (isset($_SESSION['current_tab'])) {
				if ($tab_id == $_SESSION['current_tab'])
					return 'selected';
				else 
					return '';
			} else {
				if ($tab_id == 99)
					return 'selected';
				else return '';
			}	
		}
		
		static function price_format($price) {
				
			$_str = '';					
			$price = strrev(''.$price);
			for($i=1; $i<=strlen($price); $i++) {			
				if (($i-1) % 3 == 0) 
					$_str = $price[$i-1].' '.$_str;
				else
					$_str = $price[$i-1].$_str;
			}
			
			return $_str;
		
		}
		
		static function compare_dates ($date) {
		
			$temp = explode('-',substr($date,0,10));
					
			$t = mktime(0,0,0, intval($temp[1]), intval($temp[2]), intval($temp[0])); 

			$rr = (time() - $t)/86400;
			
			if (floor($rr) > 0) {
				return true;
			} else {
				return false;
			}
	
		}
		
		static function letter_for_updating_ads() {
		
			$now=time();
			$old=date('Y-m-d',time()-518400);
			
			$sql='select * from dom_ads where updated_at between "2014-06-01" and "'.$old.'" and sended_code="0" and user_id is null limit 5';
			$res=mysql::query($sql,0);
			
			foreach ($res as $obj) {
			
				$to      = $obj->email;
				
				$from    = $GLOBALS['mailadmin'];
				
				$obj->who = $_placed_by[$obj->add_placed_by];
				if ($obj->ad_type != 0) $obj->ad_type_name = mysql::query_findpole('SELECT name FROM `dom_adstypes` WHERE id = '.$obj->ad_type,'name',0); else $obj->ad_type_name = '';
				if ($obj->prem_type != 0) $obj->prem_type_name = mysql::query_findpole('SELECT name FROM `dom_premtypes` WHERE id = '.$obj->prem_type,'name',0); else $obj->prem_type_name = '';
				if ($obj->country != 0) $obj->country_name = mysql::query_findpole('SELECT name FROM `countries` WHERE id = '.$obj->country,'name',0); else $obj->country_name = '';
				if ($obj->region != 0) $obj->region_name = mysql::query_findpole('SELECT name FROM `regions` WHERE id = '.$obj->region,'name',0); else $obj->region_name = '';
				if ($obj->city != 0) $obj->city_name = mysql::query_findpole('SELECT name FROM `cities` WHERE id = '.$obj->city,'name',0); else $obj->city_name = '';
				if ($obj->district != 0) $obj->district_name = mysql::query_findpole('SELECT name FROM `districts` WHERE id = '.$obj->district,'name',0); else $obj->district_name = '';
				if ($obj->street != 0) $obj->street_name = mysql::query_findpole('SELECT name FROM `streets` WHERE id = '.$obj->street,'name',0); else $obj->street_name = '';
				$obj->currency_name = $_currency[$obj->currency];
				
				$sended_code=md5($obj->email.time().$obj->id);
				
				$sql='update dom_ads set sended_code="'.$sended_code.'" where id='.$obj->id;
				$code=mysql::just_query($sql);
				
				$link='dom.temp21.ua/update_ad/update/'.$sended_code;
				
				$subject = __('mail_from_site').' '.ADRESS_SITE.', Раздел - Объявления';
				$message = system::show_tpl(array('obj'=>$obj,'link'=>$link), 'frontend/update_ad/update_mail.php');

				sent_email_new($to, $message, "", $subject,$from);

				
			}
		}
		
		static function update_ad($sended_code,$name_file) {
		
			$sql='select * from dom_ads where sended_code="'.$sended_code.'"';
			$res=mysql::query($sql,0);
		
			if ($res) return system::show_tpl(array('res'=>$res),$name_file);
				else {return 'Это объявление уже обновлено';}
		}
		
}


?>