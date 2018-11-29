<?php


use Illuminate\Http\Request;
use Sangria\JSONResponse;
use Sangria\IMAPAuth;
use App\CcaDetails;

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


        $last_id = DB::getPdo()->lastInsertId();

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


/*Route::post('/intern/apply', function(Request $request) {
    
    $validator = Validator::make($request->all(), [
            'name' => 'required',
            'roll' => 'required|integer',
            'email_id' => 'required|email',
            'phone' => 'required',
            'year' => 'required',
            'project_one' => 'required',
            'project_two' => 'required',
            'project_three' => 'required',
            'sop_one' => 'required',
            'sop_two' => 'required',
            'sop_three' => 'required',
            'cgpa' => 'required'


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
        $sop_one = $request->input('sop_one');
        $project_two  = $request->input('project_two');
        $sop_two = $request->input('sop_two');
        $project_three  = $request->input('project_three');
        $sop_three = $request->input('sop_three');
        $cgpa = $request->input('cgpa');
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
        $intern_registration->cgpa = $cgpa;
        $intern_registration->sop_one = $sop_one;
        $intern_registration->sop_two = $sop_two;
        $intern_registration->sop_three = $sop_three;

        $intern_registration->save();

        $status_code = 200;
        $response = "OK";

        return JSONResponse::response($status_code, $response);
});
*/