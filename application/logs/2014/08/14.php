<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-14 07:56:37 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-14 07:56:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 07:57:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 07:57:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 07:57:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 07:57:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 07:57:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 07:57:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 07:57:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 07:57:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 08:45:22 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-14 08:45:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:23:26 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/layout_main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-14 09:23:26 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/layout...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/layout...', NULL)
#2 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('frontend/layout...')
#3 Z:\home\vdate\www\application\classes\Controller\Base.php(24): Kohana_Controller_Template->before()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend.php(22): Controller_Base->before()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend\News.php(9): Controller_Frontend->before()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_News->before()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-14 09:25:00 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/pagination/basic could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-14 09:25:00 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/pagina...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/pagina...', NULL)
#2 Z:\home\vdate\www\modules\pagination\classes\Kohana\Pagination.php(300): Kohana_View::factory('frontend/pagina...')
#3 Z:\home\vdate\www\modules\pagination\classes\Kohana\Pagination.php(400): Kohana_Pagination->render()
#4 Z:\home\vdate\www\application\views\frontend\news\index.php(23): Kohana_Pagination->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\vdate\www\application\views\frontend\layoutMain.php(93): Kohana_View->__toString()
#9 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#10 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#11 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#13 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#14 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#17 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#20 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-14 09:25:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:25:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:25:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:25:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:25:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:25:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:26:50 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-14 09:26:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:27:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 09:27:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:41:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Rewiews' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-14 09:41:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 09:41:24 --- CRITICAL: Kohana_Exception [ 0 ]: The count_all property does not exist in the Model_Reviews class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-14 09:41:24 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('count_all')
#1 Z:\home\vdate\www\application\views\frontend\news\index.php(17): Kohana_ORM->__get('count_all')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layoutMain.php(93): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-14 10:02:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Reviews::count_by_staus() ~ APPPATH\views\frontend\news\index.php [ 17 ] in file:line
2014-08-14 10:02:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 10:02:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: revievs ~ APPPATH\classes\Model\Reviews.php [ 83 ] in Z:\home\vdate\www\application\classes\Model\Reviews.php:83
2014-08-14 10:02:47 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Reviews.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 83, Array)
#1 Z:\home\vdate\www\application\views\frontend\news\index.php(17): Model_Reviews->count_by_status()
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layoutMain.php(93): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\application\classes\Model\Reviews.php:83
2014-08-14 10:04:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Reviews::count_by_status() ~ APPPATH\views\frontend\news\index.php [ 17 ] in file:line
2014-08-14 10:04:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 10:04:33 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'staus' in 'where clause' [ SELECT COUNT(`reviews`.`id`) AS `records_found` FROM `news_reviews` AS `reviews` WHERE `news_id` = '3' AND `staus` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 10:04:33 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`r...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\Reviews.php(85): Kohana_ORM->count_all()
#3 Z:\home\vdate\www\application\views\frontend\news\index.php(17): Model_Reviews->count_by_news('3')
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\vdate\www\application\views\frontend\layoutMain.php(93): Kohana_View->__toString()
#8 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#9 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#10 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#12 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 10:07:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 10:07:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 10:07:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 10:07:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 10:10:26 --- CRITICAL: Kohana_Exception [ 0 ]: The review property does not exist in the Model_News class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-14 10:10:26 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('review')
#1 Z:\home\vdate\www\application\views\frontend\news\show.php(10): Kohana_ORM->__get('review')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layoutMain.php(93): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-14 10:10:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 10:10:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 10:10:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 10:10:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 10:12:12 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-14 10:12:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 10:12:18 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Model_News::get_one(), called in Z:\home\vdate\www\application\classes\Controller\Frontend\News.php on line 39 and defined ~ APPPATH\classes\Model\News.php [ 228 ] in Z:\home\vdate\www\application\classes\Model\News.php:228
2014-08-14 10:12:18 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\News.php(228): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\vdate\w...', 228, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\News.php(39): Model_News::get_one('news-1', 'en')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_News->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\News.php:228
2014-08-14 10:19:47 --- CRITICAL: Kohana_Exception [ 0 ]: The commetn property does not exist in the Model_Reviews class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-14 10:19:47 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('commetn')
#1 Z:\home\vdate\www\application\views\frontend\news\show.php(12): Kohana_ORM->__get('commetn')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layoutMain.php(93): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-14 10:25:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\frontend\news\show.php [ 24 ] in Z:\home\vdate\www\application\views\frontend\news\show.php:24
2014-08-14 10:25:10 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\news\show.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 24, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layoutMain.php(93): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\news\show.php:24
2014-08-14 10:47:40 --- CRITICAL: Kohana_Exception [ 0 ]: The text property does not exist in the Model_Info class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-14 10:47:40 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('text')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend.php(79): Kohana_ORM->__get('text')
#2 Z:\home\vdate\www\application\classes\Controller\Frontend\News.php(56): Controller_Frontend->set_site_message('after_add_comme...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_News->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-14 10:48:38 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: show_news ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-14 10:48:38 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(215): Kohana_Route::get('show_news')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\News.php(58): Kohana_Route::url('show_news', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_News->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-14 10:58:16 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'created_ad' in 'order clause' [ SELECT `reviews`.`id` AS `id`, `reviews`.`news_id` AS `news_id`, `reviews`.`name` AS `name`, `reviews`.`email` AS `email`, `reviews`.`user_id` AS `user_id`, `reviews`.`comment` AS `comment`, `reviews`.`status` AS `status`, `reviews`.`created_at` AS `created_at`, `reviews`.`updated_at` AS `updated_at` FROM `news_reviews` AS `reviews` WHERE `news_id` = '1' AND `status` = 1 ORDER BY `created_ad` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 10:58:16 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `reviews...', 'Model_Reviews', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Reviews.php(100): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\News.php(67): Model_Reviews::get_reviews_by_news('1', 1)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_News->action_show()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 10:58:39 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'created_ad' in 'order clause' [ SELECT `reviews`.`id` AS `id`, `reviews`.`news_id` AS `news_id`, `reviews`.`name` AS `name`, `reviews`.`email` AS `email`, `reviews`.`user_id` AS `user_id`, `reviews`.`comment` AS `comment`, `reviews`.`status` AS `status`, `reviews`.`created_at` AS `created_at`, `reviews`.`updated_at` AS `updated_at` FROM `news_reviews` AS `reviews` WHERE `news_id` = '1' AND `status` = 1 ORDER BY `created_ad` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 10:58:39 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `reviews...', 'Model_Reviews', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Reviews.php(101): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\News.php(67): Model_Reviews::get_reviews_by_news('1', 1)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_News->action_show()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 10:58:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'created_ad' in 'order clause' [ SELECT `reviews`.`id` AS `id`, `reviews`.`news_id` AS `news_id`, `reviews`.`name` AS `name`, `reviews`.`email` AS `email`, `reviews`.`user_id` AS `user_id`, `reviews`.`comment` AS `comment`, `reviews`.`status` AS `status`, `reviews`.`created_at` AS `created_at`, `reviews`.`updated_at` AS `updated_at` FROM `news_reviews` AS `reviews` WHERE `news_id` = '1' AND `status` = 1 ORDER BY `created_ad` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 10:58:42 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `reviews...', 'Model_Reviews', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Reviews.php(101): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\News.php(67): Model_Reviews::get_reviews_by_news('1', 1)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_News->action_show()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 10:58:43 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'created_ad' in 'order clause' [ SELECT `reviews`.`id` AS `id`, `reviews`.`news_id` AS `news_id`, `reviews`.`name` AS `name`, `reviews`.`email` AS `email`, `reviews`.`user_id` AS `user_id`, `reviews`.`comment` AS `comment`, `reviews`.`status` AS `status`, `reviews`.`created_at` AS `created_at`, `reviews`.`updated_at` AS `updated_at` FROM `news_reviews` AS `reviews` WHERE `news_id` = '1' AND `status` = 1 ORDER BY `created_ad` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 10:58:43 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `reviews...', 'Model_Reviews', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Reviews.php(101): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\News.php(67): Model_Reviews::get_reviews_by_news('1', 1)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_News->action_show()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 11:19:47 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'news_languages' in 'field list' [ SELECT `news_languages` AS `news_name`, `news`.`url` AS `url`, `reviews`.`id` AS `id`, `reviews`.`news_id` AS `news_id`, `reviews`.`name` AS `name`, `reviews`.`email` AS `email`, `reviews`.`user_id` AS `user_id`, `reviews`.`comment` AS `comment`, `reviews`.`status` AS `status`, `reviews`.`created_at` AS `created_at`, `reviews`.`updated_at` AS `updated_at` FROM `news_reviews` AS `reviews` LEFT JOIN `news` ON (`news`.`id` = `reviews`.`news_id`) LEFT JOIN `news_languages` ON (`news`.`id` = `news_languages`.`news_id`) WHERE `news_languages`.`language` = 'en' ORDER BY `reviews`.`created_at` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 11:19:47 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `news_la...', 'Model_Reviews', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Reviews.php(125): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Backend\Reviews.php(17): Model_Reviews::get_reviews_backend('10', 0)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Reviews->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Reviews))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 11:20:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Model\Reviews.php [ 113 ] in file:line
2014-08-14 11:20:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 11:20:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: reviews ~ APPPATH\classes\Controller\Backend\Reviews.php [ 20 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Reviews.php:20
2014-08-14 11:20:30 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Reviews.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 20, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Reviews->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Reviews))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Reviews.php:20
2014-08-14 11:20:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: news ~ APPPATH\views\backend\news\index.php [ 12 ] in Z:\home\vdate\www\application\views\backend\news\index.php:12
2014-08-14 11:20:44 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\news\index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 12, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(256): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Reviews))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\news\index.php:12
2014-08-14 11:38:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 11:38:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 11:38:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 11:38:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 11:38:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 11:38:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 11:38:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 11:38:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 11:48:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\backend\reviews\edit.php [ 36 ] in Z:\home\vdate\www\application\views\backend\reviews\edit.php:36
2014-08-14 11:48:45 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\reviews\edit.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 36, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(256): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Reviews))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\reviews\edit.php:36
2014-08-14 13:44:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Men' not found ~ APPPATH\classes\Controller\Backend\Men.php [ 15 ] in file:line
2014-08-14 13:44:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 13:44:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: men ~ APPPATH\classes\Controller\Backend\Men.php [ 24 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:24
2014-08-14 13:44:53 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 24, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:24
2014-08-14 13:45:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: girls ~ APPPATH\views\backend\men\index.php [ 28 ] in Z:\home\vdate\www\application\views\backend\men\index.php:28
2014-08-14 13:45:04 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\men\index.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 28, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(268): Kohana_View->__toString()
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
#15 {main} in Z:\home\vdate\www\application\views\backend\men\index.php:28
2014-08-14 13:55:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 13:55:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 13:55:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 13:55:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 13:55:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 13:55:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 13:57:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 13:57:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 13:57:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 13:57:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 13:57:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 13:57:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 13:59:31 --- CRITICAL: ErrorException [ 2 ]: Missing argument 4 for Model_Men::send_letter_registration(), called in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php on line 42 and defined ~ APPPATH\classes\Model\Men.php [ 255 ] in Z:\home\vdate\www\application\classes\Model\Men.php:255
2014-08-14 13:59:31 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Men.php(255): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\vdate\w...', 255, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(42): Model_Men->send_letter_registration('first name man ...', 'last name man 1', 'emailman1@email...')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Men.php:255
2014-08-14 14:01:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:01:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:01:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:01:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:02:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:02:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:02:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:02:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:02:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:02:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:02:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:02:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:04:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:04:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:04:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:04:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:06:12 --- DEBUG: Email to test@test.ru with subject '=?UTF-8?B?UmVnaXN0cmF0aW9uIG1hbiBhdCBzaXRlIHZkYXRl?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Men.php:273
2014-08-14 14:06:12 --- DEBUG: Email to emailman1@email.com with subject '=?UTF-8?B?UmVnaXN0cmF0aW9uIGF0IHNpdGUgdmRhdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Men.php:290
2014-08-14 14:06:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:06:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:06:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:06:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:06:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:06:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:10:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: agency ~ APPPATH\views\backend\men\edit.php [ 51 ] in Z:\home\vdate\www\application\views\backend\men\edit.php:51
2014-08-14 14:10:41 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\men\edit.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 51, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(268): Kohana_View->__toString()
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
#15 {main} in Z:\home\vdate\www\application\views\backend\men\edit.php:51
2014-08-14 14:12:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:12:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:12:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:13:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:13:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:13:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:13:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:13:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:13:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:53:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:53:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:53:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 14:53:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 14:53:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 15:29:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 15:29:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 15:29:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 15:29:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 15:29:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 15:29:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 15:29:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 15:29:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 15:29:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 15:29:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 15:29:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-14 15:29:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line