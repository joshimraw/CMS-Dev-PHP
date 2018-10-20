<?php
include "config.php";

if(isset($_POST['adduser'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user_image = $_FILES['user-image']['name'];
	$user_role = $_POST['user-role'];

	$user_img_tmp = $_FILES['user-image']['tmp_name'];
	$destination = "../../images/".$user_image;
	move_uploaded_file($user_img_tmp, $destination);

	

		$user_sql = "INSERT INTO users(user_fname, user_lname, user_name, user_email, user_password, user_image, user_role)
	VALUES('$fname', '$lname', '$username', '$email', '$password', '$user_image', '$user_role')";
	$user_result = mysqli_query($conn, $user_sql);

	if($user_result){
		echo "User is added <br>";
		echo "<a href = '/admin/users.php'>All Users</a>";
	}else{
		die("failed to add the user " .mysqli_error());
	}

}

 ?>