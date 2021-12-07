<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/hostel.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:41 GMT -->
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
<link href="{{ asset('assets/assets/plugins/dropzone/dropzone.css" rel="stylesheet') }}">
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
                <h2>Hostel
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Hostel</li>
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
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Room-list">Room Lists</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-Room">Add Room</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="Room-list">
                        <div class="card">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0 c_table_v1">
                                        <thead>
                                            <tr>
                                                <th>Block</th>
                                                <th>Room No</th>
                                                <th>Type</th>
                                                <th>No of Bed</th>
                                                <th>Availability</th>
                                                <th>Cost Per Bed</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>A</td>
                                                <td>201</td>
                                                <td>Medium</td>
                                                <td>4</td>
                                                <td>1</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                <td>305</td>
                                                <td>Big</td>
                                                <td>10</td>
                                                <td>3</td>
                                                <td>$12</td>
                                            </tr>
                                            <tr>
                                                <td>B</td>
                                                <td>404</td>
                                                <td>Medium</td>
                                                <td>2</td>
                                                <td>2</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                <td>201</td>
                                                <td>Medium</td>
                                                <td>4</td>
                                                <td>1</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                <td>201</td>
                                                <td>Medium</td>
                                                <td>4</td>
                                                <td>1</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>C</td>
                                                <td>701</td>
                                                <td>Small</td>
                                                <td>3</td>
                                                <td>2</td>
                                                <td>$35</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                <td>804</td>
                                                <td>Medium</td>
                                                <td>4</td>
                                                <td>1</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                <td>201</td>
                                                <td>Medium</td>
                                                <td>4</td>
                                                <td>3</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                <td>603</td>
                                                <td>Small</td>
                                                <td>4</td>
                                                <td>1</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                <td>402</td>
                                                <td>Small</td>
                                                <td>4</td>
                                                <td>4</td>
                                                <td>$20</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
                    <div class="tab-pane" id="add-Room">
                        <div class="card">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mb-4">
                                            <label>Block Name</label>
                                            <input type="text" class="form-control" placeholder="Block Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mb-4">
                                            <label>Room Number</label>
                                            <input type="text" class="form-control" placeholder="Room Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group mb-4">
                                            <label>Room Type</label>
                                            <input type="text" class="form-control" placeholder="Room Type">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group mb-4">
                                            <label>No of Bed</label>
                                            <input type="text" class="form-control" placeholder="No of Bed">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group mb-4">
                                            <label>Cost Per Bed</label>
                                            <input type="text" class="form-control" placeholder="Cost Per Bed">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-4">
                                        <button type="submit" class="btn btn-raised btn-round btn-primary">Save</button>
                                        <button type="submit" class="btn btn-raised btn-round">Cancel</button>
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

<script src="{{ asset('assets/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/assets/plugins/dropzone/dropzone.js') }}"></script> <!-- Dropzone Plugin Js -->
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/hostel.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:41 GMT -->
</html>