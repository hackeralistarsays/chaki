<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:27 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Oreo University Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="{{ asset('assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('assets/assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/assets/css/color_skins.css') }}">
</head>

<body class="theme-blush menu_img">
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

<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Contact
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs padding-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Professors">Professors</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Students">Students</a></li>
                        </ul>                                                
                    </div>                   
                </div>
            </div>           
        </div>
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
                            <div class="col-lg-5 col-md-5 col-6">
                                <div class="input-group search">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-3 text-right">
                                <div class="btn-group d-none d-lg-inline-block d-md-inline-block" role="group">
                                    <div class="btn-group">
                                        <button type="button" class="btn col-black btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                <button type="button" class="btn col-black btn-neutral d-none d-lg-inline-block d-md-inline-block">
                                    <i class="zmdi zmdi-plus-circle"></i>
                                </button>
                                <button type="button" class="btn col-black btn-neutral d-none d-lg-inline-block d-md-inline-block">
                                    <i class="zmdi zmdi-archive"></i>
                                </button>
                                <button type="button" class="btn col-black btn-neutral">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </div>
                    </div>                   
                </div>
                <div class="card">
                    <div class="body">                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="Professors">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0 c_list">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>                                    
                                                <th data-breakpoints="xs">Phone</th>                                    
                                                <th data-breakpoints="xs sm md">Address</th>
                                                <th data-breakpoints="xs">Action</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="adelete_2" type="checkbox">
                                                        <label for="adelete_2">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/assets/images/xs/avatar1.jpg') }}" class="rounded-circle avatar" alt="">
                                                    <p class="c_name">John Smith</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-2583</span>
                                                </td>                                   
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                                </td>
                                            </tr>                                        
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="adelete_4" type="checkbox">
                                                        <label for="adelete_4">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/assets/images/xs/avatar4.jpg') }}" class="rounded-circle avatar" alt="">
                                                    <p class="c_name">Maryam Amiri</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-9513</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="adelete_5" type="checkbox">
                                                        <label for="adelete_5">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/assets/images/xs/avatar6.jpg') }}" class="rounded-circle avatar" alt="">
                                                    <p class="c_name">Tim Hank</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-1212</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>70 Bowman St. South Windsor, CT 06074</address>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                                </td>
                                            </tr>                                        
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="adelete_7" type="checkbox">
                                                        <label for="adelete_7">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/assets/images/xs/avatar8.jpg') }}" class="rounded-circle avatar" alt="">
                                                    <p class="c_name">Gary Camara</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-1005</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>44 Shirley Ave. West Chicago, IL 60185</address>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="adelete_8" type="checkbox">
                                                        <label for="adelete_8">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/assets/images/xs/avatar9.jpg') }}" class="rounded-circle avatar" alt="">
                                                    <p class="c_name">Frank Camly</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-9999</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="adelete_9" type="checkbox">
                                                        <label for="adelete_9">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/assets/images/xs/avatar10.jpg') }}" class="rounded-circle avatar" alt="">
                                                    <p class="c_name">Tim Hank</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-1212</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>70 Bowman St. South Windsor, CT 06074</address>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="Students">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0 c_list">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>                                    
                                                <th data-breakpoints="xs">Phone</th>                                    
                                                <th data-breakpoints="xs sm md">Address</th>
                                                <th data-breakpoints="xs">Action</th>
                                            </tr>
                                        </thead>
                                            <tbody>                                            
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="delete_4" type="checkbox">
                                                        <label for="delete_4">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/assets/images/xs/avatar4.jpg') }}" class="rounded-circle avatar" alt="">
                                                    <p class="c_name">Maryam Amiri</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-9513</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="delete_5" type="checkbox">
                                                        <label for="delete_5">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/assets/images/xs/avatar6.jpg') }}" class="rounded-circle avatar" alt="">
                                                    <p class="c_name">Tim Hank</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-1212</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>70 Bowman St. South Windsor, CT 06074</address>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="delete_6" type="checkbox">
                                                        <label for="delete_6">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/assets/images/xs/avatar7.jpg') }}" class="rounded-circle avatar" alt="">
                                                    <p class="c_name">Fidel Tonn</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-2323</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>514 S. Magnolia St. Orlando, FL 32806</address>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="delete_7" type="checkbox">
                                                        <label for="delete_7">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/assets/images/xs/avatar8.jpg') }}" class="rounded-circle avatar" alt="">
                                                    <p class="c_name">Gary Camara</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-1005</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>44 Shirley Ave. West Chicago, IL 60185</address>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="delete_8" type="checkbox">
                                                        <label for="delete_8">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/assets/images/xs/avatar9.jpg') }}" class="rounded-circle avatar" alt="">
                                                    <p class="c_name">Frank Camly</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-9999</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="delete_9" type="checkbox">
                                                        <label for="delete_9">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/assets/images/xs/avatar10.jpg') }}" class="rounded-circle avatar" alt="">
                                                    <p class="c_name">Tim Hank</p>
                                                </td>
                                                <td>
                                                    <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-1212</span>
                                                </td>
                                                <td>
                                                    <address><i class="zmdi zmdi-pin"></i>70 Bowman St. South Windsor, CT 06074</address>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                                    <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">                            
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-right"></i></a></li>
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

<!-- Mirrored from thememakker.com/templates/oreo/university/html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:27 GMT -->
</html>