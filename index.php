<?php 

define('__CONFIG__', true);
include_once 'inc/config.php';

?>

  	<div class="uk-section uk-container">
  		<?php 
  			echo "Hello world. Today is: ";
  			echo date("Y m d");
  		?> 
      
  		<p>
  			<a href="/login.php">Login</a> |
  			<a href="/register.php">Register</a>
  		</p>
  	</div>



  	<?php require_once "inc/footer.php"; ?> 

