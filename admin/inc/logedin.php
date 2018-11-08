<?php 
include "config.php"; 



if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$finduser = "SELECT * FROM users WHERE user_name = '$username' LIMIT 1";
	$user_exe = mysqli_query($conn, $finduser);

	if(mysqli_num_rows($user_exe) == 1){
		while($user = mysqli_fetch_assoc($user_exe)){

			$user_id = $user['user_id'];
			$username = $user['user_name'];
			$user_pass = $user['user_password'];

			if($user_pass == $password){

				$_SESSION['user_id'] = $user_id;

				header("Location: /admin/dashboard.php");
			}else{
				echo 'Password incorrect';	
			}
		}
	}else{
		echo "you dont have account";	
		
	}
}




include "../admin-footer.php"
?>