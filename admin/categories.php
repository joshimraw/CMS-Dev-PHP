<?php 
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
                    <a href="/admin/add-categories.php" class="btn btn-primary">Add New</a>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered table-hover">
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
                                if(isset($_GET['delete'])){
                                    $find_id = $_GET['delete'];

                                    $delete_query = "DELETE FROM categories WHERE cat_id = $find_id";
                                    mysqli_query($conn, $delete_query);
                                }

                                $sql = "SELECT * FROM categories";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0){
                                    while($category = mysqli_fetch_assoc($result)){ ?>
                                    <tr>
                                        <td><?php echo $category['cat_id']; ?></td>
                                        <td><?php echo $category['cat_title']; ?></td>
                                        <td><a href="cat-edit.php?edit=<?php echo $category['cat_id'] ?>">Edit</a></td>

                                        <td><a href="categories.php?delete=<?php echo $category['cat_id']; ?>">Delete</a></td>
                                        
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