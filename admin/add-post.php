<?php include "admin-header.php"; ?>
    <div id="wrapper">
<?php include "navigation.php"; 
    echo "<br>";



if(isset($_POST['addpost'])){
    $post_author = $_POST['post-author'];
    $post_title = $_POST['post-title'];
    $post_category = $_POST['post-category'];
    $post_tags = $_POST['post-tags'];
    $post_status = $_POST['post-status'];
    $post_content = $_POST['post-content'];
    $post_image = $_FILES['post-image']['name'];
    $post_image_temp = $_FILES['post-image']['tmp_name'];
    $post_comment_count = 4;
    $destination = '../images/'.$post_image;

    move_uploaded_file($post_image_temp, $destination);
    if(empty($post_author) || empty($post_category)){
        die("Filed is required". mysqli_error());
    }else{
    $sql = "INSERT INTO posts(post_title, post_author, post_date, post_image, post_category, post_content, post_tags, post_comment_count, post_status) 

    VALUES('{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_category}', '{$post_content}', '{$post_tags}', '{$post_comment_count}', '{$post_status}')";

    $result = mysqli_query($conn, $sql);
    if(!$result){
        die('failed: '. mysqli_error($conn));
    }else{
        echo "Success";
        header("Location: /admin/posts.php");
    }
}
}

    ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADD NEW PAGE
                        </h1>
                    </div>
                </div>
           
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Author Name</label>
                                <input type="text" name="post-author" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Post Title</label>
                                <input type="text" name="post-title" class="form-control">
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
                                <input type="text" name="post-tags" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="post-status" class="form-control">
                                    <option value=""></option>
                                    <option value="Draft">Draft</option>
                                    <option value="Published">Published</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Content</label>
                                <textarea name="post-content" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="post-image" class="form-control">
                            </div>
                            <button class="btn btn-primary" type="submit" name="addpost">Add Post</button>
                        </form>
                    </div>
                </div>

        


            </div> <!-- /.container-fluid -->
        </div>
    </div>


<?php include "admin-footer.php" ?>