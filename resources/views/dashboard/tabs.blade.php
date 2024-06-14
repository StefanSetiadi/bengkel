@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-12">
								<div class="card">
									<div class="card-body">
										<div class="custom-tabs-container">
											<ul class="nav nav-tabs" id="customTab" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link active" id="tab-one" data-bs-toggle="tab" href="#one" role="tab"
														aria-controls="one" aria-selected="true">Tab One</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-two" data-bs-toggle="tab" href="#two" role="tab"
														aria-controls="two" aria-selected="false">Tab Two</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-three" data-bs-toggle="tab" href="#three" role="tab"
														aria-controls="three" aria-selected="false">Tab Three</a>
												</li>
											</ul>
											<div class="tab-content" id="customTabContent">
												<div class="tab-pane fade show active" id="one" role="tabpanel">
													<p>Tab Content A</p>
												</div>
												<div class="tab-pane fade" id="two" role="tabpanel">
													<p>Tab Content B</p>
												</div>
												<div class="tab-pane fade" id="three" role="tabpanel">
													<p>Tab Content C</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-12">
								<div class="card">
									<div class="card-body">
										<div class="custom-tabs-container">
											<ul class="nav nav-tabs" id="customTab2" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link active" id="tab-oneA" data-bs-toggle="tab" href="#oneA" role="tab"
														aria-controls="oneA" aria-selected="true">Tab One <span class="badge shade-red">9</span></a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-twoA" data-bs-toggle="tab" href="#twoA" role="tab"
														aria-controls="twoA" aria-selected="false">Tab Two<span
															class="badge shade-yellow">7</span></a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-threeA" data-bs-toggle="tab" href="#threeA" role="tab"
														aria-controls="threeA" aria-selected="false">Tab Three <span
															class="badge shade-green">3</span></a>
												</li>
											</ul>
											<div class="tab-content" id="customTabContent2">
												<div class="tab-pane fade show active" id="oneA" role="tabpanel">
													<p>Tab Content A</p>
												</div>
												<div class="tab-pane fade" id="twoA" role="tabpanel">
													<p>Tab Content B</p>
												</div>
												<div class="tab-pane fade" id="threeA" role="tabpanel">
													<p>Tab Content C</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-12">
								<div class="card">
									<div class="card-body">
										<div class="custom-tabs-container">
											<ul class="nav nav-tabs" id="customTab3" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link active" id="tab-oneAA" data-bs-toggle="tab" href="#oneAA" role="tab"
														aria-controls="oneAA" aria-selected="true"><i class="bi bi-box-seam"></i>Tab One</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-twoAA" data-bs-toggle="tab" href="#twoAA" role="tab"
														aria-controls="twoAA" aria-selected="false"><i class="bi bi-pie-chart"></i>Tab Two</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="tab-threeAA" data-bs-toggle="tab" href="#threeAA" role="tab"
														aria-controls="threeAA" aria-selected="false"><i class="bi bi-printer"></i>Tab Three</a>
												</li>
											</ul>
											<div class="tab-content" id="customTabContent3">
												<div class="tab-pane fade show active" id="oneAA" role="tabpanel">
													<p>Tab Content A</p>
												</div>
												<div class="tab-pane fade" id="twoAA" role="tabpanel">
													<p>Tab Content B</p>
												</div>
												<div class="tab-pane fade" id="threeAA" role="tabpanel">
													<p>Tab Content C</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
