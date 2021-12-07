<?php

namespace App\Http\Controllers;

use App\Courses;
use App\FeeItem;
use App\NominalRoll;
use App\Student;
use App\StudentInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NominalRollController extends Controller
{
    /**
     * Get All Nominal Rolls
     */
    public function index()
    {
        $rolls = NominalRoll::all();
        //TODO: return a view();
    }

    /**
     * Creating a nominal roll
     */
    public function create(Request $request)
    {
        $id = $request->session()->get('id');
        $name = $request->session()->get('username');
        $regno = $request->session()->get('regno');
        $student = Student::find($id);

        $courses = DB::table('courses')->where('name',$student->course)->get();
        foreach ($courses as $course) {
            # code...
        }
        $details = DB::table('courses_details')->where('course_id',$course->id)->get();

        return view('portal.rolls.create', compact('name', 'course', 'regno', 'details', 'student'));


    }

    /**
     * store the nominal roll instance
     */
    public function store(Request $request)
    {
        $student = Student::find($request->session()->get('id'));
        $courses = Courses::where('name', $student->course)->get();
        foreach ($courses as $course) {
            # code...
            $structures = $course->feestructure->where('semester', $student->semester)->where('year', $student->year_of_study);
        }
        if ($structures->isEmpty()) {
            # code...
            return redirect()->back()->with('status', 'Fee Strusture hasnt been added yet');
        }else {
            # code...
            foreach ($structures as $structure) {
                # code...
            }
            $amount = FeeItem::where('fee_structure_id', $structure->id)->sum('amount');
        }

        $check = NominalRoll::where('student_id', $student->id)->where('session',$student->year_of_study.$student->semester);
        //dd($check->get()->isEmpty());
        if ($check->get()->isEmpty()) {
            # make a new roll entry
            $roll =  new NominalRoll();
            $roll->student_id = $student->id;
            $roll->session = $student->year_of_study.$student->semester;
            $roll->status = $student->status;
            $roll->created_at = date('Y-m-d');
            $roll->save();

            #create a new invoice object
            $invoice = new StudentInvoice();
            $invoice->student_id = $student->id;
            $invoice->nominal_roll_id = $roll->id;
            $invoice->serial = Str::random(7);
            $invoice->amount = $amount;
            $invoice->status = "invoiced";
            $invoice->created_at = date('Y-m-d');
            $invoice->save();

            return redirect()->back()->with('status', 'Nominal roll submited successfully');


        }elseif ($check->where('status', 'inactive')->get() != null) {
            # confirm by the department
            return redirect()->back()->with('status', 'Student Not In Session, Please visit your department for more information');
        }elseif ($check->where('disciplinary', 'suspended')->get() != null) {
            # seek clearance first
            return redirect()->back()->with('status', 'You have a disciplinary case pending, Seek clearance!');
        }else {
            #have already registered invoke doNothing()
            return redirect()->back()->with('status', 'You have already signed this roll');
        }
    }

    public function show($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

}
