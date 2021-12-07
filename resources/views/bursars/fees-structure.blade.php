<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Fee Structure  </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/vendors/css/extensions/unslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/css/components.min.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/css/core/colors/palette-gradient.min.css') }}">
    <!-- link(rel='stylesheet', type='text/css', href=app_assets_path+'/css'+rtl+'/pages/users.css')-->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns   menu-collapsed fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    @if (Session::get('staff_category') == "bursar")
        @include('bursars.includes.navbar')
        @include('bursars.includes.sidebar')
    @else
    @endif
    <!-- END: Header-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="color:red">{{ $error }}</li>
                            @endforeach
                        </ul>
                </div>
            @endif
{{-- Modal for adding new Fee Item --}}
<div class="modal fade" id="bank" tabindex="-1" role="dialog" aria-labelledby="bankTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Fee Item For {{ $course->name }} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('structure.store') }}" method="POST">
                @csrf
                <div class="row">

                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="course_id"><i class="fa fa-file"></i> Course</label>
                                <Select name="course_id" id="course_id" class="form-control custom-select">
                                    <option value="{{ $course->id }}" selected>{{ $course->name }}</option>
                                </Select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="year"><i class="fa fa-calendar"></i> Year</label>
                                <select name="year" id="year" class="form-control custom-select">
                                    <option value="" selected disabled>Select Year</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="semester"><i class="fa fa-cube"></i> Semester</label>
                                <select name="semester" id="semester" class="form-control custom-select">
                                    <option value="" selected disabled>Select semester</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                    <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Submit
                        Details <i class="fa fa-send"></i></button>
                    <button type="reset" class="btn btn-danger">Cancel <i class="fa fa-close"></i></button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
<div class="modal fade" id="item" tabindex="-1" role="dialog" aria-labelledby="itemTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Fee Item For {{ $course->name }} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('feeitem.store', $course->id) }}" method="POST">
                @csrf
                <div class="row">

                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="name"><i class="fa fa-name"></i> Fee Item</label>
                                <input type="text" class="form-control"
                                    id="name" name="name" required placeholder="Enter name"
                                    data-validation-required-message="This name field is required">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="amount"><i class="fa fa-money"></i> Amount</label>
                                <input type="number" class="form-control"
                                    id="amount" name="amount" required placeholder="Enter amount"
                                    data-validation-required-message="This amount field is required">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="transaction_no"><i class="fa fa-qrcode"></i> Status</label>
                                <select name="status" id="status" class="form-control custom-select">
                                    <option value="" selected disabled>Select Status</option>
                                    <option value="required">Required</option>
                                    <option value="optional">Optional</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                    <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Submit
                        Details <i class="fa fa-send"></i></button>
                    <button type="reset" class="btn btn-danger">Cancel <i class="fa fa-close"></i></button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
{{-- End of modal --}}

<!-- Audience by country & users visit-->
<div class="row match-height">
    {{-- Cash payments --}}
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header border-0">
                <h4 class="card-title">{{ $course->name }}</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><button class="btn btn-primary" data-toggle="modal" data-target="#bank"><i class="fa fa-plus-circle"> New Structure</i></button></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered dataex-visibility-message">
                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Department</th>
                                <th>Year</th>
                                <th>Semester</th>
                                <th>Created At</th>
                                <th>Fees</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                                @if ($feestructure != null)
                                    @foreach ($feestructure as $structure)
                                        <tr>
                                        <td>{{ $structure->course->name }} </td>
                                        <td>{{ $structure->course->department }}</td>
                                        <td>{{ $structure->year }}</td>
                                        <td>{{ $structure->semester }}</td>
                                        <td>{{ $structure->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $structure->feeitems->sum('amount') }}</td>
                                        <td>{{ 'Active' }}</td>
                                        <td><a href="{{ route('feeitem.create', $structure->id) }}" title="Create new item"><i class="fa fa-plus-circle"></i> Fee Item</a></td>
                                        </tr>
                                    @endforeach
                                @endif


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Course Name</th>
                                <th>Department</th>
                                <th>Year</th>
                                <th>Semester</th>
                                <th>Created At</th>
                                <th>Fees</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Audience by country  & users visit -->
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    @include('bursars.includes.customizer')
    <!-- End: Customizer-->

    <!-- BEGIN: Footer-->
    @include('bursars.includes.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('stack/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('stack/app-assets/vendors/js/extensions/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/js/scripts/extensions/knob.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/vendors/js/charts/raphael-min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/vendors/js/charts/morris.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('stack/app-assets/data/jvector/visitor-data.js') }}"></script>
    <script src="{{ asset('stack/app-assets/vendors/js/charts/chart.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/vendors/js/charts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/vendors/js/extensions/unslider-min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/css/core/colors/palette-climacon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/fonts/simple-line-icons/style.min.css') }}">

    <script src="{{ asset('stack/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/vendors/js/tables/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/vendors/js/tables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/vendors/js/tables/datatable/dataTables.select.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('stack/app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/js/core/app.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('stack/app-assets/js/scripts/pages/dashboard-analytics.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-print.min.js') }}"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-collapsed-menu-template/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 22:44:26 GMT -->
</html>
