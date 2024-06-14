@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="task-stats-container">
									<div class="task-stats">
										<div class="task-title">Completed</div>
										<div class="task-count">12</div>
									</div>
									<div class="task-stats-graph">
										<div id="taskStats1"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="task-stats-container">
									<div class="task-stats">
										<div class="task-title">Pending</div>
										<div class="task-count">10</div>
									</div>
									<div class="task-stats-graph">
										<div id="taskStats2"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="task-stats-container">
									<div class="task-stats">
										<div class="task-title">Progress</div>
										<div class="task-count">27</div>
									</div>
									<div class="task-stats-graph">
										<div id="taskStats3"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="task-stats-container">
									<div class="task-stats">
										<div class="task-title">Closed</div>
										<div class="task-count">15</div>
									</div>
									<div class="task-stats-graph">
										<div id="taskStats4"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-8 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Sales</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-3 col-sm-12 col-12">
												<div class="card-border m-0 h-100">
													<div class="monthly-stats">
														<h5>Weekly</h5>
														<div class="avg-block">
															<h4 class="avg-total text-red">$3,200</h4>
															<h6 class="avg-label">Direct</h6>
														</div>
														<div class="avg-block">
															<h4 class="avg-total text-green">$7,100</h4>
															<h6 class="avg-label">Online</h6>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-sm-12 col-12">
												<div class="sales-stats-container">
													<div class="scroll250">
														<ul class="sales-stats">
															<li>
																<p>Apple Inc<span><i class="bi bi-arrow-up-right text-green"></i>46,540<small
																			class="text-green">+2.005</small></span>
																</p>
															</li>
															<li>
																<p>Google Inc<span><i class="bi bi-arrow-up-right text-green"></i>8219<small
																			class="text-green">-4.031</small></span></p>
															</li>
															<li>
																<p>Yahoo Inc<span><i class="bi bi-arrow-down-right text-red"></i>3188<small
																			class="text-red">+7.652</small></span></p>
															</li>
															<li>
																<p>Facebook Inc<span><i class="bi bi-arrow-up-right text-green"></i>46545<small
																			class="text-green">+11.82</small></span></p>
															</li>
															<li>
																<p>Ebay Inc<span><i class="bi bi-arrow-down-right text-red"></i>662<small
																			class="text-red">-5.281</small></span></p>
															</li>
															<li>
																<p>Amazon Inc<span><i class="bi bi-arrow-up-right text-green"></i>27873<small
																			class="text-green">+7.318</small></span></p>
															</li>
															<li>
																<p>Microsoft<span><i class="bi bi-arrow-up-right text-green"></i>3964<small
																			class="text-green">-3.091</small></span></p>
															</li>
															<li>
																<p>Federal Bank<span><i class="bi bi-arrow-up-right text-green"></i>10760<small
																			class="text-green">+4.585</small></span></p>
															</li>
															<li>
																<p>Nicco Corp<span><i class="bi bi-arrow-down-right text-red"></i>260<small
																			class="text-red">-6.955</small></span></p>
															</li>
															<li>
																<p>Uflex<span><i class="bi bi-arrow-up-right text-green"></i>37095<small
																			class="text-green">+5.079</small></span></p>
															</li>
															<li>
																<p>Trivago NV<span><i class="bi bi-arrow-up-right text-green"></i>1851<small
																			class="text-green">+9.555</small></span></p>
															</li>
															<li>
																<p>Cobham PLC<span><i class="bi bi-arrow-down-right text-red"></i>364<small
																			class="text-red">-8.432</small></span></p>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-12 col-12">
												<div class="card-border m-0 h-100">
													<div class="monthly-stats">
														<h5>Monthly</h5>
														<div class="avg-block">
															<h4 class="avg-total text-red">$14,300</h4>
															<h6 class="avg-label">Direct</h6>
														</div>
														<div class="avg-block">
															<h4 class="avg-total text-green">$35,700</h4>
															<h6 class="avg-label">Online</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Chart with Alert</div>
									</div>
									<div class="card-body">
										<span class="chart-notify tr">
											<a href="#" class="shade-red" data-bs-toggle="tooltip" data-bs-placement="left"
												title="7 Orders Pending">
												<i class="bi bi-exclamation-triangle"></i>
											</a>
										</span>
										<div id="graph1"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Chart with Buttons</div>
									</div>
									<div class="card-body">
										<div class="d-flex justify-content-end">
											<div class="btn-group" role="group" aria-label="Basic outlined example">
												<button type="button" class="btn btn-outline-dark">Month</button>
												<button type="button" class="btn btn-outline-dark">Week</button>
												<button type="button" class="btn btn-outline-dark">Today</button>
											</div>
										</div>
										<div id="graph2"></div>
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Chart with Buttons</div>
									</div>
									<div class="card-body">
										<div class="d-flex justify-content-end">
											<div class="btn-group" role="group" aria-label="Basic outlined example">
												<button type="button" class="btn btn-outline-dark">
													<i class="bi bi-cloud-download"></i>
												</button>
												<button type="button" class="btn btn-outline-dark">
													<i class="bi bi-printer"></i>
												</button>
											</div>
										</div>
										<div id="graph3"></div>
									</div>
								</div>
							</div>
							<div class="col-12">

								<div class="card">
									<div class="card-header">
										<div class="card-title">Compare</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xxl-2 col-lg-3 col-sm-12 col-12">
												<div class="card-border m-0 h-100">
													<div class="monthly-stats">
														<h5>Weekly</h5>
														<div class="avg-block">
															<h4 class="avg-total text-blue">9,500</h4>
															<h6 class="avg-label">Claimed</h6>
														</div>
														<div class="avg-block">
															<h4 class="avg-total text-red">$7,200</h4>
															<h6 class="avg-label">Expired</h6>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-8 col-lg-6 col-sm-12 col-12">
												<div id="graph4"></div>
											</div>
											<div class="col-xxl-2 col-lg-3 col-sm-12 col-12">
												<div class="card-border m-0 h-100">
													<div class="monthly-stats">
														<h5>Monthly</h5>
														<div class="avg-block">
															<h4 class="avg-total text-blue">32,100</h4>
															<h6 class="avg-label">Claimed</h6>
														</div>
														<div class="avg-block">
															<h4 class="avg-total text-red">$48,700</h4>
															<h6 class="avg-label">Expired</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">

								<div class="card">
									<div class="card-header">
										<div class="card-title">Compare</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xxl-2 col-lg-3 col-sm-12 col-12">
												<div class="card-border m-0 h-100">
													<div class="monthly-stats">
														<h5>Africa</h5>
														<div class="avg-block">
															<h4 class="avg-total text-red">27M</h4>
															<h6 class="avg-label">Visitors</h6>
														</div>
														<div class="avg-block">
															<h4 class="avg-total text-green">$56B</h4>
															<h6 class="avg-label">Sales</h6>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-8 col-lg-6 col-sm-12 col-12">
												<!-- Row start -->
												<div class="row align-items-center">
													<div class="col-sm-5 col-12">
														<div id="mapAfrica" class="chart-height-xl"></div>
													</div>
													<div class="col-sm-2 col-12">
														<div class="vs"></div>
													</div>
													<div class="col-sm-5 col-12">
														<div id="mapEurope" class="chart-height-xl"></div>
													</div>
												</div>
												<!-- Row end -->
											</div>
											<div class="col-xxl-2 col-lg-3 col-sm-12 col-12">
												<div class="card-border m-0 h-100">
													<div class="monthly-stats">
														<h5>Europe</h5>
														<div class="avg-block">
															<h4 class="avg-total text-red">42M</h4>
															<h6 class="avg-label">Visitors</h6>
														</div>
														<div class="avg-block">
															<h4 class="avg-total text-green">$98B</h4>
															<h6 class="avg-label">Sales</h6>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div id="graph6"></div>
										<!-- Row start -->
										<div class="row">
											<div class="col-sm-6 col-6">
												<div class="info-stats">
													<h5>Claimed</h5>
													<h3 class="text-blue">3200</h3>
												</div>
											</div>
											<div class="col-sm-6 col-6">
												<div class="info-stats">
													<h5>Expired</h5>
													<h3 class="text-red">1500</h3>
												</div>
											</div>
										</div>
										<!-- Row end -->
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<div id="graph7"></div>
										<div class="num-stats mb-3">
											<h2>7520</h2>
											<h6 class="text-truncate">12% higher than last month.</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<!-- Row start -->
										<div class="row">
											<div class="col-sm-6 col-12">
												<div class="stats-tile2-container">
													<div class="stats-tile2">
														<div class="sale-icon">
															<i class="bi bi-person text-blue"></i>
														</div>
														<div class="sale-details">
															<h5>Current Customers</h5>
															<p class="growth">Active 74%</p>
														</div>
													</div>
													<div class="stats-tile2">
														<div class="sale-icon">
															<i class="bi bi-person-check text-green"></i>
														</div>
														<div class="sale-details">
															<h5>New Customers</h5>
															<p class="growth">Increased 21%</p>
														</div>
													</div>
													<div class="stats-tile2">
														<div class="sale-icon">
															<i class="bi bi-person-plus text-red"></i>
														</div>
														<div class="sale-details">
															<h5>Targeted Customers</h5>
															<p class="growth ">Increased 38%</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-12">
												<div id="graph8"></div>
											</div>
										</div>
										<!-- Row end -->
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Logs</div>
									</div>
									<div class="card-body">
										<div class="scroll300">
											<div class="logs">
												<div class="log-list">
													<div class="log-dot"></div>
													<div class="log-title">New item sold</div>
													<div class="log-time">10:10</div>
												</div>
												<div class="log-list">
													<div class="log-dot yellow"></div>
													<div class="log-title">Notification from bank</div>
													<div class="log-time">05:25</div>
												</div>
												<div class="log-list">
													<div class="log-dot"></div>
													<div class="log-title">Transaction success alert</div>
													<div class="log-time">09:45</div>
												</div>
												<div class="log-list">
													<div class="log-dot red"></div>
													<div class="log-title">Your item has been updated</div>
													<div class="log-time">06:50</div>
												</div>
												<div class="log-list">
													<div class="log-dot green"></div>
													<div class="log-title">New order</div>
													<div class="log-time">12:30</div>
												</div>
												<div class="log-list">
													<div class="log-dot yellow"></div>
													<div class="log-title">Item bought</div>
													<div class="log-time">04:22</div>
												</div>
												<div class="log-list">
													<div class="log-dot"></div>
													<div class="log-title">New sale: Messi Wills</div>
													<div class="log-time">10:10</div>
												</div>
												<div class="log-list">
													<div class="log-dot red"></div>
													<div class="log-title">Order received</div>
													<div class="log-time">12:55</div>
												</div>
												<div class="log-list">
													<div class="log-dot green"></div>
													<div class="log-title">Service information</div>
													<div class="log-time">09:12</div>
												</div>
												<div class="log-list">
													<div class="log-dot"></div>
													<div class="log-title">Message from Wilson</div>
													<div class="log-time">09:27</div>
												</div>
												<div class="log-list">
													<div class="log-dot red"></div>
													<div class="log-title">New item sale: Joy Root</div>
													<div class="log-time">02:39</div>
												</div>
												<div class="log-list">
													<div class="log-dot"></div>
													<div class="log-title">Product update</div>
													<div class="log-time">08:22</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Keywords</div>
									</div>
									<div class="card-body">
										<div id="tagscloud">
											<a href="reports.html" class="tagc1">Analytics</a>
											<a href="reports.html" class="tagc2">Tasks</a>
											<a href="index.html" class="tagc3">Sales</a>
											<a href="#" class="tagc4">Bootstrap</a>
											<a href="#" class="tagc1">Scss</a>
											<a href="#" class="tagc2">Bootstrap</a>
											<a href="index.html" class="tagc3">Admin</a>
											<a href="index.html" class="tagc4">Dashboard</a>
											<a href="#" class="tagc1">Creative</a>
											<a href="#" class="tagc2">Rising Stars</a>
											<a href="reports.html" class="tagc3">BS Admin</a>
											<a href="#" class="tagc4">Top Rated</a>
											<a href="#" class="tagc1">Admin</a>
											<a href="#" class="tagc2">Creative</a>
											<a href="#" class="tagc3">Best Selling</a>
											<a href="#" class="tagc4">Awesome</a>
											<a href="#" class="tagc1">jQuery</a>
											<a href="#" class="tagc2">Hot Under $19</a>
											<a href="reports.html" class="tagc3">High</a>
											<a href="#" class="tagc4">Low Price</a>
											<a href="#" class="tagc1">Top Selling</a>
											<a href="index.html" class="tagc2">Best Admin</a>
											<a href="#" class="tagc3">Popular</a>
											<a href="#" class="tagc1">Best Sellers</a>
											<a href="index.html" class="tagc2">eCommerce</a>
											<a href="reports.html" class="tagc3">Analytics</a>
											<a href="#" class="tagc4">Rising Stars</a>
											<a href="tasks.html" class="tagc1">Crm</a>
											<a href="#" class="tagc2">Sass</a>
											<a href="#" class="tagc3">Template Monster</a>
											<a href="index.html" class="tagc4">Dashboard</a>
											<a href="#" class="tagc1">Admin</a>
											<a href="reports.html" class="tagc2">Creative</a>
											<a href="#" class="tagc3">Template Monster</a>
											<a href="#" class="tagc4">Theme</a>
											<a href="#" class="tagc1">Dashboard</a>
											<a href="#" class="tagc2">Rising stars</a>
											<a href="#" class="tagc3">Template</a>
											<a href="index.html" class="tagc4">Top Rated</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Earnings</div>
									</div>
									<div class="card-body">
										<!-- Row start -->
										<div class="row">
											<div class="col-xxl-8 col-sm-8 col-12">
												<div id="world-map-markers2" class="chart-height-xl"></div>
											</div>
											<div class="col-sm-4 col-12">
												<div class="global-sales">
													<h3><i class="bi bi-globe icon"></i>$2,75,000 <i class="bi bi-arrow-up-right text-green"></i>
													</h3>
													<p>This dashboard unquestionably the largest visitors in the world
														with TWO million monthly active users and ONE million daily
														active.</p>
												</div>
											</div>
										</div>
										<!-- Row end -->
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
