<?php include "inc/config.php"; ?>
    <div class="col-md-4">

    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control">
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="submit">
                <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
            </div>
        </form>
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                     <?php
                        $sql = "SELECT * FROM categories";
                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) > 0){
                            while($category = mysqli_fetch_assoc($result)){
                            $cat_id = $category['cat_id'];
                            $cat_title = $category['cat_title'];

                            echo "<li><a href='category.php?cat_page_id=$cat_id'>{$cat_title}</a></li>";
                        }
                        }else{
                            echo "No Result";
                        }
                     ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>
    </div>