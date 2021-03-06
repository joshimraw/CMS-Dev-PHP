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

                <?php
                    if(isset($_POST['cbArray'])){

                            $action = $_POST['action'];
                            if(empty($action)){
                                echo "Please select an action";
                            }

                            foreach($_POST['cbArray'] as $action_id){

                                switch($action){
                                    case'Published':
                                    $p_sql = "UPDATE categories SET cat_status = 'Published' WHERE cat_id = '$action_id'";
                                    mysqli_query($conn, $p_sql);
                                    break;

                                    case'Draft':
                                    $d_sql = "UPDATE categories SET cat_status = 'Draft' WHERE cat_id = '$action_id'";
                                    mysqli_query($conn, $d_sql);
                                    break;

                                    case'Delete':
                                    $del_sql = "DELETE FROM categories WHERE cat_id = '$action_id'";
                                    mysqli_query($conn, $del_sql);
                                    break;
                                }
                            }

                        }
                 ?>
        

                <div class="row">
                    <div class="col-sm-12">
                        <form action=""  method="post">
                            <div class="col-xs-3">
                                <select name="action" class="form-control">
                                    <option value="">Select Action</option>
                                    <option value="Published">Published</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Delete">Delete</option>
                                </select>
                            </div>
                            
                            <div class="col-xs-4">
                                <button class="btn btn-success" type="submit" name="apply">Apply</button>
                                <a href="/admin/add-categories.php" class="btn btn-primary">Add New</a>
                            </div>
                            <br><br>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    
                                    <td><input type="checkbox"> All ID</td>
                                    <td>Category Name</td>
                                    <td>Status</td>
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

                                        <td>
                                            <input type="checkbox" name="cbArray[]" value="<?php echo $category['cat_id']; ?>"> 

                                            <?php echo $category['cat_id']; ?></td>

                                        <td><?php echo $category['cat_title']; ?></td>
                                        <td><?php echo $category['cat_status']; ?></td>
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
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>


<?php include "admin-footer.php" ?>