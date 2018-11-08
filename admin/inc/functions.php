<?php
function force_to_login(){
	if(!isset($_SESSION['user_id'])){
		header('Location: /admin/index.php');
		exit();
	}
}
function force_to_dashboard(){
	if(isset($_SESSION['user_id'])){
		header('Location: /admin/dashboard.php');
	}
}

 ?>