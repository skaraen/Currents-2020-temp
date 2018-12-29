function register() {
	var route = '/api/eureka/apply';
	var method = 'POST';
	var form_data = new FormData(); 
	if($('#theme').val() == 0) {
		alert('Please choose a theme');
		return;
	}
	form_data.append('name_1', $('#name_1').val());
	form_data.append('class_1', $('#class_1').val());
	form_data.append('name_2', $('#name_2').val());
	form_data.append('class_2', $('#class_2').val());
	form_data.append('school', $('#school').val());
	form_data.append('school_address', $('#school_address').val());
	form_data.append('coordinator', $('#coordinator').val());
	form_data.append('phone', $('#phone').val());
	form_data.append('email', $('#email').val());
	form_data.append('theme', $('#theme').val());
	form_data.append('abstract', $('#abstract').val());
	
	var request = $.ajax({
		url: API_BASE_URL+route,
		method: method,
		data: form_data,
		processData: false,
		contentType: false,
	});
	request.done(function(data){
		data = JSON.parse(data);
		if(data.status_code == 200) {
			$('form').hide();
			$('#error').html("Sucessfully registered.");
			$('#error').show();
		} else if(data.status_code==400) {
			alert('Please enter all (*) marked fields.');
		} else {
			alert('Unknown Error. Contact  WebOps');
		}
	});
}
