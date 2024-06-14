@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-6 col-12">

								<!-- Card start -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Form Layout</div>
									</div>
									<div class="card-body">

										<!-- Row start -->
										<div class="row">
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputName" class="form-label">Name</label>
													<input type="text" class="form-control" id="inputName" placeholder="Enter Name">
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputEmail" class="form-label">Email</label>
													<input type="email" class="form-control" id="inputEmail" placeholder="Enter Email">
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputNumber" class="form-label">Phone</label>
													<input type="number" class="form-control" id="inputNumber" placeholder="Enter Phone Number">
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputCompanyName" class="form-label">Company Name</label>
													<input type="text" class="form-control" id="inputCompanyName"
														placeholder="Enter Company Name">
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputBusinessAddress" class="form-label">Business Address</label>
													<input type="text" class="form-control" id="inputBusinessAddress"
														placeholder="Enter Business Address">
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputProvince" class="form-label">Province/Territory</label>
													<input type="text" class="form-control" id="inputProvince"
														placeholder="Enter Province/Territory">
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputIndustryType" class="form-label">Industry Type</label>
													<select class="form-select" id="inputIndustryType">
														<option value="Select">Industry Type</option>
													</select>
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputPostalCode" class="form-label">Postal Code</label>
													<input type="text" class="form-control" id="inputPostalCode" placeholder="Enter Postal Code">
												</div>
											</div>
											<div class="col-12">
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
							<div class="col-sm-6 col-12">

								<!-- Card start -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Form Layout</div>
									</div>
									<div class="card-body">

										<!-- Row start -->
										<div class="row">
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputName2" class="form-label">Name</label>
													<input type="text" class="form-control" id="inputName2" placeholder="Enter Name">
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputEmail2" class="form-label">Email</label>
													<input type="email" class="form-control" id="inputEmail2" placeholder="Enter Email">
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputNumber2" class="form-label">Phone</label>
													<input type="number" class="form-control" id="inputNumber2" placeholder="Enter Phone Number">
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputCompanyName2" class="form-label">Company Name</label>
													<input type="text" class="form-control" id="inputCompanyName2"
														placeholder="Enter Company Name">
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputBusinessAddress2" class="form-label">Business Address</label>
													<input type="text" class="form-control" id="inputBusinessAddress2"
														placeholder="Enter Business Address">
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputProvince2" class="form-label">Province/Territory</label>
													<input type="text" class="form-control" id="inputProvince2"
														placeholder="Enter Province/Territory">
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputIndustryType2" class="form-label">Industry Type</label>
													<select class="form-select" id="inputIndustryType2">
														<option value="Select">Industry Type</option>
													</select>
												</div>
											</div>
											<div class="col-xl-6 col-sm-12 col-12">
												<div class="mb-3">
													<label for="inputPostalCode2" class="form-label">Postal Code</label>
													<input type="text" class="form-control" id="inputPostalCode2" placeholder="Enter Postal Code">
												</div>
											</div>
											<div class="col-12">
												<div class="mb-3">
													<label for="inputMessage2" class="form-label">Message</label>
													<textarea class="form-control" id="inputMessage2" placeholder="Enter Message"
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
