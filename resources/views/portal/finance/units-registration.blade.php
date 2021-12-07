<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/students-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:34 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Units Registration ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="{{ asset('oreo/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('oreo/assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('oreo/assets/css/color_skins.css') }}">
</head>
<body class="theme-blush">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('oreo/assets/images/logo.svg') }}" width="48" height="48" alt="Oreo"></div>
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


<section class="content invoice">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>
                <small>Student's Portal</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="/dashboard"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Units</a></li>
                    <li class="breadcrumb-item active">Registration</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                        <div class="row clearfix">                           
                            <div class="col-lg-12 col-md-12">
                                <div class="card" id="details">
                                    <div class="body">  
                                    <div>
                                        @if ( Session::get('already_registered') != null)

                                        <div class="alert alert-danger alert-dismissible">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>FAILED</strong> : {{ Session::get('already_registered')}}
                                        </div>

                                        @endif
                                    </div>                                 
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 text-right">
                                                <address>
                                                    <h6>REGNO : {{$regno}}</h6>
                                                    <h6>Name : {{$name}}</h6>
                                                    @foreach($courses as $corse)
                                                    <h6>COURSE NAME : {{$corse->name}}</h6>
                                                    @foreach($details as $detail)
                                                    <p><strong>Study Option: </strong> {{$detail->qualification}}</p>
                                                    @endforeach
                                                    <p class="m-b-0"><strong>Date: </strong> {{now()}}</p>
                                                   @endforeach
                                                </address>
                                            </div>
                                            
                                        </div>
                                        @if(!$finance_registration->isEmpty())
                                        <form action="" method="post">
                                            <div class="row  col-mb-10">

                                                <div class="col-md-9 col-sm-9">
                                                    
                                                <div for="class_name">Select Unit to Register</div>
                                                        <select id="class_name" class="form-group" name="class_name" style="width: 100%; border:1px solid #999; border-radius:20px;">
                                            
                                                                <?php
                                                                    $j = 1;
                                                                ?>
                                                            @foreach($units as $unit)
                                                                <option class="form-control" value=""></option>
                                                                <option class="form-control" value=""><?php  echo $j++ ?> {{$unit->code}} {{$unit->unit_name}}</option>
                                                                
                                                           
                                                            @endforeach
                                                                
            
                                                        </select>
                                                    
                                                   
                                                </div>
                                                <div class="col-md-3 col-sm-12 form-group">
                                                    <button class="form-control btn btn-primary">Book</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="mt-40"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="table-responsive">
                                                    <table class="table table-hover m-b-0">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>                                                        
                                                                <th>CODE</th>
                                                                <th>NAME</th>
                                                                <th>CF</th>
                                                                <th>SEM</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            $j = 1;
                                                        ?>
                                                            @foreach($units as $unit)
                                                            <tr>
                                                                <td><?php  echo $j++ ?></td>
                                                                <td>{{$unit->code}}</td>
                                                                <td>{{$unit->unit_name}}</td>
                                                                <td>{{$unit->qualification}} </td>  
                                                                <td>{{$unit->semester}}</td>
                                                                <td><button class="btn btn-primary">Remove</button></td>
                                                            </tr> 
                                                            @endforeach
                                                            

                                                                                                               
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        @endif
                                        <hr>
                                        <div>
                                        @if ( Session::get('error') != null)

                                        <div class="alert alert-danger alert-dismissible">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{ Session::get('error')}}
                                        </div>

                                        @endif
                                    </div> 
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
<script src="{{ asset('oreo/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{ asset('oreo/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{ asset('oreo/assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js --> 
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/students-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:34 GMT -->
</html>