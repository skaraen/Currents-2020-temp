function register() {
	var route = '/api/cca/apply';
	var method = 'POST';

	if ($('#mobile').val().length < 10) {
		alert('Please enter a proper mobile number.');
		return;
	}
	if ($('#email').val() != $('#re-email').val()) {
		alert('Mail IDs not matching. Please check your mail id');
		return;
	}
	var data_obj = {
		name: $('#name').val(),
		email: $('#email').val(),
		dob: $('#dob').val(),
		college: $('#college').val(),
		branch: $('#branch').val(),
		year: $('#year').val(),
		por: $('#por').val(),
		mobile: $('#mobile').val(),
		perma_phone: $('#perma_phone').val(),
		curr_addr: $('#curr_addr').val(),
		perm_addr: $('#perm_addr').val()
	};

	var request = $.ajax({
		url: API_BASE_URL + route,
		method: method,
		data: data_obj,
		dataType: 'json',
		xhrFields: {
			withCredentials: true
		}
	});

	request.done(function(data) {
		console.log(data);
		if (data.status_code == 200) {
			$('#form').hide();
			$('#message').html('Sucessfully registered. Your reference ID is ' + data.message);
			$('#error').show();
		} else if (data.status_code == 409) {
			alert('This email-id is already in use.');
		} else {
			alert('Unknown Error. Contact WebOps');
		}
	});
}

function redirect() {
	location.href = API_BASE_URL + '/cca';
}
