@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-12">

								<!-- Card start -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Form Layout</div>
									</div>
									<div class="card-body">

										<!-- Row start -->
										<div class="row">
											<div class="col-12">
												<div class="form-section-title">Account Details</div>
											</div>
											<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="mb-3">
													<label for="inputName" class="form-label">Full Name</label>
													<input type="text" class="form-control" id="inputName" placeholder="Enter Full Name">
												</div>
											</div>
											<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="mb-3">
													<label for="inputEmail" class="form-label">Email</label>
													<input type="email" class="form-control" id="inputEmail" placeholder="Enter Email">
												</div>
											</div>
											<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="mb-3">
													<label for="inputNumber" class="form-label">Phone</label>
													<input type="number" class="form-control" id="inputNumber" placeholder="Enter Phone Number">
												</div>
											</div>
											<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="mb-3">
													<label for="inputCompanyName" class="form-label">Company Name</label>
													<input type="text" class="form-control" id="inputCompanyName"
														placeholder="Enter Company Name">
												</div>
											</div>
											<div class="col-12">
												<div class="form-section-title">Billing Details</div>
											</div>
											<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="mb-3">
													<label class="form-label">Enter Amount</label>
													<div class="input-group">
														<input type="text" class="form-control">
														<span class="input-group-text">$</span>
														<span class="input-group-text">00</span>
													</div>
												</div>
											</div>
											<div class="col-xxl-6 col-xl-6 col-lg-8 col-md-8 col-sm-8 col-12">
												<div class="mb-3">
													<label class="form-label">Billing Interval</label>
													<div class="mt-2">
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="billingRadioOptions" id="billingRadio1"
																value="option1">
															<label class="form-check-label" for="billingRadio1">Monthly</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="billingRadioOptions" id="billingRadio2"
																value="option2" checked="">
															<label class="form-check-label" for="billingRadio2">Quatrerly</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="billingRadioOptions" id="billingRadio3"
																value="option3">
															<label class="form-check-label" for="billingRadio3">Yearly</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12">
												<div class="form-section-title">Business Address</div>
											</div>
											<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="mb-3">
													<label for="inputBusinessAddress" class="form-label">Business Address</label>
													<input type="text" class="form-control" id="inputBusinessAddress"
														placeholder="Enter Business Address">
												</div>
											</div>
											<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="mb-3">
													<label for="inputStreetAddress" class="form-label">Street Address</label>
													<input type="text" class="form-control" id="inputStreetAddress"
														placeholder="Enter Street Address">
												</div>
											</div>
											<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="mb-3">
													<label for="inputProvince" class="form-label">Province/Territory</label>
													<input type="text" class="form-control" id="inputProvince"
														placeholder="Enter Province/Territory">
												</div>
											</div>
											<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="mb-3">
													<label for="inputPostalCode" class="form-label">Postal Code</label>
													<input type="text" class="form-control" id="inputPostalCode" placeholder="Enter Postal Code">
												</div>
											</div>
											<div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12">
												<div class="mb-3">
													<label class="form-label">Communication</label>
													<div class="mt-2">
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="communicationCheckbox1"
																value="option1" checked="">
															<label class="form-check-label" for="communicationCheckbox1">Email</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="communicationCheckbox2"
																value="option2">
															<label class="form-check-label" for="communicationCheckbox2">SMS</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="communicationCheckbox3"
																value="option3">
															<label class="form-check-label" for="communicationCheckbox3">Phone</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-12">
												<div class="mb-3">
													<label for="inputMessage" class="form-label">Message</label>
													<textarea class="form-control" id="inputMessage" placeholder="Enter Message"
														rows="3"></textarea>
												</div>
											</div>
										</div>
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

					</div>
@endsection
