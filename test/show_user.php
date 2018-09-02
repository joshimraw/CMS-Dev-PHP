<?php
	include('db.php');
	if(isset($_POST['show'])){?>
	<table class="table table-bordered alert-warning table-hover">
		<thead>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Action</th>
		</thead>

		<tbody>
			<?php
				$sql = "SELECT * FROM user";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)){ ?>
					<tr>
						<td><?php  echo $row['firstname']; ?></td>
						<td><?php  echo $row['lastname']; ?></td>
						<td>
							<button class="btn btn-success" data-toggle='modal' 
							data-target="#edit<?php echo $row['userid']; ?>">
								Edit
							</button> 

							
							<button class="btn btn-danger delete" value="<?php echo $row['userid'] ?>">Delete</button>
							<?php include('edit_modal.php'); ?>
						</td>
					</tr>
				<?php }; ?>
		</tbody>
	</table>
	<?php }; ?> <!-- isset post -->
