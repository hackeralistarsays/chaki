<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/edit-supplier.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:10:06 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Edit Supplier Page</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/logo.jpeg')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="phamacy/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="phamacy/css/font-awesome.min.css">
		<link rel="stylesheet" href="phamacy/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="phamacy/plugins/fontawesome/css/all.min.css">

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="phamacy/css/bootstrap-datetimepicker.min.css">
		
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
								<h3 class="page-title">Edit Supplier</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Edit Supplier</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body custom-edit-service">
									
							
								<!-- Add Medicine -->
								<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="https://doccure-html.dreamguystech.com/template/pharmacy/purchase.html">
									<input type="hidden" name="csrf_token_name" value="0146f123a4c7ae94253b39bca6bd5a5e">

									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label>Name<span class="text-danger">*</span></label>
													<input type="hidden" name="name" id="name" value="18">
													<input class="form-control" type="text" name="name" id="name" value="" required="">
												</div>
											</div>
											<div class="col-lg-6">
												<label>Email<span class="text-danger">*</span></label>
												<input type="hidden" name="email" id="email" value="18">
												<input class="form-control" type="text" name="email" id="email" value="" required="">
											</div>
										</div>
									</div>

									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label>Phone<span class="text-danger">*</span></label>
													<input type="hidden" name="phone" id="phone" value="18">
													<input class="form-control" type="text" name="phone" id="phone" value="" required="">
												</div>
											</div>
											<div class="col-lg-6">
												<label>Company<span class="text-danger">*</span></label>
												<input type="hidden" name="company" id="company" value="18">
												<input class="form-control" type="text" name="company" id="company" value="" required="">
											</div>
										</div>
									</div>

									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<label>Address <span class="text-danger">*</span></label>
													<textarea id="address" class="form-control service-desc" name="address"></textarea>
												</div>
											</div>
										</div>
									</div>			
									
									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-12">
												<div class="service-upload">
													<i class="fas fa-cloud-upload-alt"></i>
													<span>Upload Supplier Image *</span>
													<input type="file" name="images[]" id="images" multiple="" accept="image/jpeg, image/png, image/gif,">
												
												</div>	
												<div id="uploadPreview">
													<ul class="upload-wrap">
														<li>
															<div class=" upload-images">
																<img alt="Blog Image" src="phamacy/img/product/product1.jpg">
															</div>
														</li>
													</ul>
												</div>
												
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
									</div>
								</form>
								<!-- /Add Medicine -->


								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="phamacy/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="phamacy/js/popper.min.js"></script>
        <script src="phamacy/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="phamacy/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Datetimepicker JS -->
		<script src="phamacy/js/moment.min.js"></script>
		<script src="phamacy/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="phamacy/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="phamacy/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="phamacy/js/script.js"></script>
		
    </body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/edit-supplier.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:10:06 GMT -->
</html>