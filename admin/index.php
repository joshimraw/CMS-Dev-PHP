<?php 
include "inc/config.php";
include "admin-header.php";
force_to_dashboard();
 ?>



<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
    <form class="form-signin" action="inc/logedin.php" method="POST">
      <div class="text-center mb-4">
        <img class="mb-4" src="../images/small-efforts.png" alt="" width="200" height="160">
      </div><br><br>

      <div class="form-label-group">
        <label>Email address</label>
        <input type="text" class="form-control" name="username" placeholder="user name" required autofocus>
      </div>

      <div class="form-label-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-md btn-primary btn-block" type="submit" name="login">Sign in</button>
    </form>
</div> 
</div>
</div>



<?php include "admin-footer.php" ?>