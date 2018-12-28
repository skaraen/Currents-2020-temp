<?php


use Illuminate\Http\Request;
use Sangria\JSONResponse;
use Sangria\IMAPAuth;
use App\CcaDetails;
use App\EurekaDetails;

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
            'email' => 'required|email',
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
        $name_2      = $request->input('name_2');
        $class_2     = $request->input('class_2');
        $name_3      = $request->input('name_3');
        $class_3     = $request->input('class_3');
        $name_4      = $request->input('name_4');
        $class_4     = $request->input('class_4');
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
        $eureka_registration->name_2 = $name_2;
        $eureka_registration->class_2 = $class_2;
        $eureka_registration->name_3 = $name_3;
        $eureka_registration->class_3 = $class_3;
        $eureka_registration->name_4 = $name_4;
        $eureka_registration->class_4 = $class_4;
        $eureka_registration->school = $school;
        $eureka_registration->theme = $theme;
        $eureka_registration->abstract = $abstract;
        $eureka_registration->save();

        $status_code = 200;
        $response = "OK";

        return JSONResponse::response($status_code, $response);
});