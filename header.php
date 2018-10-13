<?php include "inc/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Small Efforts</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/blog-home.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img src="images/logo.png">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
                    <?php
                        $sql = "SELECT * FROM categories LIMIT 3";
                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) > 0){
                            while($category = mysqli_fetch_assoc($result)){
                            $cat_title = $category['cat_title'];

                            echo "<li><a href='#'>{$cat_title}</a></li>";
                        }
                        }else{
                            echo "No Result";
                        }
                     ?>
                     <li><a href="/about Me">About Me</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <br>
        <!-- /.container -->
    <div class="container">