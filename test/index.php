<?php 
include('db.php');
include('header.php'); ?>

	

<div class="container">
	<div style="height: 50px;"></div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h2 class="text-center">Add New User</h2>
					<form class="form-inline">
						<div class="input-group">
							<input type="text" id="fname" class="form-control" placeholder="First Name">
						</div>
						<div class="input-group">
							<input type="text" id="lname" class="form-control" placeholder="Last Name">
						</div>
						<div class="input-group">
							<button class="btn btn-primary" id="addNew" type="button">Add New</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><hr>
	<div class="row">
		<div class="col-md-12">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">User Table</h2>
				<div id="usertable">
					
				</div>
			</div>
		</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>