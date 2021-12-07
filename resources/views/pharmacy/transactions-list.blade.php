<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/transactions-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:53 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Transactions List Page</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/logo.jpeg')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="phamacy/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="phamacy/css/font-awesome.min.css">
		
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
							<div class="col-sm-12">
								<h3 class="page-title">Transactions</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Transactions</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Invoice No</th>
													<th>Product ID</th>
													<th>Product Name</th>
													<th>Total Amount</th>
													<th class="text-center">Status</th>
													<th class="text-right">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="invoice.html">#IN0001</td>
													<td>#01</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product.jpg" alt="User Image"></span>
															Abilify
														</h2>
													</td>
													<td>$100.00</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Paid</span>
													</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="invoice.html">#IN0002</td>
													<td>#02</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product3.jpg" alt="User Image"></span>
															ITONE eye drops 10ml
														</h2>
													</td>
													<td>$200.00</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Paid</span>
													</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="invoice.html">#IN0003</td>
													<td>#03</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product4.jpg" alt="User Image"></span>
															Safi Natural Blood Purifier 
														</h2>
													</td>
													<td>$250.00</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Paid</span>
													</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="invoice.html">#IN0004</td>
													<td>#04</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product5.jpg" alt="User Image"></span>
															Moisturization & Nourishment
														</h2>
													</td>
													<td>$150.00</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Paid</span>
													</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="invoice.html">#IN0005</td>
													<td>#05</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product6.jpg" alt="User Image"></span>
															Blackhead Removal
														</h2>
													</td>
													<td>$350.00</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Paid</span>
													</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="invoice.html">#IN0006</td>
													<td>#06</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="phamacy/img/product/product.jpg" alt="User Image"></span>
															Abilify
														</h2>
													</td>
													<td>$300.00</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Paid</span>
													</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="invoice.html">#IN0007</td>
													<td>#07</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product6.jpg" alt="User Image"></span>
															Blackhead Removal
														</h2>
													</td>
													<td>$250.00</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Paid</span>
													</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="invoice.html">#IN0008</td>
													<td>#08</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product3.jpg" alt="User Image"></span>
															ITONE eye drops 10ml
														</h2>
													</td>
													<td>$150.00</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Paid</span>
													</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="invoice.html">#IN0009</td>
													<td>#09</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product.jpg" alt="User Image"></span>
															Whitening & Fairness
														</h2>
													</td>
													<td>$100.00</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Paid</span>
													</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td><a href="invoice.html">#IN0010</td>
													<td>#10</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product1.jpg" alt="User Image"></span>
															Adderall
														</h2>
													</td>
													<td>$120.00</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Paid</span>
													</td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
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
						</div>			
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
		<!-- Delete Modal -->
			<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
					<!--	<div class="modal-header">
							<h5 class="modal-title">Delete</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>-->
						<div class="modal-body">
							<div class="form-content p-2">
								<h4 class="modal-title">Delete</h4>
								<p class="mb-4">Are you sure want to delete?</p>
								<button type="button" class="btn btn-primary">Save </button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Modal -->
		
        </div>
		<!-- /Main Wrapper -->
		
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

<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/transactions-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:54 GMT -->
</html>