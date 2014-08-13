<?php
/**
 * Cyber Image Manager
 *
 *
 * @package		Cyber Image Manager
 * @author		Radik
 * @copyright	Copyright (c) 2010, Cyber Applications.
 * @link		http://www.cyberapp.ru/
 * @since		Version 1.1
 * @file 		/includes/drivers/ImageManager_Driver.php
 */
 
/*
  Защита от прямой загрузки
*/
defined('ACCESS') or die();

abstract class ImageManager_Driver{	
	public function __construct($filename = ''){}
	public function open($filename = ''){return false;}
	public function resize($width = 100, $height = 100, $toFrame = false){return false;}
	public function save($filename = ''){return false;}
	public function info($filename = ''){return array();}
	public function __destruct(){}		
}
