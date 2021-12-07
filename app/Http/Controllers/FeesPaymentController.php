<?php

namespace App\Http\Controllers;

use App\Courses as AppCourses;
use App\FeeStructure;
use App\Student;
use Courses;
use Illuminate\Http\Request;

class FeesPaymentController extends Controller
{
    public function index()
    {
        $feestructure = FeeStructure::all();
        return view('fees.index', compact('feestructure'));
    }

    public function course($id)
    {
        $course = AppCourses::find($id);
        return view('fees.course', compact('course'));

    }

    public function create($id)
    {
        $course = AppCourses::find($id);
        return view('fees.create', compact('course'));
    }

    public function store(Request $request, $id)
    {
        $this->validate($request, [

        ]);
    }

    public function show($id)
    {
        return view('fees.show');
    }

    public function structure(Request $request)
    {
        $student = Student::find($request->session()->get('id'));
        return view('fees.index', compact('student'));
    }
}
