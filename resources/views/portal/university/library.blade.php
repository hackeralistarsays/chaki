<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/library.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:40 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Oreo University Admin ::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="{{ asset('assets/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
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
                <h2>Library
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Assets</strong> Details</h2>
                        <ul class="header-dropdown">                            
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="nav nav-tabs padding-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#librarylist">Library list</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#addlibrary">Add Library</a></li>
                        </ul>                        
                    </div>
                </div>
                <div class="tab-content">                   
                    <div class="tab-pane active" id="librarylist">
                        <div class="card">
                            <div class="body table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Title</th>
                                            <th>Subject</th>
                                            <th>Department</th>
                                            <th>Type</th>
                                            <th>Year</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>                            
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Data Structures using C & C++</td>
                                            <td>C++</td>
                                            <td>Computar</td>
                                            <td>PDF</td>
                                            <td>First Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Introduction to Computers</td>
                                            <td>Computers</td>
                                            <td>Computers</td>
                                            <td>Book</td>
                                            <td>Second Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Management Information System</td>
                                            <td>Management</td>
                                            <td>Information</td>
                                            <td>PDF</td>
                                            <td>Fourth Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Operating System Concepts</td>
                                            <td>Computers</td>
                                            <td>Computers</td>
                                            <td>Book</td>
                                            <td>First Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Computer Networking</td>
                                            <td>Management</td>
                                            <td>Computer</td>
                                            <td>PDF</td>
                                            <td>Second Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Graphics</td>
                                            <td>Management</td>
                                            <td>Architecture</td>
                                            <td>Book</td>
                                            <td>Fourth Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Computer Networks</td>
                                            <td>Networks</td>
                                            <td>Computer</td>
                                            <td>PDF</td>
                                            <td>First Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Animation</td>
                                            <td>Management</td>
                                            <td>Computer</td>
                                            <td>Book</td>
                                            <td>Fourth Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Electronics</td>
                                            <td>Management</td>
                                            <td>Computer</td>
                                            <td>Book</td>
                                            <td>First Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Integrated Circuits</td>
                                            <td>Management</td>
                                            <td>Architecture</td>
                                            <td>Book</td>
                                            <td>First Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Electronics</td>
                                            <td>Management</td>
                                            <td>Architecture</td>
                                            <td>Book</td>
                                            <td>First Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Animation Graphic Fundamentals	</td>
                                            <td>Management</td>
                                            <td>Architecture</td>
                                            <td>Book</td>
                                            <td>First Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Electronics</td>
                                            <td>Management</td>
                                            <td>Architecture</td>
                                            <td>Book</td>
                                            <td>First Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Graphic Designing</td>
                                            <td>Management</td>
                                            <td>Architecture</td>
                                            <td>Book</td>
                                            <td>First Year</td>
                                            <td>In Stock</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="addlibrary">
                        <div class="card">
                            <div class="body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Subject" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Department" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Type" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Year" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Status" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary btn-lg btn-round btn-simple">Add Library</button>
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
<script src="{{ asset('assets/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{ asset('assets/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="{{ asset('assets/assets/bundles/datatablescripts.bundle.js') }}"></script>

<script src="{{ asset('assets/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/assets/js/pages/tables/jquery-datatable.js') }}"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/library.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:40 GMT -->
</html>