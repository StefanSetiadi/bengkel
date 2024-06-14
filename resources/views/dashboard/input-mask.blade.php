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
											<div class="form-label">Credit Card Format</div>
											<input type="text" class="form-control" placeholder="Enter credit card number"
												id="input-credit-card" />
											<div id="creditCardType">
												<div class="visa credit-card">
													<img src="assets/images/cards/mastercard.png" alt="Uni Pro Admin" />
												</div>
												<div class="mastercard credit-card">
													<img src="assets/images/cards/visa.png" alt="Uni Pro Admin" />
												</div>
												<div class="amex credit-card">
													<img src="assets/images/cards/american-express.png" alt="Uni Pro Admin" />
												</div>
												<div class="jcb credit-card">
													<img src="assets/images/cards/jcb.png" alt="Uni Pro Admin" />
												</div>
												<div class="diners credit-card">
													<img src="assets/images/cards/diners.png" alt="Uni Pro Admin" />
												</div>
												<div class="discover credit-card">
													<img src="assets/images/cards/discover.png" alt="Uni Pro Admin" />
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Card end -->

							</div>

						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">

							<div class="col-sm-4 col-12">

								<!-- Card start -->
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<div class="input-group">
												<span class="input-group-text">US (+1)</span>
												<input type="text" class="form-control" placeholder="Enter phone number" id="phone-format-us" />
											</div>
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
											<div class="input-group">
												<span class="input-group-text">IND (+91)</span>
												<input type="text" class="form-control" placeholder="Enter phone number" id="phone-format-in" />
											</div>
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
											<div class="input-group">
												<span class="input-group-text">BRZ (+55)</span>
												<input type="text" class="form-control" placeholder="Enter phone number" id="phone-format-br" />
											</div>
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
											<div class="form-label">Date Format</div>
											<input type="text" class="form-control" placeholder="YYYY-MM-DD" id="date-formatting" />
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
											<div class="form-label">Date Format 2</div>
											<input type="text" class="form-control" placeholder="MM-YY" id="date-formatting2" />
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
											<div class="form-label">Time Format</div>
											<input type="text" class="form-control" placeholder="HH-MM-SS" id="time-formatting" />
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
											<div class="form-label">Time Format 2</div>
											<input type="text" class="form-control" placeholder="HH-MM" id="time-formatting2" />
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
											<div class="form-label">Input Numeral Thousand Format</div>
											<input type="text" class="form-control" placeholder="Enter Number" id="input-numeral-thousand" />
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
											<div class="form-label">Input Numeral Lakh Format</div>
											<input type="text" class="form-control" placeholder="Enter Number" id="input-numeral-lakh" />
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
											<div class="form-label">Blocks</div>
											<input type="text" class="form-control" placeholder="Delimiters: [4444.333.333.4444]"
												id="input-blocks" />
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
											<div class="form-label">Delimiter</div>
											<input type="text" class="form-control" placeholder="Delimiters: [333.333.333]"
												id="input-delimiter" />
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
											<div class="form-label">Delimiter</div>
											<input type="text" class="form-control" placeholder="Delimiters: [333.333.333.22]"
												id="input-delimiter2" />
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
											<div class="form-label">Prefix</div>
											<input type="text" class="form-control" placeholder="Delimiters: [4444.4444.4444]"
												id="input-prefix" />
										</div>
									</div>
								</div>
								<!-- Card end -->

							</div>

						</div>
						<!-- Row end -->

					</div>
@endsection
