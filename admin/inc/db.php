
<?php 

	$server = 'localhost';
	$dbuser = 'admin';
	$dbpass = 'Carbon@786';
	$dbname = 'cms';

	$conn = mysqli_connect($server, $dbuser, $dbpass, $dbname);

	if($conn){
		echo "";
	}else{
		echo "Not Connected";
	}

?>