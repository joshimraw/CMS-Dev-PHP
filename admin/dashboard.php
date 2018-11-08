<?php 
include "inc/config.php";
include "admin-header.php";
force_to_login();
 ?>
    <div id="wrapper">
    <?php include "navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                        <div class="col-sm-9 col-md-10">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders text-center">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../../images/d-circle-b.png" width="140" height="140" style="border-radius: 50%;">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../../images/d-circle-lg.png" width="140" height="140" style="border-radius: 50%;">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../../images/d-circle-o.png" width="140" height="140" style="border-radius: 50%;">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../../images/d-circle-ind.png" width="140" height="140"  style="border-radius: 50%;">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          
        </div>

        </div><!-- /.row -->

        


            </div> <!-- /.container-fluid -->
        </div>
    </div>


<?php include "admin-footer.php" ?>