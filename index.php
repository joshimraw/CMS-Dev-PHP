<?php require_once('header.php'); ?>

<h1 class="uk-text-center">Welcome to Home page</h1>


<?php 
	if(isset($_SESSION['u_id'])){
		echo "you are logged in!";
	}else{
		echo "not login";
	}
?>


<?php require_once('footer.php'); ?>
