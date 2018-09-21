<?php 
	if(!defined('__CONFIG__')){
		exit('you dont have the config file');
	}

	require_once "classes/DB.php";
	require_once "functions.php";
	$con = DB::getConnection();
?>