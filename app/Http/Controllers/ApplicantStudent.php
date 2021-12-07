<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ApplicantStudent extends Controller
{
    //
    public function index(Request $request, $id){
        //let's send the letter of offer
        $receipients = DB::table('bio_information')->where('id',$id)->get();
        
       // dd($receipients);
        
        $response = null;
        /*Doing both the Letter of Offer and Admission Letter */
        $subject = 'University-Acceptance-Letter';

        if(!$receipients->isEmpty()){
        foreach ($receipients as $receipient) {
            # code...
            $application = DB::table('course_applications')->where('id_number',$receipient->id_number)->get();
            foreach ($application as $ca) {
                # code...
                $course_id = $ca->course_id;
            }
            $courses = DB::table('courses')->where('id',$course_id)->get();
            
            
            $p1 = '
            offered at Winterfel University. Kindly click the PROCEED button below to log into your account, complete the admission 
            process and access your admission letter. This offer expires after 3 working days.';
            
            $p2 = 'We pride ourselves in providing only for the best for our students. 
            Our university provides a state-of-the-art infrastructure, library and 
            word-renowned professors.';
            
            $p3 = 'Thank you for choosing Winterfel University; we look foward to a long 
            and prosperouse journey together.
             ';
             $first_name = $receipient->first_name;
             $middle_name = $receipient->middle_name;
             $last_name = $receipient->last_name;
             $id_number = $receipient->id_number;

             $details = [
                 'subject'=>$subject,
                 'p1' => $p1,
                 'p2' => $p2,
                 'p3' => $p3,
                 'first_name' => $first_name,
                 'middle_name' => $middle_name,
                 'last_name' => $last_name,
                 'id_number' => $id_number,
                 'courses'=>$courses,
             ];
             system("ping google.com", $response);
             if($response == 0)
             {
                 // there is internet connection
     
                     //foreach student, get the parent details
                 
                                         
     
                     
                        
                             //send email to parent
                              Mail::to($receipient->email)->send(new \App\Mail\LetterOfOffer($details));
                               //save the message details to db
                                                 $applicants = DB::table('course_applications')->where('id_number',$receipient->id_number)->get();
                                                 foreach ($applicants as $applicant) {
                                                     # code...
                                                     $courses = DB::table('courses')->where('id',$applicant->course_id)->get();
                                     
                                                 }
                                                 foreach ($courses as $course) {
                                                     # code...
                                                     $course_id = $course->id;
                                                 }
                                                $availability = DB::table('application_success')->where('id_number',$applicant->id_number)->get();
                                                if ($availability->isEmpty()) {
                                                    # code...
                                                    DB::table('application_success')->insert([
                                                         'first_name' => $receipient->first_name,
                                                         'middle_name' => $receipient->middle_name,
                                                         'last_name' => $receipient->last_name,
                                                         'bio_id' => $id,
                                                         'course_id' => $course_id,
                                                         'id_number' => $receipient->id_number,
                                                         'email' => $receipient->email,
                                                         'created_at' => date('Y-m-d')
                                         
                                                     ]); 
                                                }
                                                 
                         
     
                     
                
                 
     
                 //messages have been send, redirect with success message
                 return redirect()->back()->with('success', 'The letter of acceptance has been sent successfully');
                 
             } else{
                 //no internet connection
                 $request->session()->flash('errors', 'Failed to connect! Please ensure that you are connected to internet in order to send the messages!');
                 return redirect()->back()->with('errors','Failed to connect! Please ensure that you are connected to internet in order to send the messages!');
             }
        }
        
    }else{
        return redirect('/');
    }
       
    }

    public function studReg($id_number){
        //this function is programed to return an admission letter
       $state = DB::table('application_success')->where('id_number',$id_number)->get();
            foreach($state as $st){
                $st->update(['state' => 'Registered']);
            }
            
            return view('auth.login');
        
    }


    //ADMISSION LETTER
    public function admissionLetter(Request $request, $id){
        //let's send the letter of offer
        $receipients = DB::table('bio_information')->where('id',$id)->get();
        
       // dd($receipients);
        
        $response = null;
        /*Doing both the Letter of Offer and Admission Letter */
        $subject = '';

        if(!$receipients->isEmpty()){
        foreach ($receipients as $receipient) {
            # code...
            $p1 = '
            
            We want to congratulate you on your acceptance to your course
            application at Winterfel University. Kindly click the register button below to complete the admission 
            process and process your admission letter This offer expires after 3 working days.';
            
            $p2 = 'We pride ourselves in providing only for the best for our students. 
            Our university provides a state-of-the-art infrastructure, library and 
            word-renowned professors.';
            
            $p3 = 'Thank you for choosing Winterfel University; we look foward to a long 
            and prosperouse journey together.
             ';
             $first_name = $receipient->first_name;
             $middle_name = $receipient->middle_name;
             $last_name = $receipient->last_name;
             $id_number = $receipient->id_number;

             $details = [
                 'subject'=>$subject,
                 'p1' => $p1,
                 'p2' => $p2,
                 'p3' => $p3,
                 'first_name' => $first_name,
                 'middle_name' => $middle_name,
                 'last_name' => $last_name,
                 'id_number' => $id_number,
             ];
             system("ping google.com", $response);
             if($response == 0)
             {
                 // there is internet connection
     
                     //foreach student, get the parent details
                 
                                         
     
                     
                        
                             //send email to parent
                              Mail::to($receipient->email)->send(new \App\Mail\LetterOfOffer($details));
                               //save the message details to db
                                                 $applicants = DB::table('course_applications')->where('id_number',$receipient->id_number)->get();
                                                 foreach ($applicants as $applicant) {
                                                     # code...
                                                     $courses = DB::table('courses')->where('id',$applicant->course_id)->get();
                                     
                                                 }
                                                 foreach ($courses as $course) {
                                                     # code...
                                                     $course_id = $course->id;
                                                 }
                                     
                                                 
                                            /*    DB::table('application_success')->insert([
                                                     'first_name' => $receipient->first_name,
                                                     'middle_name' => $receipient->middle_name,
                                                     'last_name' => $receipient->last_name,
                                                     'bio_id' => $id,
                                                     'course_id' => $course_id,
                                                     'id_number' => $receipient->id_number,
                                                     'email' => $receipient->email,
                                                     'created_at' => date('Y-m-d')
                                     
                                                 ]); */
                         
     
                     
                
                 
     
                 //messages have been send, redirect with success message
                 return redirect()->back()->with('success', 'The letter of acceptance has been sent successfully');
                 
             } else{
                 //no internet connection
                 $request->session()->flash('errors', 'Failed to connect! Please ensure that you are connected to internet in order to send the messages!');
                 return redirect()->back()->with('errors','Failed to connect! Please ensure that you are connected to internet in order to send the messages!');
             }
        }
        
    }else{
        return redirect('/');
    }
       
    }

    public function onlineReg(Request $request, $id){
        //Getter Methods for our objects
        $bio = DB::table('bio_information')->where('id',$id)->get();
        foreach ($bio as $bi) {
            # code...
            $idno = $bi->id_number;
           
        }
        $course_applicant = DB::table('course_applications')->where('id_number',$idno)->get();
        foreach ($course_applicant as $app) {
            # code...
            $course_id = $app->course_id;
        }

        $course = DB::table('courses')->where(
            'id',
            $course_id
        )->get();
        foreach ($course as $co) {
            # code...
            $courseName = $co->name;
        }

        $success = DB::table('application_success')->where(
            'id_number',
            $idno
        )->get();

        //Data manipulation
        
        $code = DB::table('courses_details')->where('course_id',$course_id)->get();
        foreach ($code as $cc) {
            # code...
            $courseCode = $cc->code;
            $stream = $cc->qualification;
        }

        //dd(substr(date('y'), -2));
        
        $availability = DB::table('students')->where('id_no',$idno)->get();
        $max_adm_no = DB::table('students')
        ->max('id');
        $new_adm_no = $max_adm_no + 1;
        
        DB::table('application_success')->where('id_number',$idno)->update([
            'state' => 'Registered'
        ]);
        if ($availability->isEmpty()) {
            # code...
            DB::table('students')->insert([
                'first_name'=>$bi->first_name,
                'middle_name'=>$bi->middle_name,
                'last_name'=>$bi->last_name,
                'regno'=>$courseCode.'/'.$course_id.$new_adm_no.'/'.substr(date('y'), -2),
                'email'=>$bi->email,
                'password'=> Hash::make($request->session()->get('password')),
                'date_of_admission'=>date('Y-m-d'),
                'gender'=>$bi->gender,
                'id_no'=>$bi->id_number,
                'religion'=>$bi->religion,
                'course'=>$courseName,
                'nationality'=>$bi->nationality
            ]);
          

           
        }
        $stdnt =DB::table('students')->where('id_no',$idno)->get();
            foreach ($stdnt as $st) {
                # code...
            }

        $request->session()->forget('pre_student');
        $request->session()->forget('id');
        $request->session()->put('is_student', true);
        $request->session()->put('regno', $st->regno);
        $request->session()->put('id', $st->id);

        return redirect('/dashboard')->with('success', 'Congratulations, you are now a student. Please proceed to finance registration.');
        //
    }






}
