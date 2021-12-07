

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>:: Oreo University :: Contact</title>
<link rel="icon" href="favicon.ico">
<!-- start linking -->
<link rel="stylesheet" href="{{ asset('oreo/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('oreo/css/style.min.css') }}">
</head>

<body>

<div id="loading" class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('oreo/images/loader.svg') }}" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>

<div class="wrapper">
    @include('layouts.master')

    

    <!-- Content Area -->    
    <section class="main-section">

        <!-- Contact Section -->
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12">
                        <h2><span>BIO DATA </span>CREDENTIALS</h2>
                        <p>STUDENT'S PERSONAL DETAILS</p>
                    </div>
                </div>
                @if (count($errors) > 0)
                    <div class="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color:red">{{ $error }}</li>
                                @endforeach
                            </ul>
                    </div>
                @endif
                <form action="{{ route('bio.application')}}" method = "POST" name="student_form" enctype="multipart/form-data">
                    @csrf
    <div >
        <div >
            
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-1"></div>
                
                <div class=" col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <div style=" margin-left: 10px;">
                          
                         
                    <div >
                      <div  class="row">
                              <input type="hidden" name="current_date" value="{{date('Y-m-d') }}">
                            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                  <div class="form-group" id="first_name_div">
                                          <label class="control-table" for="first_name">FIRST NAME</label>
                                  <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter first name" >
                                          <div id="first_name_error"></div>
                                  </div>	
                            </div>
      
    
                            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="form-group" id="middle_name_div">
                                            <label for="middle_name">MIDDLE NAME</label>
                                            <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Enter middle name" >
                                            <div id="middle_namer_error"></div>
                                        </div>
                                
                            </div>
    
                            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="form-group" id="last_name_div">
                                            <label for="last_name">LAST NAME</label>
                                            <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Enter last name" value="{{$last_name ?? ''}}">
                                            <div id="last_name_error"></div>
                                        </div>
                                
                            </div>
    
                            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="form-group" id="id_number_div">
                                            <label for="id_number">ID NUMBER</label>
                                            <input type="number" id="id_number" class="form-control" name="id_number" value="{{ $id_number}}" readonly>
                                            <div id="id_number_error"></div>
                                    </div>
                                
                            </div>
    
                            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="form-group" id="email_div">
                                            <label for="email">EMAIL ADDRESS</label>
                                            <input type="email" id="email" class="form-control" name="email" value="{{$email}}" readonly >
                                            <div id="email_error"></div>
                                    </div>
                        
                            </div>
    
                            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="form-group" id="date_div">
                                            <label for="date">DATE OF BIRTH</label>
                                            <input type="date" id="date" class="form-control" name="date" value="{{$date ?? ''}}">
                                            <div id="date_error"></div>
                                    </div>
                        
                            </div>
    
                            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="form-group" id="religion_div">
                                            <label for="religion">RELIGION</label>
                                            <select id="religion" name="religion" class="form-control">
                                                    <option value="">SELECT RELIGION</option>
                                                <option @if($religion ?? '' == 'CHRISTIAN') selected @endif>CHRISTIAN</option>
                                                 <option @if($religion ?? '' == 'MUSLIM') selected @endif>MUSLIM</option>
                                                 <option @if($religion ?? '' == 'HINDU') selected @endif>HINDU</option>
                                                 <option @if($religion ?? '' == 'OTHER') selected @endif>OTHER</option>
                                            </select>
                                            <input type="hidden" name="year_of_study" value="{{ date('Y')}}">
                                        </div>
                            </div>
    
                            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="form-group" id="nationality_div">
                                            <label for="nationality">NATIONALITY</label>
                                            <select id="nationality" name="nationality" class="form-control">
                                                    <option value="">Select nationality</option>
                                                <option @if($nationality ?? '' == 'Kenyan') selected @endif >Kenyan</option>
                                                 <option @if($nationality ?? '' == 'Ugandan') selected @endif>Ugandan</option>
                                                 <option @if($nationality ?? '' == 'Tanzania') selected @endif>Tanzania</option>
                                                 <option @if($nationality ?? '' == 'Somalian') selected @endif>Somalian</option>
                                            </select>
                                            <div id="nationality_error"></div>
                                        </div>
                    
                            </div>
    
                            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="form-group" id="gender_div">
                                            <label for="gender">GENDER</label>
                                            <select id="gender" name="gender" class="form-control">
                                                    <option value="">Select gender</option>
                                                <option @if($gender ?? '' == 'Male') selected @endif>Male</option>
                                                 <option @if($gender ?? '' == 'female') selected @endif>female</option>
                                            </select>
                                            <div id="gender_error"></div>
                                        </div>
                    
                            </div>
    
                            
                            
                                          
                        <div class="col-xm-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 justify-content-between" >
                            <button type="submit" class="btn btn-primary btn-round btn-block mt-4 m-b-0">NEXT</button>
                
                            </div>
                            
                    </div>
                                
            </div>
    </div>
                      </div>
                
                
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </form>
            </div>
        </div>

        <!-- Contact Map -->
        <div class="map-main">
            <img src="{{ asset('oreo/images/map.jpg') }}" alt="">
        </div>

        <!-- Our Partner -->
        <div class="our-partner">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12">
                        <h2><span>Our </span>Partners</h2>
                        <p>Description text here...</p>
                    </div>
                </div>
                <div class="row out-partner-logo">
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="javascript:void(0);"><img src="oreo/images/partner-logo-1.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="javascript:void(0);"><img src="oreo/images/partner-logo-2.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="javascript:void(0);"><img src="oreo/images/partner-logo-3.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="javascript:void(0);"><img src="oreo/images/partner-logo-4.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="javascript:void(0);"><img src="oreo/images/partner-logo-1.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-4 col-sm-6"><a href="javascript:void(0);"><img src="oreo/images/partner-logo-5.png" alt=""></a></div>
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
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution.</p>
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
                        <small>Copyright &copy; 2018 Oreo Theme by <a href="http://thememakker.com/" target="_blank">ThemeMakker</a> </small> </div>
                    <div class="col-lg-6 col-md-6 text-right">
                        <div class="up"><a href="#header"><i class="zmdi zmdi-caret-up-circle"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- start screpting -->
<script src="{{ asset('oreo/bundles/libscripts.bundle.js') }}"></script>
<!-- my js -->
<script src="{{ asset('oreo/js/app.js') }}"></script>
</body>
</html>