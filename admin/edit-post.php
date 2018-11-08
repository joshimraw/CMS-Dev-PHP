<?php 
include_once("inc/config.php");
include "admin-header.php";
 ?>
    <div id="wrapper">
<?php include "navigation.php"; 
    echo "<br>";


        if(isset($_GET['edit'])){
            $edit_id = $_GET['edit'];
            $e_sql = "SELECT * FROM posts WHERE post_id = $edit_id";
            $e_result = mysqli_query($conn, $e_sql);

            while($erow = mysqli_fetch_assoc($e_result)){
                $post_title = $erow['post_title'];
                $post_author = $erow['post_author'];
                $post_image = $erow['post_image'];
                $post_category = $erow['post_category'];
                $post_content = $erow['post_content'];
                $post_tags = $erow['post_tags'];
                $post_status = $erow['post_status'];
            }

        }

        if(isset($_POST['update'])){
            $e_title = $_POST['post-title'];
            $e_author = $_POST['post-author'];
            $e_category = $_POST['post-category'];
            $e_tags = $_POST['post-title'];
            $e_status = $_POST['post-status'];
            $e_content = $_POST['post-content'];
            $e_image = $_FILES['post-image']['name'];
            $e_image_tmp = $_FILES['post-image']['tmp_name'];
            $destination = '../images/'.$e_image;

            move_uploaded_file($e_image_tmp, $destination);

            $u_sql = "UPDATE posts SET 
            post_author = '$e_author',
            post_date = now(),
            post_image = '$e_image',
            post_category = '$e_category',
            post_content = '$e_content',
            post_tags = '$e_tags',
            post_status = '$e_status' WHERE post_id = '$edit_id'";

            $update_sql = mysqli_query($conn, $u_sql);

            if($update_sql){
                header("Location: /admin/posts.php");
            }else{
                die('Failed: ' .mysqli_error($conn));
            }


        }


    ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Post
                        </h1>
                    </div>
                </div>
           
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Author Name</label>
                                <input type="text" name="post-author" value="<?php echo $post_author ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Post Title</label>
                                <input type="text" name="post-title" value="<?php echo $post_title ?>" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="">Category</label>
                                <select name="post-category" class="form-control">

                                    <?php
                                        $find_cat = "SELECT * FROM categories";
                                        $find_cat_exe = mysqli_query($conn, $find_cat);

                                        while($found_cat = mysqli_fetch_assoc($find_cat_exe)){
                                            $found_cat_title = $found_cat['cat_title'] ?>

                                    <option value="<?php echo $found_cat_title; ?>"><?php echo $found_cat_title; ?></option>

                                       <?php }
                                     ?>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="">Post Tags</label>
                                <input type="text" name="post-tags" value="<?php echo $post_tags ?>" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="post-status" class="form-control">
                                    <option value="Draft">Draft</option>
                                    <option value="Published">Published</option>
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="">Content</label>
                                <textarea name="post-content"  class="form-control"><?php echo $post_content ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <img src="../images/<?php echo $post_image ?>" width = "100" height = "60" alt="">
                                <input type="file" value="post_image" name="post-image" class="form-control">
                            </div>
                            <button class="btn btn-primary" type="submit" name="update"> Update Post</button>
                        </form>
                    </div>
                </div>

        


            </div> <!-- /.container-fluid -->
        </div>
    </div>


<?php include "admin-footer.php" ?>