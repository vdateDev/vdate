<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-30 10:55:28 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_User::get_favorites(), called in Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php on line 46 and defined ~ APPPATH\classes\Model\User.php [ 148 ] in Z:\home\ebg\www\application\classes\Model\User.php:148
2014-04-30 10:55:28 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Model\User.php(148): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\ebg\www...', 148, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(46): Model_User->get_favorites()
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\application\classes\Model\User.php:148
2014-04-30 11:38:24 --- DEBUG: Email to test355@test.ru with subject '=?UTF-8?B?0J/QvtC00YLQstC10YDQttC00LXQvdC40LUg0YDQtdCz0LjRgdGC0YDQsNGG0LjQuCDQvdCwINGB0LDQudGC0LUgZWJnMjQuY29tIFJV?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php:200
2014-04-30 12:21:06 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Frontend\Users.php [ 84 ] in file:line
2014-04-30 12:21:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'Z:\home\ebg\www...', 84, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Users.php(84): json_decode(Array)
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Users->action_remove_favorites()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-04-30 13:29:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: favorites ~ APPPATH\views\frontend\users\index_short.php [ 17 ] in Z:\home\ebg\www\application\views\frontend\users\index_short.php:17
2014-04-30 13:29:55 --- DEBUG: #0 Z:\home\ebg\www\application\views\frontend\users\index_short.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 17, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\ebg\www\application\views\frontend\layout.php(69): Kohana_View->__toString()
#5 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#7 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ebg\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\ebg\www\application\classes\Controller\Frontend.php(71): Controller_Base->after()
#10 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#13 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\ebg\www\application\views\frontend\users\index_short.php:17
2014-04-30 13:46:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Model\Favorites.php [ 57 ] in file:line
2014-04-30 13:46:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-30 13:47:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_assoc() ~ APPPATH\classes\Model\Favorites.php [ 58 ] in file:line
2014-04-30 13:47:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-30 14:29:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: key_country ~ APPPATH\classes\Model\User.php [ 91 ] in Z:\home\ebg\www\application\classes\Model\User.php:91
2014-04-30 14:29:19 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Model\User.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 91, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Widgets\LeftBlock.php(15): Model_User::get_frontend_users('1', 5)
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_LeftBlock->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_LeftBlock))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\application\classes\Widget.php(72): Kohana_Request->execute()
#8 Z:\home\ebg\www\application\classes\Widget.php(33): Widget->render()
#9 Z:\home\ebg\www\application\classes\Controller\Frontend\Main.php(11): Widget::load('LeftBlock')
#10 Z:\home\ebg\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#13 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\ebg\www\application\classes\Model\User.php:91
2014-04-30 14:31:59 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-30 14:31:59 --- DEBUG: #0 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 Z:\home\ebg\www\application\views\widgets\left_block.php(20): Kohana_ORM->__get('country')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#4 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
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
#19 {main} in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-30 14:33:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fv ~ APPPATH\views\widgets\left_block.php [ 23 ] in Z:\home\ebg\www\application\views\widgets\left_block.php:23
2014-04-30 14:33:11 --- DEBUG: #0 Z:\home\ebg\www\application\views\widgets\left_block.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 23, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_LeftBlock))
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ebg\www\application\classes\Widget.php(72): Kohana_Request->execute()
#10 Z:\home\ebg\www\application\classes\Widget.php(33): Widget->render()
#11 Z:\home\ebg\www\application\classes\Controller\Frontend\Main.php(11): Widget::load('LeftBlock')
#12 Z:\home\ebg\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#15 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\ebg\www\application\views\widgets\left_block.php:23
2014-04-30 16:12:21 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Photo::add_photo(), called in Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php on line 34 and defined ~ APPPATH\classes\Model\Photo.php [ 14 ] in Z:\home\ebg\www\application\classes\Model\Photo.php:14
2014-04-30 16:12:21 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Model\Photo.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\ebg\www...', 14, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(34): Model_Photo->add_photo(Array)
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\application\classes\Model\Photo.php:14
2014-04-30 16:12:44 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`ebg24`.`photos`, CONSTRAINT `photos_user` FOREIGN KEY (`id`) REFERENCES `photos_users` (`photo_id`) ON DELETE CASCADE) [ INSERT INTO `photos` (`user_id`, `image`, `created_at`) VALUES ('1', 'quzzuld1z8tpqehcegokelhvki1yncoh.jpg', 1398863564) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-04-30 16:12:44 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\ebg\www\application\classes\Model\Photo.php(25): Kohana_ORM->save()
#4 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(34): Model_Photo->add_photo(Array, '1')
#5 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_profile()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#8 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251