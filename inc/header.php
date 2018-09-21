<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">
    <?php
      $sitename = "small-efforts";
      if(isset($title)){
        echo "<title>$title | $sitename</title>";
      }else{
         echo "<title>$sitename</title>";
      }
     ?>

    <base href="/" />
    <link rel="stylesheet" href="vendor/uikit.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>

  <body>
      <div class="uk-container">
          <nav class="uk-navbar-container uk-margin" uk-navbar>
                <div class="uk-navbar-left">
                   <a href="/" class="uk-logo">
                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: star; ratio:2"></span>
                    HOME
                </a>
                </div>

                 <div class="uk-navbar-right">
                    <div class="uk-navbar-item">
                      <form class="js-login">

                        <div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none;" ></div>
                        <div class="uk-margin uk-alert uk-alert-success js-success" style="display: none;"></div>

                      <input class="uk-input uk-form-width-medium" type="email" placeholder="john@ex.com" required="required">
                      <input class="uk-input uk-form-width-medium" type="password" placeholder="password" required="required">
                      <button class="uk-button uk-button-primary" type="submit">Login</button>
                      <a href="/register.php" class="uk-button uk-button-text">Register</a>
                      </form>

                    </div>
              </div>
        </nav>