<?php
	require_once('header.php');
 ?>

						<!-- 1.05.22 | 05-08-2018 -->

	<!-- Sing up form -->
	<form action="inc/signup.inc.php" method="POST">
	    <div class="uk-margin uk-text-center">
	        <input class="uk-input uk-form-width-medium" type="text" name="fname" placeholder="First Name"><br>
	        <input class="uk-input uk-form-width-medium" type="text" name="lname" placeholder="Last Name"><br>
	        <input class="uk-input uk-form-width-medium" type="email" name="email" placeholder="E-mail"><br>
	        <input class="uk-input uk-form-width-medium" type="password" name="pass" placeholder="Password"><br>
	        <input class="uk-input uk-form-width-medium" type="text" name="uid" placeholder="User ID"><br>
	        <button class="uk-button uk-button-default" type="submit" name="submit">Sign Up</button>
	    </div>
	   
	</form>







<?php
	require_once('footer.php');
 ?>
