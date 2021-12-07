<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:41 GMT -->
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
                <h2>Transport
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Transport</li>
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
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Transport-list">Transport Lists</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-Transport">Add Transport</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="Transport-list">
                        <div class="card">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0 c_table_v1">
                                        <thead>
                                            <tr>                                       
                                                <th>Media</th>
                                                <th>Driver Name</th>
                                                <th>Mobile</th>
                                                <th>License No</th>
                                                <th>Vehicle No</th>
                                                <th>Route Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="list-icon"><img class="rounded avtar-small" src="{{ asset('assets/assets/images/xs/avatar1.jpg') }}" alt=""></span></td>
                                                <td>Joseph</td>
                                                <td>404-447-6013</td>
                                                <td>GHT-25-5845</td>
                                                <td>UXS 111</td>
                                                <td>Botanic to Brooklyn</td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="rounded avtar-small" src="{{ asset('assets/assets/images/xs/avatar2.jpg') }}" alt=""></span></td>
                                                <td>Joseph</td>
                                                <td>404-447-1592</td>
                                                <td>GHT-25-4523</td>
                                                <td>UXS 494</td>
                                                <td>Botanic to Brooklyn</td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="rounded avtar-small" src="{{ asset('assets/assets/images/xs/avatar3.jpg') }}" alt=""></span></td>
                                                <td>Mark</td>
                                                <td>404-447-6013</td>
                                                <td>GHT-25-6587</td>
                                                <td>UXS 494</td>
                                                <td>Botanic to Brooklyn</td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="rounded avtar-small" src="{{ asset('assets/assets/images/xs/avatar4.jpg') }}" alt=""></span></td>
                                                <td>Jessia</td>
                                                <td>404-447-7532</td>
                                                <td>GHT-25-5845</td>
                                                <td>UXS 581</td>
                                                <td>Botanic to Brooklyn</td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="rounded avtar-small" src="{{ asset('assets/assets/images/xs/avatar5.jpg') }}" alt=""></span></td>
                                                <td>Joseph</td>
                                                <td>404-447-6013</td>
                                                <td>GHT-25-5263</td>
                                                <td>UXS 494</td>
                                                <td>Botanic to Brooklyn</td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="rounded avtar-small" src="{{ asset('assets/assets/images/xs/avatar6.jpg') }}" alt=""></span></td>
                                                <td>charlie</td>
                                                <td>404-447-9512</td>
                                                <td>GHT-25-5845</td>
                                                <td>UXS 494</td>
                                                <td>Botanic to Brooklyn</td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="rounded avtar-small" src="{{ asset('assets/assets/images/xs/avatar1.jpg') }}" alt=""></span></td>
                                                <td>Jack</td>
                                                <td>404-447-6013</td>
                                                <td>GHT-25-7485</td>
                                                <td>UXS 324</td>
                                                <td>Botanic to Brooklyn</td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="rounded avtar-small" src="{{ asset('assets/assets/images/xs/avatar2.jpg') }}" alt=""></span></td>
                                                <td>Joseph</td>
                                                <td>404-447-4563</td>
                                                <td>GHT-25-5845</td>
                                                <td>UXS 494</td>
                                                <td>Botanic to Brooklyn</td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="rounded avtar-small" src="{{ asset('assets/assets/images/xs/avatar3.jpg') }}" alt=""></span></td>
                                                <td>Alex</td>
                                                <td>404-447-9852</td>
                                                <td>GHT-25-4580</td>
                                                <td>UXS 494</td>
                                                <td>Botanic to Brooklyn</td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-icon"><img class="rounded avtar-small" src="{{ asset('assets/assets/images/xs/avatar4.jpg') }}" alt=""></span></td>
                                                <td>Cameron</td>
                                                <td>404-447-6013</td>
                                                <td>GHT-25-3698</td>
                                                <td>UXS 4578</td>
                                                <td>Botanic to Brooklyn</td>
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
                    <div class="tab-pane" id="add-Transport">
                        <div class="card">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mb-4">
                                            <label>Route Name</label>
                                            <input type="text" class="form-control" placeholder="Route Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group mb-4">
                                            <label>Vehicle Number</label>
                                            <input type="text" class="form-control" placeholder="Vehicle Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group mb-4">
                                            <label>Driver Name</label>
                                            <input type="text" class="form-control" placeholder="Driver Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group mb-4">
                                            <label>License Number</label>
                                            <input type="text" class="form-control" placeholder="License Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group mb-4">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <form action="https://thememakker.com/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                            <div class="dz-message">
                                                <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                                <h3>Drop files here or click to upload.</h3>
                                                <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form>
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

<!-- Mirrored from thememakker.com/templates/oreo/university/html/transport.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:41 GMT -->
</html>