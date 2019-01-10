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
    return view('18.temp');
});

Route::get('/faq',function(){
	return view('18.faq');
});

Route::get('/hospitality',function(){
    return view('18.hospitality');
});

Route::get('/sponsors',function(){
	return view('18.sponsors');
});

Route::get('/about',function(){
	return view('18.aboutus');
});

Route::get('/lectures', function () {
    return view('18.gl');
});

Route::get('/initiatives', function () {
    return view('18.coming_soon');
});

Route::get('/events', function () {
    return view('18.events');
});

Route::get('/workshops',function(){
	return view('18.workshops');
});

Route::get('/schedule', function () {
    return view('18.schedule');
});

Route::get('/outreach',function(){
	return view('18.outreach');
});


Route::get('/contact', function(){
	return view('18.temp');
});

Route::get('/magazines/{file}', function($file_name) {
	$file_path = public_path('magazines/'.$file_name);
	return response()->download($file_path);
});

Route::get('/tronicals', function() {
	return view('18.tronicals');
});

Route::get('/cca', function() {
	return view('18.cca');
});

Route::get('/cca/apply', function() {
	return view('18.cca_apply');
});

Route::get('/eureka', function() {
	return view('18.eureka');
});

Route::get('/volts', function() {
	return view('18.volts');
});

Route::get('/volts/bengaluru', function() {
	return view('18.bangalore');
});

Route::get('/volts/kochi', function() {
	return view('18.kochi');
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
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.682713870967!2d78.81103031422612!3d10.758918092333415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baa8d47758e1ae1%3A0xb3e16389eeab05a!2sNational+Institute+of+Technology+Tiruchirappalli!5e0!3m2!1sen!2sin!4v1547021447827',
			'link' => 'https://bit.ly/2sjkOHq'
		];
	return view('18.gate', $arr);
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
	return view('18.gate', $arr);
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
	return view('18.gate', $arr);
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
	return view('18.gate', $arr);
});

Route::get('/eureka/register', function() {
	return view('18.eureka_register');
});