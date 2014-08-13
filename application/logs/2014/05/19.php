<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-19 15:03:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'with_users.user_id' in 'where clause' [ SELECT `users`.`username` AS `username`, `dialogueuser`.`id` AS `id`, `dialogueuser`.`dialogue_id` AS `dialogue_id`, `dialogueuser`.`user_id` AS `user_id`, `dialogueuser`.`deleted` AS `deleted`, `dialogueuser`.`created_at` AS `created_at`, `dialogueuser`.`updated_at` AS `updated_at` FROM `dialogues_users` AS `dialogueuser` JOIN `users` ON (`users`.`id` = `with_user`.`user_id`) WHERE `dialogueuser`.`dialogue_id` = '1' AND `with_users`.`user_id` != '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-19 15:03:45 --- DEBUG: #0 Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `users`....', 'Model_DialogueU...', Array)
#1 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\ebg\www\application\classes\Model\Dialogue.php(209): Kohana_ORM->find_all()
#4 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(230): Model_Dialogue->with_users('1')
#5 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_get_dialogue()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#8 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\ebg\www\modules\database\classes\Kohana\Database\Query.php:251
2014-05-19 15:34:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: with_user ~ APPPATH\views\frontend\account\dialogue.php [ 24 ] in Z:\home\ebg\www\application\views\frontend\account\dialogue.php:24
2014-05-19 15:34:01 --- DEBUG: #0 Z:\home\ebg\www\application\views\frontend\account\dialogue.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 24, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\application\classes\Controller\Frontend\Account.php(237): Kohana_View->render()
#4 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Account->action_get_dialogue()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Account))
#7 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ebg\www\application\views\frontend\account\dialogue.php:24