<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/mail-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:03:18 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Oreo University Admin ::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Font Icon -->
<link rel="stylesheet" href="{{ asset('assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<!-- Custom Css -->
<link  rel="stylesheet" href="{{ asset('assets/assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets/css/inbox.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets/css/color_skins.css') }}">
</head>
<body class="theme-cyan">
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
@include('portal.layouts.app')

<section class="content inbox">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>View Email
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Inbox</a></li>
                    <li class="breadcrumb-item active">View Email</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card action_bar">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-1 col-md-2 col-3">
                                <div class="checkbox inlineblock delete_all">
                                    <input id="deleteall" type="checkbox">
                                    <label for="deleteall">All</label>
                                </div>                                
                            </div>
                            <div class="col-lg-5 col-md-3 col-6">
                                <div class="input-group search">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                </div>
                            </div>                            
                            <div class="col-lg-6 col-md-7 col-3 text-right">
                                <div class="btn-group d-none d-lg-inline-block d-md-inline-block">
                                    <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span> </button>
                                    <ul class="dropdown-menu dropdown-menu-right pullDown">
                                        <li><a href="javascript:void(0);">Unread</a></li>
                                        <li><a href="javascript:void(0);">Unimportant</a></li>
                                        <li><a href="javascript:void(0);">Add star</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="javascript:void(0);">Mute</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group d-none d-lg-inline-block d-md-inline-block">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="zmdi zmdi-label"></i>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right pullDown">
                                            <li>
                                                <a href="javascript:void(0);">Family</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Work</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Google</a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0);">Create a Label</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-group d-none d-lg-inline-block d-none d-lg-inline-block d-md-inline-block">
                                    <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-folder"></i> <span class="caret"></span> </button>
                                    <ul class="dropdown-menu dropdown-menu-right pullDown">
                                        <li><a href="javascript:void(0);">Important</a></li>
                                        <li><a href="javascript:void(0);">Social</a></li>
                                        <li><a href="javascript:void(0);">Bank Statements</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="javascript:void(0);">Create a folder</a></li>
                                    </ul>
                                </div>                                
                                <button type="button" class="btn btn-neutral d-none d-lg-inline-block d-md-inline-block">
                                    <i class="zmdi zmdi-plus-circle"></i>
                                </button>
                                <button type="button" class="btn btn-neutral d-none d-lg-inline-block d-md-inline-block">
                                    <i class="zmdi zmdi-archive"></i>
                                </button>
                                <button type="button" class="btn btn-neutral btn-danger">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="m-t-0 m-b-20">Your updated item adminX</h4>
                                <hr>
                                <div class="media">
                                    <div class="float-left">
                                        <div class="m-r-20"> <img class="rounded" src="assets/assets/images/xs/avatar7.jpg" width="60" alt=""> </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="m-b-0">
                                            <strong class="text-muted m-r-5">From:</strong>
                                            <a href="javascript:void(0);" class="text-default">woodwalton@orbaxter.com</a>
                                            <span class="text-muted text-sm float-right">16:54, 24.04.2017</span>
                                        </p>
                                        <p class="m-b-0">
                                            <strong class="text-muted m-r-10">To:</strong>Me
                                            <small class="text-muted float-right"><i class="zmdi zmdi-attachment m-r-5"></i>(2 files, 89.2 KB)</small>
                                        </p>
                                        <p class="m-b-0">
                                            <strong class="text-muted m-r-10">CC:</strong><a href="javascript:void(0);">timhank@gmail.com</a>, <a href="javascript:void(0);">timhank@gmail.com</a>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrnturies, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                
                            </div>
                            <div class="col-md-12">
                                <span><img src="assets/assets/images/image2.jpg" class="img-thumbnail m-t-10" width="250" alt=""></span>
                                <span><img src="assets/assets/images/image3.jpg" class="img-thumbnail m-t-10" width="250" alt=""></span>
                            </div>                   
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <strong>Click here to</strong> <a href="mail-compose.html">Reply</a> or <a href="mail-compose.html">Forward</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="{{ asset('assets/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{ asset('assets/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{ asset('assets/assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js --> 
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/mail-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:03:18 GMT -->
</html>