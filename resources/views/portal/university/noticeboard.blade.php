<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/noticeboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:41 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Oreo University Admin ::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
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
                <h2>Noticeboard
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>                    
                    <li class="breadcrumb-item active">Noticeboard</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>ID:</strong> 25822</h2>
                        <small>Created by Admin at: 8 Jan, 2018</small>
                        <ul class="header-dropdown">                            
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-delete"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h6>This is Note</h6>
                        <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                            sadipscing mel.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>ID:</strong> 25823</h2>
                        <small>Created by Admin at: 19 Dec, 2017</small>
                        <ul class="header-dropdown">                            
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-delete"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h6>This is Note</h6>
                        <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                            sadipscing mel.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>ID:</strong> 25824</h2>
                        <small>Created by Admin at: 18 Dec, 2017</small>
                        <ul class="header-dropdown">                            
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-delete"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h6>This is Note</h6>
                        <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                            sadipscing mel.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <button class="btn btn-primary btn-round">Add Notice</button>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="{{ asset('assets/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{ asset('assets/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{ asset('assets/assets/bundles/mainscripts.bundle.js') }}"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/noticeboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:41 GMT -->
</html>