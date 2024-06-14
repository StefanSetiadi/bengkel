<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Best Bootstrap Admin Dashboards">
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="assets/images/favicon.svg">

		<!-- Title -->
		<title>Bootstrap Admin Dashboards</title>


		<!-- *************
			************ Common Css Files *************
		************ -->

		<!-- Animated css -->
		<link rel="stylesheet" href="assets/css/animate.css">

		<!-- Bootstrap font icons css -->
		<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">

		<!-- Main css -->
		<link rel="stylesheet" href="assets/css/main.min.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

	</head>

	<body>

		<!-- Loading wrapper start -->
		<!-- <div id="loading-wrapper">
			<div class="spinner">
                <div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
            </div>
		</div> -->
		<!-- Loading wrapper end -->

		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
			@include('component.sidebar')
			<!-- Sidebar wrapper end -->

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header starts -->
				<div class="page-header">

					<div class="toggle-sidebar" id="toggle-sidebar"><i class="bi bi-list"></i></div>

					<!-- Breadcrumb start -->
					<ol class="breadcrumb d-md-flex d-none">
						<li class="breadcrumb-item">
							<i class="bi bi-house"></i>
							<a href="index.html">Home</a>
						</li>
						<li class="breadcrumb-item">Product</li>
						<li class="breadcrumb-item breadcrumb-active" aria-current="page">Products</li>
					</ol>
					<!-- Breadcrumb end -->

					<!-- Header actions ccontainer start -->
					<div class="header-actions-container">

						<!-- Search container start -->
						<div class="search-container">

							<!-- Search input group start -->
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search anything">
								<button class="btn" type="button">
									<i class="bi bi-search"></i>
								</button>
							</div>
							<!-- Search input group end -->

						</div>
						<!-- Search container end -->

						<!-- Leads start -->
						<a href="orders.html" class="leads d-none d-xl-flex">
							<div class="lead-details">You have <span class="count"> 21 </span> new leads </div>
							<span class="lead-icon"><i
									class="bi bi-bell-fill animate__animated animate__swing animate__infinite infinite"></i><b
									class="dot animate__animated animate__heartBeat animate__infinite"></b></span>
						</a>
						<!-- Leads end -->

						<!-- Header actions start -->
						<ul class="header-actions">
							<li class="dropdown d-none d-md-block">
								<a href="#" id="countries" data-toggle="dropdown" aria-haspopup="true">
									<img src="assets/images/flags/1x1/br.svg" class="flag-img" alt="Admin Panels" />
								</a>
								<div class="dropdown-menu dropdown-menu-end mini" aria-labelledby="countries">
									<div class="country-container">
										<a href="index.html">
											<img src="assets/images/flags/1x1/us.svg" alt="Clean Admin Dashboards" />
										</a>
										<a href="index.html">
											<img src="assets/images/flags/1x1/in.svg" alt="Google Dashboards" />
										</a>
										<a href="index.html">
											<img src="assets/images/flags/1x1/gb.svg" alt="AI Admin Dashboards" />
										</a>
										<a href="index.html">
											<img src="assets/images/flags/1x1/tr.svg" alt="Modern Dashboards" />
										</a>
										<a href="index.html">
											<img src="assets/images/flags/1x1/ca.svg" alt="Best Admin Dashboards" />
										</a>
									</div>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name d-none d-md-block">Abigale Heaney</span>
									<span class="avatar">
										<img src="assets/images/user.png" alt="Admin Templates">
										<span class="status online"></span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<a href="profile.html">Profile</a>
										<a href="account-settings.html">Settings</a>
										<a href="login.html">Logout</a>
									</div>
								</div>
							</li>
						</ul>
						<!-- Header actions end -->

					</div>
					<!-- Header actions ccontainer end -->

				</div>
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Customers</div>
									</div>
									<div class="card-body">

										<div class="table-responsive">
											<table class="table v-middle m-0">
												<thead>
													<tr>
														<th>Country</th>
														<th>Customer</th>
														<th>Contact</th>
														<th>Status</th>
														<th>Orders</th>
														<th>Last Order</th>
														<th>Amount</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<img src="assets/images/flags/4x3/ca.svg" class="flag-img-lg"
																alt="Best Admin Dashboards" />
															Canada
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user2.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Dolly Winters</div>
																	<p>ID: #Arise00763</p>
																</div>
															</div>
														</td>
														<td>067-676-98320</td>
														<td>
															<span class="badge shade-green min-70">Active</span>
														</td>
														<td>87</td>
														<td>2022/01/25</td>
														<td>$32800</td>
														<td>
															<div class="actions">
																<a href="#" class="viewRow" data-bs-toggle="modal" data-bs-target="#viewRow">
																	<i class="bi bi-list text-green"></i>
																</a>
																<a href="#" class="deleteRow">
																	<i class="bi bi-trash text-red"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<img src="assets/images/flags/1x1/jp.svg" class="flag-img-lg" alt="Clean Dashboards" />
															Japan
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user5.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Cedric Kelly</div>
																	<p>ID: #Arise00582</p>
																</div>
															</div>
														</td>
														<td>009-543-77650</td>
														<td>
															<span class="badge shade-green min-70">Active</span>
														</td>
														<td>34</td>
														<td>2022/01/22</td>
														<td>$65890</td>
														<td>
															<div class="actions">
																<a href="#" class="viewRow" data-bs-toggle="modal" data-bs-target="#viewRow">
																	<i class="bi bi-list text-green"></i>
																</a>
																<a href="#" class="deleteRow">
																	<i class="bi bi-trash text-red"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<img src="assets/images/flags/1x1/us.svg" class="flag-img-lg" alt="Clean Dashboards" />
															United States
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Tiya Davidson</div>
																	<p>ID: #Arise00554</p>
																</div>
															</div>
														</td>
														<td>067-676-98320</td>
														<td>
															<span class="badge shade-green min-70">Active</span>
														</td>
														<td>21</td>
														<td>2022/01/10</td>
														<td>$25678</td>
														<td>
															<div class="actions">
																<a href="#" class="viewRow" data-bs-toggle="modal" data-bs-target="#viewRow">
																	<i class="bi bi-list text-green"></i>
																</a>
																<a href="#" class="deleteRow">
																	<i class="bi bi-trash text-red"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<img src="assets/images/flags/1x1/tr.svg" class="flag-img-lg" alt="Modern Dashboards" />
															Turkey
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user4.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Zozi Williams</div>
																	<p>ID: #Arise00831</p>
																</div>
															</div>
														</td>
														<td>002-434-66659</td>
														<td>
															<span class="badge shade-green min-70">Active</span>
														</td>
														<td>55</td>
														<td>2022/01/21</td>
														<td>$24571</td>
														<td>
															<div class="actions">
																<a href="#" class="viewRow" data-bs-toggle="modal" data-bs-target="#viewRow">
																	<i class="bi bi-list text-green"></i>
																</a>
																<a href="#" class="deleteRow">
																	<i class="bi bi-trash text-red"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<img src="assets/images/flags/1x1/in.svg" class="flag-img-lg" alt="Google Dashboards" />
															India
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user3.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Karan Kumar</div>
																	<p>ID: #Arise00987</p>
																</div>
															</div>
														</td>
														<td>030-998-03437</td>
														<td>
															<span class="badge shade-green min-70">Active</span>
														</td>
														<td>61</td>
														<td>2021/09/18</td>
														<td>$12309</td>
														<td>
															<div class="actions">
																<a href="#" class="viewRow" data-bs-toggle="modal" data-bs-target="#viewRow">
																	<i class="bi bi-list text-green"></i>
																</a>
																<a href="#" class="deleteRow">
																	<i class="bi bi-trash text-red"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<img src="assets/images/flags/1x1/br.svg" class="flag-img-lg" alt="Admin Panels" />
															Brazil
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user6.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Lilly Desmet</div>
																	<p>ID: #Arise00987</p>
																</div>
															</div>
														</td>
														<td>030-998-03437</td>
														<td>
															<span class="badge shade-red min-70">Blocked</span>
														</td>
														<td>61</td>
														<td>2021/09/18</td>
														<td>$12309</td>
														<td>
															<div class="actions">
																<a href="#" class="viewRow" data-bs-toggle="modal" data-bs-target="#viewRow">
																	<i class="bi bi-list text-green"></i>
																</a>
																<a href="#" class="deleteRow">
																	<i class="bi bi-trash text-red"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<img src="assets/images/flags/1x1/it.svg" class="flag-img-lg" alt="Google Dashboards" />
															Italy
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user7.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Tiya Nixon</div>
																	<p>ID: #Arise00987</p>
																</div>
															</div>
														</td>
														<td>030-998-03437</td>
														<td>
															<span class="badge shade-red min-70">Blocked</span>
														</td>
														<td>61</td>
														<td>2021/09/18</td>
														<td>$12309</td>
														<td>
															<div class="actions">
																<a href="#" class="viewRow" data-bs-toggle="modal" data-bs-target="#viewRow">
																	<i class="bi bi-list text-green"></i>
																</a>
																<a href="#" class="deleteRow">
																	<i class="bi bi-trash text-red"></i>
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
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

					<!-- App Footer start -->
					<div class="app-footer">
						<span>© Arise admin 2023</span>
					</div>
					<!-- App footer end -->

				</div>
				<!-- Content wrapper scroll end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->

		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/modernizr.js"></script>
		<script src="assets/js/moment.js"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
		<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

		<!-- Rating JS -->
		<script src="assets/vendor/rating/raty.js"></script>
		<script src="assets/vendor/rating/raty-custom.js"></script>

		<!-- Main Js Required -->
		<script src="assets/js/main.js"></script>

		<!-- Product Js -->
		<script src="assets/js/product.js"></script>

	</body>

</html>