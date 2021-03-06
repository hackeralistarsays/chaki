<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/mail-inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:26 GMT -->
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
<link rel="stylesheet" href="{{ asset('assets/assets/css/main.css') }}">
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
                <h2>Inbox
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Inbox</li>
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
                                    <label for="deleteall">
                                        All
                                    </label>
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
            <div class="col-md-12 col-lg-12 col-xl-12">
                <ul class="mail_list list-group list-unstyled">
                    <li class="list-group-item">
                        <div class="media">
                            <div class="float-left">
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_1">
                                        <label for="basic_checkbox_1"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite text-muted d-none d-lg-inline-block d-md-inline-block" data-toggle="active"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb d-none d-lg-inline-block d-md-inline-block m-r-20"> <img src="assets/assets/images/xs/avatar1.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="mail-single.html" class="m-r-10">Velit a labore</a>
                                    <span class="badge bg-blue">Family</span>
                                    <small class="float-right text-muted"><time datetime="2017">12:35 AM</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                </div>
                                <p class="msg">Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item unread">
                        <div class="media">
                            <div class="float-left">
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_2">
                                        <label for="basic_checkbox_2"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite col-amber d-none d-lg-inline-block d-md-inline-block" data-toggle="active"><i class="zmdi zmdi-star"></i></a>
                                </div>
                                <div class="thumb d-none d-lg-inline-block d-md-inline-block m-r-20"> <img src="assets/assets/images/xs/avatar2.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="mail-single.html" class="m-r-10">Simply dummy text</a>
                                    <span class="badge bg-amber">Shop</span>
                                    <small class="float-right text-muted"><time datetime="2017">12:35 AM</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                </div>
                                <p class="msg">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="float-left">
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_3">
                                        <label for="basic_checkbox_3"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite text-muted d-none d-lg-inline-block d-md-inline-block" data-toggle="active"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb d-none d-lg-inline-block d-md-inline-block m-r-20"> <img src="assets/assets/images/xs/avatar3.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="mail-single.html" class="m-r-10">Velit a labore</a>
                                    <span class="badge bg-red">Google</span>
                                    <small class="float-right text-muted"><time datetime="2017">12:35 AM</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                </div>
                                <p class="msg"> If you are going to use a passage of Lorem Ipsum, you need to be sure</p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item unread">
                        <div class="media">
                            <div class="float-left">
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_4">
                                        <label for="basic_checkbox_4"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite text-muted d-none d-lg-inline-block d-md-inline-block" data-toggle="active"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb d-none d-lg-inline-block d-md-inline-block m-r-20"> <img src="assets/assets/images/xs/avatar4.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="mail-single.html" class="m-r-10">Variations of passages</a>
                                    <span class="badge bg-blush">Themeforest</span>
                                    <small class="float-right text-muted"><time datetime="2017">12:35 AM</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                </div>
                                <p class="msg">There are many variations of passages of Lorem Ipsum available, but the majority </p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="float-left">
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_5">
                                        <label for="basic_checkbox_5"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite text-muted d-none d-lg-inline-block d-md-inline-block" data-toggle="active"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb d-none d-lg-inline-block d-md-inline-block m-r-20"> <img src="assets/assets/images/xs/avatar5.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="mail-single.html" class="m-r-10">Generators on the Internet</a>
                                    <span class="badge bg-green">Work</span>
                                    <small class="float-right text-muted"><time datetime="2017">12:35 AM</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                </div>
                                <p class="msg">LAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="float-left">
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_6">
                                        <label for="basic_checkbox_6"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite col-amber d-none d-lg-inline-block d-md-inline-block" data-toggle="active"><i class="zmdi zmdi-star"></i></a>
                                </div>
                                <div class="thumb d-none d-lg-inline-block d-md-inline-block m-r-20"> <img src="assets/assets/images/xs/avatar6.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="mail-single.html" class="m-r-10">Contrary to popular</a>
                                    <span class="badge bg-blush">Themeforest</span>
                                    <small class="float-right text-muted"><time datetime="2017">12:35 AM</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                </div>
                                <p class="msg">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="float-left">
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_7">
                                        <label for="basic_checkbox_7"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite col-amber d-none d-lg-inline-block d-md-inline-block" data-toggle="active"><i class="zmdi zmdi-star"></i></a>
                                </div>
                                <div class="thumb d-none d-lg-inline-block d-md-inline-block m-r-20"> <img src="assets/assets/images/xs/avatar7.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="mail-single.html" class="m-r-10">Velit a labore</a>
                                    <span class="badge bg-green">Work</span>
                                    <small class="float-right text-muted"><time datetime="2017">12:35 AM</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                </div>
                                <p class="msg">Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry. </p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="float-left">
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_8" checked>
                                        <label for="basic_checkbox_8"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite col-amber d-none d-lg-inline-block d-md-inline-block" data-toggle="active"><i class="zmdi zmdi-star"></i></a>
                                </div>
                                <div class="thumb d-none d-lg-inline-block d-md-inline-block m-r-20"> <img src="assets/assets/images/xs/avatar8.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="mail-single.html" class="m-r-10">Variations of passages</a>
                                    <span class="badge bg-blush">Themeforest</span>
                                    <small class="float-right text-muted"><time datetime="2017">12:35 AM</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                </div>
                                <p class="msg">There are many variations of passages of Lorem Ipsum available, but the majority </p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="float-left">
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_9">
                                        <label for="basic_checkbox_9"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite text-muted d-none d-lg-inline-block d-md-inline-block" data-toggle="active"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb d-none d-lg-inline-block d-md-inline-block m-r-20"> <img src="assets/assets/images/xs/avatar9.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="mail-single.html" class="m-r-10">Generators on the Internet</a>
                                    <span class="badge bg-green">Work</span>
                                    <small class="float-right text-muted"><time datetime="2017">12:35 AM</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                </div>
                                <p class="msg">LAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="float-left">
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_10">
                                        <label for="basic_checkbox_10"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite text-muted d-none d-lg-inline-block d-md-inline-block" data-toggle="active"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb d-none d-lg-inline-block d-md-inline-block m-r-20"> <img src="assets/assets/images/xs/avatar10.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="mail-single.html" class="m-r-10">Velit a labore</a>
                                    <span class="badge bg-blue">Family</span>
                                    <small class="float-right text-muted"><time datetime="2017">12:35 AM</time><i class="zmdi zmdi-attachment-alt"></i> </small>
                                </div>
                                <p class="msg">Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="card m-t-5">
                    <div class="body">
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js -->
<script src="{{ asset('assets/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/assets/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ asset('assets/assets/bundles/mainscripts.bundle.js') }}"></script>    
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/mail-inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:27 GMT -->
</html>