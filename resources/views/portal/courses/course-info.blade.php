<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/departments.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Oreo University Courses ::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- JQuery DataTable Css -->
    <link href="{{ asset('assets/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css" rel="stylesheet') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/color_skins.css') }}">
</head>

<body class="theme-blush">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('assets/assets/images/logo.svg') }}" width="48" height="48" alt="Oreo"></div>
            <p>Please wait...</p>
        </div>
    </div>
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
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Courses info
                        <small>Welcome to Oreo</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Courses</a></li>
                        <li class="breadcrumb-item active">info</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="body">
                            <img src="{{ asset('assets/assets/images/image1.jpg') }}" alt="" class="img-fluid rounded m-b-20">
                            <h6>Game Programming Course</h6>
                            <div class="table-responsive">
                                <table class="table table-hover m-t-20">
                                    <tbody>
                                        <tr>
                                            <td>Year</td>
                                            <td>2021 SEM 2</td>
                                        </tr>
                                        <tr>
                                            <td>Fees</td>
                                            <td><strong class="col-blush">$315.60</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Prof NAME</td>
                                            <td><strong>Will Smith</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Students</td>
                                            <td><strong class="col-green">115</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="/portal/course_info" class="btn btn-block btn-raised btn-primary btn-round waves-effect" role="button">Apply Now</a>
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
                            <div class="card">
                                <div class="body">
                                    <h6>Course Details</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                        to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                                    <h6>Study Options</h6>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Qualification</th>
                                                    <th>Length</th>
                                                    <th>Code</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Bsc (Hons)</td>
                                                    <td>2 years full time</td>
                                                    <td>OUK23</td>
                                                </tr>
                                                <tr>
                                                    <td>Bsc</td>
                                                    <td>3 years full time</td>
                                                    <td>OUB18</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h6>English Education Modules</h6>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock</p>
                                    <hr>
                                    <h6>Projects & Research Intrests</h6>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Structure">
                            <div class="card">
                                <div class="body">
                                    <h6>Course Structure</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                        to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                                    <h6>Study Options</h6>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Qualification</th>
                                                    <th>Length</th>
                                                    <th>Code</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Bsc (Hons)</td>
                                                    <td>3 years full time</td>
                                                    <td>CDX3</td>
                                                </tr>
                                                <tr>
                                                    <td>Bsc </td>
                                                    <td>4 years full time</td>
                                                    <td>CDX4</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h6>English Education Modules</h6>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock</p>
                                    <hr>
                                    <h6>Projects & Research Intrests</h6>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Gallery">
                            <div class="card">
                                <div class="body">
                                    <h6>Course Gallery</h6>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <img src="{{ asset('assets/assets/images/image7.jpg') }}" alt="" class="img-fluid rounded m-b-30">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img src="{{ asset('assets/assets/images/image2.jpg') }}" alt="" class="img-fluid rounded m-b-30">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img src="{{ asset('assets/assets/images/image3.jpg') }}" alt="" class="img-fluid rounded m-b-30">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img src="{{ asset('assets/assets/images/image4.jpg') }}" alt="" class="img-fluid rounded m-b-30">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/assets/bundles/libscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets/assets/bundles/vendorscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js -->

    <script src="{{ asset('assets/assets/bundles/mainscripts.bundle.js') }}"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/courses-info.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:40 GMT -->

</html>