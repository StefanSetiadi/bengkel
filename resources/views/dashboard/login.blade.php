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
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

		<!-- Title -->
		<title>Login</title>


		<!-- *************
			************ Common Css Files *************
		************ -->

		<!-- Animated css -->
		<link rel="stylesheet" href="assets/css/animate.css">

		<!-- Bootstrap font icons css -->
		<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">

		<!-- Main css -->
		<link rel="stylesheet" href="assets/css/main.min.css">


	</head>

	<body class="login-container">

		<!-- Login box start -->
		<form action="{{ route('actionlogin') }}" method="post">
			@csrf
			<div class="login-box">
				<div class="login-form">
					<a href="{{ route('index') }}">
						<img src="img/logo.png" alt="Vico Admin" />
					</a>
					<div class="login-welcome">
						Welcome back, <br />Please login to your account.
					</div>
					@if (Session::get('message') == "failed")
						<style>
							#alertMessage {
								transition: opacity 0.8s ease-out;
							}
						</style>
						<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
						<br>
						<div id="alertMessage" class="alert alert-danger" role="alert">
							The email or password you entered is incorrect
						</div>
						<script>
							setTimeout(() => {
								const alertElement = document.getElementById('alertMessage');
								alertElement.style.opacity = '0';
								setTimeout(() => alertElement.style.display = 'none', 500); // Menunggu transisi selesai
							}, 5000);
						</script>
					@endif
					<div class="mb-3">
						<label class="form-label">Email</label>
						<input name="email" type="email" class="form-control" required>
					</div>
					<div class="mb-3">
						<div class="d-flex justify-content-between">
							<label class="form-label">Password</label>
						</div>
						<input name="password" type="password" class="form-control" required>
					</div>
					<div class="login-form-actions">
						<button type="submit" class="btn"> <span class="icon"> <i class="bi bi-arrow-right-circle"></i> </span>
							Login</button>
					</div>
					<div class="login-form-footer">
						<div class="additional-link">
							Don't have an account? <a href="{{ route('register') }}"> Signup</a>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- Login box end -->

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

		<!-- Main Js Required -->
		<script src="assets/js/main.js"></script>

	</body>

</html>