

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>:: Oreo University :: Courses</title>
<link rel="icon" href="favicon.ico">
<!-- start linking -->
<link rel="stylesheet" href="{{ asset('oreo/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('oreo/css/style.min.css') }}">
</head>

<body>

<div id="loading" class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('oreo/images/loader.svg')}}" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>

<div class="wrapper">
    @include('layouts.master')
    <!-- start hero -->
    <section id="hero">
        <div class="inner-banner" style="background-image:url({{ asset('oreo/images/banner-courses.jpg')}})">
            <div class="container">
                <h3 class="title">Apply for<br><big>Our <strong>Course</strong></big></h3>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="main-section">
        <!-- Departments List -->
        <div class="our-best-courses best-courses-list section-70">
            <div class="container">
            <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12 col-lg-4">
                @if (count($errors) > 0)
                    <div class="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color:red">{{ $error }}</li>
                                @endforeach
                            </ul>
                    </div>
                @endif

                    <div class="card">
                        <div class="body">
                            <img src="/storage/{{ $course->photo }}" alt="" class="img-fluid rounded m-b-20">
                            <h6>{{$course->name}}</h6>
                            <div class="table-responsive">
                                <table class="table table-hover m-t-20">
                                    <tbody>
                                        <tr>
                                            <td>Year</td>
                                            <td>2021 INTAKE</td>
                                        </tr>
                                        <tr>
                                            <td>Fees</td>
                                            <td><strong class="col-blush">{{ $course->feeitems->sum('amount') }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Prof NAME</td>
                                            <td><strong>{{$course->professor}}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Students</td>
                                            <td><strong class="col-green">{{ $students->where('course',$course->name)->count() }}</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ route('init.application', $course->id)}}" class="btn btn-block btn-raised btn-primary btn-round waves-effect" role="button">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs padding-0">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Details">Course Details</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Structure">Course Structure</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Gallery">Course Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="Details">
                        @if(!$details->isEmpty())
                            @foreach($details as $detail)
                            <div class="card">
                                <div class="body">
                                    <h6>Course Details</h6>
                                    <p>{{$detail->details}}</p>
                             @endforeach
                        @endif
                                    <h6>Study Options</h6>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Option</th>
                                                    <th>Length</th>
                                                    <th>Code</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(!$details->isEmpty())
                                                @foreach($details as $option)
                                                <tr>
                                                    <td>{{$option->qualification}}</td>
                                                    <td>{{$option->length}} {{$option->state}} full time</td>
                                                    <td>{{$option->code}}</td>
                                                </tr>
                                                @endforeach
                                            @endif

                                            </tbody>
                                        </table>
                                    </div>
                                    <h6>Minimum KCSE Entry Requirements</h6>
                                    @if(!$requirements->isEmpty())
                                        @foreach($requirements as $requirement)
                                            <p class="ml-2">{{$requirement->score}} in {{$requirement->subjects}}</p>
                                        @endforeach
                                    @endif
                                    @if(!$aggregates->isEmpty())
                                        @foreach($aggregates as $aggregate)
                                            <p class="ml-2">Aggregate points of {{$aggregate->point}}</p>
                                        @endforeach
                                    @endif


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Structure">
                            <div class="card">
                                <div class="body">
                                    <h6>Course Structure</h6>
                                    @if(!$structures->isEmpty())
                                        @foreach($structures as $structure)
                                            <p>{{$structure->structure}}</p>
                                        @endforeach
                                    @endif
                                    <h6>Units Generalization</h6>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Unit Name</th>
                                                    <th>CF</th>
                                                    <th>Year</th>
                                                    <th>Code</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(!$units->isEmpty())
                                                @foreach($units as $unit)
                                                <tr>
                                                    <td>{{$unit->unit_name}}</td>
                                                    <td>{{$unit->qualification}}</td>
                                                    <td>{{$unit->year}}</td>
                                                    <td>{{$unit->code}}</td>
                                                </tr>
                                                @endforeach
                                            @endif

                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Gallery">
                            <div class="card">
                                <div class="body">
                                    <h6>Course Gallery</h6>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <img src="/storage/{{ $course->photo }}" alt="" class="img-fluid rounded m-b-30">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img src="{{ asset('oreo/assets/images/image2.jpg') }}" alt="" class="img-fluid rounded m-b-30">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img src="{{ asset('oreo/assets/images/image3.jpg') }}" alt="" class="img-fluid rounded m-b-30">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img src="{{ asset('oreo/assets/images/image4.jpg') }}" alt="" class="img-fluid rounded m-b-30">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>

        <!-- Upcoming Event -->
        <div class="upcoming-event inner-event xl-darkblack section-65-100">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12">
                        <h2><span>New </span>Course Start</h2>
                        <p>Description text here...</p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="common-cnt">
                            <div class="section-top">
                                <p>Magento<br>Programmer Course</p>
                            </div>
                            <p class="date"><span>Last Date: </span> 29-APRIL-2018</p>
                            <p class="address">Lorem Ipsum is simply dummy text of the printing and typesettig industry.</p>
                            <ul class="list-unstyled courses-detail clearfix">
                                <li>
                                    <label>Fees:</label>
                                    <span>$300.00</span>
                                </li>
                                <li>
                                    <label>Time:</label>
                                    <span>3months</span>
                                </li>
                                <li>
                                    <label>Prof.:</label>
                                    <span>Joge Lucky</span>
                                </li>
                                <li>
                                    <label>Students:</label>
                                    <span>78</span>
                                </li>
                            </ul>
                            <p><a class="btn btn-primary btn-lg btn-round">Register Now</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="box-img box-shadow img_hover_effect">
                            <img src="{{ asset('oreo/images/new-course.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog -->
        <div class="home-blog">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12">
                        <h2><span>Latest </span>From Blog</h2>
                        <p>Description text here...</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img img_hover_effect">
                                <img src="{{ asset('oreo/images/blog-1.png')}}" alt="">
                            </div>
                            <div class="blog-cnt">
                                <h5><a href="javascript:void(0);">How to handle your kids’ from Lorem ipsum dolor sit amet</a></h5>
                                <p>The great explorer of the truth, master builder of human happiness one rejects,dislikes[...]</p>
                            </div>
                            <div class="blog-info">
                                <span class="blog-date"><i class="zmdi zmdi-calendar"></i> 02 Feb 2018</span>
                                <span class="blog-comment"><i class="zmdi zmdi-comments"></i> Comment ( 25 )</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img img_hover_effect">
                                <img src="{{ asset('oreo/images/blog-2.png')}}" alt="">
                            </div>
                            <div class="blog-cnt">
                                <h5><a href="javascript:void(0);">How to handle your kids’ from Lorem ipsum dolor sit amet</a></h5>
                                <p>The great explorer of the truth, master builder of human happiness one rejects, dislikes[...]</p>
                            </div>
                            <div class="blog-info">
                                <span class="blog-date"><i class="zmdi zmdi-calendar"></i> 02 Feb 2018</span>
                                <span class="blog-comment"><i class="zmdi zmdi-comments"></i> Comment ( 25 )</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 hidden-md-down">
                        <div class="blog-box">
                            <div class="blog-img img_hover_effect">
                                <img src="{{ asset('oreo/images/blog-3.png')}}" alt="">
                            </div>
                            <div class="blog-cnt">
                                <h5><a href="javascript:void(0);">How to handle your kids’ from Lorem ipsum dolor sit amet</a></h5>
                                <p>The great explorer of the truth, master builder of human happiness one rejects,dislikes[...]</p>
                            </div>
                            <div class="blog-info">
                                <span class="blog-date"><i class="zmdi zmdi-calendar"></i> 02 Feb 2018</span>
                                <span class="blog-comment"><i class="zmdi zmdi-comments"></i> Comment ( 25 )</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- start footer -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form clearfix">
                        <div class="float-left">
                            <h4 class="m-t-0 m-b-0">Subscribe our Newsletter</h4>
                        </div>
                        <div class="float-right clearfix">
                            <div class="form-group m-b-0 float-left">
                                <input type="text" value="" placeholder="Enter your Email for Subscribe" class="form-control">
                            </div>
                            <div class="float-left">
                                <button class="btn btn-primary btn-round btn-block margin-0">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="fcard about">
                        <h5 class="title">About University</h5>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                        <div class="social">
                            <a href="javascript:void(0);"><i class="zmdi zmdi-facebook m-r-10"></i></a>
                            <a href="javascript:void(0);"><i class="zmdi zmdi-twitter m-r-10"></i></a>
                            <a href="javascript:void(0);"><i class="zmdi zmdi-instagram m-r-10"></i></a>
                            <a href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box m-r-10"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fcard links">
                        <h5 class="title">Usefull Links</h5>
                        <div class="row">
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="teachers.html">Teacher</a></li>
                                    <li><a href="event.html">Events</a></li>
                                    <li><a href="galary.html">Gallery</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0);">Documentation</a></li>
                                    <li><a href="javascript:void(0);">Forums</a></li>
                                    <li><a href="javascript:void(0);">Language Packs</a></li>
                                    <li><a href="javascript:void(0);">Release Status</a></li>
                                    <li><a href="javascript:void(0);">Forums</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fcard contact links">
                        <h5 class="title">Contact Details</h5>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-pin"></i>Park Drive, Varick Str NY 10012, USA</li>
                            <li><i class="zmdi zmdi-email"></i>Getwell@university.com</li>
                            <li><i class="zmdi zmdi-phone"></i>(123) 0200 12345 & 7890</li>
                            <li><i class="zmdi zmdi-time"></i>Mon-Friday: 9:30 to 17:30</li>
                            <li><i class="zmdi zmdi-time"></i>Sat-Sunday: 10:00 to 15:30</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <small>Copyright &copy; 2018 Oreo Theme by <a href="http://thememakker.com/" target="_blank">ThemeMakker</a></small>
                    </div>
                    <div class="col-lg-6 col-md-6 text-right">
                        <div class="up"><a href="#header"><i class="zmdi zmdi-caret-up-circle"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- start screpting -->
<script src="{{ asset('oreo/bundles/libscripts.bundle.js')}}"></script>
<!-- my js -->
<script src="{{ asset('oreo/js/app.js')}}"></script>
</body>
</html>

