<?php
	include('db.php');
	if(isset($_POST['edit'])){
		$uid = $_POST['user_id'];
		$firstname = $_POST['firtsname'];
		$lastname = $_POST['lastname'];

		$sql = "UPDATE user SET firstname = '$firstname', lastname = '$lastname', WHERE userid = '$uid'";
		mysqli_query($conn, $sql);
	}
 ?>