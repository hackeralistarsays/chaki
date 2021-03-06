<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:47 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Products Page</title>
		
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
								<h3 class="page-title">Products</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Products</li>
								</ul>
							</div>
							<div class="col-sm-5 col">
								<a href="add-product.html" class="btn btn-primary float-right mt-2">Add New</a>
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
													<th>#</th>
													<th>Product Name</th>
													<th>Category</th>
													<th>Price</th>
													<th>Quantity</th>
													<th>Discount</th>
													<th>Expire</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>8</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product10.jpg" alt="product image"></span>
															Lysofranil Dorzostin
														</h2>
													</td>
													<td>Hair care</td>
													<td>$10</td>
													<td>22</td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-product.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>7</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product2.jpg" alt="product image"></span>
															Adderall
														</h2>
													</td>
													<td>Phytopathology???</td>
													<td>$10</td>
													<td>22</td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-product.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>6</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product11.jpg" alt="product image"></span>
															Ergorinex Caffeigestin
														</h2>
													</td>
													<td>Hair care</td>
													<td>$15</td>
													<td>22</td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-product.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>5</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product12.jpg" alt="product image"></span>
															Acetrace Amionel
														</h2>
													</td>
													<td>Body care</td>
													<td>$10</td>
													<td>22</td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-product.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product1.jpg" alt="product image"></span>
															Actamin
														</h2>
													</td>
													<td>Phytopathology???</td>
													<td>$22</td>
													<td><span class="btn btn-sm bg-danger-light">THERE ONLY 5</span></td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-product.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product13.jpg" alt="product image"></span>
															Rapalac Neuronium
														</h2>
													</td>
													<td>Skin care</td>
													<td>$16</td>
													<td>213</td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-product.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product.jpg" alt="product image"></span>
															Abilify
														</h2>
													</td>
													<td>Phytopathology???</td>
													<td>$22</td>
													<td><span class="btn btn-sm bg-danger-light">THERE ONLY 2</span></td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-product.html">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>1</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="phamacy/img/product/product14.jpg" alt="product image"></span>
															Cordacriptine Mardipine
														</h2>
													</td>
													<td>Skin care</td>
													<td>$22</td>
													<td><span class="btn btn-sm bg-danger-light">THERE ONLY 2</span></td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-product.html">
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
		<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="acc_title">Delete</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">??</span>
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

<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:50 GMT -->
</html>