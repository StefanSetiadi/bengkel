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
						<li class="breadcrumb-item breadcrumb-active" aria-current="page">Analytics</li>
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
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Revenue</div>
									</div>
									<div class="card-body">
										<div id="world-map-markers" class="chart-height"></div>

										<!-- Row start -->
										<div class="row">
											<div class="col-sm-4 col-12">
												<div class="info-stats">
													<img src="assets/images/flags/1x1/us.svg" class="stats-icon" alt="Clean Dashboards" />
													<h5>America</h5>
													<h3>$9200</h3>
												</div>
											</div>
											<div class="col-sm-4 col-12">
												<div class="info-stats">
													<img src="assets/images/flags/1x1/br.svg" class="stats-icon" alt="Admin Panels" />
													<h5>Brazil</h5>
													<h3>$6700</h3>
												</div>
											</div>
											<div class="col-sm-4 col-12">
												<div class="info-stats">
													<img src="assets/images/flags/1x1/gb.svg" class="stats-icon" alt="Admin Panels" />
													<h5>Great Britain</h5>
													<h3>$5800</h3>
												</div>
											</div>
										</div>
										<!-- Row end -->

									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Orders</div>
									</div>
									<div class="card-body">
										<div id="orders"></div>
										<!-- Row start -->
										<div class="row">
											<div class="col-sm-4 col-12">
												<div class="info-stats">
													<img src="assets/images/flags/1x1/in.svg" class="stats-icon" alt="Google Dashboards" />
													<h5>India</h5>
													<h3>3200</h3>
												</div>
											</div>
											<div class="col-sm-4 col-12">
												<div class="info-stats">
													<img src="assets/images/flags/1x1/de.svg" class="stats-icon" alt="Germany">
													<h5>Germany</h5>
													<h3>2700</h3>
												</div>
											</div>
											<div class="col-sm-4 col-12">
												<div class="info-stats">
													<img src="assets/images/flags/1x1/mx.svg" class="stats-icon" alt="Mexico">
													<h5>Mexico</h5>
													<h3>1500</h3>
												</div>
											</div>
										</div>
										<!-- Row end -->
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">By Channel</div>
									</div>
									<div class="card-body">

										<div id="byChannel" class="chart-height-xl"></div>
										<div class="num-stats mb-3">
											<h2>4710</h2>
											<h6 class="text-truncate">18% higher than last month.</h6>
										</div>

									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">By Counrty</div>
									</div>
									<div class="card-body">

										<div id="byCountry" class="chart-height-xl"></div>
										<div class="num-stats mb-3">
											<h2>7520</h2>
											<h6 class="text-truncate">12% higher than last month.</h6>
										</div>

									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">By Device</div>
									</div>
									<div class="card-body">

										<div id="byDevice" class="chart-height-xl auto-align-graph"></div>
										<div class="num-stats mb-3">
											<h2>2100</h2>
											<h6 class="text-truncate">25% higher than last month.</h6>
										</div>

									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Visitors</div>
									</div>
									<div class="card-body">

										<div id="visitors" class="chart-height-xl"></div>

									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Demography</div>
									</div>
									<div class="card-body">

										<div id="demography" class="chart-height-xl auto-align-graph"></div>

									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Results</div>
									</div>
									<div class="card-body">

										<div id="results" class="chart-height-xl"></div>

									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Income</div>
									</div>
									<div class="card-body">

										<div class="scroll370">
											<div class="income-stats-container">
												<div class="income-stats">
													<div class="income-graph">
														<div id="overallSales" class="svg-container"></div>
													</div>
													<div class="income-info">
														<h3>75<sup>k</sup></h3>
														<p>Overall Sales</p>
													</div>
													<div class="income-high-low">
														18% <span class="bi bi-caret-up-fill text-green"></span>
													</div>
												</div>
												<div class="income-stats">
													<div class="income-graph">
														<div id="overallExpenses" class="svg-container"></div>
													</div>
													<div class="income-info">
														<h3>33<sup>k</sup></h3>
														<p>Overall Expenses</p>
													</div>
													<div class="income-high-low">
														7% <span class="bi bi-caret-down-fill text-red"></span>
													</div>
												</div>
												<div class="income-stats">
													<div class="income-graph">
														<div id="overallIncome" class="svg-container"></div>
													</div>
													<div class="income-info">
														<h3>42<sup>k</sup></h3>
														<p>Overall Income</p>
													</div>
													<div class="income-high-low">
														21% <span class="bi bi-caret-up-fill text-green"></span>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Tickets</div>
									</div>
									<div class="card-body">

										<div class="scroll370">
											<ul class="tickets-container">
												<li>
													<img src="assets/images/user.png" class="avatar" alt="Admin Dashboards">
													<div class="ticket-details">
														<h4>Chandni Issac</h4>
														<h5>New contract template design</h5>
														<p class="ticket-time">05/12/2021</p>
													</div>
													<div class="ticket-status">
														<span class="badge shade-green">Completed</span>
													</div>
												</li>
												<li>
													<img src="assets/images/user5.png" class="avatar" alt="Admin Dashboards">
													<div class="ticket-details">
														<h4>Donna Miller</h4>
														<h5>Quarter budget analysis</h5>
														<p class="ticket-time">12/12/2021</p>
													</div>
													<div class="ticket-status">
														<span class="badge shade-blue">Processing</span>
													</div>
												</li>
												<li>
													<img src="assets/images/user4.png" class="avatar" alt="Admin Dashboards">
													<div class="ticket-details">
														<h4>William Brown</h4>
														<h5>Launch marketing campaign</h5>
														<p class="ticket-time">18/12/2021</p>
													</div>
													<div class="ticket-status">
														<span class="badge shade-blue">Processing</span>
													</div>
												</li>
												<li>
													<img src="assets/images/user3.png" class="avatar" alt="Admin Dashboards">
													<div class="ticket-details">
														<h4>Laura Morgan</h4>
														<h5>New estimation finance inc project</h5>
														<p class="ticket-time">21/12/2021</p>
													</div>
													<div class="ticket-status">
														<span class="badge shade-blue">Processing</span>
													</div>
												</li>
												<li>
													<img src="assets/images/user2.png" class="avatar" alt="Admin Dashboards">
													<div class="ticket-details">
														<h4>Nancy Bell</h4>
														<h5>Create user journey and interaction flows</h5>
														<p class="ticket-time">25/12/2021</p>
													</div>
													<div class="ticket-status">
														<span class="badge shade-red">Pending</span>
													</div>
												</li>
												<li>
													<img src="assets/images/user4.png" class="avatar" alt="Admin Dashboards">
													<div class="ticket-details">
														<h4>Raymond Miller</h4>
														<h5>Download last month Adobe creative cloud invoice.</h5>
														<p class="ticket-time">21/12/2021</p>
													</div>
													<div class="ticket-status">
														<span class="badge shade-blue">Processing</span>
													</div>
												</li>
												<li>
													<img src="assets/images/user3.png" class="avatar" alt="Admin Dashboards">
													<div class="ticket-details">
														<h4>Jacob White</h4>
														<h5>Report a bug to infinity support.</h5>
														<p class="ticket-time">25/12/2021</p>
													</div>
													<div class="ticket-status">
														<span class="badge shade-red">Pending</span>
													</div>
												</li>
												<li>
													<img src="assets/images/user5.png" class="avatar" alt="Admin Dashboards">
													<div class="ticket-details">
														<h4>Grace Cooper</h4>
														<h5>Campaign performance tracking.</h5>
														<p class="ticket-time">21/12/2021</p>
													</div>
													<div class="ticket-status">
														<span class="badge shade-blue">Processing</span>
													</div>
												</li>
												<li>
													<img src="assets/images/user.png" class="avatar" alt="Admin Dashboards">
													<div class="ticket-details">
														<h4>Michelle Taylor</h4>
														<h5>Design email template and send to dev team for approval.</h5>
														<p class="ticket-time">25/12/2021</p>
													</div>
													<div class="ticket-status">
														<span class="badge shade-red">Pending</span>
													</div>
												</li>
											</ul>
										</div>

									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Deals</div>
									</div>
									<div class="card-body">

										<div id="deals"></div>
										<!-- Row start -->
										<div class="row">
											<div class="col-sm-6 col-6">
												<div class="info-stats">
													<h5>Claimed</h5>
													<h3>3200</h3>
												</div>
											</div>
											<div class="col-sm-6 col-6">
												<div class="info-stats">
													<h5>Expired</h5>
													<h3>1500</h3>
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

		<!-- Apex Charts -->
		<script src="assets/vendor/apex/apexcharts.min.js"></script>
		<script src="assets/vendor/apex/custom/repotrs/byChannel.js"></script>
		<script src="assets/vendor/apex/custom/repotrs/byCountry.js"></script>
		<script src="assets/vendor/apex/custom/repotrs/byDevice.js"></script>
		<script src="assets/vendor/apex/custom/repotrs/orders.js"></script>
		<script src="assets/vendor/apex/custom/repotrs/results.js"></script>
		<script src="assets/vendor/apex/custom/repotrs/visitors.js"></script>
		<script src="assets/vendor/apex/custom/repotrs/demography.js"></script>
		<script src="assets/vendor/apex/custom/repotrs/deals.js"></script>

		<!-- Vector Maps -->
		<script src="assets/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js"></script>
		<script src="assets/vendor/jvectormap/world-mill-en.js"></script>
		<script src="assets/vendor/jvectormap/gdp-data.js"></script>
		<script src="assets/vendor/jvectormap/custom/world-map-markers.js"></script>

		<!-- Circleful -->
		<script src="assets/vendor/circliful/circliful.min.js"></script>
		<script src="assets/vendor/circliful/circliful.custom.js"></script>

		<!-- Main Js Required -->
		<script src="assets/js/main.js"></script>

	</body>

</html>