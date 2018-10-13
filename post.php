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
        }
    }
?>
        <div class="row">

            <div class="col-lg-8">
                <h1><?php echo $post_title ?></h1>

                <hr>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date. ' by '. $post_author ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image ?>">

                <hr>
                <p class="content"><?php echo $post_content ?></p>

                <hr>



                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>
    <?php include "sidebar.php"; ?>
    
    </div>


<?php include "footer.php"; ?>

       