<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/supplier.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:52 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Supplier Page</title>
		
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
							<div class="col-sm-7 col-auto">
								<h3 class="page-title">Supplier</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Supplier</li>
								</ul>
							</div>
							<div class="col-sm-5 col">
								<a href="add-supplier.html" class="btn btn-primary float-right mt-2">Add New</a>
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
													<th>ID</th>
													<th>Product</th>
													<th>Name</th>
													<th>Phone</th>
													<th>Email</th>
													<th>Address</th>
													<th>Company</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>25</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product.jpg" alt="product image"></span>
															Abilify
														</h2>
													</td>
													<td>Discarsa</td>
													<td>+51 1542565</td>
													<td>Discarsa@gmail.com</td>
													<td>Paseo Los Robles</td>
													<td>Discarsa Nicaragua</td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-supplier.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>33</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product1.jpg" alt="product image"></span>
															Actamin
														</h2>
													</td>
													<td>Proveedor</td>
													<td>+51 23687541</td>
													<td>proveedor@gmail.com</td>
													<td>Av circunvalación # 234	</td>
													<td>mi farmacia</td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-supplier.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>42</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product2.jpg" alt="product image"></span>
															Adderall 
														</h2>
													</td>
													<td>Discarsa</td>
													<td>+51 96588552</td>
													<td>Discarsa@gmail.com</td>
													<td>Paseo Los Robles</td>
													<td>Discarsa Nicaragua</td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-supplier.html">
																<i class="fe fe-pencil"></i> Edit
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

<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/supplier.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:53 GMT -->
</html>