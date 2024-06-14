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
						<li class="breadcrumb-item">UI Elements</li>
						<li class="breadcrumb-item breadcrumb-active" aria-current="page">Alerts</li>
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
							<div class="col-md-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Alerts</div>
									</div>
									<div class="card-body">
										<div class="alert alert-primary alert-dismissible fade show" role="alert">
											A simple primary alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-secondary alert-dismissible fade show" role="alert">
											A simple secondary alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											A simple success alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											A simple danger alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											A simple warning alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-info alert-dismissible fade show" role="alert">
											A simple info alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-light alert-dismissible fade show" role="alert">
											A simple light alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-dark alert-dismissible fade show" role="alert">
											A simple dark alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>

									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Alerts Link Color</div>
									</div>
									<div class="card-body">

										<div class="alert alert-primary" role="alert">
											A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
											you like.
										</div>
										<div class="alert alert-secondary" role="alert">
											A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click
											if you like.
										</div>
										<div class="alert alert-success" role="alert">
											A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
											you like.
										</div>
										<div class="alert alert-danger" role="alert">
											A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
											you like.
										</div>
										<div class="alert alert-warning" role="alert">
											A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
											you like.
										</div>
										<div class="alert alert-info" role="alert">
											A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
											you like.
										</div>
										<div class="alert alert-light" role="alert">
											A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
											you like.
										</div>
										<div class="alert alert-dark" role="alert">
											A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
											you like.
										</div>

									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Alert with Icons Dismissible</div>
									</div>
									<div class="card-body">
										<div class="alert alert-primary alert-dismissible fade show" role="alert">
											<i class="bi bi-bullseye alert-icon"></i>
											A simple primary alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-secondary alert-dismissible fade show" role="alert">
											<i class="bi bi-chat-right-text alert-icon"></i>
											A simple secondary alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<i class="bi bi-check-circle alert-icon"></i>
											A simple success alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<i class="bi bi-x-circle alert-icon"></i>
											A simple danger alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											<i class="bi bi-exclamation-circle alert-icon"></i>
											A simple warning alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-info alert-dismissible fade show" role="alert">
											<i class="bi bi-info-circle alert-icon"></i>
											A simple info alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-light alert-dismissible fade show" role="alert">
											<i class="bi bi-wallet2 alert-icon"></i>
											A simple light alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<div class="alert alert-dark alert-dismissible fade show" role="alert">
											<i class="bi bi-upc-scan alert-icon"></i>
											A simple dark alert—check it out!
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>

									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Alert with Icons</div>
									</div>
									<div class="card-body">
										<div class="alert alert-primary alert-dismissible fade show" role="alert">
											<i class="bi bi-bullseye alert-icon"></i>
											A simple primary alert—check it out!
										</div>
										<div class="alert alert-secondary alert-dismissible fade show" role="alert">
											<i class="bi bi-chat-right-text alert-icon"></i>
											A simple secondary alert—check it out!
										</div>
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<i class="bi bi-check-circle alert-icon"></i>
											A simple success alert—check it out!
										</div>
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<i class="bi bi-x-circle alert-icon"></i>
											A simple danger alert—check it out!
										</div>
										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											<i class="bi bi-exclamation-circle alert-icon"></i>
											A simple warning alert—check it out!
										</div>
										<div class="alert alert-info alert-dismissible fade show" role="alert">
											<i class="bi bi-info-circle alert-icon"></i>
											A simple info alert—check it out!
										</div>
										<div class="alert alert-light alert-dismissible fade show" role="alert">
											<i class="bi bi-wallet2 alert-icon"></i>
											A simple light alert—check it out!
										</div>
										<div class="alert alert-dark alert-dismissible fade show" role="alert">
											<i class="bi bi-upc-scan alert-icon"></i>
											A simple dark alert—check it out!
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

		<!-- Main Js Required -->
		<script src="assets/js/main.js"></script>

	</body>

</html>