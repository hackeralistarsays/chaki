<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentPortalController extends Controller
{
    //
    public function index(Request $request){
        $email =  $request->session()->get('email');
        $id_number =  $request->session()->get('id_number');
        $course_applicant = DB::table('course_applications')->where('email',$email)->get();
        $id = $request->session()->get('id');
        $student = Student::find($id);
        if(!$course_applicant->isEmpty()){

            foreach ($course_applicant as $app) {
                  # code...
                if ($app->state == 'complete') {
                    # code...
                    $studapp = DB::table('bio_information')->where('id_number',$id_number)->get();
                    foreach($studapp as $stu){
                        $app_id = $stu->id;
                        $appaddress = DB::table('address_information')->where('bio_id',$stu->id)->get();

                    }
                    //dd($appaddress);

                    $course = DB::table('courses')->where('id',$app->course_id)->get();
                    return view('portal.dashboard',['student'=>$student, 'studapp'=>$studapp, 'appaddress'=>$appaddress, 'course'=>$course]);
                }
            }
        }
    }

    public function registrarDash(){
        $applicants = DB::table('bio_information')->get();
    }
}
