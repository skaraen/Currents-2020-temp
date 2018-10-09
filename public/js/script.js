API_BASE_URL="http://localhost:8000"

function login() {
	var route = '/api/auth';
	var method = 'POST';

	var roll = $('#roll').val();
	var password = $('#password').val();

	var auth_obj = {
			'roll': roll,
			'password': password
	};

	var request = $.ajax({
		url: API_BASE_URL+route,
		method: method,
		data: auth_obj,
		xhrFields: {
			withCredentials: true
		}
	});
	request.done(function(data){
		data = JSON.parse(data);
		if(data.status_code == 200) {
			localStorage.setItem('roll', roll);
			$('#login').hide();
			$('#contact').show();
		} else if(data.status_code==401) {
			$('#error').html('Incorrect credentials');
		}
	});		
}

function register() {
	var route = '/api/intern/apply';
	var method = 'POST';

	var data_obj = {
			'name': $('#name').val(),
			'roll': $('#rollno').val(),
			'email_id': $('#email').val(),
			'phone': $('#phone').val(),
			'project': $('#project').val(),
			'year' : $('#year').val(),
			'sop': $('#sop').val()
	};

	var request = $.ajax({
		url: API_BASE_URL+route,
		method: method,
		data: data_obj,
		xhrFields: {
			withCredentials: true
		}
	});
	request.done(function(data){
		if(data.status_code == 200) {
			alert('Successfully registered');
		} else if(data.status_code==401) {
			alert('Error. Please try later or contact WebOps');
		}
	});
}