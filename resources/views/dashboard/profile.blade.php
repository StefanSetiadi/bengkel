@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-sm-12 col-12">

								<div class="profile-header">
									<h1>Welcome, Abigail</h1>
									<div class="profile-header-content">
										<div class="profile-header-tiles">
											<div class="row gutters">
												<div class="col-sm-4 col-12">
													<div class="profile-tile">
														<span class="icon">
															<i class="bi bi-pentagon"></i>
														</span>
														<h6>Name - <span>Abigail Heaney</span></h6>
													</div>
												</div>
												<div class="col-sm-4 col-12">
													<div class="profile-tile">
														<span class="icon">
															<i class="bi bi-pin-angle"></i>
														</span>
														<h6>Location - <span>Canada</span></h6>
													</div>
												</div>
												<div class="col-sm-4 col-12">
													<div class="profile-tile">
														<span class="icon">
															<i class="bi bi-telephone"></i>
														</span>
														<h6>Phone - <span>1234567890</span></h6>
													</div>
												</div>
											</div>
										</div>
										<div class="profile-avatar-tile">
											<img src="assets/images/user.png" class="img-fluid" alt="Bootstrap Gallery" />
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-lg-8 col-sm-12 col-12">
								<!-- Row start -->
								<div class="row gutters">
									<div class="col-sm-12 col-12">
										<!-- Card start -->
										<div class="card">
											<div class="card-header">
												<div class="card-title">Share your thoughts</div>
											</div>
											<div class="card-body">
												<div class="create-offer-container">
													<textarea class="form-control" rows="3">Hello,</textarea>
													<div class="share-thoughts-footer">
														<div class="share-icons">
															<a href="#">
																<i class="bi bi-pin-map"></i>
															</a>
															<a href="#">
																<i class="bi bi-link-45deg"></i>
															</a>
															<a href="#">
																<i class="bi bi-camera"></i>
															</a>
															<a href="#">
																<i class="bi bi-check-circle"></i>
															</a>
														</div>
														<button class="btn btn-info btn-sm">Post</button>
													</div>
												</div>
											</div>
										</div>
										<!-- Card end -->
									</div>
									<div class="col-sm-6 col-12">
										<!-- Card start -->
										<div class="card h-320">
											<div class="card-header">
												<div class="card-title">Earnings</div>
											</div>
											<div class="card-body">
												<div id="visitorsGraph"></div>
											</div>
										</div>
										<!-- Card end -->
									</div>
									<div class="col-sm-6 col-12">
										<!-- Card start -->
										<div class="card h-320">
											<div class="card-header">
												<div class="card-title">Reviews</div>
											</div>
											<div class="card-body">
												<div class="top-items-container">
													<div id="topRatedItems" class="carousel carousel-fade slide" data-bs-ride="carousel">
														<div class="carousel-inner">
															<div class="carousel-item active">
																<img src="assets/images/food/img6.jpg" class="img-fluid top-item-img"
																	alt="Best Admin Dashboards">
																<div class="top-item-details">
																	<h6>Fatasa</h6>
																	<div class="rating-block">
																		<div class="rate2"></div>
																		<div class="rating-count">(97)</div>
																	</div>
																</div>
															</div>
															<div class="carousel-item">
																<img src="assets/images/food/img7.jpg" class="img-fluid top-item-img"
																	alt="Best Admin Dashboards">
																<div class="top-item-details">
																	<h6>Burger Fries</h6>
																	<div class="rating-block">
																		<div class="rate4"></div>
																		<div class="rating-count">(25)</div>
																	</div>
																</div>
															</div>
															<div class="carousel-item">
																<img src="assets/images/food/img2.jpg" class="img-fluid top-item-img"
																	alt="Best Admin Dashboards">
																<div class="top-item-details">
																	<h6>Chicken Crispy</h6>
																	<div class="rating-block">
																		<div class="rate3"></div>
																		<div class="rating-count">(43)</div>
																	</div>
																</div>
															</div>
														</div>
														<a class="carousel-control-prev" href="#topRatedItems" role="button" data-bs-slide="prev">
															<span class="carousel-control-prev-icon" aria-hidden="true"></span>
														</a>
														<a class="carousel-control-next" href="#topRatedItems" role="button" data-bs-slide="next">
															<span class="carousel-control-next-icon" aria-hidden="true"></span>
														</a>
													</div>
												</div>
											</div>
										</div>
										<!-- Card end -->
									</div>
									<div class="col-sm-12 col-12">
										<!-- Card start -->
										<div class="card">
											<div class="card-header">
												<div class="card-title">Activity</div>
											</div>
											<div class="card-body">
												<div class="scroll300">
													<div class="timeline-activity">
														<div class="activity-log">
															<p class="log-name">Corey Haggard<small class="log-time">- 9
																	mins ago</small></p>
															<div class="log-details">University dashboard has been
																created<span class="text-success ml-1"> #New</span>
															</div>
														</div>
														<div class="activity-log">
															<p class="log-name">Gleb Kuznetsov<small class="log-time">-
																	4 hrs ago</small></p>
															<div class="log-details">
																Farewell day photos uploaded.
																<div class="stacked-images mt-1">
																	<img class="sm" src="assets/images/user6.png" alt="Admin Dashboards">
																	<img class="sm" src="assets/images/user2.png" alt="Admin Dashboards">
																	<img class="sm" src="assets/images/user3.png" alt="Admin Dashboards">
																	<img class="sm" src="assets/images/user7.png" alt="Admin Dashboards">
																	<span class="plus sm">+5</span>
																</div>
															</div>
														</div>
														<div class="activity-log">
															<p class="log-name">Emily Russell<small class="log-time">- 7
																	hrs ago</small></p>
															<div class="log-details">Developed 30 multipurpose Bootstrap
																4 Admin Templates</div>
														</div>
														<div class="activity-log">
															<p class="log-name">Nathan James<small class="log-time">- 9
																	hrs ago</small></p>
															<div class="log-details">Best Design Award</div>
														</div>
														<div class="activity-log">
															<p class="log-name">Gleb Kuznetsov<small class="log-time">-
																	4 hrs ago</small></p>
															<div class="log-details">
																Farewell day photos uploaded.
																<div class="stacked-images mt-1">
																	<img class="sm" src="assets/images/user5.png" alt="Admin Dashboards">
																	<img class="sm" src="assets/images/user.png" alt="Admin Dashboards">
																	<span class="plus sm">+7</span>
																</div>
															</div>
														</div>
														<div class="activity-log">
															<p class="log-name">Emily Russell<small class="log-time">- 3
																	hrs ago</small></p>
															<div class="log-details">Developed 30 multipurpose Bootstrap
																4 Admin Templates</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Card end -->
									</div>
									<div class="col-sm-12 col-12">
										<div class="card">
											<div class="card-header">
												<div class="card-title">Reviews</div>
											</div>
											<div class="card-body">
												<ul class="customer-rating">
													<li class="clearfix">
														<div class="customer">
															<img src="assets/images/user2.png" alt="Admin Panel">
														</div>
														<div class="customer-review">
															<div class="stars" id="rate2"></div>
															<h5>Best Quality Template</h5>
															<h6 class="by">By, <a href="#">Hayasa Galleher</a></h6>
															<p>Wow! Amazing work. Lot of features, components and
																creative layouts. SAAS dashoard looks awesome.</p>
														</div>
													</li>
													<li class="clearfix">
														<div class="customer">
															<img src="assets/images/user3.png" alt="Admin Panel">
														</div>
														<div class="customer-review">
															<div class="stars" id="rate3"></div>
															<h5>Great Admin Template</h5>
															<h6 class="by">By, <a href="#">Sayera Lee</a></h6>
															<p>Great admin theme, was impressed by the level of details
																in the design and on the number of components it offers
																compared to any other admin theme.</p>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Row end -->
							</div>
							<div class="col-lg-4 col-sm-12 col-12">
								<!-- Row start -->
								<div class="row gutters">
									<div class="col-sm-6 col-12">
										<!-- Card start -->
										<div class="award-tile shade-green">
											<div class="award-icon">
												<i class="bi bi-receipt"></i>
											</div>
											<h3>2</h3>
											<h4>Certifications</h4>
										</div>
										<!-- Card end -->
									</div>
									<div class="col-sm-6 col-12">
										<!-- Card start -->
										<div class="award-tile shade-blue">
											<div class="award-icon">
												<i class="bi bi-gem"></i>
											</div>
											<h3>7</h3>
											<h4>Awards</h4>
										</div>
										<!-- Card end -->
									</div>
									<div class="col-sm-12 col-12">
										<!-- Card start -->
										<div class="card">
											<div class="card-header">
												<div class="card-title">Polls</div>
											</div>
											<div class="card-body">
												<div class="polls-container">
													<p>Whats your favorite programming language?</p>
													<div class="poll-block">
														<div class="poll-block-header">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
																	value="option1">
																<label class="form-check-label" for="inlineRadio1">Angular</label>
															</div>
															<div class="score">180 votes</div>
														</div>
														<div class="progress">
															<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
																aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
														</div>
													</div>
													<div class="poll-block m-0">
														<div class="poll-block-header">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
																	value="option2">
																<label class="form-check-label" for="inlineRadio2">React</label>
															</div>
															<div class="score">125 votes</div>
														</div>
														<div class="progress">
															<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
																role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
																style="width: 45%"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Card end -->
									</div>
									<div class="col-sm-12 col-12">
										<!-- Card start -->
										<div class="card">
											<div class="card-header">
												<div class="card-title">Orders History</div>
											</div>
											<div class="card-body">
												<div class="scroll370">
													<ul class="recent-orders">
														<li>
															<div class="order-img">
																<img src="assets/images/food/img5.jpg" alt="Bootstrap Gallery">
																<span class="badge bg-primary">Delivered</span>
															</div>
															<div class="order-details">
																<h5 class="order-title">Cake</h5>
																<p class="order-desc">Wedding cake with macarons.</p>
																<span class="order-date">21 mins ago</span>
															</div>
														</li>
														<li>
															<div class="order-img">
																<img src="assets/images/food/img2.jpg" alt="Bootstrap Gallery">
																<span class="badge bg-warning">Processing</span>
															</div>
															<div class="order-details">
																<h5 class="order-title">Pasta</h5>
																<p class="order-desc">Cheese pasta with berries</p>
																<span class="order-date">10 mins ago</span>
															</div>
														</li>
														<li>
															<div class="order-img">
																<img src="assets/images/food/img6.jpg" alt="Bootstrap Gallery">
																<span class="badge bg-danger">On Hold</span>
															</div>
															<div class="order-details">
																<h5 class="order-title">Stacker</h5>
																<p class="order-desc">Creamy stacker with pie</p>
																<span class="order-date">32 mins ago</span>
															</div>
														</li>
														<li>
															<div class="order-img">
																<img src="assets/images/food/img4.jpg" alt="Bootstrap Gallery">
																<span class="badge bg-primary">Delivered</span>
															</div>
															<div class="order-details">
																<h5 class="order-title">Spaghetti</h5>
																<p class="order-desc">Cheese spaghetti with almonds</p>
																<span class="order-date">17 mins ago</span>
															</div>
														</li>
														<li>
															<div class="order-img">
																<img src="assets/images/food/img7.jpg" alt="Bootstrap Gallery">
																<span class="badge bg-danger">On Hold</span>
															</div>
															<div class="order-details">
																<h5 class="order-title">Barbeque</h5>
																<p class="order-desc">Guilt Free BBQ chicken</p>
																<span class="order-date">12 mins ago</span>
															</div>
														</li>
														<li>
															<div class="order-img">
																<img src="assets/images/food/img3.jpg" alt="Bootstrap Gallery">
																<span class="badge bg-warning">Processing</span>
															</div>
															<div class="order-details">
																<h5 class="order-title">Pecan</h5>
																<p class="order-desc">Homemade pecan with olives</p>
																<span class="order-date">15 mins ago</span>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!-- Card end -->
									</div>
									<div class="col-sm-12 col-12">
										<!-- Card start -->
										<div class="card">
											<div class="card-header">
												<div class="card-title">Chat</div>
											</div>
											<div class="card-body">
												<div class="scroll300">
													<ul class="chats">
														<li class="chats-left">
															<div class="chats-avatar">
																<img src="assets/images/user.png" alt="Admin Panel">
																<div class="chats-name">Alisa</div>
															</div>
															<div class="chats-text">Explore the history of the classic
																Lorem Ipsum passage and generate.</div>
															<div class="chats-hour">08:55 <span class="icon-done_all"></span></div>
														</li>
														<li class="chats-right">
															<div class="chats-avatar">
																<img src="assets/images/user6.png" alt="Admin Panel">
																<div class="chats-name">You</div>
															</div>
															<div class="chats-text">Your own text using any number of
																characters, words, sentences or paragraphs.</div>
															<div class="chats-hour">08:56 <span class="icon-done_all"></span></div>
														</li>
														<li class="chats-left">
															<div class="chats-avatar">
																<img src="assets/images/user.png" alt="Admin Panel">
																<div class="chats-name">Alisa</div>
															</div>
															<div class="chats-text">Commonly used as placeholder text in
																the graphic and print industries.</div>
															<div class="chats-hour">08:57 <span class="icon-done_all"></span></div>
														</li>
														<li class="chats-right">
															<div class="chats-avatar">
																<img src="assets/images/user6.png" alt="Admin Panel">
																<div class="chats-name">You</div>
															</div>
															<div class="chats-text">Lorem Ipsum's origins extend far
																back to a scrambled Latin passage from Cicero in the
																middle ages.</div>
															<div class="chats-hour">08:59 <span class="icon-done_all"></span></div>
														</li>
														<li class="chats-left">
															<div class="chats-avatar">
																<img src="assets/images/user.png" alt="Admin Panel">
																<div class="chats-name">Alisa</div>
															</div>
															<div class="chats-text">In publishing and graphic design,
																lorem ipsum is a filler text or greeking commonly used
																to demonstrate the textual elements.</div>
															<div class="chats-hour">09:00 <span class="icon-done_all"></span></div>
														</li>
														<li class="chats-right">
															<div class="chats-avatar">
																<img src="assets/images/user6.png" alt="Admin Panel">
																<div class="chats-name">You</div>
															</div>
															<div class="chats-text">A graphic document or visual
																presentation. Replacing meaningful content with
																placeholder text allows designers to design the form of
																the content before the content itself has been produced.
															</div>
															<div class="chats-hour">09:00 <span class="icon-done_all"></span></div>
														</li>
														<li class="chats-left">
															<div class="chats-avatar">
																<img src="assets/images/user.png" alt="Admin Panel">
																<div class="chats-name">Alisa</div>
															</div>
															<div class="chats-text">Lorem Ipsum is also known as:
																Greeked text, blind text, placeholder text, dummy
																content, filler text, lipsum, and mock-content.</div>
															<div class="chats-hour">09:01 <span class="icon-done_all"></span></div>
														</li>
														<li class="chats-right">
															<div class="chats-avatar">
																<img src="assets/images/user6.png" alt="Admin Panel">
																<div class="chats-name">You</div>
															</div>
															<div class="chats-text">Lorem ipsum has become the industry
																standard for design mockups and prototypes. By adding a
																little bit of Latin to a mockup.</div>
															<div class="chats-hour">09:01 <span class="icon-done_all"></span></div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!-- Card end -->
									</div>
								</div>
								<!-- Row end -->
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
