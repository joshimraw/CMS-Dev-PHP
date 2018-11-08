<?php 
include_once("inc/config.php");
include "admin-header.php";
 ?>
    <div id="wrapper">
    <?php include "navigation.php";

    if(isset($_GET['u_del'])){
        $del_id = $_GET['u_del'];

        $del_sql = "DELETE FROM users WHERE user_id = '$del_id'";
        mysqli_query($conn, $del_sql);
    }

     ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            All USERS
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <a href="/admin/add-user.php" class="btn btn-primary"> Add New User</a><br><br>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>User Name</td>
                                    <td>Email</td>
                                    <td>Password</td>
                                    <td>Image</td>
                                    <td>User Role</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                            $sql = "SELECT * FROM users";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                        $user_id = $row['user_id'];
                                    ?>
                                
                                    <tr>
                                        <td><?php echo $user_id ?></td>
                                        <td><?php echo $row['user_fname'] ?></td>
                                        <td><?php echo $row['user_lname'] ?></td>
                                        <td><?php echo $row['user_name'] ?></td>
                                        <td><?php echo $row['user_email'] ?></td>
                                        <td><?php echo $row['user_password'] ?></td>
                                        <td><img width="60" height="35" src="../images/<?php echo $row['user_image'] ?>" alt=""></td>
                                        <td><?php echo $row['user_role'] ?></td>
                                        <td><a href="edit-user.php?u_edit=<?php echo $user_id ?>">Edit</a></td>
                                        <td><a href="users.php?u_del=<?php echo $user_id ?>">Delete</a></td>
                                    </tr>
                                
                                <?php }
                            }else{
                                echo "No user to show";
                            }
                         ?>
                                    
                            </tbody>
                        </table>
                    </div>
                </div>

        


            </div> <!-- /.container-fluid -->
        </div>
    </div>


<?php include "admin-footer.php" ?>