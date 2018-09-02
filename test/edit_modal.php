<?php include('db.php'); ?>


<div id="edit<?php echo $row['userid'] ?>" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role='document'>
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit the user</h4>
      </div>

      <div class="form-inline">
      	<div class="modal-body">
       		<input class="form-control" type="text" id="ufName<?php echo $row['userid'];?>" 
       		value="<?php echo $row['firstname'];?>">
       		<input class="form-control" type="text" id="ulName<?php echo $row['userid']; ?>" 
       		value="<?php echo $row['lastname'];?>">
      	</div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> |
        <button type="button" class="userupdate btn btn-success" value="<?php echo $row['userid']; ?>">Save</button>
      </div>
    </div>
  </div>
</div>