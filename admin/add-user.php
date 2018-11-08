<?php 
include_once("inc/config.php");
include "admin-header.php";
 ?>
    <div id="wrapper">
<?php include "navigation.php"; 
    echo "<br>"; ?>





        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADD NEW USER
                        </h1>
                    </div>
                </div>
           
                <div class="row">
                    <div class="col-md-6">
                        <form action="inc/add-d-user.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">User Name</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email </label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password </label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="user-image" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="">User Role </label>
                                <select name="user-role" class="form-control">
                                    <option value="Admin">Admin</option>
                                    <option value="Author" selected="selected">Author</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit" name="adduser">Add User</button>
                        </form>
                    </div>
                </div>

        


            </div> <!-- /.container-fluid -->
        </div>
    </div>


<?php include "admin-footer.php" ?>