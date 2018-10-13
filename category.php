<?php include "header.php"; ?>

<div class="row">
    <div class="col-md-8">
        <?php
            if(isset($_GET['cat_page_id'])){
                $cat_page_id = $_GET['cat_page_id'];
                
                $cat_sql = "SELECT * FROM categories WHERE cat_id = '$cat_page_id'";
                $find_cat_page = mysqli_query($conn, $cat_sql);

                while($find_cat = mysqli_fetch_assoc($find_cat_page)){
                    $find_cat_title = $find_cat['cat_title'];
                }
                
                    
                    $p_sql = "SELECT * FROM posts WHERE post_category = '$find_cat_title'";
                    $cpage_result = mysqli_query($conn, $p_sql);

                    while($cat_page = mysqli_fetch_assoc($cpage_result)){
                    $post_id = $cat_page['post_id'];
                    $post_title = $cat_page['post_title'];
                    $post_author = $cat_page['post_author'];
                    $post_date = $cat_page['post_date'];
                    $post_image = $cat_page['post_image'];
                    $post_content = substr($cat_page['post_content'], 0, 250); ?>


                <h2><a href="/post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title; ?></a></h2>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date. " By <a href='#'> $post_author </a>"?></p>
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="<?php echo $post_image ?>">
                <br>
                <p><?php echo $post_content; ?>
                    <a href="/post.php?p_id=<?php echo $post_id ?>" class="btn btn-info btn-sm">Read More ></a>
                </p>


                   <?php  }


                }
                 ?>





    </div>
    <?php include "sidebar.php"; ?>
    
    </div>

    

<?php include "footer.php"; ?>

