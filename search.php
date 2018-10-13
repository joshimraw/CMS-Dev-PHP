<?php include "header.php"; ?>

<div class="row">
    <div class="col-md-8">

        <?php
        if(isset($_GET['submit'])){
            $search = $_GET['search'];

            $sql = "SELECT * FROM posts WHERE post_tags OR post_title LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){

                while($post = mysqli_fetch_assoc($result)){
                    $post_title = $post['post_title'];
                    $post_author = $post['post_author'];
                    $post_date = $post['post_date'];
                    $post_image = $post['post_image'];
                    $post_content = substr($post['post_content'], 0, 250);
                    $post_tags = $post['post_tags'];
                    $post_comment_count = $post['post_comment_count'];
                    $post_status = $post['post_status']; 

                    ?>

                <h2><a href="#"><?php echo $post_title; ?></a></h2>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date. " By <a href='#'> $post_author </a>"?></p>
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="<?php echo $post_image ?>">
                <br>
                <p><?php echo $post_content; ?>
                    <a href="#" class="btn btn-info btn-sm">Read More ></a>
                </p>

                <?php 
                    echo "<hr>";
                }

            }else{
                echo ": is not found";
            }
        }
     ?>

    </div>

    <?php include "sidebar.php"; ?>
    
    </div>

    

<?php include "footer.php"; ?>

