<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminPaymentController extends Controller
{
    public function index(){
        $payments = DB::table('admin_payment')->get();
        $terms = DB::table('admin_payment_type')->get();
        return view('dashboards.new_dashboard', [
            'payments'=>$payments,
            'terms'=>$terms,
            
        ]);
    }

    public function terms(){
        $terms = DB::table('admin_payment_type')->get();
        return view('dashboards.terms_dashboard', [
            'terms'=>$terms,
            
        ]);
    }

    public function create(Request $request){


        //get the details from the form
        $from = $request->input('from');
        $to = $request->input('to');
        $type = $request->input('type');
        $status = $request->input('status');
        $fees = $request->input('fee');
        $created_at = date('Y-m-d h:i:s');


        if($fees == "" or $fees == null){
            //set data in a flash session
             $request->session()->flash('error', 'Can not update with an empty value');
             return redirect()->back();
        }

        if($fees <= 0){
            //set data in a flash session
             $request->session()->flash('error', 'Total fees can not be zero or a negative value. You entered '.$fees. ' ');
             return redirect()->back();
        }

        if($fees < 100 || $fees > 1000000){
            //set data in a flash session
             $request->session()->flash('error', 'Unreasonable total fees. You entered '.$fees.' ');
             return redirect()->back();
        }
        //Insert A new record
        $insert_new = DB::table('admin_payment')
                                ->insert([
                                    'from'=>$from,
                                    'to'=>$to,
                                    'type'=>$type,
                                    'status'=>$status,
                                    'amount'=>$fees,
                                    'created_at'=>$created_at,
                                    'updated_at'=>$created_at,
                                ]);
       

        
        return redirect()->back()->with('success', 'Payment created Successfully'); 
        
    }

    public function update(Request $request){


        //get the details from the form
        $id = $request->input('id');
        $from = $request->input('from');
        $to = $request->input('to');
        $type = $request->input('type');
        $status = $request->input('status');
        $fees = $request->input('fee');
        $created_at = date('Y-m-d h:i:s');


        if($fees == "" or $fees == null){
            //set data in a flash session
             $request->session()->flash('error', 'Can not update with an empty value');
             return redirect()->back()->with('error', 'Can not update with an empty value');
        }

        if($fees <= 0){
            //set data in a flash session
             $request->session()->flash('error', 'Total fees can not be zero or a negative value. You entered '.$fees. ' ');
             return redirect()->back()->with('error', 'Total fees can not be zero or a negative value. You entered '.$fees. ' ');
        }

        if($fees < 100 || $fees > 100000){
            //set data in a flash session
             $request->session()->flash('error', 'Unreasonable total fees. You entered '.$fees.' ');
             return redirect()->back()->with('error', 'Unreasonable total fees. You entered '.$fees.' ');
        }

        //update student details
        $student_update = DB::table('admin_payment')
        ->where('id', $id)
        ->update([
            'from'=>$from,
            'to'=>$to,
            'type'=>$type,
            'status'=>$status,
            'amount'=>$fees,
            'updated_at'=>$created_at,
        ]);

        
        
        return redirect()->back()->with('success', 'Payment Updated Successfully'); 
        
    }

    public function pay($id){
         DB::table('admin_payment')
        ->where('id', $id)
        ->update([
            'status' => 'paid',
        ]);
         return redirect()->back()->with('success', 'Payment Updated Successfully');
    }

    public function create_term(Request $request){


        //get the details from the form
        $type = $request->input('type');
        $period = $request->input('period');
        $description = $request->input('description');
        $created_at = date('Y-m-d h:i:s');
        //dd($created_at);

        if($type == "" or $type == null){
            //set data in a flash session
             $request->session()->flash('error', 'Can not update with an empty value');
             return redirect()->back();
        }

        if($period < 0){
            //set data in a flash session
             $request->session()->flash('error', 'Total fees can not be zero or a negative value. You entered '.$description. ' ');
             return redirect()->back();
        }

        if($description == '' || $description == null){
            //set data in a flash session
             $request->session()->flash('error', 'Unreasonable total fees. You entered '.$description.' ');
             return redirect()->back();
        }
        $comparisons = DB::table('admin_payment_type')->get();
        foreach($comparisons as $comparison){

            if($type == $comparison->type){
                //set data in a flash session
                 $request->session()->flash('error', 'Unreasonable total fees. You entered '.$description.' ');
                 return redirect()->back()->with('error', 'Type Aready Defined');
            }
        }
        //Insert A new record
        $insert_new = DB::table('admin_payment_type')
                                ->insert([
                                    'type'=>$type,
                                    'grace_period'=>$period,
                                    'description'=>$description,
                                    'created_at'=>$created_at,
                                    'updated_at'=>$created_at,

                                ]);
       

        
        return redirect()->back()->with('success', 'Payment created Successfully'); 
        
    }


    public function update_term(Request $request){


        //get the details from the form
        $type = $request->input('type');
        $id = $request->input('id');
        $period = $request->input('period');
        $description = $request->input('description');
        $created_at = date('Y-m-d h:i:s');
        //dd($created_at);

        if($type == "" or $type == null){
            //set data in a flash session
             $request->session()->flash('error', 'Can not update with an empty value');
             return redirect()->back();
        }

        if($period < 0){
            //set data in a flash session
             $request->session()->flash('error', 'Total fees can not be zero or a negative value. You entered '.$description. ' ');
             return redirect()->back();
        }

        if($description == '' || $description == null){
            //set data in a flash session
             $request->session()->flash('error', 'Unreasonable total fees. You entered '.$description.' ');
             return redirect()->back();
        }
        
        //Insert A new record
        $insert_new = DB::table('admin_payment_type')
                                ->where('id', $id)
                                ->update([
                                    'type'=>$type,
                                    'grace_period'=>$period,
                                    'description'=>$description,
                                    'created_at'=>$created_at,
                                    'updated_at'=>$created_at,

                                ]);
       

        
        return redirect()->back()->with('success', 'Payment created Successfully'); 
        
    }

    //This is the admin working on initialization of classes

    public function classes(){
        //Find All classes
        $classes = DB::table('classes')->get();
        return view('dashboards.add_class',['classes'=>$classes]);
    }

    public function addClass(Request $request){
        //
        //get the details from the form
        $class = $request->input('class');
        $full_name = $request->input('full_name');
        $created_at = date('Y-m-d h:i:s');

        if($class == "" or $class == null){
            //set data in a flash session
            $request->session()->flash('error', 'Can not update with an empty value');
            return redirect()->back();
        }
        if($full_name == "" or $full_name == null){
            //set data in a flash session
            $request->session()->flash('error', 'Can not update with an empty value');
            return redirect()->back();
        }

              //Insert A new record
        $insert_new = DB::table('classes')
                                ->insert([
                                    'class_name'=>$class,
                                    'full_name'=>$full_name,
                                    'created_at'=>$created_at,
                                    'updated_at'=>$created_at,

                                ]);
         return redirect()->back()->with('success', 'Class created Successfully'); 
        }
        
        //destroy object instance
        public function destroy($id){
            DB::table('classes')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Class created Successfully'); 
    }
}
