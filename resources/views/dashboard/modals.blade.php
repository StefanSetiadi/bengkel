@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Modals</div>
									</div>
									<div class="card-body">

										<div class="">

											<!-- Modal Dark -->
											<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalDark">
												Dark Modal
											</button>

											<br>
											<br>

											<!-- Modal 1 -->
											<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
												Default Modal
											</button>

											<br>
											<br>

											<!-- Modal 2 -->
											<button type="button" class="btn btn-info" data-bs-toggle="modal"
												data-bs-target="#staticBackdrop">
												Static backdrop Modal
											</button>

											<br>
											<br>

											<!-- Modal 3 -->
											<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#scrollable">
												Scrolling Content Modal
											</button>

											<br>
											<br>

											<!-- Modal 4 -->
											<button type="button" class="btn btn-info" data-bs-toggle="modal"
												data-bs-target="#verticallyCentered">
												Vertically Centered Modal
											</button>

											<br>
											<br>

											<!-- Modal 5 -->
											<button type="button" class="btn btn-info" data-bs-toggle="modal"
												data-bs-target="#exampleModalToggle">
												Modal Toggle
											</button>

											<br>
											<br>

											<!-- Modal 6 -->
											<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalXl">
												Modal Extra Large
											</button>

											<br>
											<br>

											<!-- Modal 7 -->
											<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalLg">
												Modal Large
											</button>

											<br>
											<br>

											<!-- Modal 8 -->
											<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalSm">
												Modal Small
											</button>

											<br>
											<br>

											<!-- Modal 9 -->
											<button type="button" class="btn btn-info" data-bs-toggle="modal"
												data-bs-target="#modalFullScreen">
												Modal Full Screen
											</button>

										</div>

									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
