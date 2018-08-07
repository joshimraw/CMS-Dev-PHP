<?php 
	session_start();

if(isset($_POST['loginsubmit'])){
	include_once 'dbh.inc.php';


	$uid = mysqli_real_escape_string($conn, $_POST['user-email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);


	if(empty($uid) || empty($pwd)){
		header("Location: ../login.php?login=loginempty");
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE u_id = '$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck < 1){
			header("Location: ../login.php?login=usernotexist");
			exit();
		}else{
			if($row = mysqli_fetch_assoc($result)){
				$hashedPwdCheck = password_verify($pwd, $row['password']);

				if($hashedPwdCheck == false){
					header("Location: ../login.php?login=passowrderror");
					exit();

				}elseif($hashedPwdCheck == true){

					$_SESSION['user_aid'] = $row['user_id'];
					$_SESSION['u_id'] = $row['u_id'];
					$_SESSION['u_fname'] = $row['first_name'];
					$_SESSION['u_lname'] = $row['last_name'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_pass'] = $row['password'];
					header('Location: ../login.php?login=loginsuccess');
					exit();
				}
			}
		}
	}
}else{

	header("Location: ../login.php?login=error");
	exit();
}


?>