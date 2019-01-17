<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/18', function () {
return redirect('/');
});
Route::get('/currents', function () {
return redirect('/');
});
Route::get('/', function () {
return view('19.home');
});
Route::get('/hospitality',function(){
	return view('19.hospitality');
});
Route::get('/sponsors',function(){
	return view('19.coming_soon');
});
Route::get('/about',function(){
	return view('19.coming_soon');
});
Route::get('/lectures', function () {
	return view('19.coming_soon');
});
Route::get('/events', function () {
	return view('19.coming_soon');
});
Route::get('/workshops',function(){
	return view('19.workshops');
});
Route::get('/schedule', function () {
	return view('19.coming_soon');
});
Route::get('/contact', function(){
	return view('19.coming_soon');
});
Route::get('/magazines/{file}', function($file_name) {
	$file_path = public_path('magazines/'.$file_name);
	return response()->download($file_path);
});
Route::get('/download/{file}', function($file_name) {
	$file_path = public_path('files/'.$file_name);
	return response()->file($file_path);
});
Route::get('/tronicals', function() {
	return view('19.tronicals');
});
Route::get('/cca', function() {
	return view('18.cca');
});
Route::get('/cca/apply', function() {
	return view('18.cca_apply');
});
Route::get('/eureka', function() {
	return view('19.eureka');
});
Route::get('/volts', function() {
	return view('19.volts');
});
Route::get('/volts/bengaluru', function() {
	return view('19.bangalore');
});
Route::get('/volts/kochi', function() {
	return view('19.kochi');
});
Route::get('/volts/trichy', function() {
	$arr = ['city' => 'Trichy',
			'college' => 'National Institute of Technology',
			'area' => 'Tiruchirappalli',
			'date' => '19th January 2019',
			'venue' => 'NATIONAL INSTITUTE OF TECHNOLOGY<br>
						TANJORE MAIN ROAD, NH 67,<br>
						THUVAKKUDI,<br>
						TRICHY - 620 015, TAMIL NADU, INDIA.<br>',
			'timings' => '9 AM to 12 PM',
			'link' => 'https://bit.ly/2sjkOHq',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.682713870967!2d78.81103031422612!3d10.758918092333415!2m3!1f0!2f0!3f0!3m2!1
i1024!2i768!4f13.1!3m3!1m2!1s0x3baa8d47758e1ae1%3A0xb3e16389eeab05a!2sNational+Institute+of+Technology+Tiruchirappalli!5e0!3m2!1sen!2sin!4v1547021447827',
		];
	return view('19.gate', $arr);
});
Route::get('/volts/tirunelveli', function() {
	$arr = ['city' => 'Tirunelveli',
			'college' => 'Government College of Engineering',
			'area' => 'Trivandrum Road',
			'date' => '20th January 2019',
			'venue' => 'GOVERNMENT COLLEGE OF ENGINEERING<br>
						TRIVANDRUM ROAD, MARSHAL NAGAR,<br>
						TIRUNELVELI - 627 007, TAMIL NADU, INDIA.<br>',
			'timings' => '2 PM to 5 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0575711294955!2d77.72359231420609!3d8.686075493759216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04126138dab5e1%3A0xc295f682e7eeb40d!2sGovernment+College+Of+Engineering%2C+Tirunelveli!5e0!3m2!1sen!2sin!4v1547021018169',
			'link' => ' https://bit.ly/2Fk9CBX'
		];
	return view('19.gate', $arr);
});
Route::get('/volts/salem', function() {
	$arr = ['city' => 'Salem',
			'college' => 'Mahendra Engineering College',
			'area' => '',
			'date' => '20th January 2019',
			'venue' => 'MAHENDRA ENGINEERING COLLEGE<br>
						SALEM - THIRUCHENGODE HIGHWAY, MAHENDHIRAPURI,<br>
						SALEM - 637 503, TAMIL NADU, INDIA.<br>',
			'timings' => '2 PM to 5 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.0475956673354!2d77.99754861423402!3d11.476490391848785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babe0bef703f36d%3A0x90831ca308e9d486!2sMahendra+Engineering+College!5e0!3m2!1sen!2sin!4v1547137576015',
			'link' => 'https://bit.ly/2VDpdlY'
		];
	return view('19.gate', $arr);
});
Route::get('/volts/madurai', function() {
	$arr = ['city' => 'Madurai',
			'college' => 'Mangayarkarasi College of Engineering',
			'area' => 'Madurai',
			'date' => '20th January 2019',
			'venue' => 'MANGAYARKARASI  COLLEGE OF  ENGINEERING,<br>
						7-1-139, 1st STREET, MANGAYARKARASI NAGAR<br>
						MADURAI - 625 402, TAMIL NADU, INDIA.<br>',
			'timings' => '2 PM to 5 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1964.8639747905895!2d78.06675435489949!3d9.95657791127121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c8d51cea3eb9%3A0xfe8b4c2604f377dc!2sMangayarkarasi+College+of+Engineering!5e0!3m2!1sen!2sin!4v1547028014108',
			'link' => 'https://bit.ly/2TElnqH'
		];
	return view('19.gate', $arr);
});
Route::get('/workshops/gcr', function() {
	$arr = ['title' => 'GESTURE CONTROLLED ROBOTICS',
			'bg' => 'gcr.jpg',
			'duration' => '6 HOURS',
			'cost' => '2,400/- for a Team',
			'date' => 'FEBRUARY 16th 2019',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'A Team can consist of maximum 3 members.',
			'timings' => '9:30 AM to 4:30 PM',
			'link' => 'https://www.townscript.com/e/gesture-controlled-robotics-currents-nit-trichy',
			'overview' => '
				<p>In the age of smart appliances, the everyday life of one and all have begun to change to a simple and more comfortable living. In this age of robotic vacuum cleaners to on-the-move refrigerators, robots have moved into our lives. These robots work on the basis of human interaction, a prominent one being Gesture Control. With a flick of your fingers, these bots arise to do your bidding. CURRENTS’19 presents a comprehensive workshop into this mesmerizing and magical world of Gesture Controlled Robotics starting from understanding the concepts of these robots to its control through hand gestures</p>',
			'contact' => '
				<p>Ananda Rangan<br>+91 94877 30712<p>
				<p>Bhavya<br>+91 94006 14389</p>',
			'color' => 'white',
			'talign' => 'left',
			'team_spec' => 'A Team can consist of maximum 3 members.',
			'prereq' => true,
			'slots' => false
		];
	return view('19.workshop', $arr);
});


Route::get('/workshops/pcb', function() {
	$arr = ['title' => 'PCB DESIGN',
			'bg' => 'pcb.jpg',
			'duration' => '3 HOURS',
			'cost' => '350/- per head',
			'date' => '<br>FEBRUARY 14th 2019, <br> FEBRUARY 16th 2019',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '<br>Slot 1 : 05:00 PM - 08:00 PM - FEBRUARY 14th 2019<br>
						  Slot 2 : 05:00 PM - 08:00 PM - FEBRUARY 16th 2019',
			'link' => 'https://www.townscript.com/e/pcb-design-workshop-currents-nit-trichy',
			'overview' => '
				<p>
				Great innovations always start from a simple schematic and then move ahead to
				building of a prototype on a breadboard. Once the prototype shows favourable 
				results, you would want to solidify your results and make it application ready. 
				This stage is the fabrication of the Printed Circuit Boards, or as they are 
				commonly called, PCB. Providing the necessary mechanical support and cluster 
				free electrical connections, PCBs offer ease of monitoring and reliable results 
				when compared to other wiring techniques.</p>
					
				<p>Needless to say, PCB design is an indispensable skill for an engineer working on
				any project.</p>
					
				<p>CURRENTS’19 presents the workshop on PCB design, a comprehensive workshop 
				covering topics right from designing a schematic to getting the PCB layout 
				printed from a manufacturer</p>',
			'contact' => '
				<p>Laxman<br>+91 94872 25817</p>
				<p>Nithin<br>+91 99401 58850</p>',
			'color' => 'white',
			'talign' => 'right',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => false,
			'slots' => true

		];
	return view('19.workshop', $arr);
});

Route::get('/workshops/python', function() {
	$arr = ['title' => 'PYTHON',
			'bg' => 'python.jpg',
			'duration' => '3 HOURS',
			'cost' => '350/- per head',
			'date' => 'FEBRUARY 14th &<br> FEBRUARY 16th 2019',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '<br>Slot 1 : 05:00 PM - 08:00 PM - FEBRUARY 14th 2019<br>
						  Slot 2 : 05:00 PM - 08:00 PM - FEBRUARY 16th 2019',
			'link' => 'https://www.townscript.com/e/python-workshop-currents-nit-trichy',
			'overview' => '
				<p>
				Soaring high above all other object-oriented programming language due to its elegant code syntax, it’s not surprising for Python to be preferred by tech giants such as Google, YouTube and Quora. With a plethora of open source libraries available for applications in data analysis and web development to name a few, python is versatile to meet the requirements of any coder. CURRENTS’19 presents its workshop to cover basics of programming in Python to kick start your venture into the amazing world of popular coding.</p>',
			'contact' => '
				<p>Harinaath Gobi<br>+91 82201 08895</p>
				<p>Vivek<br>+91 96001 33170</p>',
			'color' => 'white',
			'talign' => 'left',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => false,
			'slots' => true

		];
	return view('19.workshop', $arr);
});

Route::get('/workshops/ar', function() {
	$arr = ['title' => 'AUGMENTED REALITY',
			'bg' => 'ar.jpg',
			'duration' => '6 HOURS',
			'cost' => '400/- per head',
			'date' => 'FEBRUARY 17th 2019',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '09:30 AM - 4:30 PM',
			'link' => 'https://www.townscript.com/e/augmented-reality-workshop-currents-nit-trichy',
			'overview' => '
				<p>
				Augmented reality made its debut with Google glasses back in 2013.</p>
<p>
However, the real flare for the innovation began with Niantic’s launch of Pokémon GO that captivated the hearts of young and old in 2016. The interactive gameplay soared above others due to its application of augmented reality enlivening the reality we live in. For those fascinated by this technology, CURRENTS’19 presents a workshop on implementing augmented reality through OpenGL.</p>',
			'contact' => '
				<p>Nithin<br>+91 99401 58850</p>
				<p>Vivek<br>+91 96001 33170</p>',
			'color' => 'white',
			'talign' => 'left',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => false,
			'slots' => false

		];
	return view('19.workshop', $arr);
});

Route::get('/workshops/ip', function() {
	$arr = ['title' => 'IMAGE PROCESSING',
			'bg' => 'ip.jpg',
			'duration' => '3 HOURS',
			'cost' => '400/- per head',
			'date' => '<br>15th FEBRUARY 2019, <br> 17th FEBRUARY 2019',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '
<br>Slot 1 : 05:00 PM - 08:00 PM - FEBRUARY 15th 2019<br>
Slot 2 : 01:30 PM - 04:30 PM - FEBRUARY 17th 2019<br>',
			'link' => 'https://www.townscript.com/e/image-processing-workshop-currents-nit-trichy',
			'overview' => '
				<p>
				In the age Creative Instagram filters to safety features using facial recognition, signal processing dealing with the manipulation of 2 dimensional digital images has become one of the current trendy technologies. CURRENTS’19 presents the startup pack to the world of Image Processing through the Python programming language. The workshop will cover all that’s needed to code and implement your very own image processing application for human interaction with your device.</p>',
			'contact' => '
				<p>Harinaath Gobi<br>+91 82201 08895</p>
				<p>Vivek<br>+91 96001 33170</p>',
			'color' => 'black',
			'talign' => 'right',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => false,
			'slots' => true

		];
	return view('19.workshop', $arr);
});

Route::get('/workshops/embedded',function(){
	return view('19.coming_soon');
});

Route::get('/workshops/renewable', function() {
	$arr = ['title' => 'RENEWABLE ENERGY SYSTEMS',
			'bg' => 're.jpg',
			'duration' => '6 HOURS',
			'cost' => '400/- per head',
			'date' => ' 16th FEBRUARY 2019',
			'venue' => 'Orion NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '09:30 AM - 04:30 PM<br>',
			'link' => 'https://www.townscript.com/e/renewable-energy-systems-currents-nit-trichy',
			'overview' => '
				<p>Dwindling coal reserves coupled with the rising awareness about pollution, the shift in interest towards renewable energy was inevitable. In the crude oil industry, the Indian Government has declared that initiatives have been taken to change one-third of the diesel and petrol vehicles to electric by 2030. These developments point towards a promising change for a clean and green Earth in the future. To equip you, the future citizens of the country for this shift, we at CURRENTS’19 present to you a starter pack to kickstart your adventure in the world of renewable energy</p>',
			'contact' => '
				<p>Laxman<br>+91 94872 25817</p>
				<p>Aishwarya<br>+91 94872 60290</p>',
			'color' => 'black',
			'talign' => 'right',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => false,
			'slots' => false
		];
	return view('19.workshop', $arr);
});

Route::get('/workshops/touchpad', function() {
	$arr = ['title' => 'TOUCHPAD',
			'bg' => 'touchpad.jpg',
			'duration' => '6 HOURS',
			'cost' => '2,100/- for a Team',
			'date' => '15th FEBRUARY 2019',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'A Team of maximum 3 members.',
			'timings' => '09:30 AM - 04:30 PM<br>',
			'link' => 'https://www.townscript.com/e/touch-pad-workshop-currents-nit-trichy',
			'overview' => '
				<p>It’s no secret that companies strive to reach beyond their peaks for bigger and better products, the smartphone industry being no less demanding. The striking features of smart phones mainly lies with its touchscreen. Apart from its display, the precision with which the human input is being received is what sets the mark. Do you have the curiosity to understand the concepts under this phenomenal concept? Come join us in CURRENTS’19 for the understanding and implementation of touchpads in your projects!
</p>',
			'contact' => '
				<p>Ananda Rangan<br>+91 94877 30712<p>
				<p>Amritha<br>+91 75500 00647</p>',
			'color' => 'white',
			'talign' => 'left',
			'team_spec' => 'A team of maximum 3 members.',
			'prereq' => true,
			'slots' => false

		];
	return view('19.workshop', $arr);
});

Route::get('/eureka/register', function() {
	return view('19.eureka_register');
});