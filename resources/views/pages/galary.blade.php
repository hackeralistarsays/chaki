<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>:: Oreo University :: Gallery</title>
<link rel="icon" href="favicon.ico">
<!-- start linking -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/gallery.css">
<link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body>

<div id="loading" class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>

<div class="wrapper">
    @include('layouts.main')

    <!-- start hero -->
    <section id="hero">
        <div class="inner-banner" style="background-image:url(assets/images/banner-gallery.jpg)">
            <div class="container">
                <h3 class="title">Oreo<br><big><strong>Gallery</strong></big></h3>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="main-section">
        <!-- FAQs -->
        <div class="img-gallery">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12">
                        <h2><span>View</span> our best Gallery</h2>
                        <p>Description text here...</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="popup-gallery">
                            <a class="popup2" href="assets/images/gallery/Portfolio-pic1.jpg"> <img src="assets/images/gallery/Portfolio-pic1.jpg" alt="pic"><span class="eye-wrapper"><i class="zmdi zmdi-eye"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="popup-gallery">
                            <a class="popup2" href="assets/images/gallery/Portfolio-pic2.jpg"><img src="assets/images/gallery/Portfolio-pic2.jpg" alt="pic"><span class="eye-wrapper"><i class="zmdi zmdi-eye"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="popup-gallery">
                            <a class="popup2" href="assets/images/gallery/Portfolio-pic3.jpg"><img src="assets/images/gallery/Portfolio-pic3.jpg" alt="pic"><span class="eye-wrapper"><i class="zmdi zmdi-eye"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="popup-gallery">
                            <a class="popup2" href="assets/images/gallery/Portfolio-pic4.jpg"><img src="assets/images/gallery/Portfolio-pic4.jpg" alt="pic"><span class="eye-wrapper"><i class="zmdi zmdi-eye"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="popup-gallery">
                            <a class="popup2" href="assets/images/gallery/Portfolio-pic5.jpg"><img src="assets/images/gallery/Portfolio-pic5.jpg" alt="pic"><span class="eye-wrapper"><i class="zmdi zmdi-eye"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="popup-gallery">
                            <a class="popup2" href="assets/images/gallery/Portfolio-pic6.jpg"><img src="assets/images/gallery/Portfolio-pic6.jpg" alt="pic"><span class="eye-wrapper"><i class="zmdi zmdi-eye"></i></span></a>
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
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!-- my js -->
<script src="assets/js/app.js"></script>
<script src="assets/js/lightbox.js"></script>
</body>
</html>