<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:01 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Pharmacy Dashboard</title>

		<!-- Favicon -->
        <link rel="icon" type="image/png" href="{{asset('assets/images/logo/logo.jpeg')}}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="phamacy/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="phamacy/css/font-awesome.min.css">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="phamacy/css/feathericon.min.css">

		<link rel="stylesheet" href="phamacy/plugins/morris/morris.css">

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
            @include('fees.includes.navbar')
			<!-- /Header -->

			<!-- Sidebar -->
            @include('fees.includes.sidebar')
			<!-- /Sidebar -->

			<!-- Page Wrapper -->
            <div class="page-wrapper">

                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome {{ Session::get('username') }}!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-money"></i>
										</span>
										<div class="dash-count">
											<h3>$50.00</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										<h6 class="text-muted">Consumption Today</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-credit-card"></i>
										</span>
										<div class="dash-count">
											<h3>$5.22</h3>
										</div>
									</div>
									<div class="dash-widget-info">

										<h6 class="text-muted">Expense Today</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-danger border-danger">
											<i class="fe fe-folder"></i>
										</span>
										<div class="dash-count">
											<h3>485</h3>
										</div>
									</div>
									<div class="dash-widget-info">

										<h6 class="text-muted">Medicine</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-warning border-warning">
											<i class="fe fe-users"></i>
										</span>
										<div class="dash-count">
											<h3>50</h3>
										</div>
									</div>
									<div class="dash-widget-info">

										<h6 class="text-muted">Students</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-warning w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-6">

							<!-- Sales Chart -->
							<div class="card card-chart">
								<div class="card-header">
									<h4 class="card-title">Consumption</h4>
								</div>
								<div class="card-body">
									<div id="morrisArea"></div>
								</div>
							</div>
							<!-- /Sales Chart -->

						</div>
						<div class="col-md-12 col-lg-6">

							<!-- Invoice Chart -->
							<div class="card card-chart">
								<div class="card-header">
									<h4 class="card-title">Status</h4>
								</div>
								<div class="card-body">
									<div id="morrisLine"></div>
								</div>
							</div>
							<!-- /Invoice Chart -->

						</div>
					</div>
					<div class="row">
						<div class="col-md-12">

							<!-- Latest Customers -->
							<div class="card card-table">
								<div class="card-header">
									<h4 class="card-title">Latest Students</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Address</th>
													<th>Telephone</th>
													<th>Email</th>
													<th class="text-right">Date added</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>01</td>
													<td>
														<h2 class="table-avatar">
															Ruby Perrin
														</h2>
													</td>
													<td>takrakka</td>
													<td>
														<h2 class="table-avatar">
															+54 1245463984
														</h2>
													</td>
													<td>Rubyperring@yahoo.mail</td>
													<td class="text-right">April 14, 2020</td>
												</tr>
												<tr>
													<td>02</td>
													<td>
														<h2 class="table-avatar">
															Darren Elder
														</h2>
													</td>
													<td>339, Terromont Street</td>
													<td>
														<h2 class="table-avatar">
															+54 874654536
														</h2>
													</td>
													<td>darrenelder@gmail.com</td>
													<td class="text-right">April 15, 2020</td>
												</tr>
												<tr>
													<td>03</td>
													<td>
														<h2 class="table-avatar">
															Deborah Angel
														</h2>
													</td>
													<td>takrakka</td>
													<td>
														<h2 class="table-avatar">
															+54 3647787889
														</h2>
													</td>
													<td>deborahangel@yahoo.com</td>
													<td class="text-right">April 16, 2020</td>
												</tr>
												<tr>
													<td>04</td>
													<td>
														<h2 class="table-avatar">
															Ruby Perrin
														</h2>
													</td>
													<td>2061 Angus Road</td>
													<td>
														<h2 class="table-avatar">
															+54 1245463984
														</h2>
													</td>
													<td>Rubyperring@yahoo.mail</td>
													<td class="text-right">April 17, 2020</td>
												</tr>
												<tr>
													<td>05</td>
													<td>
														<h2 class="table-avatar">
															Krystyna Rodriquez
														</h2>
													</td>
													<td>takrakka</td>
													<td>
														<h2 class="table-avatar">
															+54 8965722222
														</h2>
													</td>
													<td>krystynarodriquez@gmail.com</td>
													<td class="text-right">April 18, 2020</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Latest Customers -->

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

		<script src="phamacy/plugins/raphael/raphael.min.js"></script>
		<script src="phamacy/plugins/morris/morris.min.js"></script>
		<script src="phamacy/js/chart.morris.js"></script>

		<!-- Custom JS -->
		<script  src="phamacy/js/script.js"></script>

    </body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/pharmacy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 00:09:13 GMT -->
</html>
