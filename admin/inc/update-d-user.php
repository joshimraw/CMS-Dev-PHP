<?php
include "config.php";

if(isset($_POST['updateuser'])){
	$user_id = $_POST['user-id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user_image = $_FILES['user-image']['name'];
	$user_role = $_POST['user-role'];

	$user_img_tmp = $_FILES['user-image']['tmp_name'];
	$destination = "../../images/".$user_image;
	move_uploaded_file($user_img_tmp, $destination);

	

		$upuser_sql = "UPDATE users SET 
		user_fname = '$fname',
		user_lname = '$lname',
		user_email = '$email',
		user_password = '$password',
		user_image = '$user_image',
		user_role = '$user_role' WHERE user_id = '$user_id'
		";

		$upser_result = mysqli_query($conn, $upuser_sql);

		if($upser_result){
			echo "User is updated <br>";
			echo "<a href = '/admin/users.php'>All Users</a>";
		}else{
			die("failed to add the user " .mysqli_error());
		}

	}

 ?>