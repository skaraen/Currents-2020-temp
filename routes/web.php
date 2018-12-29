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
	return view('18.coming_soon');
});

Route::get('/eureka/register', function() {
	return view('18.eureka_register');
});