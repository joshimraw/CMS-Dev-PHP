<?php include "header.php";

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}

$limit = 4;
$offset = 0;

$p_sql = "SELECT * FROM posts WHERE post_status = 'Published'";
$p_exe = mysqli_query($conn, $p_sql);

$found_row = mysqli_num_rows($p_exe);
$total_page = ceil($found_row / $limit);

$offset = $page * $limit - $limit;




 ?>

<div class="row">
    <div class="col-md-8">
        <?php
            $sql = "SELECT * FROM posts WHERE post_status = 'Published' LIMIT $limit offset $offset";
            $result = mysqli_query($conn, $sql);

                while($post = mysqli_fetch_assoc($result)){
                    $post_id = $post['post_id'];
                    $post_title = $post['post_title'];
                    $post_author = $post['post_author'];
                    $post_date = $post['post_date'];
                    $post_image = $post['post_image'];
                    $post_content = substr($post['post_content'], 0, 250);
                    $post_tags = $post['post_tags'];
                    $post_comment_count = $post['post_comment_count'];
                    $post_status = $post['post_status']; ?>

                <h2><a href="/post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title; ?></a></h2>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date. " By <a href='#'> $post_author </a>"?></p>
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="<?php echo $post_image ?>">
                <br>
                <p><?php echo $post_content; ?>
                    <a href="/post.php?p_id=<?php echo $post_id ?>" class="btn btn-info btn-sm">Read More ></a>
                </p>



                <?php } ?>

<!-- =============== PAGINATION SYSTEM ==============  -->          
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li class="<?= $page <= 1 ? 'disabled': '' ?>"><a href="/?page=<?= $page - 1 ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a> </li>

    <?php for($i =1; $i <= $total_page; $i++): ?>

    <li class="<?= $i == $page ? 'active': '' ?>"><a href="/?page=<?= $i ?>"><?= $i ?></a></li>

    <?php endfor; ?>

    <li class="<?= $page >= $total_page ? 'disabled': '' ?>"><a href="/?page=<?= $page + 1 ?>" aria-label="Next"> <span aria-hidden="true">&raquo;</span></a> </li>
  </ul>
</nav>



    </div>
    <?php include "sidebar.php"; ?>
    
    </div>

    

<?php include "footer.php"; ?>

