<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-25 10:04:22 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: defualt ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-25 10:04:22 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(215): Kohana_Route::get('defualt')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(153): Kohana_Route::url('defualt', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_delfavorite()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-25 10:08:33 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-25 10:08:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 10:44:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-25 10:44:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 10:45:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-25 10:45:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 10:51:23 --- DEBUG: Email to emailgirl6@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 10:51:23 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-25 10:51:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 10:57:32 --- DEBUG: Email to email1@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 10:58:06 --- DEBUG: Email to emailgirl7@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 10:58:12 --- DEBUG: Email to emailgirl3@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 11:34:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-25 11:34:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 11:34:48 --- DEBUG: Email to emailman1@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 11:34:49 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-25 11:34:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 11:44:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: girls ~ APPPATH\views\frontend\girlaccount\myfavorites.php [ 11 ] in Z:\home\vdate\www\application\views\frontend\girlaccount\myfavorites.php:11
2014-08-25 11:44:00 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\girlaccount\myfavorites.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 11, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layout.php(66): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\girlaccount\myfavorites.php:11
2014-08-25 11:52:19 --- DEBUG: Email to email2man@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 11:52:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-25 11:52:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 12:35:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'ststus' in 'where clause' [ SELECT COUNT(`favorites`.`id`) AS `records_found` FROM `favorits` AS `favorites` WHERE `ststus` = '0' AND `id_favorit` = '6' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 12:35:59 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`f...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(247): Kohana_ORM->count_all()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(24): Model_Favorites::count_new_admires('6')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 12:36:25 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-25 12:36:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 12:36:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'favorits.id_favorite' in 'where clause' [ SELECT `favorits`.`id` AS `id_record`, `favorits`.`id_who` AS `id_who`, `men`.`firstname` AS `firstname`, `men`.`birthday` AS `birthday`, `men`.`city` AS `city`, `men`.`country` AS `country`, `men`.`weight` AS `weight`, `men`.`height` AS `height`, `user_photos`.`photo` AS `photo`, `user_photos`.`default_image` AS `default_image`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status`, `user`.`user_language` AS `user_language` FROM `users` AS `user` JOIN `favorits` ON (`user`.`id` = `favorits`.`id_favorit`) JOIN `men` ON (`men`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_image` = 1) WHERE `favorits`.`id_favorite` = '6' ORDER BY `favorits`.`id` DESC LIMIT 5 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 12:36:50 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `favorit...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Favorites.php(238): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(199): Model_Favorites::get_girl_admires('6', '5', 'last', 0)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_myAdmires()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 12:47:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::update() ~ APPPATH\classes\Model\Favorites.php [ 259 ] in file:line
2014-08-25 12:47:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 12:49:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Favorites::count() ~ APPPATH\classes\Model\Favorites.php [ 247 ] in file:line
2014-08-25 12:49:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 12:54:00 --- DEBUG: Email to email2@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 12:55:15 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Frontend\ManAccount.php [ 106 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php:106
2014-08-25 12:55:15 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(106): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 106, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_myFavorites()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php:106
2014-08-25 12:57:06 --- DEBUG: Email to emailgirl7@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 12:58:01 --- DEBUG: Email to email2@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 13:31:17 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-25 13:31:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 13:34:39 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-25 13:34:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 13:56:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Favorites::count_matches() ~ APPPATH\classes\Controller\Frontend\GirlAccount.php [ 214 ] in file:line
2014-08-25 13:56:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 14:02:55 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '', )'' at line 1 [ SELECT COUNT(`favorites`.`id`) AS `records_found` FROM `favorits` AS `favorites` WHERE `id_favorit` = '6' AND `id_who` IN ', )' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:02:55 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`f...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(349): Kohana_ORM->count_all()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(214): Model_Favorites::count_matches('6')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_myMatches()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:03:24 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '', )'' at line 1 [ SELECT COUNT(`favorites`.`id`) AS `records_found` FROM `favorits` AS `favorites` WHERE `id_favorit` = '6' AND `id_who` IN ', )' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:03:24 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`f...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(349): Kohana_ORM->count_all()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(214): Model_Favorites::count_matches('6')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_myMatches()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:03:30 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '', )'' at line 1 [ SELECT COUNT(`favorites`.`id`) AS `records_found` FROM `favorits` AS `favorites` WHERE `id_favorit` = '6' AND `id_who` IN ', )' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:03:30 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`f...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(349): Kohana_ORM->count_all()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(214): Model_Favorites::count_matches('6')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_myMatches()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:03:56 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '', )'' at line 1 [ SELECT COUNT(`favorites`.`id`) AS `records_found` FROM `favorits` AS `favorites` WHERE `id_favorit` = '6' AND `id_who` IN ', )' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:03:56 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`f...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(349): Kohana_ORM->count_all()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(214): Model_Favorites::count_matches('6')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_myMatches()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:03:59 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '', )'' at line 1 [ SELECT COUNT(`favorites`.`id`) AS `records_found` FROM `favorits` AS `favorites` WHERE `id_favorit` = '6' AND `id_who` IN ', )' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:03:59 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`f...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(349): Kohana_ORM->count_all()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(214): Model_Favorites::count_matches('6')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_myMatches()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:04:15 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(8, 11)'' at line 1 [ SELECT COUNT(`favorites`.`id`) AS `records_found` FROM `favorits` AS `favorites` WHERE `id_favorit` = '6' AND `id_who` IN '(8, 11)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:04:15 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`f...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(349): Kohana_ORM->count_all()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(214): Model_Favorites::count_matches('6')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_myMatches()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:04:50 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(8, 11)' LIMIT 5 OFFSET 0' at line 1 [ SELECT `men`.`firstname` AS `firstname`, `men`.`birthday` AS `birthday`, `men`.`city` AS `city`, `men`.`country` AS `country`, `men`.`weight` AS `weight`, `men`.`height` AS `height`, `user_photos`.`photo` AS `photo`, `user_photos`.`default_image` AS `default_image`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status`, `user`.`user_language` AS `user_language` FROM `users` AS `user` JOIN `favorits` ON (`favorit`.`id_who` = `user`.`id`) JOIN `men` ON (`men`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_image` = 1) WHERE `favorit`.`id_favorit` = '6' AND `favorite`.`id_who` IN '(8, 11)' LIMIT 5 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:04:50 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Favorites.php(325): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(237): Model_Favorites::get_girl_matches('6', '5', 'last', 0)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_myMatches()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:05:11 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'favorit.id_favorit' in 'where clause' [ SELECT `men`.`firstname` AS `firstname`, `men`.`birthday` AS `birthday`, `men`.`city` AS `city`, `men`.`country` AS `country`, `men`.`weight` AS `weight`, `men`.`height` AS `height`, `user_photos`.`photo` AS `photo`, `user_photos`.`default_image` AS `default_image`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status`, `user`.`user_language` AS `user_language` FROM `users` AS `user` JOIN `favorits` ON (`favorit`.`id_who` = `user`.`id`) JOIN `men` ON (`men`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_image` = 1) WHERE `favorit`.`id_favorit` = '6' AND `favorite`.`id_who` IN (8, 11) LIMIT 5 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:05:11 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Favorites.php(325): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(237): Model_Favorites::get_girl_matches('6', '5', 'last', 0)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_myMatches()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:05:34 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'favorit.id_who' in 'on clause' [ SELECT `men`.`firstname` AS `firstname`, `men`.`birthday` AS `birthday`, `men`.`city` AS `city`, `men`.`country` AS `country`, `men`.`weight` AS `weight`, `men`.`height` AS `height`, `user_photos`.`photo` AS `photo`, `user_photos`.`default_image` AS `default_image`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status`, `user`.`user_language` AS `user_language` FROM `users` AS `user` JOIN `favorits` ON (`favorit`.`id_who` = `user`.`id`) JOIN `men` ON (`men`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_image` = 1) WHERE `favorits`.`id_favorit` = '6' AND `favorits`.`id_who` IN (8, 11) LIMIT 5 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 14:05:34 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Favorites.php(325): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(237): Model_Favorites::get_girl_matches('6', '5', 'last', 0)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_myMatches()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 15:26:24 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$method ~ APPPATH\classes\Controller\Frontend\GirlAccount.php [ 121 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php:121
2014-08-25 15:26:24 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(121): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\vdate\w...', 121, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_myFavorites()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php:121
2014-08-25 15:32:09 --- DEBUG: Email to email2man@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 15:32:15 --- DEBUG: Email to email3man@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 15:32:20 --- DEBUG: Email to emailman4@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 15:44:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Controller\Frontend\ManAccount.php [ 116 ] in file:line
2014-08-25 15:44:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 15:44:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY ~ APPPATH\classes\Controller\Frontend\ManAccount.php [ 116 ] in file:line
2014-08-25 15:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 15:45:07 --- DEBUG: Email to emailgirl6@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 15:49:40 --- CRITICAL: ErrorException [ 1 ]: Class 'HTTP_Exception_Array' not found ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in file:line
2014-08-25 15:49:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 15:50:28 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete favorites model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php:112
2014-08-25 15:50:28 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(112): Kohana_ORM->delete()
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_myFavorites()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php:112
2014-08-25 15:50:57 --- DEBUG: Email to email1@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 15:51:07 --- DEBUG: Email to emailgirl3@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-25 17:17:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-25 17:17:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 17:24:34 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Height class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-25 17:24:34 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 Z:\home\vdate\www\application\views\frontend\manaccount\settings.php(87): Kohana_ORM->__get('name')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(66): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-25 17:39:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: eductaion ~ APPPATH\views\frontend\manaccount\settings.php [ 151 ] in Z:\home\vdate\www\application\views\frontend\manaccount\settings.php:151
2014-08-25 17:39:12 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\manaccount\settings.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 151, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layout.php(66): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\manaccount\settings.php:151
2014-08-25 17:48:55 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-25 17:48:55 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(Object(Validation))
#1 Z:\home\vdate\www\modules\orm\classes\Model\Auth\User.php(201): Kohana_ORM->update(Object(Validation))
#2 Z:\home\vdate\www\application\classes\Model\User.php(74): Model_Auth_User->update_user(Array, Array)
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(62): Model_User->edit_user(Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_settings()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-25 17:50:13 --- CRITICAL: Kohana_Exception [ 0 ]: The usrname property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-25 17:50:13 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('usrname')
#1 Z:\home\vdate\www\application\views\frontend\manaccount\settings.php(37): Kohana_ORM->__get('usrname')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(66): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-25 17:50:37 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-25 17:50:37 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(Object(Validation))
#1 Z:\home\vdate\www\modules\orm\classes\Model\Auth\User.php(201): Kohana_ORM->update(Object(Validation))
#2 Z:\home\vdate\www\application\classes\Model\User.php(74): Model_Auth_User->update_user(Array, Array)
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(62): Model_User->edit_user(Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_settings()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-25 17:52:34 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-25 17:52:34 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(Object(Validation))
#1 Z:\home\vdate\www\modules\orm\classes\Model\Auth\User.php(201): Kohana_ORM->update(Object(Validation))
#2 Z:\home\vdate\www\application\classes\Model\User.php(74): Model_Auth_User->update_user(Array, Array)
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(62): Model_User->edit_user(Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_settings()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:1362
2014-08-25 17:54:27 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vdate`.`roles_users`, CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE) [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('8', '1'), ('8', NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 17:54:27 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\User.php(89): Kohana_ORM->add('roles', Array)
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(62): Model_User->edit_user(Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_settings()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 17:58:27 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`vdate`.`roles_users`, CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE) [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('8', '1'), ('8', NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 17:58:27 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\User.php(89): Kohana_ORM->add('roles', Array)
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(64): Model_User->edit_user(Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_settings()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-25 17:59:37 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-25 17:59:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-25 18:00:07 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-25 18:00:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line