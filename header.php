<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Title</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.9/css/uikit.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.9/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.9/js/uikit-icons.min.js"></script>

</head>
    <body>

		<nav class="uk-navbar-container uk-margin" uk-navbar>
		    <div class="uk-navbar-left">
		        <a class="uk-navbar-item uk-logo uk-text-primary" href="/">Home</a>
			</div>	

	        <div class="uk-navbar-right">

	        	<?php 
	        		if(isset($_SESSION['u_id'])){
	        			echo '<form action="inc/logout.inc.php" method="POST">
	        			<button class="uk-button uk-button-default" type="submit" name="logoutsubmit">Logout</button>
	    				</form>';
	        		}else{
	        			echo '<form action="inc/login.inc.php" method="POST">
	                <input class="uk-input uk-form-width-medium" type="text" name="user-email" placeholder="Username/Email">
	                <input class="uk-input uk-form-width-medium" type="password" name="password" placeholder="Password">
	               <button class="uk-button uk-button-primary" type="submit" name="loginsubmit">Login</button>
	               <button class="uk-button uk-button-default" type="button"><a href="signup.php">Sign Up</a></button>
	            </form>';
	        		}
	        	?>

	        </div>
		</nav>


