<?php 

$title = "Login";
define('__CONFIG__', true);
require_once "inc/header.php";
require_once "inc/config.php";
require_once "ajax/session.php";
force_to_dashboard();

?> 


<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
	<form class="uk-form-stacked js-login">
		<h2>Login</h2>
		<div class="uk-margin">
			<label class="uk-form-label">Email</label>
			<div class="uk-form-controls">
				<input class="uk-input"
				type="email" required='required' placeholder="email@email.com">
			</div>
		</div>

		<div class="uk-margin">
			<label class="uk-form-label">Password</label>
			<div class="uk-form-controls">
			<input class="uk-input" type="password" 
			required='required' placeholder="Your Password">
			</div>
		</div>
		<div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none;"></div>
		<div class="uk-margin">
			<button class="uk-button uk-button-primary" type="submit">Login</button>
		</div>
		<div class="uk-margin uk-alert uk-alert-success js-success" style="display: none;"></div>
	</form>
</div>

<?php require_once "inc/footer.php"; ?> 

