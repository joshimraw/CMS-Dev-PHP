<?php require_once('header.php'); ?>

<h1 class="uk-text-primary uk-text-center">Login page</h1>


<?php 
	if(isset($_SESSION['u_id'])){
		echo "you are logged in!";
	}
?>


<?php require_once('footer.php'); ?>