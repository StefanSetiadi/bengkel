@extends('dashboard.component.main')

@section('content')
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
@endsection
