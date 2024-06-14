@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="spinner-border" role="status"></div>
										<div class="spinner-border text-primary" role="status"></div>
										<div class="spinner-border text-secondary" role="status"></div>
										<div class="spinner-border text-success" role="status"></div>
										<div class="spinner-border text-danger" role="status"></div>
										<div class="spinner-border text-warning" role="status"></div>
										<div class="spinner-border text-info" role="status"></div>
										<div class="spinner-border text-light" role="status"></div>
										<div class="spinner-border text-dark" role="status"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="spinner-grow" role="status"></div>
										<div class="spinner-grow text-primary" role="status"></div>
										<div class="spinner-grow text-secondary" role="status"></div>
										<div class="spinner-grow text-success" role="status"></div>
										<div class="spinner-grow text-danger" role="status"></div>
										<div class="spinner-grow text-warning" role="status"></div>
										<div class="spinner-grow text-info" role="status"></div>
										<div class="spinner-grow text-light" role="status"></div>
										<div class="spinner-grow text-dark" role="status"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="spinner-border m-5" role="status">
											<span class="visually-hidden">Loading...</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-center">
											<div class="spinner-border text-red m-5" role="status">
												<span class="visually-hidden">Loading...</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex">
											<div class="spinner-border text-blue" role="status"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-center">
											<div class="spinner-border text-yellow" role="status"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-end">
											<div class="spinner-border text-red" role="status"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div class="spinner-border text-red me-2" role="status" aria-hidden="true"></div>
											<strong>Loading...</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<strong>Loading...</strong>
											<div class="spinner-border text-red ms-auto" role="status" aria-hidden="true"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center">
											<div class="spinner-border text-red me-auto" role="status" aria-hidden="true"></div>
											<strong>Loading...</strong>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="spinner-border text-red spinner-w1" role="status"></div>
										<div class="spinner-border text-blue spinner-w2" role="status"></div>
										<div class="spinner-border text-green spinner-w3" role="status"></div>
										<div class="spinner-border text-yellow spinner-w5" role="status"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="spinner-grow text-red spinner-w1" role="status"></div>
										<div class="spinner-grow text-blue spinner-w2" role="status"></div>
										<div class="spinner-grow text-green spinner-w3" role="status"></div>
										<div class="spinner-grow text-yellow spinner-w5" role="status"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<button class="btn btn-dark" type="button" disabled>
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
										</button>
										<button class="btn btn-danger" type="button">
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
											Loading...
										</button>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<button class="btn btn-dark" type="button" disabled>
											<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
										</button>
										<button class="btn btn-danger" type="button">
											<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
											Loading...
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
