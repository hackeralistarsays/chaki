<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FinanceRegistrationController extends Controller
{
    //
    public function index(Request $request){
        $id = $request->session()->get('id');
        $name = $request->session()->get('username');
        $students = DB::table('students')->where('id',$id)->get();
        foreach ($students as $student) {
            # code...

        }
        $courses = DB::table('courses')->where('name',$student->course)->get();
        foreach ($courses as $course) {
            # code...
        }
        $details = DB::table('courses_details')->where('course_id',$course->id)->get();
        
        return view('portal.finance.finance-registration',[
            'name'=>$name,
            'course'=>$student->course,
            'regno'=>$student->regno,
            'courses'=>$courses,
            'details'=>$details,
            'students'=>$students,
        ]);
    }

    public function register(Request $request){

        $id = $request->session()->get('id');
        $name = $request->session()->get('username');
        $students = DB::table('students')->where('id',$id)->get();
        foreach ($students as $student) {
            # code...

        }
        $courses = DB::table('courses')->where('name',$student->course)->get();
        foreach ($courses as $course) {
            # code...
            $course_id = $course->id;
            $courseName = $course->name;
        }
        $code = DB::table('courses_details')->where('course_id',$course_id)->get();
        foreach ($code as $cc) {
            # code...
            $courseCode = $cc->code;
            $stream = $cc->qualification;
        }

        $details = DB::table('courses_details')->where('course_id',$course->id)->get();
        if (!DB::table('student_classes')->where('student_id',$id)->get()->isEmpty()) {
            # code...
            $request->session()->flash('already_registered', 'You have already registered for this semester');
            return redirect()->back();
        }else{

            DB::table('student_classes')->insert([
                  'course_id'=>$course_id,
                  'student_id'=>$id,
                  'stream'=>$stream,
                  'year'=>$student->year_of_study,
                  'class_name'=>$courseName,
                  'trial'=>1,
                  'status'=>$student->status,
                  'created_at'=> date('Y-m-d'),
              ]);
  
          $request->session()->flash('success_update', 'Finance Registration was successful');
          return redirect('/dashboard');
        }
    }
}
