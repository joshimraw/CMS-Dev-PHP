<?php
	include('db.php');

	if(isset($_POST['del'])){
		$id = $_POST['id'];

		$sql = "DELETE FROM user WHERE userid = '$id'";
		mysqli_query($conn, $sql);

	}
 ?>