<?php require_once "inc/header.php"; ?> 



<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
	<form class="uk-form-stacked js-register">
		<h2>Register</h2>
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
			<input class="uk-input"
			type="password" required='required' placeholder="Your Password">
			</div>
		</div>

		<div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none;"></div>
		<div class="uk-margin">
			<button class="uk-button uk-button-default" type="submit">Register</button>
		</div>
	</form>
</div>




<?php require_once "inc/footer.php"; ?> 

