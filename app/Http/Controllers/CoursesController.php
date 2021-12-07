<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class CoursesController extends Controller
{
    /**
     * courses view
     */
    public function index(){
    $courses = Courses::orderBy('id','DESC')->get();
    $students = Student::all();
    return view('pages.courses', compact('courses', 'students'));
}
    public function view($id){
    $course = Courses::find($id);
    $courses = DB::table('courses')->where('id',$id)->get();
    $details = DB::table('courses_details')->where('course_id',$id)->get();
    $requirements = DB::table('courses_entry_requirements')->where('course_id',$id)->get();
    $aggregates = DB::table('courses_entry_point')->where('course_id',$id)->get();
    $structures = DB::table('courses_structure')->where('course_id',$id)->get();
    $units = DB::table('courses_units')->where('course_id',$id)->get();
    $students = Student::all();
    return view('pages.course-structure', [
        'courses'=>$courses,
        'course'=>$course,
        'details'=>$details,
        'requirements'=>$requirements,
        'aggregates'=>$aggregates,
        'structures'=>$structures,
        'units'=>$units,
        'students'=>$students
        ]);
}

    public function addCourse(){
        $departments = DB::table('departments')->get();
        //dd($department);
        return view('courses.add',['departments'=>$departments]);
    }
    //
    public function create(Request $request){

        //get the system date as the date of admission
        $date = date("Y-m-d");

        //create a new model of student


        //get the data from the form
        $name = $request->input('name');



        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string',
            'department' => 'required|string',
            'duration' => 'required|integer',
            'hod' => 'required|string',
            'time' => 'required|string',
        ]);

        $imagePath = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(400, 350);
        $image->save();

        /* $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName); */



        //check if there a course with similar name
        $name = DB::table('courses')->where('name', $name)->get();
        if(!$name->isEmpty()){
            //set error message and return redirect
            $request->session()->flash('error', 'There is a Course with the name '.$name.'. Each name should be unique');
            $departments = DB::table('departments')->get();
            return view('courses.add', [
                'name'=>$request['name'],
                'image'=>$imagePath,
                'department'=>$request['department'],
                'duration'=>$request['duration'],
                'hod'=>$request['hod'],
                'time'=>$request['time'],
                'departments' => $departments,
            ]);
        }



        //Query Course data to the database
        DB::table('courses')->insert([
            'name' => $request['name'],
            'photo' => $imagePath,
            'department' => $request['department'],
            'duration' => $request['duration'],
            'professor' => $request['hod'],
            'state' => $request['time'],
            'created_at' => $date,
        ]);

        //get the course from the database
        $course = DB::table('courses')->where('name','==', $name)->get();





        //get the student id in the database
        $next = DB::table('courses')->where('name',$request['name'])->get();
        //dd($next);

        foreach($next as $stud){
            $names = $stud->name;
            $id = $stud->id;
        }
        return redirect()->route('course.details', $id);



    }

    public function show(){
        //
        $courses = Courses::all();
        $students = Student::all();
        return view('courses.index',compact('courses', 'students'));
    }
    public function details($id){
        $course = DB::table('courses')->where('id',$id)->get();
        foreach($course as $course){
            $name = $course->name;
        }
        return view('courses.details', ['course'=>$course, 'id'=>$id, 'name'=>$name]);

    }
    public function submitDetails(Request $request){
        //
        $created = date('Y-m-d');
        $request->validate([
            'detail' => 'required|string',
            'qualification' => 'required|string',
            'length' => 'required|integer',
            'time' => 'required|string',
            'code' => 'required|string',
        ]);

        DB::table('courses_details')->insert([
            'course_id' => $request['course_id'],
            'details' => $request['detail'],
            'qualification' => $request['qualification'],
            'length' => $request['length'],
            'state' => $request['time'],
            'code' => $request['code'],
            'created_at' => $created,
        ]);
        return redirect()->route('course.structure', $request['course_id']);

    }
    public function structure($id){
        $course = DB::table('courses')->where('id',$id)->get();
        foreach($course as $course){
            $name = $course->name;
        }
        return view('courses.structure', ['course'=>$course, 'id'=>$id, 'name'=>$name]);

    }

    public function submitStructure(Request $request){
        //
        $created = date('Y-m-d');
        $request->validate([
            'structure' => 'required|string',

        ]);

        DB::table('courses_structure')->insert([
            'course_id' => $request['course_id'],
            'structure' => $request['structure'],
            'created_at' => $created,
        ]);
        return redirect()->route('course.units', $request['course_id']);

    }

    public function units($id){
        $course = DB::table('courses')->where('id',$id)->get();
        foreach($course as $course){
            $name = $course->name;
        }
        return view('courses.units', ['course'=>$course, 'id'=>$id, 'name'=>$name]);

    }

    public function specific($id){
       $units =  DB::table('courses_units')->where('course_id',$id)->get();
       foreach ($units as $unit) {
           # code...
       }
        return view('courses.specific_details',['units'=>$units,'id'=>$id]);

    }

    public function submit(Request $request){
        //
        $created = date('Y-m-d');
        $year = date('Y');
        $request->validate([
            'unit_name' => 'required|string|unique:courses_units',
            'code' => 'required|string|unique:courses_units',
            'cf' => 'required|string',
            'year' => 'required|integer',
            'semester' => 'required|integer',

        ]);

        $unit_name = DB::table('courses_units')->where('unit_name',$request['unit_name'])->get();

        if (!$unit_name->isEmpty()) {
            # code...
            $request->session()->flash('name_check', $request['unit_name'] . 'already exists, COMMON UNIT?');
            return redirect()->back();
        }

        $unit_code = DB::table('courses_units')->where('code',$request['code'])->get();

        if (!$unit_code->isEmpty()) {
            # code...
            $request->session()->flash('code_check', $request['code'] . 'already exists');
            return redirect()->back();
        }

        DB::table('courses_units')->insert([
            'course_id' => $request['course_id'],
            'unit_name' => $request['unit_name'],
            'code' => $request['code'],
            'qualification' => $request['cf'],
            'year' => $request['year'],
            'semester'=>$request['semester'],
            'created_at' => $created,
        ]);
        $request->session()->flash('updated_successfully', $request['unit_name'] .' '. 'has been added successfull');
        return redirect()->back();

    }
    public function submitUnits(Request $request){
        //
        $created = date('Y-m-d');
        $year = date('Y');
        $request->validate([
            'unit' => 'required|string',
            'code' => 'required|string',
            'cf' => 'required|string',

        ]);

        DB::table('courses_units')->insert([
            'course_id' => $request['course_id'],
            'unit_name' => $request['unit'],
            'code' => $request['code'],
            'qualification' => $request['cf'],
            'year' => $year,
            'created_at' => $created,
        ]);
        return redirect()->route('course.entry', $request['course_id']);

    }

    public function entry($id){
        $course = DB::table('courses')->where('id',$id)->get();
        foreach($course as $course){
            $name = $course->name;
        }
        return view('courses.entry', ['course'=>$course, 'id'=>$id, 'name'=>$name]);

    }

    public function submitEntry(Request $request){
        //
        $created = date('Y-m-d');
        $request->validate([
            'subject' => 'required|string',
            'score' => 'required|string',


        ]);

        DB::table('courses_entry_requirements')->insert([
            'course_id' => $request['course_id'],
            'Subjects' => $request['subject'],
            'score' => $request['score'],
            'created_at' => $created,
        ]);
        return redirect()->route('course.point', $request['course_id']);

    }
    public function point($id){
        $course = DB::table('courses')->where('id',$id)->get();
        foreach($course as $course){
            $name = $course->name;
        }
        return view('courses.point', ['course'=>$course, 'id'=>$id, 'name'=>$name]);

    }

    public function submitPoint(Request $request){
        //
        $created = date('Y-m-d');
        $request->validate([
            'points' => 'required|integer',



        ]);

        DB::table('courses_entry_point')->insert([
            'course_id' => $request['course_id'],
            'point' => $request['points'],
            'created_at' => $created,
        ]);
        $courses = DB::table('courses')->get();
        return view('courses.index',['courses'=>$courses]);

    }
}
