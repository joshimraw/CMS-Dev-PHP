<?php
	
	ob_start( );
	
	if(!isset($_SESSION)){
	session_start();
	}

    
	include "db.php";
	include "functions.php";
    // ob_end_flush();
 ?>