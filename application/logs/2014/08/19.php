<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-19 07:57:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\backend\men\index.php [ 68 ] in Z:\home\vdate\www\application\views\backend\men\index.php:68
2014-08-19 07:57:22 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\men\index.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 68, Array)
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
#15 {main} in Z:\home\vdate\www\application\views\backend\men\index.php:68
2014-08-19 07:59:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user.username' in 'field list' [ SELECT `user`.`username` AS `username`, `men`.`id` AS `id`, `men`.`user_id` AS `user_id`, `men`.`firstname` AS `firstname`, `men`.`lastname` AS `lastname`, `men`.`email` AS `email`, `men`.`bank_card` AS `bank_card`, `men`.`birthday` AS `birthday`, `men`.`country` AS `country`, `men`.`region` AS `region`, `men`.`city` AS `city`, `men`.`height` AS `height`, `men`.`weight` AS `weight`, `men`.`eyes` AS `eyes`, `men`.`hair` AS `hair`, `men`.`place_work` AS `place_work`, `men`.`education` AS `education`, `men`.`religion` AS `religion`, `men`.`marital_status` AS `marital_status`, `men`.`smoking` AS `smoking`, `men`.`drinking` AS `drinking`, `men`.`children` AS `children`, `men`.`phone` AS `phone`, `men`.`hobbies` AS `hobbies`, `men`.`about` AS `about`, `men`.`relationships` AS `relationships`, `men`.`status` AS `status`, `men`.`created_at` AS `created_at`, `men`.`updated_at` AS `updated_at`, `men`.`balance` AS `balance` FROM `men` AS `men` JOIN `users` ON (`users`.`id` = `men`.`user_id`) ORDER BY `men`.`firstname` ASC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 07:59:50 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_Men', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Men.php(158): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(20): Model_Men::get_men_backend(2, '10', 0)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 08:27:13 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-19 08:27:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 08:28:03 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-19 08:28:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 08:28:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 08:28:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 08:28:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_AdminLettrs' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-19 08:28:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 08:29:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Array' in 'field list' [ SELECT `Array` AS `Array`, `adminletters`.`id` AS `id`, `adminletters`.`user_id` AS `user_id`, `adminletters`.`subject` AS `subject`, `adminletters`.`text` AS `text`, `adminletters`.`created_at` AS `created_at`, `adminletters`.`updated_at` AS `updated_at`, `adminletters`.`status` AS `status`, `adminletters`.`type` AS `type` FROM `user_admin_letters` AS `adminletters` JOIN `men` ON (`men`.`user_id` = `adminleters`.`user_id`) WHERE `type` = 2 ORDER BY `created_at` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 08:29:12 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Array` ...', 'Model_AdminLett...', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\AdminLetters.php(57): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Backend\AdminLetters.php(7): Model_AdminLetters::get_letters_type(2)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_AdminLetters->action_inbox()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 08:29:33 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Array' in 'field list' [ SELECT `Array` AS `Array`, `adminletters`.`id` AS `id`, `adminletters`.`user_id` AS `user_id`, `adminletters`.`subject` AS `subject`, `adminletters`.`text` AS `text`, `adminletters`.`created_at` AS `created_at`, `adminletters`.`updated_at` AS `updated_at`, `adminletters`.`status` AS `status`, `adminletters`.`type` AS `type` FROM `user_admin_letters` AS `adminletters` JOIN `men` ON (`men`.`user_id` = `adminleters`.`user_id`) WHERE `type` = 2 ORDER BY `created_at` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 08:29:33 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `Array` ...', 'Model_AdminLett...', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\AdminLetters.php(57): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Backend\AdminLetters.php(7): Model_AdminLetters::get_letters_type(2)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_AdminLetters->action_inbox()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 08:29:52 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'adminleters.user_id' in 'on clause' [ SELECT `men`.`firstname` AS `firstname`, `men`.`lastname` AS `lastname`, `adminletters`.`id` AS `id`, `adminletters`.`user_id` AS `user_id`, `adminletters`.`subject` AS `subject`, `adminletters`.`text` AS `text`, `adminletters`.`created_at` AS `created_at`, `adminletters`.`updated_at` AS `updated_at`, `adminletters`.`status` AS `status`, `adminletters`.`type` AS `type` FROM `user_admin_letters` AS `adminletters` JOIN `men` ON (`men`.`user_id` = `adminleters`.`user_id`) WHERE `type` = 2 ORDER BY `created_at` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 08:29:52 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_AdminLett...', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\AdminLetters.php(57): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Backend\AdminLetters.php(7): Model_AdminLetters::get_letters_type(2)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_AdminLetters->action_inbox()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 08:30:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH\views\backend\adminletters\inbox.php [ 10 ] in Z:\home\vdate\www\application\views\backend\adminletters\inbox.php:10
2014-08-19 08:30:06 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\adminletters\inbox.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 10, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(280): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\adminletters\inbox.php:10
2014-08-19 08:31:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: men ~ APPPATH\views\backend\adminletters\inbox.php [ 29 ] in Z:\home\vdate\www\application\views\backend\adminletters\inbox.php:29
2014-08-19 08:31:14 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\adminletters\inbox.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 29, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(280): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\adminletters\inbox.php:29
2014-08-19 08:31:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\views\backend\adminletters\inbox.php [ 80 ] in Z:\home\vdate\www\application\views\backend\adminletters\inbox.php:80
2014-08-19 08:31:31 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\adminletters\inbox.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 80, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(280): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\adminletters\inbox.php:80
2014-08-19 08:38:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\views\backend\adminletters\inbox.php [ 80 ] in Z:\home\vdate\www\application\views\backend\adminletters\inbox.php:80
2014-08-19 08:38:51 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\adminletters\inbox.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 80, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(280): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\adminletters\inbox.php:80
2014-08-19 08:40:10 --- CRITICAL: Kohana_Exception [ 0 ]: The sublect property does not exist in the Model_AdminLetters class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-19 08:40:10 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('sublect')
#1 Z:\home\vdate\www\application\views\backend\adminletters\outbox.php(63): Kohana_ORM->__get('sublect')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\backend\layout.php(280): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-19 08:41:57 --- CRITICAL: Database_Exception [ 1052 ]: Column 'status' in where clause is ambiguous [ SELECT `men`.`firstname` AS `firstname`, `men`.`lastname` AS `lastname`, `adminletters`.`id` AS `id`, `adminletters`.`user_id` AS `user_id`, `adminletters`.`subject` AS `subject`, `adminletters`.`text` AS `text`, `adminletters`.`created_at` AS `created_at`, `adminletters`.`updated_at` AS `updated_at`, `adminletters`.`status` AS `status`, `adminletters`.`type` AS `type` FROM `user_admin_letters` AS `adminletters` JOIN `men` ON (`men`.`user_id` = `adminletters`.`user_id`) WHERE `type` = 1 AND `status` = '0' ORDER BY `created_at` DESC LIMIT 10 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 08:41:57 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_AdminLett...', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\AdminLetters.php(83): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Backend\AdminLetters.php(47): Model_AdminLetters::get_letters_type(1, '0', '10', 0)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_AdminLetters->action_outbox()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 08:53:42 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\AdminLetters.php:98
2014-08-19 08:53:42 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\AdminLetters.php(98): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Backend\AdminLetters.php(57): Model_AdminLetters::show_letter('1')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_AdminLetters->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\AdminLetters.php:98
2014-08-19 08:54:25 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\AdminLetters.php:99
2014-08-19 08:54:25 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\AdminLetters.php(99): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Backend\AdminLetters.php(57): Model_AdminLetters::show_letter('1')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_AdminLetters->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\AdminLetters.php:99
2014-08-19 08:54:34 --- CRITICAL: Kohana_Exception [ 0 ]: The firstname property does not exist in the Model_AdminLetters class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-19 08:54:34 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('firstname')
#1 Z:\home\vdate\www\application\views\backend\adminletters\show.php(2): Kohana_ORM->__get('firstname')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\backend\layout.php(280): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-19 09:05:30 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-19 09:05:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:06:22 --- DEBUG: Email to email2man@email.com with subject '=?UTF-8?B?dmRhdGUgLSBzdWJqZWN0Mg==?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Men.php:234
2014-08-19 09:06:22 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-19 09:06:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:06:57 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-19 09:06:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:07:08 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-19 09:07:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:08:25 --- DEBUG: Email to emailman1@email.com with subject '=?UTF-8?B?dmRhdGUgLSBsZXR0ZXIx?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Men.php:234
2014-08-19 09:08:25 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-19 09:08:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:17:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: firstname ~ APPPATH\classes\Controller\Backend\Men.php [ 10 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:10
2014-08-19 09:17:17 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 10, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:10
2014-08-19 09:19:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: lastname ~ APPPATH\classes\Controller\Backend\Men.php [ 10 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:10
2014-08-19 09:19:03 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 10, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:10
2014-08-19 09:19:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: firstname ~ APPPATH\classes\Controller\Backend\Men.php [ 38 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:38
2014-08-19 09:19:11 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 38, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:38
2014-08-19 09:19:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lastname ~ APPPATH\classes\Controller\Backend\Men.php [ 39 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:39
2014-08-19 09:19:26 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 39, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:39
2014-08-19 09:28:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lastname ~ APPPATH\classes\Controller\Backend\Men.php [ 34 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:34
2014-08-19 09:28:40 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 34, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:34
2014-08-19 09:28:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lastname ~ APPPATH\classes\Controller\Backend\Men.php [ 34 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:34
2014-08-19 09:28:46 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 34, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Men.php:34
2014-08-19 09:33:03 --- CRITICAL: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `agency`.`name` AS `agency_name`, `girls`.`id` AS `id`, `girls`.`user_id` AS `user_id`, `girls`.`firstname` AS `firstname`, `girls`.`lastname` AS `lastname`, `girls`.`email` AS `email`, `girls`.`serie_passport` AS `serie_passport`, `girls`.`number_passport` AS `number_passport`, `girls`.`passport_photo` AS `passport_photo`, `girls`.`girl_with_passport` AS `girl_with_passport`, `girls`.`birthday` AS `birthday`, `girls`.`country` AS `country`, `girls`.`region` AS `region`, `girls`.`city` AS `city`, `girls`.`address` AS `address`, `girls`.`height` AS `height`, `girls`.`weight` AS `weight`, `girls`.`eyes` AS `eyes`, `girls`.`hair` AS `hair`, `girls`.`place_work` AS `place_work`, `girls`.`education` AS `education`, `girls`.`religion` AS `religion`, `girls`.`marital_status` AS `marital_status`, `girls`.`smoking` AS `smoking`, `girls`.`drinking` AS `drinking`, `girls`.`children` AS `children`, `girls`.`phone` AS `phone`, `girls`.`hobbies` AS `hobbies`, `girls`.`about` AS `about`, `girls`.`relationships` AS `relationships`, `girls`.`status` AS `status`, `girls`.`created_at` AS `created_at`, `girls`.`updated_at` AS `updated_at`, `girls`.`agency_id` AS `agency_id`, `girls`.`video` AS `video` FROM `girls` AS `girls` LEFT JOIN `agency` ON (`girls`.`agency_id` = `agency`.`id`) ORDER BY `girls`.`firstname` ASC LIMIT  OFFSET  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 09:33:03 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `agency`...', 'Model_Girls', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Girls.php(274): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Backend\Girls.php(39): Model_Girls::get_girls_backend(NULL, 2, '', '', '', '10', 0)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Girls->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Girls))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 10:13:45 --- DEBUG: Email to email2man@email.com with subject '=?UTF-8?B?dmRhdGUgLSBz?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\AdminLetters.php:124
2014-08-19 11:02:28 --- DEBUG: Email to test@test.ru with subject '=?UTF-8?B?UmVnaXN0cmF0aW9uIG1hbiBhdCBzaXRlIHZkYXRl?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Men.php:225
2014-08-19 11:02:28 --- DEBUG: Email to emailman4@email.com with subject '=?UTF-8?B?UmVnaXN0cmF0aW9uIGF0IHNpdGUgdmRhdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Men.php:242
2014-08-19 11:25:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errrors ~ APPPATH\views\backend\men\edit.php [ 3 ] in Z:\home\vdate\www\application\views\backend\men\edit.php:3
2014-08-19 11:25:56 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\men\edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 3, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(280): Kohana_View->__toString()
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
#15 {main} in Z:\home\vdate\www\application\views\backend\men\edit.php:3
2014-08-19 11:26:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\backend\men\edit.php [ 3 ] in Z:\home\vdate\www\application\views\backend\men\edit.php:3
2014-08-19 11:26:03 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\men\edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 3, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(280): Kohana_View->__toString()
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
#15 {main} in Z:\home\vdate\www\application\views\backend\men\edit.php:3
2014-08-19 11:38:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password confirm ~ APPPATH\views\backend\girls\add.php [ 73 ] in Z:\home\vdate\www\application\views\backend\girls\add.php:73
2014-08-19 11:38:02 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\girls\add.php(73): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 73, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(280): Kohana_View->__toString()
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
#15 {main} in Z:\home\vdate\www\application\views\backend\girls\add.php:73
2014-08-19 11:38:53 --- DEBUG: Email to test@test.ru with subject '=?UTF-8?B?UmVnaXN0cmF0b24gZ2lybCBhdCBzaXRlIHZkYXRl?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Girls.php:375
2014-08-19 11:38:53 --- DEBUG: Email to email@email.com with subject '=?UTF-8?B?UmVnaXN0cmF0aW9uIGdpcmwgYXQgc2l0ZSB2ZGF0ZQ==?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Girls.php:392
2014-08-19 11:38:54 --- DEBUG: Email to emailgirl1@email.com with subject '=?UTF-8?B?UmVnaXN0cmF0aW9uIGdpcmwgYXQgc2l0ZSB2ZGF0ZQ==?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Girls.php:409
2014-08-19 11:46:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: check_girl ~ APPPATH\classes\Controller\Backend\Agency.php [ 48 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Agency.php:48
2014-08-19 11:46:50 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Agency.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 48, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Agency->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Agency.php:48
2014-08-19 11:47:07 --- DEBUG: Email to test@test.ru with subject '=?UTF-8?B?UmVnaXN0cmF0aW9uIGFnZW5jeSBhdCBzaXRlIHZkYXRl?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Agency.php:350
2014-08-19 11:47:07 --- DEBUG: Email to emailagency@email.com with subject '=?UTF-8?B?UmVnaXN0cmF0aW9uIGFnZW5jeSBhdCB2ZGF0ZQ==?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Agency.php:367
2014-08-19 11:49:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 11:49:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 11:49:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 11:49:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 13:00:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 13:00:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 13:00:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 13:00:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 13:00:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 13:00:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:25:23 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 590 ] in file:line
2014-08-19 15:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:36:55 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 590 ] in file:line
2014-08-19 15:36:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:38:27 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 590 ] in file:line
2014-08-19 15:38:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:44:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:44:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:45:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:45:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:45:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:45:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:45:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:45:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:45:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:45:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:45:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:45:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:45:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:45:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:45:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:45:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:45:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:47:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:47:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:47:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:47:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:47:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:47:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:47:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:47:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:48:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:48:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:48:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:48:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:48:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:48:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:48:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:48:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:48:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:48:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:53:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Lang ~ APPPATH\views\frontend\layoutMain.php [ 57 ] in Z:\home\vdate\www\application\views\frontend\layoutMain.php:57
2014-08-19 15:53:32 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\layoutMain.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 57, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\application\views\frontend\layoutMain.php:57
2014-08-19 15:58:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:58:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:58:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:58:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:59:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:59:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:59:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:59:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:59:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:59:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:59:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:59:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 15:59:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-19 15:59:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 16:19:34 --- CRITICAL: Kohana_Exception [ 0 ]: Required route parameter not passed: action ~ SYSPATH\classes\Kohana\Route.php [ 572 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:581
2014-08-19 16:19:34 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(581): {closure}('<language>/<act...', true)
#1 Z:\home\vdate\www\system\classes\Kohana\Route.php(221): Kohana_Route->uri(Array)
#2 Z:\home\vdate\www\application\views\widgets\Auth.php(4): Kohana_Route::url('auth', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Auth))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#12 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#13 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(14): Widget::load('Auth')
#14 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#17 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#20 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:581
2014-08-19 16:31:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function strtolow() ~ APPPATH\views\frontend\layoutMain.php [ 40 ] in file:line
2014-08-19 16:31:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 16:32:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: language ~ APPPATH\views\frontend\layoutMain.php [ 40 ] in Z:\home\vdate\www\application\views\frontend\layoutMain.php:40
2014-08-19 16:32:03 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\layoutMain.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 40, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\application\views\frontend\layoutMain.php:40
2014-08-19 16:35:27 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Frontend.php [ 66 ] in Z:\home\vdate\www\application\classes\Controller\Frontend.php:66
2014-08-19 16:35:27 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend.php(66): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\vdate\w...', 66, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend.php:66
2014-08-19 16:35:59 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Frontend.php [ 66 ] in Z:\home\vdate\www\application\classes\Controller\Frontend.php:66
2014-08-19 16:35:59 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend.php(66): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\vdate\w...', 66, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend.php:66
2014-08-19 16:45:16 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 590 ] in file:line
2014-08-19 16:45:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 16:53:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: SliderMainPage ~ APPPATH\views\frontend\layoutMain.php [ 53 ] in Z:\home\vdate\www\application\views\frontend\layoutMain.php:53
2014-08-19 16:53:25 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\layoutMain.php(53): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 53, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend.php(71): Controller_Base->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\application\views\frontend\layoutMain.php:53
2014-08-19 17:00:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Pages::getPagesBottom() ~ APPPATH\classes\Controller\Widgets\Menu\BottomMenu.php [ 9 ] in file:line
2014-08-19 17:00:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 17:00:54 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Pages::getPagesBottom(), called in Z:\home\vdate\www\application\classes\Controller\Widgets\Menu\BottomMenu.php on line 9 and defined ~ APPPATH\classes\Model\Pages.php [ 104 ] in Z:\home\vdate\www\application\classes\Model\Pages.php:104
2014-08-19 17:00:54 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Pages.php(104): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\vdate\w...', 104, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Widgets\Menu\BottomMenu.php(9): Model_Pages::getPagesBottom()
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_Menu_BottomMenu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_BottomMenu))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#8 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(19): Widget::load('Menu_BottomMenu')
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\classes\Model\Pages.php:104
2014-08-19 17:00:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: BottomMenu ~ APPPATH\views\frontend\layoutMain.php [ 528 ] in Z:\home\vdate\www\application\views\frontend\layoutMain.php:528
2014-08-19 17:00:54 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\layoutMain.php(528): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 528, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend.php(71): Controller_Base->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\application\views\frontend\layoutMain.php:528
2014-08-19 17:01:35 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Pages::getPagesBottom(), called in Z:\home\vdate\www\application\classes\Controller\Widgets\Menu\BottomMenu.php on line 9 and defined ~ APPPATH\classes\Model\Pages.php [ 104 ] in Z:\home\vdate\www\application\classes\Model\Pages.php:104
2014-08-19 17:01:35 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Pages.php(104): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\vdate\w...', 104, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Widgets\Menu\BottomMenu.php(9): Model_Pages::getPagesBottom()
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_Menu_BottomMenu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_BottomMenu))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#8 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(19): Widget::load('Menu_BottomMenu')
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\classes\Model\Pages.php:104
2014-08-19 17:01:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: BottomMenu ~ APPPATH\views\frontend\layoutMain.php [ 528 ] in Z:\home\vdate\www\application\views\frontend\layoutMain.php:528
2014-08-19 17:01:35 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\layoutMain.php(528): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 528, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend.php(71): Controller_Base->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\application\views\frontend\layoutMain.php:528
2014-08-19 17:01:37 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Pages::getPagesBottom(), called in Z:\home\vdate\www\application\classes\Controller\Widgets\Menu\BottomMenu.php on line 9 and defined ~ APPPATH\classes\Model\Pages.php [ 104 ] in Z:\home\vdate\www\application\classes\Model\Pages.php:104
2014-08-19 17:01:37 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Pages.php(104): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\vdate\w...', 104, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Widgets\Menu\BottomMenu.php(9): Model_Pages::getPagesBottom()
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_Menu_BottomMenu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_BottomMenu))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#8 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(19): Widget::load('Menu_BottomMenu')
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\classes\Model\Pages.php:104
2014-08-19 17:01:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: BottomMenu ~ APPPATH\views\frontend\layoutMain.php [ 528 ] in Z:\home\vdate\www\application\views\frontend\layoutMain.php:528
2014-08-19 17:01:37 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\layoutMain.php(528): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 528, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend.php(71): Controller_Base->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\application\views\frontend\layoutMain.php:528
2014-08-19 17:02:27 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Pages::getPagesBottom(), called in Z:\home\vdate\www\application\classes\Controller\Widgets\Menu\BottomMenu.php on line 9 and defined ~ APPPATH\classes\Model\Pages.php [ 104 ] in Z:\home\vdate\www\application\classes\Model\Pages.php:104
2014-08-19 17:02:27 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Pages.php(104): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\vdate\w...', 104, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Widgets\Menu\BottomMenu.php(9): Model_Pages::getPagesBottom()
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_Menu_BottomMenu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_BottomMenu))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#8 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(19): Widget::load('Menu_BottomMenu')
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\classes\Model\Pages.php:104
2014-08-19 17:02:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: mm ~ APPPATH\views\frontend\layoutMain.php [ 528 ] in Z:\home\vdate\www\application\views\frontend\layoutMain.php:528
2014-08-19 17:02:27 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\layoutMain.php(528): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 528, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend.php(71): Controller_Base->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\application\views\frontend\layoutMain.php:528
2014-08-19 17:03:00 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Pages::getPagesBottom(), called in Z:\home\vdate\www\application\classes\Controller\Widgets\Menu\BottomMenu.php on line 9 and defined ~ APPPATH\classes\Model\Pages.php [ 104 ] in Z:\home\vdate\www\application\classes\Model\Pages.php:104
2014-08-19 17:03:00 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Pages.php(104): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\vdate\w...', 104, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Widgets\Menu\BottomMenu.php(9): Model_Pages::getPagesBottom()
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_Menu_BottomMenu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_BottomMenu))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#8 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(19): Widget::load('Menu_BottomMenu')
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\classes\Model\Pages.php:104
2014-08-19 17:03:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: BottomMenu ~ APPPATH\views\frontend\layoutMain.php [ 528 ] in Z:\home\vdate\www\application\views\frontend\layoutMain.php:528
2014-08-19 17:03:00 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\layoutMain.php(528): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 528, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend.php(71): Controller_Base->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\application\views\frontend\layoutMain.php:528