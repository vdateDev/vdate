<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-21 08:02:19 --- CRITICAL: Kohana_Exception [ 0 ]: The page_title property does not exist in the Model_Page class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 08:02:19 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('page_title')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(23): Kohana_ORM->__get('page_title')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 08:29:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 08:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 08:29:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 08:29:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 08:35:22 --- CRITICAL: Kohana_Exception [ 0 ]: Required route parameter not passed: action ~ SYSPATH\classes\Kohana\Route.php [ 572 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:581
2014-08-21 08:35:22 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(581): {closure}('<language>/<act...', true)
#1 Z:\home\vdate\www\system\classes\Kohana\Route.php(221): Kohana_Route->uri(NULL)
#2 Z:\home\vdate\www\application\views\widgets\Chat\FreeVideoChat.php(11): Kohana_Route::url('auth')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Chat_FreeVideoChat))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#12 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#13 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(14): Widget::load('Chat_FreeVideoC...')
#14 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#17 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#20 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:581
2014-08-21 08:51:09 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 505 ] in file:line
2014-08-21 08:51:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 08:51:41 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 505 ] in file:line
2014-08-21 08:51:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 08:51:42 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 505 ] in file:line
2014-08-21 08:51:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 08:52:37 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 505 ] in file:line
2014-08-21 08:52:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 09:59:42 --- CRITICAL: Kohana_Exception [ 0 ]: The status property does not exist in the Model_Girls class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 09:59:42 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('status')
#1 Z:\home\vdate\www\application\views\backend\girls\index.php(59): Kohana_ORM->__get('status')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\backend\layout.php(292): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Girls))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 10:12:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\views\backend\girls\edit.php [ 19 ] in Z:\home\vdate\www\application\views\backend\girls\edit.php:19
2014-08-21 10:12:07 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\girls\edit.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 19, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(292): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Girls))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\girls\edit.php:19
2014-08-21 10:16:01 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'users.status' in 'where clause' [ SELECT `girls`.`firstname` AS `firstname`, `girls`.`city` AS `city`, `girls`.`birthday` AS `birthday`, `user_photos`.`photo`, `photo`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` JOIN `girls` ON (`girls`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id`) WHERE `users`.`status` = '1' AND `user_photos`.`default_image` = '1' ORDER BY RAND() LIMIT 30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-21 10:16:01 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `girls`....', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Girls.php(485): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Widgets\Chat\OnlineInMainPage.php(13): Model_Girls::get_online(1408605061, 30)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_Chat_OnlineInMainPage->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Chat_OnlineInMainPage))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(13): Widget::load('Chat_OnlineInMa...')
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-21 10:16:02 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'users.status' in 'where clause' [ SELECT `girls`.`firstname` AS `firstname`, `girls`.`country` AS `country`, `girls`.`city` AS `city`, `girls`.`birthday` AS `birthday`, `user_photos`.`photo`, `photo`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` JOIN `girls` ON (`girls`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id`) WHERE `girls`.`created_at` >= 1406013362 AND `users`.`status` = '1' AND `user_photos`.`default_image` = '1' ORDER BY RAND() LIMIT 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-21 10:16:02 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `girls`....', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Girls.php(459): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Widgets\Girls\NewGirlsOnMainPage.php(14): Model_Girls::get_new_girls(1406013362, 1408605062, '10')
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_Girls_NewGirlsOnMainPage->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Girls_NewGirlsOnMainPage))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(15): Widget::load('Girls_NewGirlsO...')
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-21 10:17:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\views\backend\agency\edit.php [ 18 ] in Z:\home\vdate\www\application\views\backend\agency\edit.php:18
2014-08-21 10:17:12 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\agency\edit.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 18, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(292): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\agency\edit.php:18
2014-08-21 10:18:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: status ~ APPPATH\views\backend\men\edit.php [ 19 ] in Z:\home\vdate\www\application\views\backend\men\edit.php:19
2014-08-21 10:18:31 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\men\edit.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 19, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(292): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\men\edit.php:19
2014-08-21 10:29:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:29:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:30:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:30:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:36:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:36:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:37:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:37:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:39:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:39:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:41:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:41:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:42:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:42:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:42:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:42:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:48:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:48:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:48:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:48:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:49:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:49:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:51:01 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 590 ] in file:line
2014-08-21 10:51:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:52:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:52:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:54:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Widgets\MyAccount.php [ 13 ] in file:line
2014-08-21 10:54:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:55:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Widgets\MyAccount.php [ 11 ] in file:line
2014-08-21 10:55:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 10:59:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 10:59:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 11:11:01 --- CRITICAL: Kohana_Exception [ 0 ]: The nmae property does not exist in the Model_Role class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:702
2014-08-21 11:11:01 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('nmae', 'girls')
#1 Z:\home\vdate\www\application\classes\Controller\Widgets\MyAccount.php(9): Kohana_ORM->__set('nmae', 'girls')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_MyAccount->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_MyAccount))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#8 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(54): Widget::load('MyAccount')
#10 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(10): Controller_Frontend->before()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:702
2014-08-21 11:11:32 --- CRITICAL: Kohana_Exception [ 0 ]: The nmae property does not exist in the Model_Role class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:702
2014-08-21 11:11:32 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('nmae', 'girls')
#1 Z:\home\vdate\www\application\classes\Controller\Widgets\MyAccount.php(9): Kohana_ORM->__set('nmae', 'girls')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_MyAccount->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_MyAccount))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#8 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(54): Widget::load('MyAccount')
#10 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(10): Controller_Frontend->before()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:702
2014-08-21 11:11:33 --- CRITICAL: Kohana_Exception [ 0 ]: The nmae property does not exist in the Model_Role class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:702
2014-08-21 11:11:33 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('nmae', 'girls')
#1 Z:\home\vdate\www\application\classes\Controller\Widgets\MyAccount.php(9): Kohana_ORM->__set('nmae', 'girls')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_MyAccount->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_MyAccount))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#8 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(54): Widget::load('MyAccount')
#10 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(10): Controller_Frontend->before()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:702
2014-08-21 11:12:26 --- CRITICAL: Kohana_Exception [ 0 ]: The nmae property does not exist in the Model_Role class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:702
2014-08-21 11:12:26 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('nmae', 'girls')
#1 Z:\home\vdate\www\application\classes\Controller\Widgets\MyAccount.php(9): Kohana_ORM->__set('nmae', 'girls')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_MyAccount->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_MyAccount))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#8 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(54): Widget::load('MyAccount')
#10 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(10): Controller_Frontend->before()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:702
2014-08-21 11:12:38 --- CRITICAL: Kohana_Exception [ 0 ]: The nmae property does not exist in the Model_Role class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:702
2014-08-21 11:12:38 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('nmae', 'girls')
#1 Z:\home\vdate\www\application\classes\Controller\Widgets\MyAccount.php(9): Kohana_ORM->__set('nmae', 'girls')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_MyAccount->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_MyAccount))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#8 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(54): Widget::load('MyAccount')
#10 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(10): Controller_Frontend->before()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:702
2014-08-21 11:12:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\Controller\Widgets\MyAccount.php [ 11 ] in Z:\home\vdate\www\application\classes\Controller\Widgets\MyAccount.php:11
2014-08-21 11:12:58 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Widgets\MyAccount.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 11, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_MyAccount->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_MyAccount))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#7 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#8 Z:\home\vdate\www\application\classes\Controller\Frontend.php(54): Widget::load('MyAccount')
#9 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(10): Controller_Frontend->before()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\classes\Controller\Widgets\MyAccount.php:11
2014-08-21 11:13:12 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\MyAccount.php [ 7 ] in Z:\home\vdate\www\application\views\widgets\MyAccount.php:7
2014-08-21 11:13:12 --- DEBUG: #0 Z:\home\vdate\www\application\views\widgets\MyAccount.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 7, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_MyAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#10 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#11 Z:\home\vdate\www\application\classes\Controller\Frontend.php(54): Widget::load('MyAccount')
#12 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(10): Controller_Frontend->before()
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\application\views\widgets\MyAccount.php:7
2014-08-21 11:13:33 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\MyAccount.php [ 9 ] in Z:\home\vdate\www\application\views\widgets\MyAccount.php:9
2014-08-21 11:13:33 --- DEBUG: #0 Z:\home\vdate\www\application\views\widgets\MyAccount.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 9, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_MyAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#10 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#11 Z:\home\vdate\www\application\classes\Controller\Frontend.php(54): Widget::load('MyAccount')
#12 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(10): Controller_Frontend->before()
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\application\views\widgets\MyAccount.php:9
2014-08-21 11:13:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 11:13:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 11:17:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 11:17:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 11:17:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 11:17:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 11:23:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 11:23:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 12:00:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function strtoint() ~ APPPATH\views\widgets\MyAccount.php [ 22 ] in file:line
2014-08-21 12:00:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 13:36:17 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 590 ] in file:line
2014-08-21 13:36:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 13:37:47 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 590 ] in file:line
2014-08-21 13:37:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 13:38:42 --- CRITICAL: View_Exception [ 0 ]: The requested view widgets/ChatNow could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-21 13:38:42 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('widgets/ChatNow')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('widgets/ChatNow', NULL)
#2 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('widgets/ChatNow')
#3 Z:\home\vdate\www\application\classes\Controller\Widgets.php(16): Kohana_Controller_Template->before()
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Widgets->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Chat_ChatNow))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#10 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#11 Z:\home\vdate\www\application\classes\Controller\Frontend\Gifts.php(13): Widget::load('Chat_ChatNow')
#12 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Gifts->before()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Gifts))
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-21 13:38:56 --- CRITICAL: ErrorException [ 4096 ]: Object of class Controller_Widgets_Chat_ChatNow could not be converted to string ~ APPPATH\classes\Controller\Widgets\Chat\ChatNow.php [ 11 ] in Z:\home\vdate\www\application\classes\Controller\Widgets\Chat\ChatNow.php:11
2014-08-21 13:38:56 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Widgets\Chat\ChatNow.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'Z:\home\vdate\w...', 11, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_Chat_ChatNow->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Chat_ChatNow))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#7 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#8 Z:\home\vdate\www\application\classes\Controller\Frontend\Gifts.php(13): Widget::load('Chat_ChatNow')
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Gifts->before()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Gifts))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\classes\Controller\Widgets\Chat\ChatNow.php:11
2014-08-21 14:06:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 14:06:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 14:07:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 14:07:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 14:08:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 14:08:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 14:09:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 14:09:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 14:10:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 14:10:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 14:11:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 14:11:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 14:11:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 14:11:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 14:11:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 14:11:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 14:11:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 14:11:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 14:23:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 14:23:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 14:25:01 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:25:01 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 Z:\home\vdate\www\application\views\frontend\auth\registration.php(20): Kohana_ORM->__get('country')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:27:08 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:27:08 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 Z:\home\vdate\www\application\views\frontend\auth\registration.php(20): Kohana_ORM->__get('country')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:27:10 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:27:10 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 Z:\home\vdate\www\application\views\frontend\auth\registration.php(20): Kohana_ORM->__get('country')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:27:39 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:27:39 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 Z:\home\vdate\www\application\views\frontend\auth\registration.php(20): Kohana_ORM->__get('country')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:27:40 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:27:40 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 Z:\home\vdate\www\application\views\frontend\auth\registration.php(20): Kohana_ORM->__get('country')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:27:50 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:27:50 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 Z:\home\vdate\www\application\views\frontend\auth\registration.php(20): Kohana_ORM->__get('country')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:28:22 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:28:22 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 Z:\home\vdate\www\application\views\frontend\auth\registration.php(20): Kohana_ORM->__get('country')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:28:24 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:28:24 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 Z:\home\vdate\www\application\views\frontend\auth\registration.php(20): Kohana_ORM->__get('country')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 14:29:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 14:29:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 14:29:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 14:29:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 14:30:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH\views\frontend\auth\registration.php [ 10 ] in Z:\home\vdate\www\application\views\frontend\auth\registration.php:10
2014-08-21 14:30:40 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\auth\registration.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 10, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\auth\registration.php:10
2014-08-21 14:35:24 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 590 ] in file:line
2014-08-21 14:35:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 15:39:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 15:39:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 15:39:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 15:39:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 16:19:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\Frontend\Account.php [ 23 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Account.php:23
2014-08-21 16:19:28 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Account.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 23, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_settings()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Account.php:23
2014-08-21 16:20:27 --- CRITICAL: Kohana_Exception [ 0 ]: The text property does not exist in the Model_Info class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 16:20:27 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('text')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend.php(99): Kohana_ORM->__get('text')
#2 Z:\home\vdate\www\application\classes\Controller\Frontend\Account.php(37): Controller_Frontend->set_site_message('success_passwor...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 16:21:28 --- CRITICAL: Kohana_Exception [ 0 ]: The text property does not exist in the Model_Info class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 16:21:28 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('text')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend.php(99): Kohana_ORM->__get('text')
#2 Z:\home\vdate\www\application\classes\Controller\Frontend\Account.php(37): Controller_Frontend->set_site_message('success_passwor...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-21 16:28:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\Frontend\Account.php [ 56 ] in file:line
2014-08-21 16:28:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 16:49:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\views\widgets\Menu\LeftProfileMenu.php [ 5 ] in Z:\home\vdate\www\application\views\widgets\Menu\LeftProfileMenu.php:5
2014-08-21 16:49:15 --- DEBUG: #0 Z:\home\vdate\www\application\views\widgets\Menu\LeftProfileMenu.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 5, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_LeftProfileMenu))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#10 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#11 Z:\home\vdate\www\application\classes\Controller\Frontend\Account.php(14): Widget::load('Menu_LeftProfil...')
#12 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Account->before()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\vdate\www\application\views\widgets\Menu\LeftProfileMenu.php:5
2014-08-21 16:50:47 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-21 16:50:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 16:50:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 16:50:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-21 16:51:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-21 16:51:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line