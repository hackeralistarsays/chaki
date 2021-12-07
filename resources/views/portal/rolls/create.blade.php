<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/university/html/students-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jun 2021 20:02:34 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Nominal Roll ::</title>
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
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Finance</a></li>
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
                                            <div class="col-md-6 col-sm-6">
                                                <address>
                                                    <h6>REGNO : {{$regno}}</h6>
                                                    <h6>Name : {{$name}}</h6>
                                                    <h6>COURSE NAME : {{$course->name}}</h6>
                                                    <h6>Department : {{$course->department}}</h6>
                                                </address>
                                            </div>
                                            <div class="col-md-6 col-sm-6 text-right">
                                                <p class="m-b-0"><strong>Date: </strong> {{now()}}</p>
                                                @foreach($details as $detail)
                                                    <p><strong>Study Option: </strong> {{$detail->qualification}}</p>
                                                @endforeach
                                                <p class="m-b-0"><strong>Status: </strong> <span class="badge bg-orange">{{$student->status}}</span></p>
                                            </div>
                                        </div>
                                        <div class="mt-40"></div>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="table-responsive">
                                                    <table class="table table-hover m-b-0">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Study Option</th>
                                                                <th>Sem</th>
                                                                <th>Year</th>
                                                                <th>Trial</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            $j = 1;
                                                        ?>
                                                            @foreach($details as $detail)
                                                            <tr>
                                                                <td><?php  echo $j++ ?></td>
                                                                <td>{{$detail->qualification}}</td>
                                                                <td>{{$student->semester}}</td>
                                                                <td>{{$student->year_of_study}} </td>
                                                                <td>1</td>
                                                            </tr>
                                                            @endforeach



                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Note</h5>
                                                <p>Finance Registration can only be done on zero fee balances.
                                                    Ensure you clear your fee balances before
                                                    proceeding to finance registration.
                                                    Make sure you confirm your course details as well.
                                                </p>
                                            </div>
                                            <div class="col-md-6 text-right">

                                            <form action="/fin/reg" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-round">Sign Nominal Roll</button>
                                            </form>
                                            </div>
                                        </div>
                                        <hr>

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
