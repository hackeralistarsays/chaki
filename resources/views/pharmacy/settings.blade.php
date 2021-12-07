<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:47 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Settings Page</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/logo.jpeg')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('phamacy/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('phamacy/css/font-awesome.min.css') }}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('phamacy/css/feathericon.min.css') }}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('phamacy/css/style.css') }}">
		
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
								<h3 class="page-title">General Settings</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0)">Settings</a></li>
									<li class="breadcrumb-item active">General Settings</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						
						<div class="col-12">
							
							<!-- General -->
							
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">General</h4>
									</div>
									<div class="card-body">
										<form action="#">
									
											<div class="form-group">
												<label>Website Name</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label>Website Logo</label>
												<input type="file" class="form-control">
												<small class="text-secondary">Recommended image size is <b>150px x 150px</b></small>
											</div>
											<div class="form-group mb-0">
												<label>Favicon</label>
												<input type="file" class="form-control">
												<small class="text-secondary">Recommended image size is <b>16px x 16px</b> or <b>32px x 32px</b></small><br>
												<small class="text-secondary">Accepted formats : only png and ico</small>
											</div>
											
										</form>
									</div>
								</div>
							
							<!-- /General -->
								
						</div>
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{ asset('phamacy/js/jquery-3.2.1.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{ asset('phamacy/js/popper.min.js') }}"></script>
        <script src="{{ asset('phamacy/js/bootstrap.min.js') }}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{ asset('phamacy/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script  src="{{ asset('phamacy/js/script.js') }}"></script>
		
    </body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:47 GMT -->
</html>