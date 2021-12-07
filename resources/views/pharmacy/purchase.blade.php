<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/purchase.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:51 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Purchase Page</title>
		
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
								<h3 class="page-title">Purchase</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Purchase</li>
								</ul>
							</div>
							<div class="col-sm-5 col">
								<a href="add-purchase.html" class="btn btn-primary float-right mt-2">Add New</a>
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
													<th>Purchase Date</th>
													<th>Medicine Name</th>
													<th>Medicine Category</th>
													<th>Purchase Price</th>
													<th>Quantity</th>
													<th>Supplier</th>
													<th>Expire Date</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>13-5-2020</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product.jpg" alt="product image"></span>
															Abilify
														</h2>
													</td>
													<td>Aripiprazole</td>
													<td>$220</td>
													<td>60</td>
													<td>Bradley</td>
													<td>13-06-20</td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-purchase.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>12-5-2020</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product1.jpg" alt="product image"></span>
															Adderall
														</h2>
													</td>
													<td>Phytopathology‎</td>
													<td>$30</td>
													<td>20</td>
													<td>Douglas</td>
													<td>13-06-20</td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-purchase.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>11-5-2020</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product2.jpg" alt="product image"></span>
															Actamin
														</h2>
													</td>
													<td>Phytopathology‎</td>
													<td>$58</td>
													<td>33</td>
													<td>Douglas</td>
													<td>20-06-20</td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-purchase.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>10-5-2020</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product.jpg" alt="product image"></span>
															Abilify
														</h2>
													</td>
													<td>Aripiprazole</td>
													<td>$336</td>
													<td>50</td>
													<td>Bradley</td>
													<td>13-06-20</td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-purchase.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>9-5-2020</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product1.jpg" alt="product image"></span>
															Adderall
														</h2>
													</td>
													<td>Phytopathology‎</td>
													<td>$10</td>
													<td>605</td>
													<td>Douglas</td>
													<td>13-06-20</td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-purchase.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>8-5-2020</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product2.jpg" alt="product image"></span>
															Actamin
														</h2>
													</td>
													<td>Phytopathology‎</td>
													<td>$15</td>
													<td>160</td>
													<td>Douglas</td>
													<td>20-06-20</td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-purchase.html">
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

<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/purchase.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:51 GMT -->
</html>