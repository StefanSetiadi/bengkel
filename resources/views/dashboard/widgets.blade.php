@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="product-card">
									<img class="product-card-img-top" src="assets/images/food/img6.jpg" alt="Bootstrap Gallery">
									<div class="product-card-body">
										<h5 class="product-title">Green Salad</h5>
										<div class="product-price">
											<span class="disount-price">$20</span>
											<span class="actucal-price">$24</span>
											<span class="off-price">50% Off</span>
										</div>
										<div class="product-rating">
											<div class="rate2 rating-stars"></div>
											<div class="total-ratings">1050</div>
										</div>
										<div class="product-description">
											Xuartz movement, manufactured by Zitizen watch co., ltd.
										</div>
										<div class="product-actions">
											<button class="btn btn-success">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="product-card">
									<img class="product-card-img-top" src="assets/images/food/img1.jpg" alt="Bootstrap Gallery">
									<div class="product-card-body">
										<h5 class="product-title">Nicoise Salad</h5>
										<div class="product-price">
											<span class="disount-price">$19</span>
											<span class="actucal-price">$27</span>
											<span class="off-price">30% Off</span>
										</div>
										<div class="product-rating">
											<div class="rate1 rating-stars"></div>
											<div class="total-ratings">2750</div>
										</div>
										<div class="product-description">
											Xuartz movement, manufactured by Zitizen watch co., ltd.
										</div>
										<div class="product-actions">
											<button class="btn btn-success">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="product-card">
									<img class="product-card-img-top" src="assets/images/food/img8.jpg" alt="Bootstrap Gallery">
									<div class="product-card-body">
										<h5 class="product-title">Augustin Salad</h5>
										<div class="product-price">
											<span class="disount-price">$18</span>
											<span class="actucal-price">$22</span>
											<span class="off-price">27% Off</span>
										</div>
										<div class="product-rating">
											<div class="rate2 rating-stars"></div>
											<div class="total-ratings">3629</div>
										</div>
										<div class="product-description">
											Xuartz movement, manufactured by Zitizen watch co., ltd.
										</div>
										<div class="product-actions">
											<button class="btn btn-success">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="product-card">
									<img class="product-card-img-top" src="assets/images/food/img5.jpg" alt="Bootstrap Gallery">
									<div class="product-card-body">
										<h5 class="product-title">Grande Duchesse</h5>
										<div class="product-price">
											<span class="disount-price">$25</span>
											<span class="actucal-price">$35</span>
											<span class="off-price">33% Off</span>
										</div>
										<div class="product-rating">
											<div class="rate6 rating-stars"></div>
											<div class="total-ratings">35</div>
										</div>
										<div class="product-description">
											Xuartz movement, manufactured by Zitizen watch co., ltd.
										</div>
										<div class="product-actions">
											<button class="btn btn-success">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-blue">
										<i class="bi bi-pie-chart"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-blue">250k</h3>
										<p>Sales</p>
									</div>
									<div class="sale-graph">
										<div id="sparklineLine1"></div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-blue">
										<i class="bi bi-emoji-smile"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-blue">24m</h3>
										<p>Customers</p>
									</div>
									<div class="sale-graph">
										<div id="sparklineLine2"></div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-blue">
										<i class="bi bi-box-seam"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-blue">15k</h3>
										<p>Products</p>
									</div>
									<div class="sale-graph">
										<div id="sparklineLine3"></div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-green">
										<i class="bi bi-handbag"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-green">180m</h3>
										<p>Revenue</p>
									</div>
									<div class="sale-graph">
										<div id="sparklineLine4"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-blue">
										<i class="bi bi-pie-chart"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-blue">250k</h3>
										<p>Sales</p>
									</div>

								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-blue">
										<i class="bi bi-emoji-smile"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-blue">24m</h3>
										<p>Customers</p>
									</div>

								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-blue">
										<i class="bi bi-box-seam"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-blue">15k</h3>
										<p>Products</p>
									</div>

								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-green">
										<i class="bi bi-handbag"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-green">180m</h3>
										<p>Revenue</p>
									</div>

								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon-bdr">
										<i class="bi bi-pie-chart"></i>
									</div>
									<div class="sale-details">
										<h5>Products</h5>
										<h3 class="text-blue">2,567</h3>
										<p class="growth text-blue">Increased 21%</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon-bdr">
										<i class="bi bi-emoji-smile"></i>
									</div>
									<div class="sale-details">
										<h5>Orders</h5>
										<h3 class="text-blue">4,972</h3>
										<p class="growth text-blue">Increased 12%</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon-bdr">
										<i class="bi bi-box-seam"></i>
									</div>
									<div class="sale-details">
										<h5>Revenue</h5>
										<h3 class="text-blue">$65,950</h3>
										<p class="growth text-red">Decreased 7%</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon-bdr green">
										<i class="bi bi-handbag"></i>
									</div>
									<div class="sale-details">
										<h5>Customers</h5>
										<h3 class="text-green">3,287</h3>
										<p class="growth text-blue">Increased 18%</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-2 col-sm-4 col-12">
								<div class="social-tile">
									<div class="social-icon">
										<i class="bi bi-people-fill"></i>
									</div>
									<div class="social-details">
										<h1>21.3k</h1>
										<h5>Total Followers</h5>
										<p class="growth high">Increased 21%</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-sm-4 col-12">
								<div class="social-tile">
									<div class="social-icon">
										<i class="bi bi-mouse3-fill"></i>
									</div>
									<div class="social-details">
										<h1>1.72k</h1>
										<h5>Impressions</h5>
										<p class="growth high">Increased 12%</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-sm-4 col-12">
								<div class="social-tile">
									<div class="social-icon">
										<i class="bi bi-signpost-split-fill"></i>
									</div>
									<div class="social-details">
										<h1>826</h1>
										<h5>Reach</h5>
										<p class="growth low">Decreased 7%</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-sm-4 col-12">
								<div class="social-tile">
									<div class="social-icon">
										<i class="bi bi-dpad-fill"></i>
									</div>
									<div class="social-details">
										<h1>17.9%</h1>
										<h5>Engagement Rate</h5>
										<p class="growth high">Increased 18%</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-sm-4 col-12">
								<div class="social-tile">
									<div class="social-icon">
										<i class="bi bi-youtube"></i>
									</div>
									<div class="social-details">
										<h1>93M</h1>
										<h5>Subscribers</h5>
										<p class="growth high">Increased 37%</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-2 col-sm-4 col-12">
								<div class="social-tile">
									<div class="social-icon">
										<i class="bi bi-instagram"></i>
									</div>
									<div class="social-details">
										<h1>52M</h1>
										<h5>Followers</h5>
										<p class="growth high">Increased 22%</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-4 col-12">
								<div class="weather-widget cloudy">
									<h2>12°</h2>
									<h4>Showers</h4>
									<h6 class="todaysDate">Sunday, February 20, 2022 8:01 PM</h6>
									<p>London, UK</p>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="weather-widget rainy">
									<h2>7°</h2>
									<h4>Rainy</h4>
									<h6 class="todaysDate">Sunday, February 20, 2022 8:01 PM</h6>
									<p>Berlin, Germany</p>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="weather-widget sunny">
									<h2>25°</h2>
									<h4>Sunny</h4>
									<h6 class="todaysDate">Sunday, February 20, 2022 8:01 PM</h6>
									<p>Los Angeles, USA</p>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
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
													<div class="table-responsive">
														<table class="table m-0">
															<thead>
																<tr>
																	<th>#</th>
																	<th>Title</th>
																	<th>Module</th>
																	<th>Reporter</th>
																	<th>Status</th>
																	<th>Owner</th>
																	<th>Severity</th>
																	<th class="text-right">Created</th>
																	<th class="text-right">Updated</th>
																	<th class="text-right">Due</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>App crashes</td>
																	<td>Main App</td>
																	<td>Lewis</td>
																	<td><span class="badge shade-red">Open</span></td>
																	<td>Micheal</td>
																	<td class="text-green">High</td>
																	<td class="text-right">Aug-10, 2019</td>
																	<td class="text-right">Sep-14, 2019</td>
																	<td class="text-right">Oct-20, 2019</td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>Saving file</td>
																	<td>Form Screen</td>
																	<td>James</td>
																	<td><span class="badge shade-green">In Progress</span></td>
																	<td>Donald</td>
																	<td class="text-red">Low</td>
																	<td class="text-right">Aug-10, 2019</td>
																	<td class="text-right">Sep-14, 2019</td>
																	<td class="text-right">Oct-20, 2019</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="tab-pane fade" id="twoA" role="tabpanel">
													<p>Get started with Bootstrap, the world’s most popular framework for building responsive,
														mobile-first sites, with jsDelivr and a template starter page.</p>
												</div>
												<div class="tab-pane fade" id="threeA" role="tabpanel">
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
