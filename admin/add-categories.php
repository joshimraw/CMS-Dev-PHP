<?php 
include "inc/config.php";
include "admin-header.php"; 



if(isset($_POST['add_cat'])){
    $cat_name = $_POST['cat-name'];
    $cat_status = $_POST['cat-status'];
        if(!empty($cat_name)){

            $asql = "INSERT INTO categories(cat_title, cat_status) 
            VALUES('$cat_name', '$cat_status')";
            $result = mysqli_query($conn, $asql);
            if($result){
                echo "Added Successfully";
                header("Location: /admin/categories.php");
                
            }else{
               die("Error" .mysqli_error());
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
                            <label>Category Name</label>
                            <input type="text" class="form-control" name="cat-name">
                        </div>
                        <div class="form-group">
                            <label>Category Status</label>
                            <select name="cat-status" class="form-control">
                                <option></option>
                                <option value="Published">Published</option>
                                <option value="Draft">Draft</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="add_cat">Add Category</button>
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
                                    <td>Status</td>
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
                                        <td><?php echo $category['cat_status']; ?></td>
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