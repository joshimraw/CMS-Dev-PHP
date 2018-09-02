$(document).ready(function(){
	showUser();

	// add new user
	$("#addNew").click(function(){
		if($('#fname').val() == '' || $('#lname').val() == ''){
			alert('please input first');
		}else{
			var fName = $('#fname').val();
			var lName = $('#lname').val();

			$.ajax({
				url: 'addnew.php',
				type: 'POST',
				data: {
					firstname: fName,
					lastname: lName,
					add: 1
				}, 
				success: function(){
					showUser();
				}
			});
		}
	});

	// delete user 
	$('.delete').click(function(){
		var id = $(this).val();
		$.ajax({
			url: 'delete.php',
			type: 'POST',
			data: {
				id : id,
				del: 1
			},
			success: function(){
				showUser();
			}
		})
	});

	// update user
	$('.userupdate').click(function(){
		var uid = $(this).val();
		$('#edit'+uid).modal('hide');
		$('body').removeClass('modal-open');
		$('.modal-backdrop').remove();

		var firstName = $('#ufName'+uid).val();
		var lastName = $('#ulName'+uid).val();

		$.ajax({
			url: 'update.php',
			type: 'POST',
			data: {
				user_id: uid,
				firtsname: firstName,
				lastname: lastName,
				edit: 1
			}, 
			success: function(){
				showUser();
			}
		})
	})
	// show all user
function showUser(){
	$.ajax({
		url: 'show_user.php',
		type: 'POST',
		async: false,
		data: {
			show: 1
		},
		success: function(response){
			$('#usertable').html(response);
		}
	})
}
}); // document...