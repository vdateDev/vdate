<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-28 09:44:14 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in Z:\home\ebg\www\application\classes\Model\Profile.php:186
2014-04-28 09:44:14 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Model\Profile.php(186): Kohana_ORM->find_all()
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(18): Model_Profile->get_profile()
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\application\classes\Model\Profile.php:186
2014-04-28 09:48:25 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\ebg\www\application\classes\Model\User.php:51
2014-04-28 09:48:25 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Model\User.php(51): Kohana_ORM->find()
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(18): Model_User->profile()
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\application\classes\Model\User.php:51
2014-04-28 10:33:43 --- CRITICAL: Kohana_Exception [ 0 ]: The username property does not exist in the Model_Profile class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-28 10:33:43 --- DEBUG: #0 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('username')
#1 Z:\home\ebg\www\application\views\frontend\account\profile.php(68): Kohana_ORM->__get('username')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#4 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\ebg\www\application\views\frontend\layout.php(69): Kohana_View->__toString()
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
#17 {main} in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-28 16:18:33 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\upload/user_photo must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\ebg\www\application\classes\Model\Profile.php:242
2014-04-28 16:18:33 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Model\Profile.php(242): Kohana_Upload::save(Array, NULL, 'Z:\home\ebg\www...')
#1 Z:\home\ebg\www\application\classes\Model\Profile.php(214): Model_Profile->upload_user_photo(Array)
#2 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(25): Model_Profile->update_profile(Array, Array)
#3 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_profile()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ebg\www\application\classes\Model\Profile.php:242
2014-04-28 17:11:19 --- DEBUG: Email to test10@test.ru with subject '=?UTF-8?B?0J/QvtC00YLQstC10YDQttC00LXQvdC40LUg0YDQtdCz0LjRgdGC0YDQsNGG0LjQuCDQvdCwINGB0LDQudGC0LUgZWJnMjQuY29tIFJV?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php:196
2014-04-28 17:27:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: language ~ APPPATH\views\widgets\left_block.php [ 12 ] in Z:\home\ebg\www\application\views\widgets\left_block.php:12
2014-04-28 17:27:39 --- DEBUG: #0 Z:\home\ebg\www\application\views\widgets\left_block.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 12, Array)
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
#18 {main} in Z:\home\ebg\www\application\views\widgets\left_block.php:12
2014-04-28 17:28:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: language ~ APPPATH\views\widgets\left_block.php [ 12 ] in Z:\home\ebg\www\application\views\widgets\left_block.php:12
2014-04-28 17:28:15 --- DEBUG: #0 Z:\home\ebg\www\application\views\widgets\left_block.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 12, Array)
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
#18 {main} in Z:\home\ebg\www\application\views\widgets\left_block.php:12
2014-04-28 17:28:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: language ~ APPPATH\views\widgets\left_block.php [ 12 ] in Z:\home\ebg\www\application\views\widgets\left_block.php:12
2014-04-28 17:28:25 --- DEBUG: #0 Z:\home\ebg\www\application\views\widgets\left_block.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 12, Array)
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
#18 {main} in Z:\home\ebg\www\application\views\widgets\left_block.php:12