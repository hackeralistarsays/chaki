<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: Winterfel University :: Home</title>
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
            <div class="slider" style="background-image:url({{ asset('oreo/images/slider1.jpg')}})">
                <div class="container">
                    <div class="slider_text">
                        <h3 class="title"><span>Welcome to</span> <br> Winterfel <strong>University</strong></h3>
                        <p class="sub-title">Helping you nlock your full potential to be the best of yourself.</p><br>
                        <a href="/courses"><button class="btn btn-primary btn-round">Apply For A course</button></a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Content Area -->
        <section class="main-section">
            <!-- Home About Us Section -->
            <div class="about-us-section" id="about-us">
                <div class="container">
                    <div class="row">
                        <div class="section-title col-12"><br><br>
                            <h2><span>About </span>Us</h2>
                            <p>Internationally recognized as the world's best university</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-5 col-sm-12">
                            <div class="box-img img_hover_effect box-shadow m-b-20">
                                <img src="{{ asset('oreo/images/about-img.jpg') }}" alt="">
                                <span class="section-line"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="common-cnt">
                                <div class="section-top">
                                    <p><strong>Winterfel University </strong> is a scholarly excellent institution with professional lectures ready to see our students make their dreams a reality.</p>
                                </div>
                                <p>With over 30 thousand acredited courses at really affordable rates, our dedication for better would where everyone have equal opportunities is a go.</p>
                                <ul class="list-unstyled">
                                    <li><i class="zmdi zmdi-graduation-cap"></i>Over 14 Million Students</li>
                                    <li><i class="zmdi zmdi-thumb-up"></i>More Than 30,000 Courses</li>
                                    <li><i class="zmdi zmdi-globe"></i>Learn Anything Online</li>
                                </ul>
                                <p> <a href="/about" class="btn btn-primary btn-simple btn-round margin-0">ViewMore</a> </p>
                            </div>
                        </div>
                        <div class="col-sm-12 section-bottom">
                            <p> <strong>Take a tour at our facilities. </strong> Designed with elegance and sophistication to bring out only the best from our students</p>
                            <ul class="row list-unstyled">
                                <li class="col-sm-6 col-md-3 col-lg-4 col-xl-2">
                                    <div class="about-box text-center"><i class="zmdi zmdi-lamp"></i> <span>Science Lab</span></div>
                                </li>
                                <li class="col-sm-6 col-md-3 col-lg-4 col-xl-2">
                                    <div class="about-box text-center"><i class="zmdi zmdi-puzzle-piece"></i> <span>Games library</span></div>
                                </li>
                                <li class="col-sm-6 col-md-3 col-lg-4 col-xl-2">
                                    <div class="about-box text-center"><i class="zmdi zmdi-collection-music"></i><span>Music library</span></div>
                                </li>
                                <li class="col-sm-6 col-md-3 col-lg-4 col-xl-2">
                                    <div class="about-box text-center"><i class="zmdi zmdi-desktop-mac"></i> <span>Computer Lab</span></div>
                                </li>
                                <li class="col-sm-6 col-md-3 col-lg-4 col-xl-2">
                                    <div class="about-box text-center"><i class="zmdi zmdi-desktop-mac"></i> <span>Book library</span></div>
                                </li>
                                <li class="col-sm-6 col-md-3 col-lg-4 col-xl-2">
                                    <div class="about-box text-center"><i class="zmdi zmdi-ticket-star"></i> <span>Cantin</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Our Best Courses -->
            <div class="our-best-courses xl-darkblack section-65-100">
                <div class="container">
                    <div class="row">
                        <div class="section-title left col-lg-10 col-md-9">
                            <h2><span>Our </span>Best Courses</h2>
                            <p>Description text here...</p>
                        </div>
                        <div class="section-title right col-lg-2 col-md-3">
                            <a href="/courses" class="btn btn-primary btn-round btn-simple float-md-right">View All</a>
                        </div>
                    </div>
                    <div class="row">
                        @if(!$courses->isEmpty())
                        @foreach($courses->take(4) as $course)
                        <div class="col-lg-3 col-md-6">
                            <div class="courses-box">
                                <div class="courses-img img_hover_effect"><img src="/storage/{{ $course->photo }}" alt="Magento Programmer"></div>
                                <div class="courses-cnt">
                                    <div class="courses-name">{{ $course->name }}</div>
                                    <ul class="list-unstyled">
                                        <li><label>Fees:</label> <span>{{ $course->feeitems->sum('amount') }}</span> </li>
                                        <li><label>Prof.:</label> <span>{{$course->department}}</span> </li>
                                        <li><label>Time:</label> <span>{{$course->duration}} {{$course->state}}</span> </li>
                                        <li><label>Students:</label> <span>{{ $students->where('course', $course->name)->count() }}</span> </li>
                                    </ul>
                                    <a class="btn btn-simple btn-round displayblock" href="{{route('course.view',$course->id)}}">View More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>

            <!-- Home Fun Fact -->
            <div class="fun-fact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="fun-fact-box text-center"> <i class="zmdi zmdi-account"></i> <span class="counter timer" data-from="0" data-to="652" data-speed="2500" data-fresh-interval="700">652</span>
                                <p>CERTIFIED TEACHERS</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="fun-fact-box text-center"> <i class="zmdi zmdi-favorite"></i> <span class="counter timer" data-from="0" data-to="7652" data-speed="2500" data-fresh-interval="700">7652</span>
                                <p>FOREIGN FOLLOWERS</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="fun-fact-box text-center"> <i class="zmdi zmdi-thumb-up"></i> <span class="counter timer" data-from="0" data-to="22" data-speed="2500" data-fresh-interval="700">52</span>
                                <p>Years Of Experience</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="fun-fact-box text-center"> <i class="zmdi zmdi-mood"></i> <span class="counter timer" data-from="0" data-to="7652" data-speed="2500" data-fresh-interval="700">7652</span>
                                <p>Well Smiley Faces</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Event -->
            <div class="upcoming-event">
                <div class="container">
                    <div class="row">
                        <div class="section-title col-12">
                            <h2><span>Upcoming </span>Event</h2>
                            <p>Join us or stream live</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-6 col-md-12">
                            <div class="common-cnt">
                                <div class="section-top">
                                    <p> ANNUAL MEET UP AND<br> SCHOLARSHIP<br> PRESENTATIONS </p>
                                </div>
                                <p class="date">29-September-2021</p>
                                <p class="address">Moi Dr, Innercore, JPQ4,<br> Nairobi, Kenya</p>
                                <p><a class="btn btn-primary btn-lg btn-round">Join Now</a> </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="box-img box-shadow img_hover_effect"> <img src="{{ asset('oreo/images/upcoming-img.jpg') }}" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Home Our Team -->
            <div class="our-team">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="section-title left col-lg-5">
                            <h2><span>Meet </span>Our Team</h2>
                            <p>Highly Qualified Staff</p>
                        </div>
                        <div class="section-title right col-lg-7">
                            <p><span class="color-212121">Winterfel University </span> The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-box text-center">
                                <div class="professor-pic"><img src="{{ asset('oreo/images/team-member-08.png') }}" alt="Pro. John"></div>
                                <div class="team-info">
                                    <h4>Pro. John <span>vice chancellor</span></h4>
                                    <ul class="clearfix">
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                    <a class="btn btn-simple btn-primary btn-round" href="teacher-detail.html">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="team-box text-center">
                                <div class="professor-pic"><img src="{{ asset('oreo/images/team-member-02.png')}}" alt="Pro. Amelia"></div>
                                <div class="team-info">
                                    <h4>Pro. Amelia <span>professor</span></h4>
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
                                    <h4>Pro. Charlie<span>Doctor</span></h4>
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

            <!-- Home Support -->
            <div class="support-home text-center xl-darkblack">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4>Become a Teacher</h4>
                            <p>Please feel free to contact us at (254) 740 096 095</p> <a class="btn btn-primary btn-round" href="javascript:void(0);">Start Teaching</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Home Blog -->
            <div class="home-blog">
                <div class="container">
                    <div class="row">
                        <div class="section-title col-12">
                            <h2><span>Latest </span>From Blog</h2>
                            <p>Keeping up with our blog</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-img img_hover_effect"> <img src="{{ asset('oreo/images/blog-1.png')}}" alt=""> </div>
                                <div class="blog-cnt">
                                    <h5><a href="javascript:void(0);">How to handle your kids’ from bad companies</a></h5>
                                    <p>The great explorer of the truth, master builder of human happiness one rejects, dislikes[...]</p>
                                </div>
                                <div class="blog-info">
                                    <span class="blog-date"><i class="zmdi zmdi-calendar"></i> 02 Jan 2021</span>
                                    <span class="blog-comment"><i class="zmdi zmdi-comments"></i> Comment ( 25 )</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-img img_hover_effect"> <img src="{{ asset('oreo/images/blog-2.png')}}" alt=""> </div>
                                <div class="blog-cnt">
                                    <h5><a href="javascript:void(0);">This academic year's academic trip was just epic</a></h5>
                                    <p>The great explorer of the truth, master builder of human happiness one rejects, dislikes[...]</p>
                                </div>
                                <div class="blog-info">
                                    <span class="blog-date"><i class="zmdi zmdi-calendar"></i> 02 Feb 2021</span>
                                    <span class="blog-comment"><i class="zmdi zmdi-comments"></i>Comment ( 1.5k )</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 hidden-md-down">
                            <div class="blog-box">
                                <div class="blog-img img_hover_effect"> <img src="{{ asset('oreo/images/blog-3.png')}}" alt=""> </div>
                                <div class="blog-cnt">
                                    <h5><a href="javascript:void(0);">Online classes now making it easy to attend every session</a></h5>
                                    <p>The great explorer of the truth, master builder of human happiness one rejects, dislikes[...]</p>
                                </div>
                                <div class="blog-info">
                                    <span class="blog-date"><i class="zmdi zmdi-calendar"></i> 05 Jul 2021</span>
                                    <span class="blog-comment"><i class="zmdi zmdi-comments"></i>Comment ( 125 )</span>
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
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using our web design is that it has a more-or-less normal distribution.</p>
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
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/teachers">Teacher</a></li>
                                        <li><a href="/events">Events</a></li>
                                        <li><a href="/galary">Gallery</a></li>
                                        <li><a href="/contact">Contact</a></li>
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
                                <li><i class="zmdi zmdi-pin"></i>Park Drive, Varick Str 10012, Kenya</li>
                                <li><i class="zmdi zmdi-email"></i>Winterfel@university.com</li>
                                <li><i class="zmdi zmdi-phone"></i>(254) 740 096 & 095</li>
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
                            <small>Copyright &copy; 2021 Winterfel Theme by <a href="" target="_blank">Brentone</a> </small> </div>
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
