<?php
	if(!defined('__CONFIG__')){
		exit('you dont have config file');
	}

	include_once 'classes/DB.php';
	
	
	DB::getConnection();
 ?>