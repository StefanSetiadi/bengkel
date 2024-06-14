@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-4 col-12">
								<!-- Card start -->
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label d-flex">Single Select</label>
											<select class="select-single js-states form-control" title="Select Product Category"
												data-live-search="true">
												<option>Mobiles</option>
												<option>Books</option>
												<option>Clothing</option>
												<option>Electronics</option>
												<option>Food</option>
												<option>Games</option>
												<option>Gifts</option>
												<option>Laptops</option>
												<option>Mobiles</option>
												<option>Music</option>
												<option>Office</option>
												<option>Pharmacy</option>
												<option>Sports</option>
												<option>Toys</option>
											</select>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-sm-8 col-12">
								<!-- Card start -->
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label d-flex">Multi Select</label>
											<select class="select-multiple js-states form-control" title="Select Product Category"
												multiple="multiple">
												<option>Mobiles</option>
												<option>Books</option>
												<option>Clothing</option>
												<option>Electronics</option>
												<option>Food</option>
												<option>Games</option>
												<option>Gifts</option>
												<option>Laptops</option>
												<option>Mobiles</option>
												<option>Music</option>
												<option>Office</option>
												<option>Pharmacy</option>
												<option>Sports</option>
												<option>Toys</option>
											</select>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-sm-4 col-12">
								<!-- Card start -->
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label d-flex">Disabled Select Field</label>
											<select class="select-single js-states form-control" title="Select Product Category"
												data-live-search="true" disabled="">
												<option>Mobiles</option>
												<option>Books</option>
												<option>Clothing</option>
												<option>Electronics</option>
												<option>Food</option>
												<option>Games</option>
												<option>Gifts</option>
												<option>Laptops</option>
												<option>Mobiles</option>
												<option>Music</option>
												<option>Office</option>
												<option>Pharmacy</option>
												<option>Sports</option>
												<option>Toys</option>
											</select>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-sm-4 col-12">
								<!-- Card start -->
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label d-flex">Disabled Multi Select</label>
											<select class="select-multiple js-states form-control" title="Select Product Category"
												multiple="multiple" disabled="">
												<option>Mobiles</option>
												<option>Books</option>
												<option>Clothing</option>
												<option>Electronics</option>
												<option>Food</option>
												<option>Games</option>
												<option>Gifts</option>
												<option>Laptops</option>
												<option>Mobiles</option>
												<option>Music</option>
												<option>Office</option>
												<option>Pharmacy</option>
												<option>Sports</option>
												<option>Toys</option>
											</select>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-sm-4 col-12">
								<!-- Card start -->
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label d-flex">Placeholder</label>
											<select class="select-single select-placeholder js-states form-control" multiple="multiple">
												<option>Mobiles</option>
												<option>Books</option>
												<option>Clothing</option>
												<option>Electronics</option>
												<option>Food</option>
												<option>Games</option>
												<option>Gifts</option>
												<option>Laptops</option>
												<option>Mobiles</option>
												<option>Music</option>
												<option>Office</option>
												<option>Pharmacy</option>
												<option>Sports</option>
												<option>Toys</option>
											</select>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-sm-4 col-12">
								<!-- Card start -->
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label d-flex">Tokenization Tags</label>
											<select class="select-tokenizer js-states form-control" multiple="multiple"></select>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-sm-4 col-12">
								<!-- Card start -->
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label d-flex">Opt Groups</label>
											<select class="select-single js-states form-control" title="Select Product Category"
												data-live-search="true">
												<optgroup label="Mobiles">
													<option>Apple</option>
													<option>Samsung</option>
													<option>Motorola</option>
												</optgroup>
												<optgroup label="Laptops">
													<option>Apple</option>
													<option>Dell</option>
													<option>Lenovo</option>
												</optgroup>
											</select>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-sm-4 col-12">
								<!-- Card start -->
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label d-flex">Opt Groups Multiple</label>
											<select class="select-multiple js-states form-control" title="Select Product Category"
												multiple="multiple">
												<optgroup label="Mobiles">
													<option>Apple</option>
													<option>Samsung</option>
													<option>Motorola</option>
												</optgroup>
												<optgroup label="Laptops">
													<option>Apple</option>
													<option>Dell</option>
													<option>Lenovo</option>
												</optgroup>
											</select>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-sm-4 col-12">
								<!-- Card start -->
								<div class="card">
									<div class="card-body">
										<label class="form-label d-flex">Select with Info</label>
										<div class="d-flex">
											<select class="select-single js-states form-control" title="Select Product Category"
												data-live-search="true">
												<option>Mobiles</option>
												<option>Books</option>
												<option>Clothing</option>
												<option>Electronics</option>
												<option>Food</option>
												<option>Games</option>
												<option>Gifts</option>
												<option>Laptops</option>
												<option>Mobiles</option>
												<option>Music</option>
												<option>Office</option>
												<option>Pharmacy</option>
												<option>Sports</option>
												<option>Toys</option>
											</select>
											<button type="button" class="btn btn-info ms-2" data-bs-toggle="tooltip" data-bs-placement="top"
												title="Information">
												<i class="bi bi-info-circle-fill m-0"></i>
											</button>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
							<div class="col-sm-8 col-12">
								<!-- Card start -->
								<div class="card">
									<div class="card-body">
										<label class="form-label d-flex">Multi Select with Info</label>
										<div class="d-flex">
											<select class="select-multiple js-states form-control" title="Select Product Category"
												multiple="multiple">
												<option>Mobiles</option>
												<option>Books</option>
												<option>Clothing</option>
												<option>Electronics</option>
												<option>Food</option>
												<option>Games</option>
												<option>Gifts</option>
												<option>Laptops</option>
												<option>Mobiles</option>
												<option>Music</option>
												<option>Office</option>
												<option>Pharmacy</option>
												<option>Sports</option>
												<option>Toys</option>
											</select>
											<button type="button" class="btn btn-info ms-2" data-bs-toggle="tooltip" data-bs-placement="top"
												title="Information">
												<i class="bi bi-info-circle-fill m-0"></i>
											</button>
										</div>
									</div>
								</div>
								<!-- Card end -->
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
