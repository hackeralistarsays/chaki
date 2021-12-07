<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Features extends Controller
{
    public function index(){
        $features = DB::table('features')->get();
        return view('dashboards.features',['features'=>$features]);
    }

    //The following function will create a new feature
    public function create(Request $request){
        //Lets Get the valeus from input
        $feature = $request->input('feature');
        $value = $request->input('value');
        $created_at = date('Y-m-d h:i:s');

        if($feature == "" or $feature == null){
            //set data in a flash session
            $request->session()->flash('error', 'Can not create with an empty value');
            return redirect()->back();
        }
        if($value == "" or $value == null){
            //set data in a flash session
            $request->session()->flash('error', 'Can not create with an empty value');
            return redirect()->back();
        }

        DB::table('features')->insert([
            'feature'=>$feature,
            'value'=>$value,
            'created_at'=>$created_at
        ]);
        return redirect()->back()->with('success', 'Payment Updated Successfully');
    }
    
    //Activating a feature
    public function activate($id){
        DB::table('features')->where('id', $id)->update([
            'state' => 'active',
            'updated_at' => date('Y-m-d h:i:s'),
        ]);
        return redirect()->back()->with('success', 'Feature Updated Successfully');
    }
    //Activating a feature
    public function deactivate($id){
        DB::table('features')->where('id', $id)->update([
            'state' => 'inactive',
            'updated_at' => date('Y-m-d h:i:s'),
        ]);
        return redirect()->back()->with('success', 'Feature Updated Successfully');
    }

    public function indexStudent(){
        return view('adminStudent');
    }


}
