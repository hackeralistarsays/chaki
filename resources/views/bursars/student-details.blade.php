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
    <title>Payment | {{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/vendors/css/vendors.min.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('stack/app-assets/css/pages/app-invoice.min.css') }}">
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
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Make A Payment</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#paymentindex">Payments</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">{{ $student->first_name }} {{ $student->last_name }}</a>
                  </li>
                  <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> Add Payment
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <!-- Modal -->
            <div class="modal fade" id="cash" tabindex="-1" role="dialog" aria-labelledby="cashTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cash From {{ $student->first_name }} {{ $student->last_name }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST">
                            @csrf
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="payment_id"><i class="fa fa-btc"></i> Charges</label>
                                        <select name="payment_id" id="payment_id" class="form-control custom-select">
                                            <option value="" selected disabled>Select The Invoice</option>
                                                @if (!$student->invoices->isEmpty())
                                                    @foreach ($student->invoices as $inv)
                                                        @if ($inv->status == 'unpaid')
                                                            <option value="{{ $inv->payment->id }}"><b>Serial:</b>{{ $inv->serial }} <b>Apartment#:</b>{{ $inv->apartment->number }} <b>Title:</b>{{ $inv->apartment->title }}</option>
                                                        @else

                                                        @endif
                                                    @endforeach
                                                @else
                                                @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="amount"><i class="fa fa-money"></i> Amount</label>
                                        <input type="number" class="form-control"
                                            id="amount" name="amount" required placeholder="Enter Amount"
                                            data-validation-required-message="This amount field is required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Submit
                                    Cash <i class="fa fa-send"></i></button>
                                <button type="reset" class="btn btn-danger">Cancel <i class="fa fa-close"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            {{-- Bank Payment --}}
            <div class="modal fade" id="bank" tabindex="-1" role="dialog" aria-labelledby="bankTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Bank Payment From {{ $student->first_name }} {{ $student->last_name }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="payment_id"><i class="fa fa-btc"></i> Charges</label>
                                            <select name="payment_id" id="payment_id" class="form-control custom-select">
                                                <option value="" selected disabled>Select The Invoice</option>
                                                    @if (!$student->invoices->isEmpty())
                                                        @foreach ($student->invoices as $inv)
                                                            @if ($inv->status == 'unpaid')
                                                                <option value="{{ $inv->payment->id }}"><b>Serial:</b>{{ $inv->serial }} <b>Apartment#:</b>{{ $inv->apartment->number }} <b>Title:</b>{{ $inv->apartment->title }}</option>
                                                            @else

                                                            @endif
                                                        @endforeach
                                                    @else
                                                    @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="bank"><i class="fa fa-bank"></i> Bank</label>
                                            <input type="text" class="form-control"
                                                id="bank" name="bank" required placeholder="Enter bank"
                                                data-validation-required-message="This bank field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="branch"><i class="fa fa-umbrella"></i> Branch</label>
                                            <input type="text" class="form-control"
                                                id="branch" name="branch" required placeholder="Enter branch"
                                                data-validation-required-message="This branch field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="transaction_no"><i class="fa fa-qrcode"></i> Transaction No</label>
                                            <input type="text" class="form-control"
                                                id="transaction_no" name="transaction_no" required placeholder="Enter transaction code"
                                                data-validation-required-message="This transaction_no field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="transaction_date"><i class="fa fa-calendar"></i> Date</label>
                                            <input type="date" class="form-control"
                                                id="transaction_date" name="transaction_date" required placeholder="Enter Transaction date"
                                                data-validation-required-message="This date field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="amount"><i class="fa fa-money"></i> Amount</label>
                                            <input type="number" class="form-control"
                                                id="amount" name="amount" required placeholder="Enter amount"
                                                data-validation-required-message="This amount field is required">
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
            {{-- Mpesa Payment --}}
            <div class="modal fade" id="mpesa" tabindex="-1" role="dialog" aria-labelledby="mpesaTitle" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Mpesa From {{ $student->first_name }} {{ $student->last_name }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="payment_id"><i class="fa fa-btc"></i> Charges</label>
                                            <select name="payment_id" id="payment_id" class="form-control custom-select">
                                                <option value="" selected disabled>Select The Invoice</option>
                                                    @if (!$student->invoices->isEmpty())
                                                        @foreach ($student->invoices as $inv)
                                                            @if ($inv->status == 'unpaid')
                                                                <option value="{{ $inv->payment->id }}"><b>Serial:</b>{{ $inv->serial }} <b>Apartment#:</b>{{ $inv->apartment->number }} <b>Title:</b>{{ $inv->apartment->title }}</option>
                                                            @else
                                                            @endif
                                                        @endforeach
                                                    @else
                                                    @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="phone"><i class="fa fa-phone"></i> Phone</label>
                                            <input type="tel" class="form-control"
                                                id="phone" name="phone" required placeholder="Enter phone"
                                                data-validation-required-message="This phone field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="transaction_code"><i class="fa fa-qrcode"></i> Transaction Code</label>
                                            <input type="text" class="form-control"
                                                id="transaction_code" name="transaction_code" required placeholder="Enter transaction code"
                                                data-validation-required-message="This transaction code field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="transaction_date"><i class="fa fa-calendar"></i> Transaction Date</label>
                                            <input type="date" class="form-control"
                                                id="transaction_date" name="transaction_date" required placeholder="Enter transaction_date"
                                                data-validation-required-message="This transaction date field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="amount"><i class="fa fa-money"></i> Amount</label>
                                            <input type="number" class="form-control"
                                                id="amount" name="amount" required placeholder="Enter Amount"
                                                data-validation-required-message="This amount field is required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Submit
                                    Payment <i class="fa fa-send"></i></button>
                                <button type="reset" class="btn btn-danger">Cancel <i class="fa fa-close"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="content-body"><!-- App invoice wrapper -->
<section class="app-invoice-wrapper">
    <div class="row">
        <div class="col-xl-9 col-md-8 col-12 printable-content">
            <!-- using a bootstrap card -->
            <div class="card">
                <!-- card body -->
                <div class="card-body p-2">
                    <!-- card-header -->
                    <div class="card-header px-0">
                        <div class="row">
                            <div class="col-md-12 col-lg-7 col-xl-4 mb-50">
                                <span class="invoice-id font-weight-bold">Course Title: </span>
                                <span>{{ $student->course }}</span>
                            </div>
                            <div class="col-md-12 col-lg-5 col-xl-8">
                                <div class="d-flex align-items-center justify-content-end justify-content-xs-start">
                                    <div class="issue-date pr-2">
                                        <span class="font-weight-bold no-wrap">Year Of Study: </span>
                                        <span>{{ $student->year_of_study }}</span>
                                    </div>
                                    <div class="due-date">
                                        <span class="font-weight-bold no-wrap">Semester: </span>
                                        <span>{{ $student->semester }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- invoice logo and title -->
                    <div class="invoice-logo-title row py-2">
                        <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                            <h2 class="text-primary">Payment</h2>
                            <span>Winterfel University</span>
                        </div>
                        <div class="col-6 d-flex justify-content-end invoice-logo">
                            <img src="{{ asset('assets/img/logo.jpeg') }}" alt="company-logo" height="46"
                                width="164">
                        </div>
                    </div>
                    <hr>

                    <!-- invoice address and contacts -->
                    <div class="row invoice-adress-info py-2">
                        <div class="col-6 mt-1 from-info">
                            <div class="info-title mb-1">
                                <code>Bill From</code>
                            </div>
                            <div class="company-name mb-1">
                                <span class="text-muted">Winterfel University</span>
                            </div>
                            <div class="company-address mb-1">
                                <span class="text-muted">1st Parklands Avenue, Opp. Mp Shah Hospital</span>
                            </div>
                            <div class="company-email  mb-1 mb-1">
                                <span class="text-muted">winterfel@gmail.com</span>
                            </div>
                            <div class="company-phone  mb-1">
                                <span class="text-muted">+254 740 096 095</span>
                            </div>
                        </div>
                        <div class="col-6 mt-1 to-info">
                            <div class="info-title mb-1">
                                <code>Bill To</code>
                            </div>
                            <div class="company-name mb-1">
                                <span class="text-muted">{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</span>
                            </div>
                            <div class="company-address mb-1">
                                <span class="text-muted">{{ $student->regno }}</span>
                            </div>
                            <div class="company-email mb-1">
                                <span class="text-muted">{{ $student->email }}</span>
                            </div>
                            <div class="company-phone  mb-1">
                                <span class="text-muted">{{ $student->course }}</span>
                            </div>
                        </div>
                    </div>

                    <!--product details table -->
                    <div class="product-details-table py-2 table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">FULL NAME</th>
                                    <th scope="col">COURSE</th>
                                    <th scope="col">YEAR</th>
                                    <th scope="col">SEMESTER</th>
                                    <th scope="col">AMOUNT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!$student->invoices->isEmpty())
                                @php
                                    $discount = array();
                                    $subtotal = array();
                                    $payment = array();
                                @endphp
                                @foreach ($student->invoices as $invoice)
                                @php
                                    $discount[] = $invoice->discount;
                                    $subtotal[] = $invoice->amount;
                                    $payment[] = $invoice->payment->cashes->sum('amount') + $invoice->payment->banks->sum('amount') + $invoice->payment->mpesas->sum('amount');
                                @endphp
                                <tr>
                                    <td>{{ $invoice->serial }}</td>
                                    <td>{{ $invoice->apartment->number }}</td>
                                    <td>{{ $invoice->apartment->title }}</td>
                                    <td>{{ $invoice->discount }}</td>
                                    <td class="font-weight-bold">Ksh. {{ $invoice->amount }}</td>
                                </tr>
                                @endforeach
                                @else

                                @endif
                            </tbody>
                        </table>
                    </div>
                    <hr>

                    <!-- invoice total -->
                    <div class="invoice-total py-2">
                        <div class="row">
                            <div class="col-4 col-sm-6 mt-75">
                                <i>Thank You For Choosing Shayona.</i>
                            </div>
                            <div class="col-8 col-sm-6 d-flex justify-content-end mt-75">
                                <ul class="list-group cost-list">
                                    <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                        <span class="cost-title mr-2">Subtotal </span>
                                        @if (!$student->invoices->isEmpty())
                                        <span class="cost-value">Ksh. @php  print_r(array_sum($subtotal));  @endphp</span>
                                        @else
                                        <span class="cost-value">Ksh. 0.00</span>
                                        @endif
                                    </li>
                                    <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                        <span class="cost-title mr-2">Discount </span>
                                        @if (!$student->invoices->isEmpty())
                                        <span class="cost-value">Ksh. @php  print_r(array_sum($discount)); @endphp</span>
                                        @else
                                        <span class="cost-value">Ksh. 0.00</span>
                                        @endif
                                    </li>
                                    <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                        <span class="cost-title mr-2">Tax </span>
                                        <span class="cost-value">0%</span>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                        <span class="cost-title mr-2">Invoice Total </span>
                                        @if (!$student->invoices->isEmpty())
                                        <span class="cost-value">Ksh. @php  print_r(array_sum($subtotal) - array_sum($discount));  @endphp</span>
                                        @else
                                        <span class="cost-value">Ksh. 0.00</span>
                                        @endif
                                    </li>
                                    <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                        <span class="cost-title mr-2">Paid To Date </span>
                                        @if($student->payments != null)
                                        <span class="cost-value">Ksh 0</span>
                                        @else
                                        <span class="cost-value">Ksh 0.00</span>
                                        @endif
                                    </li>
                                    <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                        <span class="cost-title mr-2">Balance (Ksh.) </span>
                                        @if (!$student->invoices->isEmpty())
                                        <span class="cost-value">Ksh. @php  print_r(array_sum($subtotal) - (array_sum($discount) + array_sum($payment)));  @endphp</span>
                                        @else
                                        <span class="cost-value">Ksh. 0.00</span>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- buttons section -->
        <div class="col-xl-3 col-md-4 col-12 action-btns">
            <div class="card">
                <div class="card-body p-2">
                    <a href="#" data-target="#cash" data-toggle="modal" class="btn btn-primary btn-block mb-1"> <i class="fa fa-money mr-25 common-size"></i> Cash Payment</a>
                    <a href="#" data-toggle="modal" data-target="#bank" class="btn btn-info btn-block mb-1"> <i class="fa fa-bank mr-25 common-size"></i> Bank Payment</a>
                    <a href="#" data-toggle="modal" data-target="#mpesa" class="btn btn-info btn-block mb-1"><i class="fa fa-cc-mastercard mr-25 common-size"></i> Mpesa Payment</a>
                    <a href="#" class="btn btn-success btn-block mb-1"><i class="fa fa-credit-card mr-25 common-size"></i> Payments History</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
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
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('stack/app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/js/core/app.min.js') }}"></script>
    <script src="{{ asset('stack/app-assets/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('stack/app-assets/js/scripts/pages/app-invoice.min.js') }}"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

</html>
