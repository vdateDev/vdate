<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-05 10:27:54 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Frontend\Account.php [ 55 ] in Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php:55
2014-05-05 10:27:54 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(55): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\ebg\www...', 55, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_profile()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php:55
2014-05-05 10:58:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'favorits.who' in 'on clause' [ SELECT `profiles`.`name` AS `name`, `favorites`.`id` AS `id`, `favorites`.`user_id` AS `user_id`, `favorites`.`who` AS `who`, `favorites`.`created_at` AS `created_at` FROM `favorites` AS `favorites` JOIN `profiles` ON (`favorits`.`who` = `profiles`.`user_id`) WHERE `favorites`.`user_id` = '1' ORDER BY `profiles`.`created_at` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-05 10:58:25 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `profile...', 'Model_Favorites', Array)
#1 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\ebg\www\application\classes\Model\User.php(206): Kohana_ORM->find_all()
#4 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(80): Model_User->get_favorites_list()
#5 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_photo()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#8 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-05 13:19:23 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`photo_id`, `user_id`) VALUES ('4', '4'), ('4', '3') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-05 13:19:23 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `` ...', false, Array)
#1 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(92): Kohana_ORM->add('users', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_photo()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-05 13:34:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Model\Photo.php [ 130 ] in file:line
2014-05-05 13:34:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-05 13:35:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\Model\Photo.php [ 130 ] in file:line
2014-05-05 13:35:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-05 13:36:45 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Photo.php [ 135 ] in Z:\home\ebg\www\application\classes\Model\Photo.php:135
2014-05-05 13:36:45 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Model\Photo.php(135): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\ebg\www...', 135, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(101): Model_Photo::get_selected_user('4')
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\application\classes\Model\Photo.php:135
2014-05-05 13:36:55 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Photo.php [ 135 ] in Z:\home\ebg\www\application\classes\Model\Photo.php:135
2014-05-05 13:36:55 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Model\Photo.php(135): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\ebg\www...', 135, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(101): Model_Photo::get_selected_user('4')
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\application\classes\Model\Photo.php:135
2014-05-05 13:37:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\Model\Photo.php [ 130 ] in file:line
2014-05-05 13:37:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-05 13:42:55 --- CRITICAL: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ APPPATH\views\frontend\account\photo.php [ 32 ] in file:line
2014-05-05 13:42:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'Z:\home\ebg\www...', 32, Array)
#1 Z:\home\ebg\www\application\views\frontend\account\photo.php(32): in_array(Array, '4')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#4 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\ebg\www\application\views\frontend\layout.php(70): Kohana_View->__toString()
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#7 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#8 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\ebg\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#10 Z:\home\ebg\www\application\classes\Controller\Frontend.php(71): Controller_Base->after()
#11 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#14 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-05-05 14:13:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo_id ~ APPPATH\classes\Model\Photo.php [ 144 ] in Z:\home\ebg\www\application\classes\Model\Photo.php:144
2014-05-05 14:13:42 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Model\Photo.php(144): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 144, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Users.php(39): Model_Photo::get_photos_for_user('4')
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Users->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\application\classes\Model\Photo.php:144
2014-05-05 14:19:43 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'acces' in 'where clause' [ SELECT `photo`.`id` AS `id`, `photo`.`user_id` AS `user_id`, `photo`.`access` AS `access`, `photo`.`image` AS `image`, `photo`.`created_at` AS `created_at` FROM `photos` AS `photo` WHERE `photo`.`user_id` = '1' AND `acces` != 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-05 14:19:43 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `photo`....', 'Model_Photo', Array)
#1 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\ebg\www\application\classes\Model\User.php(218): Kohana_ORM->find_all()
#4 Z:\home\ebg\www\application\classes\Controller\Frontend\Users.php(38): Model_User->get_photos()
#5 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Users->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#8 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-05 16:59:03 --- CRITICAL: Kohana_Exception [ 0 ]: The login property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:603
2014-05-05 16:59:03 --- DEBUG: #0 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('login')
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php(188): Kohana_ORM->__get('login')
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_forgot_password()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:603
2014-05-05 16:59:29 --- DEBUG: Email to test34@test245.ru with subject '=?UTF-8?B?0JLQvtGB0YHRgtCw0L3QvtCy0LvQtdC90LjQtSDQv9Cw0YDQvtC70Y8g0L3QsCDRgdCw0LnRgtC1IGViZzI0LmNvbSBSVQ==?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php:201
2014-05-05 17:01:41 --- DEBUG: Email to test34@test245.ru with subject '=?UTF-8?B?0JLQvtGB0YHRgtCw0L3QvtCy0LvQtdC90LjQtSDQv9Cw0YDQvtC70Y8g0L3QsCDRgdCw0LnRgtC1IGViZzI0LmNvbSBSVQ==?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php:201