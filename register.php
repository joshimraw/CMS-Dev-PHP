<?php 
	define('__CONFIG__', true);
	$title = "Register";
	require_once "inc/header.php";
	require_once "inc/config.php";

?> 



<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>

	<form class="uk-form-stacked js-register">
		<h2>Register</h2>
		<div class="uk-margin">
			<div class="uk-form-controls">
				<input class="uk-input" 
				type="text" required='required' placeholder="John Doe">
			</div>
		</div>
		<div class="uk-margin">
			<div class="uk-form-controls">
				<input class="uk-input" 
				type="email" required='required' placeholder="john@example.com">
			</div>
		</div>

		<div class="uk-margin">
			<div class="uk-form-controls">
			<input class="uk-input"
			type="password" required='required' placeholder="passowrd">
			</div>
		</div>
		<div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-radio" type="radio" name="gender" value="male"> Male</label>
            <label><input class="uk-radio" type="radio" name="gender" value="female"> Female</label>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-checkbox" id="agreeBtn" type="checkbox" name="cbox" value="yes"> I'm Agree</label>
        </div>

		<div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none;"></div>
		<div class="uk-margin">
			<button class="uk-button uk-button-primary" id="rButton" type="submit">Register</button>
		</div>
		<div class="uk-margin uk-alert uk-alert-success js-success" style="display: none;"></div>
	</form>
</div>




<?php require_once "inc/footer.php"; ?> 

