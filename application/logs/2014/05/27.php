<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-27 08:58:09 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'RAND LIMIT 5' at line 1 [ SELECT `profiles`.`photo` AS `photo`, `profiles`.`sex` AS `sex`, `profiles`.`url` AS `url`, `profiles`.`growth` AS `growth`, `profiles`.`age` AS `age`, `profiles`.`about_me` AS `about_me`, `profiles`.`name` AS `name`, `countries`.`country_name_ru` AS `country`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`code` AS `code`, `user`.`confirm` AS `confirm`, `user`.`admin` AS `admin` FROM `users` AS `user` JOIN `profiles` ON (`user`.`id` = `profiles`.`user_id`) JOIN `countries` ON (`profiles`.`country_id` = `countries`.`id`) WHERE `user`.`confirm` = 1 ORDER BY `profiles`.`user_id` RAND LIMIT 5 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-27 08:58:09 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `profile...', 'Model_User', Array)
#1 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\ebg\www\application\classes\Model\User.php(175): Kohana_ORM->find_all()
#4 Z:\home\ebg\www\application\classes\Controller\Widgets\LeftBlock.php(14): Model_User::get_frontend_users('ru', NULL, 5)
#5 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_LeftBlock->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_LeftBlock))
#8 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ebg\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\ebg\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\ebg\www\application\classes\Controller\Frontend\Main.php(11): Widget::load('LeftBlock')
#13 Z:\home\ebg\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#16 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-27 08:58:15 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'RAND() LIMIT 5' at line 1 [ SELECT `profiles`.`photo` AS `photo`, `profiles`.`sex` AS `sex`, `profiles`.`url` AS `url`, `profiles`.`growth` AS `growth`, `profiles`.`age` AS `age`, `profiles`.`about_me` AS `about_me`, `profiles`.`name` AS `name`, `countries`.`country_name_ru` AS `country`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`code` AS `code`, `user`.`confirm` AS `confirm`, `user`.`admin` AS `admin` FROM `users` AS `user` JOIN `profiles` ON (`user`.`id` = `profiles`.`user_id`) JOIN `countries` ON (`profiles`.`country_id` = `countries`.`id`) WHERE `user`.`confirm` = 1 ORDER BY `profiles`.`user_id` RAND() LIMIT 5 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-27 08:58:15 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `profile...', 'Model_User', Array)
#1 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\ebg\www\application\classes\Model\User.php(175): Kohana_ORM->find_all()
#4 Z:\home\ebg\www\application\classes\Controller\Widgets\LeftBlock.php(14): Model_User::get_frontend_users('ru', NULL, 5)
#5 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_LeftBlock->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_LeftBlock))
#8 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ebg\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\ebg\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\ebg\www\application\classes\Controller\Frontend\Main.php(11): Widget::load('LeftBlock')
#13 Z:\home\ebg\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#16 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-27 08:58:34 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'RAND() LIMIT 5' at line 1 [ SELECT `profiles`.`photo` AS `photo`, `profiles`.`sex` AS `sex`, `profiles`.`url` AS `url`, `profiles`.`growth` AS `growth`, `profiles`.`age` AS `age`, `profiles`.`about_me` AS `about_me`, `profiles`.`name` AS `name`, `countries`.`country_name_ru` AS `country`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`code` AS `code`, `user`.`confirm` AS `confirm`, `user`.`admin` AS `admin` FROM `users` AS `user` JOIN `profiles` ON (`user`.`id` = `profiles`.`user_id`) JOIN `countries` ON (`profiles`.`country_id` = `countries`.`id`) WHERE `user`.`confirm` = 1 ORDER BY `profiles`.`user_id` RAND() LIMIT 5 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-27 08:58:34 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `profile...', 'Model_User', Array)
#1 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\ebg\www\application\classes\Model\User.php(175): Kohana_ORM->find_all()
#4 Z:\home\ebg\www\application\classes\Controller\Widgets\LeftBlock.php(14): Model_User::get_frontend_users('ru', NULL, 5)
#5 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_LeftBlock->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_LeftBlock))
#8 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ebg\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\ebg\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\ebg\www\application\classes\Controller\Frontend\Main.php(11): Widget::load('LeftBlock')
#13 Z:\home\ebg\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#16 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-27 09:02:51 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'RAND() LIMIT 5' at line 1 [ SELECT `profiles`.`photo` AS `photo`, `profiles`.`sex` AS `sex`, `profiles`.`url` AS `url`, `profiles`.`growth` AS `growth`, `profiles`.`age` AS `age`, `profiles`.`about_me` AS `about_me`, `profiles`.`name` AS `name`, `countries`.`country_name_ru` AS `country`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`code` AS `code`, `user`.`confirm` AS `confirm`, `user`.`admin` AS `admin` FROM `users` AS `user` JOIN `profiles` ON (`user`.`id` = `profiles`.`user_id`) JOIN `countries` ON (`profiles`.`country_id` = `countries`.`id`) WHERE `user`.`confirm` = 1 ORDER BY `profiles`.`user_id` RAND() LIMIT 5 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-27 09:02:51 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `profile...', 'Model_User', Array)
#1 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\ebg\www\application\classes\Model\User.php(175): Kohana_ORM->find_all()
#4 Z:\home\ebg\www\application\classes\Controller\Widgets\LeftBlock.php(14): Model_User::get_frontend_users('ru', NULL, 5)
#5 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_LeftBlock->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_LeftBlock))
#8 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ebg\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\ebg\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\ebg\www\application\classes\Controller\Frontend\Main.php(11): Widget::load('LeftBlock')
#13 Z:\home\ebg\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#16 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-27 09:25:00 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Route::name() must be an instance of Route, none given, called in Z:\home\ebg\www\application\classes\Controller\Frontend\Users.php on line 80 and defined ~ SYSPATH\classes\Kohana\Route.php [ 136 ] in Z:\home\ebg\www\system\classes\Kohana\Route.php:136
2014-05-27 09:25:00 --- DEBUG: #0 Z:\home\ebg\www\system\classes\Kohana\Route.php(136): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\ebg\www...', 136, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Users.php(80): Kohana_Route::name()
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Users->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\system\classes\Kohana\Route.php:136
2014-05-27 10:37:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: education ~ APPPATH\views\frontend\auth\registration.php [ 217 ] in Z:\home\ebg\www\application\views\frontend\auth\registration.php:217
2014-05-27 10:37:52 --- DEBUG: #0 Z:\home\ebg\www\application\views\frontend\auth\registration.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 217, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\ebg\www\application\views\frontend\layout.php(74): Kohana_View->__toString()
#5 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#7 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ebg\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\ebg\www\application\classes\Controller\Frontend.php(101): Controller_Base->after()
#10 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#13 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\ebg\www\application\views\frontend\auth\registration.php:217
2014-05-27 13:40:10 --- DEBUG: Email to test235@test.ru with subject '=?UTF-8?B?0J/QvtC00YLQstC10YDQttC00LXQvdC40LUg0YDQtdCz0LjRgdGC0YDQsNGG0LjQuCDQvdCwINGB0LDQudGC0LUgZWJnMjQuY29tIFJV?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php:255
2014-05-27 13:54:56 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\frontend\account\profile.php [ 217 ] in Z:\home\ebg\www\application\views\frontend\account\profile.php:217
2014-05-27 13:54:56 --- DEBUG: #0 Z:\home\ebg\www\application\views\frontend\account\profile.php(217): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\ebg\www...', 217, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\ebg\www\application\views\frontend\layout.php(74): Kohana_View->__toString()
#5 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#7 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ebg\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\ebg\www\application\classes\Controller\Frontend.php(116): Controller_Base->after()
#10 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#13 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\ebg\www\application\views\frontend\account\profile.php:217
2014-05-27 13:55:32 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant religion - assumed 'religion' ~ APPPATH\views\frontend\account\profile.php [ 218 ] in Z:\home\ebg\www\application\views\frontend\account\profile.php:218
2014-05-27 13:55:32 --- DEBUG: #0 Z:\home\ebg\www\application\views\frontend\account\profile.php(218): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\ebg\www...', 218, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\ebg\www\application\views\frontend\layout.php(74): Kohana_View->__toString()
#5 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#7 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ebg\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\ebg\www\application\classes\Controller\Frontend.php(116): Controller_Base->after()
#10 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#13 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\ebg\www\application\views\frontend\account\profile.php:218
2014-05-27 13:55:50 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant religion - assumed 'religion' ~ APPPATH\views\frontend\account\profile.php [ 218 ] in Z:\home\ebg\www\application\views\frontend\account\profile.php:218
2014-05-27 13:55:50 --- DEBUG: #0 Z:\home\ebg\www\application\views\frontend\account\profile.php(218): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\ebg\www...', 218, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\ebg\www\application\views\frontend\layout.php(74): Kohana_View->__toString()
#5 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#7 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ebg\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\ebg\www\application\classes\Controller\Frontend.php(116): Controller_Base->after()
#10 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#13 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\ebg\www\application\views\frontend\account\profile.php:218
2014-05-27 13:56:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: profiler ~ APPPATH\views\frontend\account\profile.php [ 229 ] in Z:\home\ebg\www\application\views\frontend\account\profile.php:229
2014-05-27 13:56:22 --- DEBUG: #0 Z:\home\ebg\www\application\views\frontend\account\profile.php(229): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 229, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\ebg\www\application\views\frontend\layout.php(74): Kohana_View->__toString()
#5 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#7 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ebg\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\ebg\www\application\classes\Controller\Frontend.php(116): Controller_Base->after()
#10 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#13 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\ebg\www\application\views\frontend\account\profile.php:229
2014-05-27 13:56:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\frontend\account\profile.php [ 232 ] in Z:\home\ebg\www\application\views\frontend\account\profile.php:232
2014-05-27 13:56:37 --- DEBUG: #0 Z:\home\ebg\www\application\views\frontend\account\profile.php(232): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 232, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\ebg\www\application\views\frontend\layout.php(74): Kohana_View->__toString()
#5 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#7 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ebg\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\ebg\www\application\classes\Controller\Frontend.php(116): Controller_Base->after()
#10 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#13 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\ebg\www\application\views\frontend\account\profile.php:232
2014-05-27 14:26:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH\views\frontend\search\index.php [ 172 ] in Z:\home\ebg\www\application\views\frontend\search\index.php:172
2014-05-27 14:26:47 --- DEBUG: #0 Z:\home\ebg\www\application\views\frontend\search\index.php(172): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 172, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\ebg\www\application\views\frontend\layout_main.php(74): Kohana_View->__toString()
#5 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#7 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ebg\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\ebg\www\application\classes\Controller\Frontend.php(116): Controller_Base->after()
#10 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Search))
#13 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\ebg\www\application\views\frontend\search\index.php:172
2014-05-27 15:48:49 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/users/summary could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\ebg\www\system\classes\Kohana\View.php:137
2014-05-27 15:48:49 --- DEBUG: #0 Z:\home\ebg\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/users/...')
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/users/...', NULL)
#2 Z:\home\ebg\www\application\classes\Controller\Frontend\Users.php(24): Kohana_View::factory('frontend/users/...')
#3 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Users->action_summary()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ebg\www\system\classes\Kohana\View.php:137
2014-05-27 15:54:06 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/users/questionary could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\ebg\www\system\classes\Kohana\View.php:137
2014-05-27 15:54:06 --- DEBUG: #0 Z:\home\ebg\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/users/...')
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/users/...', NULL)
#2 Z:\home\ebg\www\application\classes\Controller\Frontend\Users.php(85): Kohana_View::factory('frontend/users/...')
#3 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Users->action_questionary()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ebg\www\system\classes\Kohana\View.php:137