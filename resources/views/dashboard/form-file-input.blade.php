@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group mb-3">
											<label class="input-group-text" for="inputGroupSelect01">Options</label>
											<select class="form-select" id="inputGroupSelect01">
												<option selected>Choose...</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group mb-3">
											<select class="form-select" id="inputGroupSelect02">
												<option selected>Choose...</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											</select>
											<label class="input-group-text" for="inputGroupSelect02">Options</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group mb-3">
											<button class="btn btn-light" type="button">Button</button>
											<select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
												<option selected>Choose...</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
												<option selected>Choose...</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											</select>
											<button class="btn btn-light" type="button">Button</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<label class="input-group-text" for="inputGroupFile01">Upload</label>
											<input type="file" class="form-control" id="inputGroupFile01">
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<input type="file" class="form-control" id="inputGroupFile02">
											<label class="input-group-text" for="inputGroupFile02">Upload</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<button class="btn btn-light" type="button" id="inputGroupFileAddon03">Button</button>
											<input type="file" class="form-control" id="inputGroupFile03"
												aria-describedby="inputGroupFileAddon03" aria-label="Upload">
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<input type="file" class="form-control" id="inputGroupFile04"
												aria-describedby="inputGroupFileAddon04" aria-label="Upload">
											<button class="btn btn-light" type="button" id="inputGroupFileAddon04">Button</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
