

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

	if($('#phone').val().length < 10) {
		alert('Please enter a proper phone number.');
		return;
	}
	if($('#project_one').val() == $('#project_two').val() || $('#project_two').val() == $('#project_three').val() || $('#project_three').val() == $('#project_one').val()) {
		alert('Please select different project for the preferences.')
		return;
	}

	if(isNaN($('#cgpa').val())) {
		alert('Please check your CGPA.');
		return;
	}
	var data_obj = {
			'name': $('#name').val(),
			'roll': $('#rollno').val(),
			'email_id': $('#email').val(),
			'phone': $('#phone').val(),
			'cgpa' : $('#cgpa').val(),
			'project_one': $('#project_one').val(),
			'sop_one': $('#sop_one').val(),
			'project_two': $('#project_two').val(),
			'sop_two': $('#sop_two').val(),
			'project_three': $('#project_three').val(),
			'sop_three': $('#sop_three').val(),
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
		data = JSON.parse(data);
		if(data.status_code == 200) {
			alert('Successfully registered');
		} else if(data.status_code==409) {
			alert('You have already registered. Contact WebOps if you wish to change.');
		} else {
			alert('Unknown Error. Contact  WebOps');
		}
	});
}