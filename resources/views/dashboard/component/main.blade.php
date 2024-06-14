<!doctype html>
<html lang="en">
	@include('dashboard.component.head')
	<body>

		@include('dashboard.component.loading_wrapper')

		<!-- Page wrapper start -->
		<div class="page-wrapper">

			@include('dashboard.component.sidebar')

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				@include('dashboard.component.header')

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					@yield('content')

                    @include('dashboard.component.footer')

				</div>
				<!-- Content wrapper scroll end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->

		</div>
		<!-- Page wrapper end -->

		@include('dashboard.component.js')

	</body>

</html>