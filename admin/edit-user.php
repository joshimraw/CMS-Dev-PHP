<?php include "admin-header.php"; ?>
    <div id="wrapper">
<?php include "navigation.php"; 

    if(isset($_GET['u_edit'])){
        $useredit_id = $_GET['u_edit'];

        $find_user = "SELECT * FROM users WHERE user_id = '$useredit_id'";
        $collect_user = mysqli_query($conn, $find_user);

        if($collect_user){
            while($user = mysqli_fetch_assoc($collect_user)){
                $user_fname = $user['user_fname'];
                $user_lname = $user['user_lname'];
                $user_name = $user['user_name'];
                $user_email = $user['user_email'];
                $user_pass = $user['user_password'];
                $user_img = $user['user_image'];
                $user_role = $user['user_role'];


            }
        }else{
            die('failed to collect user info' .mysqi_error());
        }
    }

 ?>





        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update User Information
                        </h1>
                    </div>
                </div>
           
                <div class="row">
                    <div class="col-md-6">
                        <form action="inc/update-d-user.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="hidden" name="user-id" value="<?php echo $useredit_id ?>" class="form-control">
                                <input type="text" name="fname" value="<?php echo $user_fname ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" value="<?php echo $user_lname ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">User Name</label>
                                <input type="text" disabled="disabled" name="username" value="<?php echo $user_name ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email </label>
                                <input type="email" name="email" value="<?php echo $user_email ?>" class="form-control">
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
                                    <?php
                                        $user_roles = Array('Admin', 'Author');
                                        $select_role = $user_role;

                                        foreach($user_roles as $u_role){
                                            if($u_role == $select_role){
                                                echo "<option selected='selected' value='$u_role'>$u_role</option>";
                                            }else{
                                                 echo "<option value='$u_role'>$u_role</option>";
                                            }
                                        }

                                     ?>
                                
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit" name="updateuser">Update User</button>
                        </form>
                    </div>
                </div>

        


            </div> <!-- /.container-fluid -->
        </div>
    </div>


<?php include "admin-footer.php" ?>