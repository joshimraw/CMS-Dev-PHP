<?php 
include_once("inc/config.php");
include "admin-header.php";
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
                            <?php
                            if(isset($_GET['edit'])){
                                $edit_id = $_GET['edit'];

                                $sql = "SELECT * FROM categories WHERE cat_id = $edit_id";
                                $result = mysqli_query($conn, $sql);
                                while($category = mysqli_fetch_assoc($result)){
                                    $cat_title = $category['cat_title'];

                                    echo "<input type='text' id='ad-category' class='form-control' name='cat-name' value='$cat_title'>";
                                }
                            }
                             if(isset($_POST['update'])){
                                $update_title = $_POST['cat-name'];
                                $update_sql = "UPDATE categories SET cat_title = '$update_title'
                                WHERE cat_id = '$edit_id'";
                                $update = mysqli_query($conn, $update_sql);
                                if($update){
                                    echo "Update Successfully ";
                                    echo "<a href='/admin/categories.php'> All Category</a>";
                                    
                                }

                            }
                             ?>
                            
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="update" value="Update Caterogy" >
                        </div>
                       </form>
                    </div>
                </div>

            </div>
        </div>

    </div>


<?php include "admin-footer.php" ?>