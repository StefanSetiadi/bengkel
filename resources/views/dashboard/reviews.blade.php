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
						<li class="breadcrumb-item breadcrumb-active" aria-current="page">Orders</li>
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
										<div class="card-title">Reviews</div>
									</div>
									<div class="card-body">

										<div class="table-responsive">
											<table class="table v-middle">
												<thead>
													<tr>
														<th>Customer</th>
														<th>Product Details</th>
														<th>Date</th>
														<th>Review</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="media-box">
																<img src="assets/images/user2.png" class="media-avatar" alt="Bootstrap Gallery">
																<div class="media-box-body">
																	<a href="#" class="text-truncate">Tiya Nixon</a>
																</div>
															</div>
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/food/img1.jpg" class="media-avatar-lg" alt="Product">
																<div class="media-box-body">
																	<a href="#" class="text-truncate">Leather Backpack</a>
																	<p>ID: #FLM00987</p>
																	<div class="rating-block">
																		<div class="rate2"></div>
																	</div>
																</div>
															</div>
														</td>
														<td>10/11/2021</td>
														<td>Great Product. Very happy with the purchase and will surely shop for more with Leather
															Villa in the time to come.</td>
													</tr>
													<tr>
														<td>
															<div class="media-box">
																<img src="assets/images/user3.png" class="media-avatar" alt="Bootstrap Gallery">
																<div class="media-box-body">
																	<a href="#" class="text-truncate">Garrett Winters</a>
																</div>
															</div>
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/food/img2.jpg" class="media-avatar-lg" alt="Product">
																<div class="media-box-body">
																	<a href="#" class="text-truncate">DSLR Camera</a>
																	<p>ID: #FLM00990</p>
																	<div class="rating-block">
																		<div class="rate1"></div>
																	</div>
																</div>
															</div>
														</td>
														<td>16/10/2021</td>
														<td>
															This camera is a perfect choice if you are a beginner. The price range is decent, the
															camera is user friendly.
														</td>
													</tr>
													<tr>
														<td>
															<div class="media-box">
																<img src="assets/images/user4.png" class="media-avatar" alt="Bootstrap Gallery">
																<div class="media-box-body">
																	<div class="text-truncate">Cedric Kelly</div>
																</div>
															</div>
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/food/img3.jpg" class="media-avatar-lg" alt="Product">
																<div class="media-box-body">
																	<div class="text-truncate">Wall Clock</div>
																	<p>ID: #FLM00324</p>
																	<div class="rating-block">
																		<div class="rate5"></div>
																	</div>
																</div>
															</div>
														</td>
														<td>24/11/2021</td>
														<td>
															Awesome Product. This is a good size for a classroom clock. We added a new room to our
															school and this clock fits our needs wonderfully.
														</td>
													</tr>
													<tr>
														<td>
															<div class="media-box">
																<img src="assets/images/user5.png" class="media-avatar" alt="Bootstrap Gallery">
																<div class="media-box-body">
																	<div class="text-truncate">Rhona Davidson</div>
																</div>
															</div>
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/food/img4.jpg" class="media-avatar-lg" alt="Product">
																<div class="media-box-body">
																	<div class="text-truncate">Drone</div>
																	<p>ID: #FLM00876</p>
																	<div class="rating-block">
																		<div class="rate3"></div>
																	</div>
																</div>
															</div>
														</td>
														<td>27/10/2021</td>
														<td>
															Five Starts. This drone literally has too many pro's to list, they call it a pro for a
															reason.
														</td>
													</tr>
													<tr>
														<td>
															<div class="media-box">
																<img src="assets/images/user6.png" class="media-avatar" alt="Bootstrap Gallery">
																<div class="media-box-body">
																	<div class="text-truncate">Quinn Flynn</div>
																</div>
															</div>
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/food/img5.jpg" class="media-avatar-lg" alt="Product">
																<div class="media-box-body">
																	<div class="text-truncate">Toy</div>
																	<p>ID: #FLM00760</p>
																	<div class="rating-block">
																		<div class="rate3"></div>
																	</div>
																</div>
															</div>
														</td>
														<td>09/11/2021</td>
														<td>
															Great product! My kids really love how many things they can build. Hours and hours of fun
															ahead with this toy. The parts are great quality and there are many things to build.
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

	</body>

</html>