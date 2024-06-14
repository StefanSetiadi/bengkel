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
						<li class="breadcrumb-item breadcrumb-active" aria-current="page">Billing Details</li>
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
										<div class="card-title">Billing Details</div>
									</div>
									<div class="card-body">

										<!-- Row start -->
										<div class="row">
											<div class="col-xxl-8 col-sm-8 col-12">
												<!-- Row start -->
												<div class="row">
													<div class="col-sm-4 col-12">
														<div class="mb-3">
															<label class="form-label">First Name</label>
															<input type="text" class="form-control" value="Abigale">
														</div>
													</div>
													<div class="col-sm-4 col-12">
														<div class="mb-3">
															<label class="form-label">Last Name</label>
															<input type="text" class="form-control" value="Heaney">
														</div>
													</div>
													<div class="col-sm-4 col-12">
														<div class="mb-3">
															<label class="form-label">Company Name</label>
															<input type="text" class="form-control" value="Arise">
														</div>
													</div>
													<div class="col-sm-4 col-12">
														<div class="mb-3">
															<label class="form-label">House No</label>
															<input type="text" class="form-control" value="27-950">
														</div>
													</div>
													<div class="col-sm-4 col-12">
														<div class="mb-3">
															<label class="form-label">Select Country</label>
															<select class="form-select">
																<option value="">Select Country</option>
																<option value="" selected="">USA</option>
																<option value="">Brazil</option>
																<option value="">India</option>
																<option value="">Indonesia</option>
																<option value="">United Kingdom</option>
															</select>
														</div>
													</div>
													<div class="col-sm-4 col-12">
														<div class="mb-3">
															<label class="form-label">Select City</label>
															<select class="form-select">
																<option value="">Select City</option>
																<option value="" selected="">Chicago</option>
																<option value="">San Diego</option>
																<option value="">Houston</option>
																<option value="">New York</option>
																<option value="">Los Angeles</option>
															</select>
														</div>
													</div>
													<div class="col-sm-4 col-12">
														<div class="mb-3">
															<label class="form-label">Postal Code</label>
															<input type="text" class="form-control" value="98980">
														</div>
													</div>
													<div class="col-sm-4 col-12">
														<div class="mb-3">
															<label class="form-label">Phone</label>
															<input type="text" class="form-control" value="0000-0000-00">
														</div>
													</div>
													<div class="col-sm-4 col-12">
														<div class="mb-3">
															<label class="form-label">Email </label>
															<input type="email" class="form-control" value="info@example.com">
														</div>
													</div>
													<div class="col-12">
														<div class="mb-2">
															<label class="form-label">Notes about your order</label>
															<textarea rows="3" class="form-control">Quick Delivery</textarea>
														</div>
													</div>
													<div class="col-12">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" checked="">
															<label class="form-check-label">Save this Address</label>
														</div>
													</div>
												</div>
												<!-- Row end -->
											</div>
											<div class="col-sm-4 col-12">

												<!-- Products List -->
												<div class="product-list-card">
													<h5>Order List</h5>
													<div class="product-list-block">
														<img class="product-list-img" src="assets/images/food/img7.jpg" alt="Admin Panel">
														<div class="product-list-details">
															<h5 class="product-list-title">Barbecue Chicken Salad</h5>
															<div class="product-list-price">$25.00</div>
														</div>
													</div>
													<div class="product-list-block">
														<img class="product-list-img" src="assets/images/food/img9.jpg" alt="Admin Panel">
														<div class="product-list-details">
															<h5 class="product-list-title">Harvest Cobb Salad</h5>
															<div class="product-list-price">$15.00</div>
														</div>
													</div>
													<div class="product-list-block">
														<img class="product-list-img" src="assets/images/food/img2.jpg" alt="Admin Panel">
														<div class="product-list-details">
															<h5 class="product-list-title">Greek Salad</h5>
															<div class="product-list-price">$28.00</div>
														</div>
													</div>
													<div class="product-list-block">
														<img class="product-list-img" src="assets/images/food/img6.jpg" alt="Admin Panel">
														<div class="product-list-details">
															<h5 class="product-list-title">Garden Chickpea Salad</h5>
															<div class="product-list-price">$22.00</div>
														</div>
													</div>
												</div>
												<div class="mb-2">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="paymentRadio" id="paymentRadio1">
														<label class="form-check-label" for="paymentRadio1">Paypal</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="paymentRadio" id="paymentRadio2"
															checked="">
														<label class="form-check-label" for="paymentRadio2">Cash On Delivery</label>
													</div>
												</div>

											</div>
										</div>
										<!-- Row end -->

										<!-- Row start -->
										<div class="row">
											<div class="col-xxl-12">
												<div class="sub-total-container">
													<div class="total">Order Total: $90.00</div>
													<a href="#" class="btn btn-success btn-lg">Place Order</a>
												</div>
											</div>
										</div>
										<!-- Row end -->

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

		<!-- Main Js Required -->
		<script src="assets/js/main.js"></script>

		<!-- Product Js -->
		<script src="assets/js/product.js"></script>

	</body>

</html>