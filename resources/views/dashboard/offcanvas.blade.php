@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-12">
								<div class="card">
									<div class="card-body">
										<div class="custom-btn-group">

											<!-- Offcanvas Top -->
											<button class="btn btn-success" type="button" data-bs-toggle="offcanvas"
												data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Top</button>
											<!-- Offcanvas Left -->
											<button class="btn btn-success" type="button" data-bs-toggle="offcanvas"
												data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Left</button>
											<!-- Offcanvas Right -->
											<button class="btn btn-success" type="button" data-bs-toggle="offcanvas"
												data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Right</button>
											<!-- Offcanvas Bottom -->
											<button class="btn btn-success" type="button" data-bs-toggle="offcanvas"
												data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Bottom</button>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
