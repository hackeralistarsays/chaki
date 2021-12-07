<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DepartmentsController extends Controller
{
    public function addDepartment(){
        return view('departments.add');
    }
    public function insertDepartment(Request $request){

        //get the system date as the date of admission
        $date = date("Y-m-d");
        //get the data from the form
        $name = $request->input('name');
        $abbr = $request->input('abbr');

        $request->validate([
            'name' => 'required|string',
            'abbr' => 'required|string',
           
            
        ]);

        //check if there is a department with same name
        $name_conflict = DB::table('departments')->where('name', $name)->get();
        if(!$name_conflict->isEmpty()){
            //set error message and return redirect
            $request->session()->flash('error', 'There is a department with the name '.$name.'. Each department name should be unique');
            return view('departments.add', [
                'name'=>$name,
                'abbr'=>$abbr,
                
            ]);
        }
        //check if there is a department with same name
        $abbr_conflict = DB::table('departments')->where('abbr', $abbr)->get();
        if(!$abbr_conflict->isEmpty()){
            //set error message and return redirect
            $request->session()->flash('error', 'There is a department with the abbreviation '.$abbr.'. Each department Abbreviation should be unique');
            return view('departments.add', [
                'name'=>$name,
                'abbr'=>$abbr,
                
            ]);
        }

        


       


        //Query to insert department data to the database
        DB::table('departments')->insert([
            'name' => $name,
            'abbr' => $abbr,
            'created_at' => $date
        ]);
        



           return redirect()->route('all.departments');

        
    }
    public function showAllDepartments(){

        $students = DB::table('departments')->get();

        return view('departments.index', ['students'=>$students, 'message'=>"", 'parents_included'=>"no", 'class_name'=>"", 'streams'=>""]);
    }
}
