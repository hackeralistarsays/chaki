<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
class ApplicantsController extends Controller
{
    public function login(Request $request){
        //
        $email = $request['email'];
       $password = $request['password'];

       $request->validate([

        'email' => ['required', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:8'],

    ]);
    $students = Student::where('email',$email)->get();
    if (!$students->isEmpty()) {
        # code...
        foreach ($students as $student) {
            # code...
            if(Hash::check($password, $student->password)){
                // $request->session()->put('is_applicant', true);
                 $request->session()->put('id', $student->id);
                 $request->session()->put('id_number', $student->id_no);
                 $request->session()->put('email', $student->email);
                 $request->session()->put('is_student', true);
                 $request->session()->put('regno', $student->regno);
                 $request->session()->put('username', $student->first_name. ' '. $student->middle_name. ' '. $student->last_name);
                 $request->session()->put('profile_pic', $student->profile_pic);


                 $bio_info = DB::table('bio_information')->where('id_number',$student->id_no)->get();
                 $course_applicant = DB::table('course_applications')->where('email',$student->email)->get();


                 /*----------------------*/

                     $studapp = DB::table('bio_information')->where('id_number',$student->id_no)->get();
                     foreach($studapp as $stu){
                         $app_id = $stu->id;

                        }
                        $appaddress = DB::table('address_information')->where('bio_id',$stu->id)->get();

                        foreach ($course_applicant as $app) {
                            # code...
                            $course = DB::table('courses')->where('id',$app->course_id)->get();
                        }

                        return view('portal.dashboard', ['student'=>$student, 'studapp'=>$studapp, 'appaddress'=>$appaddress, 'course'=>$course]);



             } else{
                 $request->session()->flash('error', 'You entered wrong password!!');
                 $request->session()->flash('email', $email);
                 return redirect()->back()->with('error', 'You entered Wrong Password!!');
             }
        }

    }else{



       if($email == null || $password == null){
           return redirect()->back()->with('error', 'all fields are required');
       }
       $applicant = DB::table('applicants')
                    ->where('email', $email)
                    ->get();



                    foreach($applicant as $adm){
                        if(Hash::check($password, $adm->password)){
                           // $request->session()->put('is_applicant', true);
                            $request->session()->put('id', $adm->id);
                            $request->session()->put('id_number', $adm->id_number);
                            $request->session()->put('email', $adm->email);
                            $request->session()->put('username', $adm->name);
                            $request->session()->put('password', $password);


                            $course_applicant = DB::table('course_applications')->where('email',$adm->email)->get();
                            $bio_info = DB::table('bio_information')->where('id_number',$adm->id_number)->get();
                            $applications = DB::table('course_applications')->where('id_number',$adm->id_number)->get();

                            /*----------------------*/
                            $success = DB::table('application_success')->where('email',$email)->get();
                            if(!$success->isEmpty()){
                                foreach($success as $stu){
                                    if ($stu->state == 'Pending') {
                                        $request->session()->put('pre_student', true);
                                    }elseif($stu->state == 'Registered'){
                                        $stdnt =DB::table('students')->where('id_no',$stu->id_number)->get();
                                        foreach ($stdnt as $st) {
                                            # code...
                                        }
                                        $request->session()->put('is_student', true);
                                        $request->session()->put('regno',$st->regno);
                                    }else {
                                        $request->session()->put('is_reject', true);
                                    }

                                }
                            }else{
                                $request->session()->put('is_applicant', true);
                            }
                            if(!$course_applicant->isEmpty()){

                                foreach ($course_applicant as $app) {
                                    # code...
                                    if ($app->state == 'complete') {
                                        # code...
                                        $studapp = DB::table('bio_information')->where('id_number',$adm->id_number)->get();
                                        foreach($studapp as $stu){
                                            $app_id = $stu->id;
                                            $appaddress = DB::table('address_information')->where('bio_id',$stu->id)->get();

                                        }
                                        //dd($appaddress);

                                        $course = DB::table('courses')->where('id',$app->course_id)->get();
                                        return view('portal.dashboard',['studapp'=>$studapp, 'appaddress'=>$appaddress, 'course'=>$course]);
                                    }

                                    if (!$applications->isEmpty()) {
                                        # code...
                                        foreach ($applications as $co) {
                                            # code...
                                            if ($bio_info->isEmpty()) {
                                                # code...
                                                $id_number = $co->id_number;
                                                $email = $co->email;
                                                $id = $co->id;
                                                return view('pages.apply.bio-data', ['id_number'=>$id_number, 'email'=>$email, 'id'=>$id]);
                                            }
                                        }
                                    }
                                    if(!$bio_info->isEmpty()){
                                        foreach ($bio_info as $bio) {
                                            $address = DB::table('address_information')->where('bio_id',$bio->id)->get();
                                            $parents = DB::table('parent_information')->where('bio_id',$bio->id)->get();
                                            $documents = DB::table('documents_information')->where('bio_id',$bio->id)->get();
                                            # code...
                                            if ($address->isEmpty()) {
                                                # code...
                                                $id = $bio->id;
                                                return view('pages.apply.address-info', ['id'=>$id]);
                                            }
                                            if ($parents->isEmpty()) {
                                                # code...
                                                $id = $bio->id;
                                                return view('pages.apply.parents-info', ['id'=>$id]);
                                            }
                                            if ($documents->isEmpty()) {
                                                # code...
                                                $id = $bio->id;
                                                return view('pages.apply.documents-upload',['id'=>$id]);

                                            }
                                        }
                                    }
                                    //Still under development for successive application
                                }
                            }
                            return redirect('/courses');

                        } else{
                            $request->session()->flash('error', 'You entered wrong password!!');
                            $request->session()->flash('email', $email);
                            return redirect()->back()->with('error', 'You entered Wrong Password!!');
                        }
                    }
                }
                $request->session()->flash('error', 'You are NEW here? Create an account to proceed.');
                $request->session()->flash('email', $email);
                return redirect()->back()->with('error', 'You are NEW here? Create an account to proceed.');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        //dd($request['name']);
        //
        $name = $request['name'];
        $id_number = $request['id_number'];
        $email = $request['email'];
        $password = $request['password'];
        $password_confirmation = $request['password_confirmation'];
        $terms = $request['terms'];
        $created_at = date('Y-m-d h:i:s');
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'id_number' => ['required', 'integer', 'min:8','unique:applicants'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:applicants'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'terms' => 'required'
        ]);

        DB::table('applicants')->insert([
            'name' => $request['name'],
            'email' => $request['email'],
            'id_number' => $request['id_number'],
            'password' => Hash::make($request['password']),
            'created_at' => $created_at,
        ]);
        return redirect('/lgin')->with('success', 'The validation was a suceess, login to apply for a course');
    }
//Lets get the course
    public function init(Request $request,$id){

        $request->validate([
            'id_number' => 'unique:course_applications',
        ]);
        $course = DB::table('courses')->where('id', $id)->get();
        // dd($course);
        $date = date('Y-m-d');
        $email =  $request->session()->get('email');
        $id_number =  $request->session()->get('id_number');
        $name = $request->session()->get('username');
        $id =  $request->session()->get('id');

        //ID Number validation
        $number = DB::table('course_applications')->where('id_number', $id_number)->where('state', 'complete')->count();
        $state = DB::table('course_applications')->where('id_number', $id_number)->where('state', 'incomplete')->count();
        //dd($number);
        if($state > 0){
            return redirect()->back()->with('error', 'Please finish your current application and wait for the team to get to you');
        }
        if($number > 0){
            return redirect()->back()->with('error', 'Your application had been submitted, please waite for our team feedback');
        }

        foreach($course as $cuz){

            DB::table('course_applications')->insert([
                'applicant_name' => $name,
                'email' => $email,
                'id_number' =>$id_number,
                'course_id' => $cuz->id,
                'created_at' => $date
            ]);
        }


        return view('pages.apply.bio-data', ['id_number'=>$id_number, 'email'=>$email]);

    }
    public function showBio(Request $request, $id){
        $id_number =  $request->session()->get('id_number');
        $email =  $request->session()->get('email');

        return view('pages.apply.bio-data', ['id_number'=>$id_number, 'email'=>$email, 'id'=>$id]);
    }

    public function bio(Request $request){
        //
        $request->validate([
            'first_name' => 'required|string',
            'middle_name' => 'string',
            'last_name' => 'required|string',
            'id_number' => 'required|integer|unique:bio_information',
            'email' => 'required|email|unique:bio_information',
            'date' => 'required|date',
            'religion' => 'required|string',
            'nationality' => 'required|string',
            'gender' => 'required|string',
        ]);
        DB::table('bio_information')->insert([
            'first_name' => $request['first_name'],
            'middle_name' => $request['middle_name'],
            'last_name' => $request['last_name'],
            'id_number' => $request['id_number'],
            'email' => $request['email'],
            'date' => $request['date'],
            'religion' => $request['religion'],
            'nationality' => $request['nationality'],
            'gender' => $request['gender'],
            'created_at' => date('Y-m-d')
        ]);
        $bio = DB::table('bio_information')->where('id_number',$request['id_number'])->get();
        foreach($bio as $bi){
            $id = $bi->id;
        }

        return redirect()->route('show.address',$id);
    }
    public function showAddress($id){

        return view('pages.apply.address-info', ['id'=>$id]);
    }
    public function address(Request $request){
        //
        $request->validate([

            'county' => 'required|string',
            'town' => 'required|string',
            'street' => 'required|string',
            'home_address' => 'required|string',
            'box' => 'required|integer',
            'postal_code' => 'required|string',
            'phone_number_1' => 'required|string',
            'home_number' => 'required|string',
        ]);
        DB::table('address_information')->insert([
            'bio_id' =>$request['id'],
            'county' =>$request['county'],
            'town' =>$request['town'],
            'street' =>$request['street'],
            'home_address' =>$request['home_address'],
            'box' =>$request['box'],
            'postal_code' =>$request['postal_code'],
            'phone_number_1' =>$request['phone_number_1'],
            'phone_number_2' =>$request['phone_number_2'],
            'home_number' =>$request['home_number'],
            'created_at' => date('Y-m-d')

        ]);
        return redirect()->route('show.parents',$request['id']);
    }

    public function showParents($id){

        return view('pages.apply.parents-info', ['id'=>$id]);
    }
    public function parents(Request $request){
        //
        $request->validate([

            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'id_number' => 'required|integer|min:7',
            'gender' => 'required|string',
            'occupation' => 'required|string',

        ]);
        DB::table('parent_information')->insert([
            'bio_id' =>$request['id'],
            'first_name' =>$request['first_name'],
            'middle_name' =>$request['middle_name'],
            'last_name' =>$request['last_name'],
            'id_number' =>$request['id_number'],
            'gender' =>$request['gender'],
            'occupation' =>$request['occupation'],
            'created_at' => date('Y-m-d'),

        ]);
        return redirect()->route('show.documents',$request['id']);
    }

    public function showDocuments($id){
        return view('pages.apply.documents-upload',['id'=>$id]);
    }
    public function documents(Request $request){
        //
        $id_number =  $request->session()->get('id_number');
        $request->validate([

            'result_slip' => 'required|mimes:pdf,doc,docx|max:2048',
            'copy_of_id' => 'required|mimes:pdf,doc,docx|max:2048',
            'living_cert' => 'required|mimes:pdf,doc,docx|max:2048',

        ]);

        $resultSlip = $id_number.'result slip'.'.'.$request->result_slip->extension();
        $copyOfId = $id_number.'copy of id'.'.'.$request->copy_of_id->extension();
        $livingCert = $id_number.'living certificate'.'.'.$request->living_cert->extension();

        //$imagePath = request('image')->store('uploads', 'public');

        $request->result_slip->move(public_path('uploads/documents'), $resultSlip);
        $request->copy_of_id->move(public_path('uploads/documents'), $copyOfId);
        $request->living_cert->move(public_path('uploads/documents'), $livingCert);

        DB::table('documents_information')->insert([
            'bio_id' =>$request['id'],
            'result_slip' =>$resultSlip,
            'copy_of_id' =>$copyOfId,
            'living_cert' =>$livingCert,
            'created_at' => date('Y-m-d'),

        ]);
        $id_number =  $request->session()->get('id_number');
        $state = DB::table('course_applications')->where('id_number',$id_number)->update(['state' =>'complete']);
        $notify = DB::table('course_applications')->where('id_number',$id_number)->get();

        $response = null;
        $subject = 'Course Application';
        $message_body = 'Your Application has been submitted successfully,
        Our team will review your application and get back to you within two weeks or ,
        anyway hold your breath. ';

        $details = [
            'subject'=>$subject,
            'message_body'=>$message_body
        ];
        system("ping google.com", $response);
        if($response == 0)
        {
            // there is internet connection

                //foreach student, get the parent details



                if(!$notify->isEmpty()){
                    //get the emails
                    foreach($notify as $noti){
                        $applicant_email = $noti->email;
                        //send email to parent
                         Mail::to($applicant_email)->send(new \App\Mail\MailToApplicant($details));
                          //save the message details to db
                        /* $save_message = DB::table('MailToStudentMessages')
                                            ->insert([
                                                'student_id'=>$parent->student_id,
                                                'from_teacher_id'=>$teacher_id,
                                                'to_parent_id'=>$parent->parent_id,
                                                'subject'=>$subject,
                                                'message_body'=>$message_body,
                                                'date_send'=>now(),
                                                'created_at'=>now(),
                                                'updated_at'=>now()
                                            ]); */


                    }


            }


            //messages have been send, redirect with success message
            return redirect('/dashboard');

        } else{
            //no internet connection
            $request->session()->flash('no_internet', 'Failed to connect! Please ensure that you are connected to internet in order to send the messages!');
            return redirect('/dashboard');
        }

    }

    public function specificApplicant($id_number){
        $bio_info = DB::table('bio_information')->where('id_number', $id_number)->get();
        foreach ($bio_info as $bio) {
            # code...
            //dd($bio->id);
            $address_info = DB::table('address_information')->where('bio_id',$bio->id)->get();
            $parents_info = DB::table('parent_information')->where('bio_id',$bio->id)->get();
            $documents_info = DB::table('documents_information')->where('bio_id',$bio->id)->get();
            $success = DB::table('application_success')->where('id_number',$id_number)->get();

        }
        return view('pages.apply.specific_applicant_details', [
            'bio_info'=>$bio_info,
            'address_info'=>$address_info,
            'parents_info'=>$parents_info,
            'documents_info'=>$documents_info,
            'success' => $success

        ]);
    }
}
