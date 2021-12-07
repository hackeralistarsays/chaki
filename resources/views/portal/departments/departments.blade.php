<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/departments.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:37 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Oreo University Departments ::</title>
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
            <div class="col-lg-7 col-md-5 col-sm-12">
                <h2>Departments
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="departments.html">Departments</a></li>
                    <li class="breadcrumb-item active">All</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">                
                <div class="card">
                    <div class="header">
                        <h2><strong>All</strong> Departments List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
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
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Dept. Name</th>
                                    <th>Brief</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>No. of Students</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>MBA</td>
                                    <td>web page editors now use Lorem Ipsum as their</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>78</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>MBA</td>
                                    <td>There are many variations of passages of Lorem Ipsum</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>MBA</td>
                                    <td>Contrary to popular belief, Lorem Ipsum is not simply random</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>44</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>M.COM</td>
                                    <td>All the Lorem Ipsum generators on the Internet</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>74</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>102</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>B.COM</td>
                                    <td>All the Lorem Ipsum generators on the Internet</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>47</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>BBA</td>
                                    <td>It is a long established fact that a reader</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>52</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>MCA</td>
                                    <td>It is a long established fact that a reader</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>55</td>
                                </tr>
                            </tbody>
                        </table>
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

<!-- Mirrored from thememakker.com/templates/oreo/university/html/departments.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:38 GMT -->
</html>