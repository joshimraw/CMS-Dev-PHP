<?php include "header.php";
    if(isset($_GET['p_id'])){
        $p_id = $_GET['p_id'];

        $p_sql = "SELECT * FROM posts WHERE post_id = $p_id";
        $find_post = mysqli_query($conn, $p_sql);

        while($post = mysqli_fetch_assoc($find_post)){

            $post_title = $post['post_title'];
            $post_author = $post['post_author'];
            $post_date = $post['post_date'];
            $post_image = $post['post_image'];
            $post_category = $post['post_category'];
            $post_content = $post['post_content'];
            $post_tags = $post['post_tags'];
            $post_status = $post['post_status'];
            $comment_count = $post['post_comment_count'];
        }
    }
?>
        <div class="row">
            <div class="col-lg-8">
                <h1><?php echo $post_title ?></h1>

                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date. ' by '. $post_author ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image ?>">
                <b><?php echo $comment_count ?> Comments</b>
                <hr>
                <p class="content"><?php echo $post_content ?></p>
                <br><br>


                <div class="col-md-8">

                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" action="post-comment.php" method="POST">
                        <input type="hidden" name="com-post-id" value="<?php echo $p_id; ?>">
                        <div class="form-group">
                            <input type="text" name="author-name" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="com-content" rows="3"></textarea>
                        </div>
                        <button type="submit" name="com_submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <?php
                $com_sql = "SELECT * FROM comments WHERE com_post_id = '$p_id'";
                $com_exe = mysqli_query($conn, $com_sql);

                     while($row = mysqli_fetch_assoc($com_exe)){

                        $com_id = $row['com_id'];
                        $com_post_id = $row['com_post_id'];
                        $com_author = $row['com_author'];
                        $com_content = $row['com_content'];
                        $com_status = $row['com_status'];
                        $com_date = $row['com_date'];  ?>

                     <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $com_author; ?>
                                <small><?php echo $com_date; ?></small>
                            </h4>
                            <?php echo $com_content; ?>
                        </div>
                    </div>

                   <?php  }
              
              ?>




                

            </div>
        </div>
    <?php include "sidebar.php"; ?>
    
    </div>


<?php include "footer.php"; ?>

       