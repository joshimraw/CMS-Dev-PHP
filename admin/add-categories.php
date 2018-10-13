<?php include "admin-header.php"; 

if(isset($_POST['submit'])){
    $cat_name = $_POST['cat-name'];
        if($cat_name !== '' | !empty($cat_name)){
            $sql = "INSERT INTO categories (cat_title) 
            VALUES('$cat_name')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "Added Successfully";
                header("Location: /admin/categories.php");
                
            }else{
               die("Error");
            }
        }else{ echo "Filled should not be empty";}
    }else{
        echo "";
    }
?>
    <div id="wrapper">
    <?php include "navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            CATEGORIES
                            <small>CATERORY</small>
                        </h1>
                        
                    </div>
                </div> <!-- END ROW -->
                
                <div class="row">
                    <div class="col-sm-6">


                       <form action="" method="POST">
                        <div class="form-group">
                            <label for="ad-category"></label>
                            <input type="text" id="ad-category" class="form-control" name="cat-name">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="submit" value="Add New Caterogy" >
                        </div>
                       </form>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Category Name</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM categories";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0){
                                    while($category = mysqli_fetch_assoc($result)){ ?>
                                    <tr>
                                        <td><?php echo $category['cat_id']; ?></td>
                                        <td><?php echo $category['cat_title']; ?></td>
                                        <td><a href="">Edit</a></td>
                                        <td><a href="">Delete</a></td>
                                        
                                    </tr>
                                    <?php }
                                }else{
                                    echo "No Item ";
                                }
                                 ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>


<?php include "admin-footer.php" ?>