<?php

	if(isset($_POST['submit'])){
		include_once 'dbh.inc.php';



		$firstName = mysqli_real_escape_string($conn, $_POST['fname']);
		$lastName = mysqli_real_escape_string($conn, $_POST['lname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$userid = mysqli_real_escape_string($conn, $_POST['uid']);
		$password = mysqli_real_escape_string($conn, $_POST['pass']);

		if(empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($userid)){
				header("Location: ../signup.php?signup=empty");
				exit();
		}else{
			if(!preg_match("/^[a-zA-Z]*$/", $firstName) || !preg_match("/^[a-zA-Z]*$/", $lastName)){
				header("Location: ../signup.php?signup=invalidname");
				exit();
			}else{
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					header("Location: ../signup.php?signup=invalidemail");
					exit();
				}else{
					$sql = "SELECT * FROM users WHERE u_id = '$userid'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if($resultCheck > 0){
						header("Location: ../signup.php?signup=userexist");
						exit();
					}else{
						$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

						$sql = "INSERT INTO users (first_name, last_name, email, u_id, password) VALUES ('$firstName', '$lastName', '$email', '$userid', '$hashedPwd');";

						mysqli_query($conn, $sql);
						header("Location: ../signup.php?signup=success");
						exit();

					}
				}
			}
		}

	}else{
		header("Location: ../signup.php");
		exit();
	}

?>