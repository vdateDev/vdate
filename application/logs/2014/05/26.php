<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-26 11:52:44 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `fields_users` (`user_id`, `field_id`, `value`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-26 11:52:44 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 Z:\home\ebg\www\application\classes\Model\FieldUser.php(106): Kohana_Database_Query->execute()
#2 Z:\home\ebg\www\application\classes\Model\FieldUser.php(84): Model_FieldUser->add_values('10', Array)
#3 Z:\home\ebg\www\application\classes\Controller\Backend\Users.php(75): Model_FieldUser->change_values('10', Array)
#4 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Users))
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-26 11:53:34 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `fields_users` (`user_id`, `field_id`, `value`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-26 11:53:34 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 Z:\home\ebg\www\application\classes\Model\FieldUser.php(106): Kohana_Database_Query->execute()
#2 Z:\home\ebg\www\application\classes\Model\FieldUser.php(84): Model_FieldUser->add_values('10', Array)
#3 Z:\home\ebg\www\application\classes\Controller\Backend\Users.php(75): Model_FieldUser->change_values('10', Array)
#4 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Users))
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-26 11:53:56 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `fields_users` (`user_id`, `field_id`, `value`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-26 11:53:56 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 Z:\home\ebg\www\application\classes\Model\FieldUser.php(106): Kohana_Database_Query->execute()
#2 Z:\home\ebg\www\application\classes\Model\FieldUser.php(84): Model_FieldUser->add_values('10', Array)
#3 Z:\home\ebg\www\application\classes\Controller\Backend\Users.php(75): Model_FieldUser->change_values('10', Array)
#4 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Users))
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-26 11:54:48 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `fields_users` (`user_id`, `field_id`, `value`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-26 11:54:48 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 Z:\home\ebg\www\application\classes\Model\FieldUser.php(114): Kohana_Database_Query->execute()
#2 Z:\home\ebg\www\application\classes\Model\FieldUser.php(92): Model_FieldUser->add_values('10', Array)
#3 Z:\home\ebg\www\application\classes\Controller\Backend\Users.php(75): Model_FieldUser->change_values('10', Array)
#4 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Users))
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251