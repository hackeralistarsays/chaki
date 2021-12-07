<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentUnitsController extends Controller
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
        $units = DB::table('courses_units')->where('course_id',$course->id)->get();

        $finance_registration = DB::table('student_classes')->where('student_id',$id)->get();
        
        if ($finance_registration->isEmpty()) {
            # code...
            $request->session()->flash('error', 'Please Register for Finance To continue');
        }
        
        return view('portal.finance.units-registration',[
            'name'=>$name,
            'course'=>$student->course,
            'regno'=>$student->regno,
            'courses'=>$courses,
            'details'=>$details,
            'students'=>$students,
            'units'=>$units,
            'finance_registration'=>$finance_registration,
        ]);
    }
}
