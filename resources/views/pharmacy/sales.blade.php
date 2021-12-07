<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/sales.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:52 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Sales Page</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/logo.jpeg')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="phamacy/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="phamacy/css/font-awesome.min.css">
        <link rel="stylesheet" href="phamacy/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="phamacy/plugins/fontawesome/css/all.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="phamacy/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="phamacy/plugins/datatables/datatables.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="phamacy/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="phamacy/js/html5shiv.min.js"></script>
			<script src="phamacy/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            @include('pharmacy.layouts.navbar')
			<!-- /Header -->
			
			<!-- Sidebar -->
            @include('pharmacy.includes.sidebar')
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-12">
								<h3 class="page-title">Sales</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Sales</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Invoice No</th>
													<th>Medicine Name</th>
													<th>Total Price</th>
													<th>Date</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>20170001</td>
													<td>Abilify,Actamin,Actamin</td>
													<td>$220</td>
													<td>12-5-2020</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-success-light" data-toggle="modal" href="#edit_invoice_report">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a class="btn btn-sm bg-default-light" href="invoice.html">
																<i class="fas fa-file-alt"></i> Invoice
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>20169999</td>
													<td>Abilify,Actamin</td>
													<td>$100</td>
													<td>13-5-2020</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-success-light" data-toggle="modal" href="#edit_invoice_report">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a class="btn btn-sm bg-default-light" href="invoice.html">
																<i class="fas fa-file-alt"></i> Invoice
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>20169998</td>
													<td>Abilify</td>
													<td>$150</td>
													<td>14-5-2020</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-success-light" data-toggle="modal" href="#edit_invoice_report">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a class="btn btn-sm bg-default-light" href="invoice.html">
																<i class="fas fa-file-alt"></i> Invoice
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>20170001</td>
													<td>Abilify,Actamin,Actamin</td>
													<td>$220</td>
													<td>15-5-2020</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-success-light" data-toggle="modal" href="#edit_invoice_report">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a class="btn btn-sm bg-default-light" href="invoice.html">
																<i class="fas fa-file-alt"></i> Invoice
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
							
						</div>
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->

		<!-- Edit Details Modal -->
		<div class="modal fade" id="edit_invoice_report" aria-hidden="true" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document" >
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Invoice Report</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="row form-row">
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Invoice Number</label>
										<input type="text" class="form-control" value="20169998">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Medicine Name</label>
										<input type="text" class="form-control" value="Abilify">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Total Amount</label>
										<input type="text"  class="form-control" value="$150.00">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<label>Created Date</label>
										<input type="text"  class="form-control" value="14-5-2020">
									</div>
								</div>
								
							</div>
							<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Details Modal -->

		<!-- Model -->
		<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="acc_title">Delete</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<p id="acc_msg">are you sure you want to delete?</p>
					</div>
					<div class="modal-footer">
						<a href="javascript:;" class="btn btn-success si_accept_confirm">Yes</a>
						<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modele -->

		<!-- jQuery -->
        <script src="phamacy/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="phamacy/js/popper.min.js"></script>
        <script src="phamacy/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="phamacy/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="phamacy/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="phamacy/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="phamacy/js/script.js"></script>
		
    </body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/sales.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:52 GMT -->
</html>