@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Reviews</div>
									</div>
									<div class="card-body">

										<div class="table-responsive">
											<table class="table v-middle">
												<thead>
													<tr>
														<th>Customer</th>
														<th>Product Details</th>
														<th>Date</th>
														<th>Review</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="media-box">
																<img src="assets/images/user2.png" class="media-avatar" alt="Bootstrap Gallery">
																<div class="media-box-body">
																	<a href="#" class="text-truncate">Tiya Nixon</a>
																</div>
															</div>
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/food/img1.jpg" class="media-avatar-lg" alt="Product">
																<div class="media-box-body">
																	<a href="#" class="text-truncate">Leather Backpack</a>
																	<p>ID: #FLM00987</p>
																	<div class="rating-block">
																		<div class="rate2"></div>
																	</div>
																</div>
															</div>
														</td>
														<td>10/11/2021</td>
														<td>Great Product. Very happy with the purchase and will surely shop for more with Leather
															Villa in the time to come.</td>
													</tr>
													<tr>
														<td>
															<div class="media-box">
																<img src="assets/images/user3.png" class="media-avatar" alt="Bootstrap Gallery">
																<div class="media-box-body">
																	<a href="#" class="text-truncate">Garrett Winters</a>
																</div>
															</div>
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/food/img2.jpg" class="media-avatar-lg" alt="Product">
																<div class="media-box-body">
																	<a href="#" class="text-truncate">DSLR Camera</a>
																	<p>ID: #FLM00990</p>
																	<div class="rating-block">
																		<div class="rate1"></div>
																	</div>
																</div>
															</div>
														</td>
														<td>16/10/2021</td>
														<td>
															This camera is a perfect choice if you are a beginner. The price range is decent, the
															camera is user friendly.
														</td>
													</tr>
													<tr>
														<td>
															<div class="media-box">
																<img src="assets/images/user4.png" class="media-avatar" alt="Bootstrap Gallery">
																<div class="media-box-body">
																	<div class="text-truncate">Cedric Kelly</div>
																</div>
															</div>
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/food/img3.jpg" class="media-avatar-lg" alt="Product">
																<div class="media-box-body">
																	<div class="text-truncate">Wall Clock</div>
																	<p>ID: #FLM00324</p>
																	<div class="rating-block">
																		<div class="rate5"></div>
																	</div>
																</div>
															</div>
														</td>
														<td>24/11/2021</td>
														<td>
															Awesome Product. This is a good size for a classroom clock. We added a new room to our
															school and this clock fits our needs wonderfully.
														</td>
													</tr>
													<tr>
														<td>
															<div class="media-box">
																<img src="assets/images/user5.png" class="media-avatar" alt="Bootstrap Gallery">
																<div class="media-box-body">
																	<div class="text-truncate">Rhona Davidson</div>
																</div>
															</div>
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/food/img4.jpg" class="media-avatar-lg" alt="Product">
																<div class="media-box-body">
																	<div class="text-truncate">Drone</div>
																	<p>ID: #FLM00876</p>
																	<div class="rating-block">
																		<div class="rate3"></div>
																	</div>
																</div>
															</div>
														</td>
														<td>27/10/2021</td>
														<td>
															Five Starts. This drone literally has too many pro's to list, they call it a pro for a
															reason.
														</td>
													</tr>
													<tr>
														<td>
															<div class="media-box">
																<img src="assets/images/user6.png" class="media-avatar" alt="Bootstrap Gallery">
																<div class="media-box-body">
																	<div class="text-truncate">Quinn Flynn</div>
																</div>
															</div>
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/food/img5.jpg" class="media-avatar-lg" alt="Product">
																<div class="media-box-body">
																	<div class="text-truncate">Toy</div>
																	<p>ID: #FLM00760</p>
																	<div class="rating-block">
																		<div class="rate3"></div>
																	</div>
																</div>
															</div>
														</td>
														<td>09/11/2021</td>
														<td>
															Great product! My kids really love how many things they can build. Hours and hours of fun
															ahead with this toy. The parts are great quality and there are many things to build.
														</td>
													</tr>
												</tbody>
											</table>
										</div>

									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
