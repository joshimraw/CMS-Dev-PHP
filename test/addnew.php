<?php
	include('db.php');

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];

		$sql = "INSERT INTO user (firstname, lastname) VALUES ('$firstname', '$lastname')";
		mysqli_query($conn, $sql);
	}
 ?>