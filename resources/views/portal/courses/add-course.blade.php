<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/add-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Oreo University Admin ::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Dropzone Css -->
    <link href="{{ asset('assets/assets/plugins/dropzone/dropzone.css') }}" rel="stylesheet">
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ asset('assets/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />
    <!-- Wait Me Css -->
    <link href="{{ asset('assets/assets/plugins/waitme/waitMe.css') }}" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

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
                    <h2>Add Courses
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
                        <li class="breadcrumb-item active">Add</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Course Basic</strong> Information <small>Description text here...</small> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Courses Name">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="datetimepicker form-control" placeholder="Starts From">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Course Duration">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Course Fee">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Course Incharge">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <form action="https://thememakker.com/" id="frmFileUpload" class="dropzone m-b-20" method="post" enctype="multipart/form-data">
                                        <div class="dz-message">
                                            <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                            <h3>Drop files here or click to upload.</h3>
                                            <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <select class="form-control show-tick">
                                    <option value="">Department</option>
                                    <option value="1">Computer</option>
                                    <option value="2">Medical</option>
                                </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Year">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Website URL">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Course Description"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-raised waves-effect btn-round btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-raised waves-effect btn-round">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Course</strong> Requirements <small>Description text here...</small> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="w3schools">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Website 1">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Website 2">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Website 3">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Website 4">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Website 5">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-raised waves-effect btn-round btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-raised waves-effect btn-round">Cancel</button>
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

    <script src="{{ asset('assets/assets/plugins/autosize/autosize.js') }}"></script>
    <!-- Autosize Plugin Js -->
    <script src="{{ asset('assets/assets/plugins/momentjs/moment.js') }}"></script>
    <!-- Moment Plugin Js -->
    <script src="{{ asset('assets/assets/plugins/dropzone/dropzone.js') }}"></script>
    <!-- Dropzone Plugin Js -->
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('assets/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

    <script src="{{ asset('assets/assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/assets/js/pages/forms/basic-form-elements.js') }}"></script>

</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/add-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:40 GMT -->

</html>