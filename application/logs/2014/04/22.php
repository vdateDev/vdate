<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-22 09:23:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\classes\Model\BannerLanguage.php [ 47 ] in Z:\home\ebg\www\application\classes\Model\BannerLanguage.php:47
2014-04-22 09:23:24 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Model\BannerLanguage.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 47, Array)
#1 Z:\home\ebg\www\application\classes\Model\Banner.php(73): Model_BannerLanguage->edit_language(Array)
#2 Z:\home\ebg\www\application\classes\Controller\Backend\Banners.php(53): Model_Banner->edit_banner(Array)
#3 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Banners->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Banners))
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ebg\www\application\classes\Model\BannerLanguage.php:47
2014-04-22 09:23:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: news ~ APPPATH\classes\Controller\Backend\Banners.php [ 56 ] in Z:\home\ebg\www\application\classes\Controller\Backend\Banners.php:56
2014-04-22 09:23:56 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Controller\Backend\Banners.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 56, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Banners->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Banners))
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\ebg\www\application\classes\Controller\Backend\Banners.php:56
2014-04-22 09:55:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Model\BannerLanguage.php [ 78 ] in file:line
2014-04-22 09:55:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-22 09:55:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Model\BannerLanguage.php [ 78 ] in file:line
2014-04-22 09:55:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-22 10:39:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\classes\Model\Banner.php [ 73 ] in Z:\home\ebg\www\application\classes\Model\Banner.php:73
2014-04-22 10:39:51 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Model\Banner.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 73, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Backend\Banners.php(53): Model_Banner->edit_banner(Array, Array)
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Banners->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Banners))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\application\classes\Model\Banner.php:73
2014-04-22 11:09:29 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\Debug.php [ 251 ] in file:line
2014-04-22 11:09:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\ebg\www...', 251, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\Debug.php(251): strpos(Array, 'Z:\home\ebg\www...')
#2 Z:\home\ebg\www\modules\image\classes\Kohana\Image.php(108): Kohana_Debug::path(Array)
#3 Z:\home\ebg\www\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct(Array)
#4 Z:\home\ebg\www\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct(Array)
#5 Z:\home\ebg\www\application\classes\Model\BannerLanguage.php(91): Kohana_Image::factory(Array)
#6 Z:\home\ebg\www\application\classes\Model\BannerLanguage.php(53): Model_BannerLanguage->upload_image(Array, '1', 'ru')
#7 Z:\home\ebg\www\application\classes\Model\Banner.php(73): Model_BannerLanguage->edit_language(Array, Array)
#8 Z:\home\ebg\www\application\classes\Controller\Backend\Banners.php(53): Model_Banner->edit_banner(Array, Array)
#9 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Banners->action_edit()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Banners))
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-04-22 11:49:33 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\Debug.php [ 251 ] in file:line
2014-04-22 11:49:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\ebg\www...', 251, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\Debug.php(251): strpos(Array, 'Z:\home\ebg\www...')
#2 Z:\home\ebg\www\modules\image\classes\Kohana\Image.php(108): Kohana_Debug::path(Array)
#3 Z:\home\ebg\www\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct(Array)
#4 Z:\home\ebg\www\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct(Array)
#5 Z:\home\ebg\www\application\classes\Model\BannerLanguage.php(91): Kohana_Image::factory(Array)
#6 Z:\home\ebg\www\application\classes\Model\BannerLanguage.php(53): Model_BannerLanguage->upload_image(Array, '1')
#7 Z:\home\ebg\www\application\classes\Model\Banner.php(73): Model_BannerLanguage->edit_language(Array, Array)
#8 Z:\home\ebg\www\application\classes\Controller\Backend\Banners.php(53): Model_Banner->edit_banner(Array, Array)
#9 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Banners->action_edit()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Banners))
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-04-22 11:51:27 --- CRITICAL: ErrorException [ 2 ]: unlink() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\BannerLanguage.php [ 125 ] in file:line
2014-04-22 11:51:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink() expect...', 'Z:\home\ebg\www...', 125, Array)
#1 Z:\home\ebg\www\application\classes\Model\BannerLanguage.php(125): unlink(Array)
#2 Z:\home\ebg\www\application\classes\Model\BannerLanguage.php(53): Model_BannerLanguage->upload_image(Array, '1')
#3 Z:\home\ebg\www\application\classes\Model\Banner.php(73): Model_BannerLanguage->edit_language(Array, Array)
#4 Z:\home\ebg\www\application\classes\Controller\Backend\Banners.php(53): Model_Banner->edit_banner(Array, Array)
#5 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Banners->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Banners))
#8 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-04-22 11:59:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: file_en ~ APPPATH\classes\Model\Banner.php [ 73 ] in Z:\home\ebg\www\application\classes\Model\Banner.php:73
2014-04-22 11:59:38 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Model\Banner.php(73): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\ebg\www...', 73, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Backend\Banners.php(53): Model_Banner->edit_banner(Array, Array)
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Banners->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Banners))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\application\classes\Model\Banner.php:73
2014-04-22 12:15:06 --- CRITICAL: Kohana_Exception [ 0 ]: The langesges property does not exist in the Model_Banner class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-22 12:15:06 --- DEBUG: #0 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('langesges')
#1 Z:\home\ebg\www\application\classes\Model\Banner.php(59): Kohana_ORM->__get('langesges')
#2 Z:\home\ebg\www\application\classes\Controller\Backend\Banners.php(57): Model_Banner->delete_file('ru')
#3 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Banners->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Banners))
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-22 12:25:49 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: bankend ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\ebg\www\system\classes\Kohana\Route.php:215
2014-04-22 12:25:49 --- DEBUG: #0 Z:\home\ebg\www\system\classes\Kohana\Route.php(215): Kohana_Route::get('bankend')
#1 Z:\home\ebg\www\application\classes\Controller\Backend\Banners.php(93): Kohana_Route::url('bankend', Array)
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Banners->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Banners))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\system\classes\Kohana\Route.php:215
2014-04-22 13:28:00 --- CRITICAL: Kohana_Exception [ 0 ]: The file property does not exist in the Model_Banner class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-22 13:28:00 --- DEBUG: #0 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('file')
#1 Z:\home\ebg\www\application\views\widgets\bottom_banners.php(6): Kohana_ORM->__get('file')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#4 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_BottomBanners))
#8 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ebg\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\ebg\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\ebg\www\application\classes\Controller\Frontend.php(28): Widget::load('BottomBanners')
#13 Z:\home\ebg\www\application\classes\Controller\Frontend\Main.php(8): Controller_Frontend->before()
#14 Z:\home\ebg\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#17 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#20 {main} in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-22 13:29:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_BannerLanguage::upload_file() ~ APPPATH\classes\Model\BannerLanguage.php [ 27 ] in file:line
2014-04-22 13:29:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-22 13:29:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: en ~ APPPATH\views\backend\banners\edit.php [ 59 ] in Z:\home\ebg\www\application\views\backend\banners\edit.php:59
2014-04-22 13:29:49 --- DEBUG: #0 Z:\home\ebg\www\application\views\backend\banners\edit.php(59): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\ebg\www...', 59, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\ebg\www\application\views\backend\layout.php(123): Kohana_View->__toString()
#5 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#7 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ebg\www\application\classes\Controller\Base.php(42): Kohana_Controller_Template->after()
#9 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Banners))
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\ebg\www\application\views\backend\banners\edit.php:59
2014-04-22 13:32:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_BannerLanguage::upload_file() ~ APPPATH\classes\Model\BannerLanguage.php [ 27 ] in file:line
2014-04-22 13:32:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-22 13:33:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: en ~ APPPATH\views\backend\banners\edit.php [ 59 ] in Z:\home\ebg\www\application\views\backend\banners\edit.php:59
2014-04-22 13:33:36 --- DEBUG: #0 Z:\home\ebg\www\application\views\backend\banners\edit.php(59): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\ebg\www...', 59, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\ebg\www\application\views\backend\layout.php(123): Kohana_View->__toString()
#5 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#7 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ebg\www\application\classes\Controller\Base.php(42): Kohana_Controller_Template->after()
#9 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Banners))
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\ebg\www\application\views\backend\banners\edit.php:59
2014-04-22 14:03:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: banner ~ APPPATH\views\widgets\right_block.php [ 6 ] in Z:\home\ebg\www\application\views\widgets\right_block.php:6
2014-04-22 14:03:15 --- DEBUG: #0 Z:\home\ebg\www\application\views\widgets\right_block.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 6, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_RightBlock))
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ebg\www\application\classes\Widget.php(72): Kohana_Request->execute()
#10 Z:\home\ebg\www\application\classes\Widget.php(33): Widget->render()
#11 Z:\home\ebg\www\application\classes\Controller\Frontend.php(30): Widget::load('RightBlock')
#12 Z:\home\ebg\www\application\classes\Controller\Frontend\Main.php(8): Controller_Frontend->before()
#13 Z:\home\ebg\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#16 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\ebg\www\application\views\widgets\right_block.php:6