
$(document).ready(function(){

	var agreeBtn = $("#agreeBtn"),
    	rButton = $("#rButton");

    	rButton.prop('disabled', true);
    	agreeBtn.change(function(){
    		rButton.prop('disabled', !agreeBtn.is(':checked'));
    	})

    })


$(document)
.on('submit', 'form.js-register', function(e){
	e.preventDefault();
	
	var _form = $(this);
	var _error = $('.js-error', _form);
	var _success = $('.js-success', _form);



	var dataObj = {
		fname: $("input[type='text']", _form).val(),
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val(),
		gender: $("input[type='radio']:checked", _form).val(),
		cbox: $("input[type='checkbox']:checked", _form).val()
	}


	if(dataObj.email.length < 10){
		_error
		.text('Enter a valid email')
		.show();
		return false;
	} else if(dataObj.password.length < 4){
		_error
		.text('Minimum password lenght 4')
		.show();
		return false;
	}else if(dataObj.fname.length < 3){
		_error
		.text('Minimum name lenght 3')
		.show();
		return false;
	}
	_error.hide();

	$.ajax({
		type: 'POST',
		url: 'ajax/register.php',
		data: dataObj,
		dataType: 'json',
		async: true
	})
	.done(function ajaxSuccess(data){
		if(data.error !== undefined){
			_error
				.text(data.error)
				.show();
		}else if(data.success && data.redirect !== undefined){
			_success
			.text(data.success)
			.show();
			window.location = data.redirect;
		}
	})
	.fail(function ajaxFailed(f){
		alert(f+' failed');
	})
	.always(function alwaysDo(always){

	})
	console.log(dataObj);
	return false;
})

// LOGIN =======================

.on('submit', 'form.js-login', function(e){
	e.preventDefault();
	
	var _form = $(this);
	var _error = $('.js-error', _form);
	var _success = $('.js-success', _form);

	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	}

	if(dataObj.email.length < 10){
		_error
		.text('Enter a valid email')
		.show();
		return false;
	} else if(dataObj.password.length < 4){
		_error
		.text('Mininum password lenght 4')
		.show();
		return false;
	}
	_error.hide();

	$.ajax({
		type: 'POST',
		url: 'ajax/login.php',
		data: dataObj,
		dataType: 'json',
		async: true
	})
	.done(function ajaxSuccess(data){
		if(data.error !== undefined){
			_error
				.html(data.error)
				.show();
		}else if(data.success && data.redirect !== undefined){
			_success
			.text(data.success)
			.show();
			window.location = data.redirect;
		}
	})
	.fail(function ajaxFailed(f){
		alert(f+' failed');
	})
	.always(function alwaysDo(always){

	})
	return false;
})