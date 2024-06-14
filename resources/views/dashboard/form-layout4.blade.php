@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-12">

								<!-- Card start -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Horizontal Form Layout</div>
									</div>
									<div class="card-body">

										<!-- Row start -->
										<form>
											<div class="row mb-3">
												<label class="col-sm-2 col-form-label">Full Name</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" placeholder="First Name">
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="row mb-3">
												<label class="col-sm-2 col-form-label">Email Address</label>
												<div class="col-sm-3">
													<input type="email" class="form-control">
												</div>
											</div>
											<div class="row mb-3">
												<label class="col-sm-2 col-form-label">Location</label>
												<div class="col-sm-3">
													<div class="input-group">
														<input class="form-control" type="text" placeholder="Street Address">
														<span class="input-group-text">
															<i class="bi bi-pin-map"></i>
														</span>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="input-group">
														<input class="form-control" type="text" placeholder="City">
														<span class="input-group-text">
															<i class="bi bi-map"></i>
														</span>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="input-group">
														<input class="form-control" type="text" placeholder="Pin">
														<span class="input-group-text">
															<i class="bi bi-pencil"></i>
														</span>
													</div>
												</div>
											</div>
											<fieldset class="row mb-3">
												<label class="col-sm-2 col-form-label">Billing Interval</label>
												<div class="col-sm-3">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="gridRadios" id="billingRadio1"
															value="option1" checked="">
														<label class="form-check-label" for="billingRadio1">
															Monthly
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="billingRadio" id="billingRadio2"
															value="option2">
														<label class="form-check-label" for="billingRadio2">
															Quarterly
														</label>
													</div>
													<div class="form-check disabled">
														<input class="form-check-input" type="radio" name="billingRadio" id="billingRadio3"
															value="option3">
														<label class="form-check-label" for="billingRadio3">
															Yearly
														</label>
													</div>
												</div>
											</fieldset>
											<div class="row mb-3">
												<div class="col-sm-10 offset-sm-2">
													<div class="form-check">
														<input class="form-check-input" type="checkbox">
														<label class="form-check-label">
															Email Subscription
														</label>
													</div>
												</div>
											</div>
										</form>
										<!-- Row end -->

										<!-- Form actions footer start -->
										<div class="form-actions-footer">
											<button class="btn btn-light">Cancel</button>
											<button class="btn btn-success">Submit</button>
										</div>
										<!-- Form actions footer end -->

									</div>
								</div>
								<!-- Card end -->

							</div>

						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-12">

								<!-- Card start -->
								<div class="card">
									<div class="card-body">

										<form class="row row-cols-lg-auto g-3 align-items-center">
											<div class="col-12">
												<label class="visually-hidden">Username</label>
												<div class="input-group">
													<div class="input-group-text">
														<i class="bi bi-person"></i>
													</div>
													<input type="text" class="form-control" placeholder="Username">
												</div>
											</div>

											<div class="col-12">
												<label class="visually-hidden">Password</label>
												<div class="input-group">
													<div class="input-group-text">
														<i class="bi bi-eye-slash"></i>
													</div>
													<input type="password" class="form-control" placeholder="Password">
												</div>
											</div>

											<div class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox">
													<label class="form-check-label">
														Remember me
													</label>
												</div>
											</div>

											<div class="col-12">
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</form>

									</div>
								</div>
								<!-- Card end -->

							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
