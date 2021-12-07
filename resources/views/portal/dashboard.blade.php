<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:01:47 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Student Portal ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{ asset('oreo/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('oreo/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{ asset('oreo/assets/plugins/morrisjs/morris.min.css')}}" />
<script src="{{ asset('oreo/js/jquery-3.5.1.min.js') }}"></script>


<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('oreo/assets/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('oreo/assets/css/color_skins.css')}}">

<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>

</head>

<body class="theme-blush">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('oreo/assets/images/logo.svg') }}" width="48" height="48" alt="Oreo"></div>
            <p>Please wait...</p>
        </div>
    </div>
   @if(Session::get('pre_student'))
    <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLongTitle">
                    <div class="row d-flex">

                        <div class="col-md-3 col-sm-12 text-center">
                        <img src="{{ asset('oreo/assets/images/logo.svg') }}" width="70px" alt="Oreo">
                        </div>
                        <div class="col-md-9 text-center">
                            <h5 class="">WINTERFEL UNIVERSITY OF TECHNOLOGY </h5>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-md-4 col-sm-12 text-center">________________________________</div>
                        <div class="col-md-4 col-sm-12 text-center text-center">Office of the Dean</div>
                        <div class="col-md-4 col-sm-12 text-center">________________________________</div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-md-8">
                            <div class="text-bold">Vice-Chancellor: Prof Hacker Alistar Says</div>
                            <div><i>B.Sc., M.Sc., Ph.D., Computer Science</i></div>
                        </div>
                        <div class="col-md-4">
                            <div>P.O BOX 704, NAIROBI,</div>
                            <div>KENYA.</div>
                            <div>winterfeluniversity@gmail.com</div>
                            <div> https://www.winterfeluniversity.ac.ke</div>
                        </div>
                    </div>
                    <br>
                    <div class="row d-flex">
                        <div class="col-md-8">
                            <div>Dean:Prof. M. A. K Smith</div>
                            <div><i>B.Sc. M.Sc., Ph.D(Ibadan)</i></div>
                        </div>
                        <div class="col-md-4">
                            <div>Date: {{date('d-m-Y')}}</div>
                        </div>
                    </div>

                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            @foreach($studapp as $stud)
            <p>Dear {{$stud->first_name}} {{$stud->middle_name}} {{$stud->last_name}} </p>
            @endforeach
            @foreach($course as $co)
            <h5> <u>Offer Of Provisional Admission Into {{$co->name}}
            ({{$co->duration}} {{$co->state}} STUDY SESSION) </u></h5>
            With reference to your application for a course in {{$co->name}} in the University, I am
            pleased to inform you that you have been offered provisional admission to pursue an academic
            programme leading to the award of a Degree in Department of
            {{$co->department}} with effect from {{date('Y')}} Session
            <hr>
            Please take note of the following conditions, which are related to your admission and registration:

            <h6>(1) This offer of admission is strictly provisional and may be revoked if: </h6>
            <p class="text-black"> 1: You fail to formally accept this offer by paying the acceptance fee of --- shillings, and other charges. </p>
            <p class="text-black">	2: You are unable to satisfy the necessary requirements for admission and registration. </p>
            <p class="text-black">	3: You cannot produce at the time of registration, the original copies of your certificates,
                transcripts, NYSC discharge Certificate and other academic credentials. </p>
                <h6>(2)	The programme is on Part-Time/Full-Time basis
                    The duration of your course and other conditions relating to it, are as contained in the Winterfel
                    School’s prospectus
                </h6>
                <strong>(3)	The attached information on fees payable is for your further action.</strong>
                <p>(4)	If you accept this offer, kindly download the procedure for registration with your scratch card and
                    follow the procedure.
                </p>
                <p>(5)	Please note that your name should be boldly written in the space provided for depositor in the teller
                </p>
                <p>(6)	Payment of all fees must be made not later than 2 weeks from when the time of reception of this letter as provisional
                    offer of admission will lapse thereafter
                </p>
                <p>(7)	It is mandatory for you to attend the induction programme and the matriculation ceremony (where applicable)
                    for new Winterfel students as scheduled. Falure to attend may lead to withdrawal of admission.
                </p>
                <p>(8) Please note that if it is discovered at anytime that you do not possess any of the qualifications which
                    you claim to have obtained, the admission will be withdrawn immediately
                </p>
                <p>Please note that if it is discovered at anytime that you do not possess any of the qualifications which
                    you claim to have obtained, the admission will be withdrawn immediately
                </p>
                <p>Please accept my congratulations on behalf of the University</p>
                <br>
                <p>Yours faithfully,</p>
                <p>Gabriel Gitau</p>
                <p>For: Secretary,</p>
                <p>Winterfel University</p>

                @endforeach

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"> Download <i class="zmdi zmdi-download ml-2"></i></button>
            </div>
        </div>
    </div>
</div>

@endif

@if(Session::get('is_student') && $student->roll->isEmpty())
<div class="modal fade bd-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLongTitle">
                    <div class="row d-flex">

                        <div class="col-md-3 col-sm-12 text-center">
                        <img src="{{ asset('oreo/assets/images/logo.svg') }}" width="70px" alt="Oreo">
                        </div>
                        <div class="col-md-9 text-center">
                            <h5 class="">WINTERFEL UNIVERSITY OF TECHNOLOGY </h5>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-md-4 col-sm-12 text-center">________________________________</div>
                        <div class="col-md-4 col-sm-12 text-center text-center">Office of the Dean</div>
                        <div class="col-md-4 col-sm-12 text-center">________________________________</div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-md-8">
                            <div class="text-bold">Vice-Chancellor: Prof Hacker Alistar Says</div>
                            <div><i>B.Sc., M.Sc., Ph.D., Computer Science</i></div>
                        </div>
                        <div class="col-md-4">
                            <div>P.O BOX 704, NAIROBI,</div>
                            <div>KENYA.</div>
                            <div>winterfeluniversity@gmail.com</div>
                            <div> https://www.winterfeluniversity.ac.ke</div>
                        </div>
                    </div>
                    <br>
                    <div class="row d-flex">
                        <div class="col-md-8">
                            <div>Dean:Prof. M. A. K Smith</div>
                            <div><i>B.Sc. M.Sc., Ph.D(Ibadan)</i></div>
                        </div>
                        <div class="col-md-4">
                            <div>Date: {{date('d-m-Y')}}</div>
                        </div>
                    </div>

                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach($course as $co)
                <div class="text-center"><h5> <u>NOMINAL ROLL DOCUMENT  </u></h5></div>
                @foreach($studapp as $stud)
                <p>Dear {{$stud->first_name}} {{$stud->middle_name}} {{$stud->last_name}} </p>
                @endforeach
            Nominal roll is a document which must be signed by every student within the stipulated time frame
            having paid at least 75% of the school fees.The document is then confirmed by the accounts department
            and upon verification it is then used for the preparation of exam cards.
            <br>
            It was agreed that students must sign nominal rolls before they are allowed to attend classes.
            The signed nominal rolls will be used as a basis for determining the  actual number of examination questions papers,
            scripts and printing of examination cards therefore the students who will not have signed will not be allowed to sit
            for exams at the end of the semester. It was also discussed that viewing of examination results to be tied to the fees
            payment status of students and so students who have not paid fees will not be able to see their results.
            <br>

            <hr>
            <h6>Please ensure the following information related to your session are correct:</h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="body">
                                <h3>Students Info</h3>
                                <h6>NAME : {{ Session::get('username') }}</h6>
                                <h6>REGNO : {{ Session::get('regno') }}</h6>
                                <h6>COURSE : {{ $co->name }}</h6>
                                <h6>DEPARTMENT : {{ $co->department }}</h6>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="body">
                                <h3>Study Options</h3>
                                <h6>Year Of Study: {{ $student->year_of_study }}</h6>
                                <h6>Semester : {{ $student->semester }}</h6>
                                <h6>Status : {{ $student->status }}</h6>
                                <h6>ACADEMIC SESSION : {{ $student->year_of_study }}{{ $student->semester }}</h6>

                            </div>

                        </div>

                    </div>


                </div>

                <p>I confirm that I have checked my details and that the information provided above are correct</p>
                <br>
                <p>{{ Session::get('username') }}</p>
                <p>For: Secretary,</p>
                <p>Winterfel University</p>

                @endforeach

            </div>
            <form action="{{ route('roll.store', Session::get('id')) }}" method="POST">
                @csrf
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                    <button type="submit" class="btn btn-primary"> CONFIRM <i class="zmdi zmdi-check ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

@else

@endif
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>


    <!-- Top Bar -->
    @include('portal.layouts.navbar')
    <!-- Left Sidebar -->
    @include('portal.layouts.left-sidebar')
    <!-- Right Sidebar -->
    @include('portal.layouts.right-sidebar')
    <!-- Chat-launcher -->
    <div class="chat-launcher"></div>
    @include('portal.layouts.chat-launcher')

<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Dashboard
                <small>Welcome to Winterfel</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">

                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="zmdi zmdi-home"></i> Student's</a></li>
                    <li class="breadcrumb-item active">Portal</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12">

                    <div>

                        @if ( Session::get('success_update') != null)

                        <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>SUCCESS</strong> : {{ Session::get('success_update')}}
                        </div>

                        @endif
                    </div>

                        <div class="card top_counter">
                            <div class="body">
                                @if(!$studapp->isEmpty())
                                @foreach($studapp as $stud)
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="content">
                                            <div class="text"><h5>@if (Session::get('is_student'))Student's @endif @if (Session::get('is_applicant'))Applicant's @endif Details</h5></div>
                                            <p>Name: {{$stud->first_name}} {{$stud->middle_name}} {{$stud->last_name}}</p>
                                        </div>

                                        <div class="content">
                                            <p>Email: {{$stud->email}}</p>
                                        </div>
                                        @if (Session::get('is_student') || Session::get('pre_student'))
                                        <div class="content">
                                            @foreach($course as $co)
                                            <p>Course: {{$co->name}}</p>
                                            @endforeach
                                        </div>
                                        @endif
                                        @if ( Session::get('is_applicant'))
                                        <div class="content">
                                        @foreach($course as $co)

                                        <p style="color:blue">Your Application for <a href="{{route('course.view',$co->id)}}"><span class="badge badge-success">{{$co->name}}</span></a> is on review </p>
                                        @endforeach
                                        </div>
                                        @endif
                                        @if (Session::get('is_student'))
                                        <div class="content">
                                            <p>Reg NO: {{ Session::get('regno')}}</p>
                                        </div>
                                        @elseif(Session::get('pre_student'))
                                        <div class="content">
                                            <a href="{{route('online.registration',$stud->id)}}" class="btn btn-primary">Student Registration</a>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 col-md-6">

                                        <div class="content">
                                            <div class="text"><h5>Other Info</h5></div>
                                            @foreach($appaddress as $address)
                                            <p>Phone No: {{$address->phone_number_1}}</p>
                                        </div>

                                        <div class="content">
                                            <p>Address: {{$address->home_address}}</p>
                                        </div>
                                        <div class="content">
                                            <p>Home: {{$address->home_number}}</p>
                                        </div>
                                        @endforeach
                                        <div class="content">
                                            <p>Gender: {{$stud->gender}}</p>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js -->
<script src="{{ asset('oreo/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{ asset('oreo/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{ asset('oreo/assets/bundles/morrisscripts.bundle.js') }}"></script><!-- Morris Plugin Js -->
<script src="{{ asset('oreo/assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('oreo/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script><!-- USA Map Js -->
<script src="{{ asset('oreo/assets/bundles/knob.bundle.js') }}"></script> <!-- Jquery Knob, Count To, Sparkline Js -->

<script src="{{ asset('oreo/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('oreo/assets/js/pages/index.js') }}"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:16 GMT -->
</html>
