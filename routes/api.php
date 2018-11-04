<?php


use Illuminate\Http\Request;
use Sangria\JSONResponse;
use Sangria\IMAPAuth;
use App\InternDetails;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/auth', function(Request $request) {
    $validator = Validator::make($request->all(), [
        'roll' => 'required|integer',
        'password'  => 'required',
    ]);

    if ($validator->fails()) {
        $response = "Invalid Parameters";
        return JSONResponse::response(400, $response);
    }

    $roll    = $request->input('roll');
    $password = $request->input('password');

    if (IMAPAuth::tauth($roll, $password)) {
        $status_code = 200;
        $message = "OK";
    } else {
        $status_code = 401;
        $message     = "Authentication failed";
    }
    return JSONResponse::response($status_code, $message);
});

Route::post('/intern/apply', function(Request $request) {
    
    $validator = Validator::make($request->all(), [
            'name' => 'required',
            'roll' => 'required|integer',
            'email_id' => 'required|email',
            'phone' => 'required',
            'year' => 'required',
            'project_one' => 'required',
            'project_two' => 'required',
            'project_three' => 'required',
            'sop' => 'required'
        ]);

        if ($validator->fails()) {
            $status_code = 400;
            $response    = $validator->failed();
            return JSONResponse::response($status_code, $response);
        }
        
        $name     = $request->input('name');
        $roll     = $request->input('roll');
        $email_id = $request->input('email_id');
        $phone    = $request->input('phone');
        $year     = $request->input('year');
        $project_one  = $request->input('project_one');
        $project_two  = $request->input('project_two');
        $project_three  = $request->input('project_three');
        $sop      = $request->input('sop');

        $existing = InternDetails::where('roll', $roll)->first();

        if($existing) {
            $status_code = 409;
            $response = "Already registered";
            return JSONResponse::response($status_code, $response);
        }

        $intern_registration = new InternDetails();
        $intern_registration->name = $name;
        $intern_registration->roll = $roll;
        $intern_registration->email_id = $email_id;
        $intern_registration->phone = $phone;
        $intern_registration->year = $year;
        $intern_registration->project_one = $project_one;
        $intern_registration->project_two = $project_two;
        $intern_registration->project_three = $project_three;
        $intern_registration->sop = $sop;

        $intern_registration->save();

        $status_code = 200;
        $response = "OK";

        return JSONResponse::response($status_code, $response);
});
