<?php


use Illuminate\Http\Request;
use Sangria\JSONResponse;
use Sangria\IMAPAuth;
use App\CcaDetails;
use App\EurekaDetails;
use App\Feedback;

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

Route::post('/cca/apply', function(Request $request) {
    
    $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'college' => 'required',
            'branch' => 'required',
            'year' => 'required',
            'por' => 'required',
            'mobile' => 'required|integer',
            'perma_phone' => 'required|integer',
            'curr_addr' => 'required',
            'perm_addr' => 'required'
        ]);

        if ($validator->fails()) {
            $status_code = 400;
            $response    = $validator->failed();
            return JSONResponse::response($status_code, $response);
        }
        
        $name     = $request->input('name');
        $email     = $request->input('email');
        $dob = $request->input('dob');
        $college    = $request->input('college');
        $branch     = $request->input('branch');
        $year  = $request->input('year');
        $por = $request->input('por');
        $mobile = $request->input('mobile');
        $perma_phone  = $request->input('perma_phone');
        $curr_addr = $request->input('curr_addr');
        $perm_addr  = $request->input('perm_addr');
        $existing = CcaDetails::where('email', $email)->first();

        if($existing) {
            $status_code = 409;
            $response = "Already registered";
            return JSONResponse::response($status_code, $response);
        }


        $last = CcaDetails::all()->last();
        $last_id = $last->id;

        $ref_id = "CCA19-".str_pad($last_id + 1, 4, "0", STR_PAD_LEFT);


        $cca_registration = new CcaDetails();
        $cca_registration->name = $name;
        $cca_registration->email = $email;
        $cca_registration->dob = $dob;
        $cca_registration->college = $college;
        $cca_registration->branch = $branch;
        $cca_registration->year = $year;
        $cca_registration->por = $por;
        $cca_registration->mobile = $mobile;
        $cca_registration->perma_phone = $perma_phone;
        $cca_registration->curr_addr = $curr_addr;
        $cca_registration->perm_addr = $perm_addr;
        $cca_registration->ref_id = $ref_id;
        $cca_registration->save();

        $status_code = 200;
        $response = $ref_id;


        return JSONResponse::response($status_code, $response);
});


Route::post('/eureka/apply', function(Request $request) {
    
    $validator = Validator::make($request->all(), [
            'name_1' => 'required',
            'class_1' => 'required',
            'name_2' => 'required',
            'class_2' => 'required',
            'school' => 'required',
            'coordinator' => 'required',
            'phone' => 'required',
            'theme' => 'required',
            'abstract' => 'required'
        ]);

        if ($validator->fails()) {
            $status_code = 400;
            $response    = $validator->failed();
            return JSONResponse::response($status_code, $response);
        }
        
        $name_1      = $request->input('name_1');
        $class_1     = $request->input('class_1');
        $contact_1   = $request->input('contact_1');
        $name_2      = $request->input('name_2');
        $class_2     = $request->input('class_2');
        $contact_2   = $request->input('contact_2');
        $school      = $request->input('school');
        $school_address = $request->input('school_address');
        $coordinator = $request->input('coordinator');
        $phone       = $request->input('phone');
        $email       = $request->input('email');
        $theme       = $request->input('theme');
        $abstract    = $request->input('abstract');

        $eureka_registration = new EurekaDetails();

        $eureka_registration->name_1 = $name_1;
        $eureka_registration->class_1 = $class_1;
        $eureka_registration->contact_1 = $contact_1;
        $eureka_registration->name_2 = $name_2;
        $eureka_registration->class_2 = $class_2;
        $eureka_registration->contact_2 = $contact_2;
        $eureka_registration->school = $school;
        $eureka_registration->school_address = $school_address;
        $eureka_registration->coordinator = $coordinator;
        $eureka_registration->phone = $phone;
        $eureka_registration->email = $email;
        $eureka_registration->theme = $theme;
        $eureka_registration->abstract = $abstract;

        $eureka_registration->save();

        $status_code = 200;
        $response = "OK";

        return JSONResponse::response($status_code, $response);
});

Route::post('/feedback', function(Request $request) {
        $feedback = new Feedback();
        $feedback->c_id     = $request->input('c_id');
        $feedback->workshop = $request->input('workshop');
        $rating   = $request->input('rating');      
        $feedback->rating_1 = $rating['rating_1'];
        $feedback->rating_2 = $rating['rating_2'];
        $feedback->rating_3 = $rating['rating_3'];
        $feedback->rating_4 = $rating['rating_4'];
        $feedback->rating_5 = $rating['rating_5'];
        $feedback->rating_6 = $rating['rating_6'];
        $feedback->aspect = $request->input('aspect');
        $feedback->improvements = $request->input('improvements');
        $feedback->howknow = $request->input('howknow');
        $feedback->save();

        $status_code = 200;
        $response = "OK";

        return JSONResponse::response($status_code, $response);
});