

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>:: Oreo University :: About Us</title>
<link rel="icon" href="favicon.ico">
<!-- start linking -->
<link rel="stylesheet" href="{{ asset('oreo/plugins/bootstrap/css/bootstrap.min.css') }}">
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

    <!-- start hero -->
    <section id="hero">
        <div class="inner-banner" style="background-image:url({{asset('oreo/images/banner-about.jpg')}} )">
            <div class="container">
                <h3 class="title">Oreo <br><big>About <strong> Us</strong></big></h3>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="main-section">
        <!-- About Us Section -->
        <div class="about-us-section">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12">
                        <h2><span>About </span>Us</h2>
                        <p>Description text here...</p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-md-12">
                        <div class="box-img box-shadow m-b-20">
                            <img src="{{ asset('oreo/images/about-page-img.jpg')}}" alt="">
                            <span class="section-line"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="page-text">
                            <div class="section-top">
                                <p><strong>Oreo University</strong> isIt is a long established fact that a reader will be distracted by the readable content.</p>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <ul class="list-unstyled">
                                <li><i class="zmdi zmdi-graduation-cap"></i>Over 14 Million Students</li>
                                <li><i class="zmdi zmdi-thumb-up"></i>More Than 30,000 Courses</li>
                                <li><i class="zmdi zmdi-globe"></i>Learn Anything Online</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 section-bottom">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable.
                        </p>
                        <ul class="row list-unstyled">
                            <li class="col-sm-6 col-md-3 col-lg-4 col-xl-2"><div class="about-box text-center"><i class="zmdi zmdi-lamp"></i> <span>ScienceLab</span></div></li>
                            <li class="col-sm-6 col-md-3 col-lg-4 col-xl-2"><div class="about-box text-center"><i class="zmdi zmdi-puzzle-piece"></i> <span>Games library</span></div></li>
                            <li class="col-sm-6 col-md-3 col-lg-4 col-xl-2"><div class="about-box text-center"><i class="zmdi zmdi-collection-music"></i><span>Music library</span></div></li>
                            <li class="col-sm-6 col-md-3 col-lg-4 col-xl-2"><div class="about-box text-center"><i class="zmdi zmdi-desktop-mac"></i> <span>Computer Lab</span></div></li>
                            <li class="col-sm-6 col-md-3 col-lg-4 col-xl-2"><div class="about-box text-center"><i class="zmdi zmdi-desktop-mac"></i> <span>Book library</span></div></li>
                            <li class="col-sm-6 col-md-3 col-lg-4 col-xl-2"><div class="about-box text-center"><i class="zmdi zmdi-ticket-star"></i> <span>Cantin</span></div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why choose us -->
        <div class="our-history xl-darkblack section-65-100">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12">
                    <h2><span>Our </span>history</h2>
                    <p>Description text here...</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <ul class="year-list list-unstyled">
                            <li>
                                <h4>24 March 1982</h4>
                                <p>Bimonthly Magazine Launched</p>
                            </li>
                            <li>
                                <h4>07 Aug 1999</h4>
                                <p>Oreo Official Site Launched</p>
                            </li>
                            <li>
                                <h4>17 Oct 2005</h4>
                                <p>Oreo Dashboard Launched</p>
                            </li>
                            <li>
                                <h4>01 Jan 2012</h4>
                                <p>Worldwide Travel Study Program</p>
                            </li>
                            <li>
                                <h4>31 Feb 2016</h4>
                                <p>Relations Program Launched</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <div class="map-area">
                            <h5>We are not just Friend, We are Family</h5>
                            <p>We are all most everyver uis autem vel eum iriure dolor in  vulputate velit esse molestie.</p>
                            <div class="our-history-img">
                                <img src="{{ asset('oreo/images/our-history.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fun Fact -->
        <div class="fun-fact xl-lightgrey about-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="fun-fact-box text-center">
                            <i class="zmdi zmdi-accounts-alt"></i>
                            <span class="counter timer" data-from="0" data-to="652" data-speed="2500" data-fresh-interval="700">652</span>
                            <p>Cases Completed</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="fun-fact-box text-center">
                            <i class="zmdi zmdi-graduation-cap"></i>
                            <span class="counter timer" data-from="0" data-to="7652" data-speed="2500" data-fresh-interval="700">7652</span>
                            <p>Awards Winning</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="fun-fact-box text-center">
                            <i class="zmdi zmdi-thumb-up"></i>
                            <span class="counter timer" data-from="0" data-to="52" data-speed="2500" data-fresh-interval="700">52</span>
                            <p>Years Of Experience</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="fun-fact-box text-center">
                            <i class="zmdi zmdi-mood"></i>
                            <span class="counter timer" data-from="0" data-to="7652" data-speed="2500" data-fresh-interval="700">7652</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Team -->
        <div class="our-team section-65-50">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="section-title left col-lg-5">
                        <h2><span>Faculty </span>Members</h2>
                        <p>Description text here...</p>
                    </div>
                    <div class="section-title right col-lg-7">
                        <p><span class="color-212121">Oreo University </span> The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-box text-center">
                            <div class="professor-pic"><img src="{{ asset('oreo/images/team-member-01.png')}}" alt="Pro. John"></div>
                            <div class="team-info">
                                <h4>Pro. John <span>Dentist</span></h4>
                                <ul class="clearfix">
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                                <a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-box text-center">
                            <div class="professor-pic"><img src="{{ asset('oreo/images/team-member-02.png')}}" alt="Pro. Amelia"></div>
                            <div class="team-info">
                                <h4>Pro. Amelia <span>Gynecologist</span></h4>
                                <ul class="clearfix">
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                                <a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-box text-center">
                            <div class="professor-pic"><img src="{{ asset('oreo/images/team-member-03.png')}}" alt="Pro. Jack"></div>
                            <div class="team-info">
                                <h4>Pro. Jack <span>Audiology</span></h4>
                                <ul class="clearfix">
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                                <a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-box text-center">
                            <div class="professor-pic"><img src="{{ asset('oreo/images/team-member-04.png')}}" alt="Pro. Charlie"></div>
                            <div class="team-info">
                                <h4>Pro. Charlie<span>Dentist</span></h4>
                                <ul class="clearfix">
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                                <a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>
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
<script src="{{ asset('oreo/bundles/libscripts.bundle.js')}}"></script>

<!-- my js -->
<script src="{{ asset('oreo/js/app.js')}}"></script>
<script src="{{ asset('oreo/js/countTo.js')}}"></script>
</body>
</html>