<?php 

$serverName = 'localhost';
$userName	= 'admin';
$userPass	= 'Carbon@786';
$dbName		= 'test';

$conn = mysqli_connect($serverName, $userName, $userPass, $dbName);
if(!$conn){
	die("Connection failed! ". mysqli_connect_error());
}else{
	echo "";
}
