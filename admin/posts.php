<?php 
include_once("inc/config.php");
include "admin-header.php";
 ?>
    <div id="wrapper">
    <?php include "navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            All POSTS
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <a href="/admin/add-post.php" class="btn btn-primary"> Add New Post</a><br><br>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Author</td>
                                    <td>Title</td>
                                    <td>Category</td>
                                    <td>Status</td>
                                    <td>Image</td>
                                    <td>Date</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                            </thead>
                            <tbody>
                        <?php 
                          if(isset($_GET['delete'])){
                            $delete_id = $_GET['delete'];

                            $d_sql = "DELETE FROM posts WHERE post_id = $delete_id";
                            mysqli_query($conn, $d_sql);
                        }

                        $sql = "SELECT * FROM posts";
                        $result = mysqli_query($conn, $sql);
                        if($result && mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                    <td><?php echo $row['post_id']; ?></td>
                                    <td><?php echo $row['post_author']; ?></td>
                                    <td><?php echo $row['post_title']; ?></td>
                                    <td><?php echo $row['post_category']; ?></td>
                                    <td><?php echo $row['post_status']; ?></td>
                                    <td><img width="70" height="40" src="<?php echo "../images/".$row['post_image']; ?>"></td>
                                    <td><?php echo $row['post_date']; ?></td>
                                    <td><a href="/admin/edit-post.php?edit=<?php echo $row['post_id'] ?>">Edit</a></td>
                                    <td><a href="/admin/posts.php?delete=<?php echo $row['post_id'] ?>">Delete</a></td>
                                </tr>
                           <?php }
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