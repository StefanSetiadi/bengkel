@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-xl-12">
								<!-- Card start -->
								<div class="card">
									<div class="card-body">

										<!-- Row start -->
										<div class="row">
											<div class="col-xxl-8 col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
												<div class="row">
													<div class="col-sm-6 col-12">
														<div class="d-flex flex-row">
															<img src="assets/images/user2.png" class="img-fluid change-img-avatar" alt="Image">
															<div id="dropzone-sm" class="mb-4 dropzone-dark">
																<form action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">

																	<div class="dz-message needsclick">
																		<button type="button" class="dz-button">Change Image.</button>
																	</div>

																</form>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xxl-4 col-sm-6 col-12">
														<!-- Form Field Start -->
														<div class="mb-3">
															<label for="fullName" class="form-label">Full Name</label>
															<input type="text" class="form-control" id="fullName" placeholder="Full Name">
														</div>
													</div>
													<div class="col-xxl-4 col-sm-6 col-12">
														<!-- Form Field Start -->
														<div class="mb-3">
															<label for="emailID" class="form-label">Email ID</label>
															<input type="email" class="form-control" id="emailID" placeholder="reese@meail.com">
														</div>
													</div>
													<div class="col-xxl-4 col-sm-6 col-12">
														<!-- Form Field Start -->
														<div class="mb-3">
															<label for="phoneNo" class="form-label">Phone</label>
															<input type="number" class="form-control" id="phoneNo" placeholder="123-456-7890">
														</div>
													</div>
													<div class="col-xxl-4 col-sm-6 col-12">
														<!-- Form Field Start -->
														<div class="mb-3">
															<label for="address" class="form-label">Address</label>
															<input type="text" class="form-control" id="address" placeholder="Address">
														</div>
													</div>
													<div class="col-xxl-4 col-sm-6 col-12">
														<!-- Form Field Start -->
														<div class="mb-3">
															<label for="city" class="form-label">City</label>
															<input type="text" class="form-control" id="city" placeholder="City">
														</div>
													</div>
													<div class="col-xxl-4 col-sm-6 col-12">
														<!-- Form Field Start -->
														<div class="mb-3">
															<label for="state" class="form-label">State</label>
															<input type="text" class="form-control" id="state" placeholder="State">
														</div>
													</div>
													<div class="col-xxl-4 col-sm-6 col-12">
														<!-- Form Field Start -->
														<div class="mb-3">
															<label for="zipCode" class="form-label">Zip Code</label>
															<input type="text" class="form-control" id="zipCode" placeholder="Zip Code">
														</div>
													</div>
													<div class="col-xxl-4 col-sm-6 col-12">
														<!-- Form Field Start -->
														<div class="mb-3">
															<label for="country" class="form-label">Country</label>
															<select class="form-control" id="country">
																<option>United States</option>
																<option>Australia</option>
																<option>Canada</option>
																<option>Gremany</option>
																<option>India</option>
																<option>Japan</option>
																<option>England</option>
																<option>Brazil</option>
															</select>
														</div>
													</div>
													<div class="col-xxl-4 col-sm-6 col-12">
														<!-- Form Field Start -->
														<div class="mb-3">
															<label for="enterPassword" class="form-label">Password</label>
															<input type="password" class="form-control" id="enterPassword"
																placeholder="Enter Password">
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-4 col-lg-5 col-md-6 col-sm-12 col-12">
												<div class="account-settings-block">
													<div class="settings-block">
														<div class="settings-block-title">Change Plan</div>
														<div class="settings-block-body">
															<div class="pricing-change-plan">
																<a href="#" class="shade-blue active-plan">
																	<h5>$29</h5>
																	<h6>Basic</h6>
																</a>
																<a href="#" class="shade-green">
																	<h5>$59</h5>
																	<h6>Business</h6>
																</a>
																<a href="#" class="shade-red">
																	<h5>$99</h5>
																	<h6>Enterprise</h6>
																</a>
															</div>
														</div>
													</div>
													<div class="settings-block">
														<div class="settings-block-title">Other Settings</div>
														<div class="settings-block-body">
															<div class="list-group">
																<div class="list-group-item d-flex justify-content-between align-items-center">
																	<div>Show desktop notifications</div>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" id="showNotifications">
																		<label class="form-check-label" for="showNotifications"></label>
																	</div>
																</div>
																<div class="list-group-item d-flex justify-content-between align-items-center">
																	<div>Show email notifications</div>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" id="showEmailNotifications" checked>
																		<label class="form-check-label" for="showEmailNotifications"></label>
																	</div>
																</div>
																<div class="list-group-item d-flex justify-content-between align-items-center">
																	<div>Show chat notifications</div>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" id="showChatNotifications">
																		<label class="form-check-label" for="showChatNotifications"></label>
																	</div>
																</div>
																<div class="list-group-item d-flex justify-content-between align-items-center">
																	<div>Show purchase history</div>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" id="showPurchaseNotifications">
																		<label class="form-check-label" for="showPurchaseNotifications"></label>
																	</div>
																</div>
																<div class="list-group-item d-flex justify-content-between align-items-center">
																	<div>Show orders</div>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" id="showOrders">
																		<label class="form-check-label" for="showOrders"></label>
																	</div>
																</div>
																<div class="list-group-item d-flex justify-content-between align-items-center">
																	<div>Show alerts</div>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" id="showAlerts">
																		<label class="form-check-label" for="showAlerts"></label>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-12">
												<hr>
												<button class="btn btn-info">Save Settings</button>
											</div>
										</div>
										<!-- Row end -->

									</div>
								</div>
								<!-- Card end -->
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
