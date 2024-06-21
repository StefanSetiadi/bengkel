@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Items Added</div>
										<div class="ml-auto">
											<a href="products.html" class="btn btn-dark">Back to Products</a>
										</div>
									</div>
									<div class="card-body">

										<!-- Row start -->
										<div class="row">
											<div class="col-xxl-6 col-sm-12 col-12">
												<div class="product-added-card">
													<img class="product-added-img" src="assets/images/food/img7.jpg" alt="Admin Panel">
													<div class="product-added-card-body">
														<h5 class="product-added-title">Barbecue Chicken Salad</h5>
														<div class="product-added-price">$25.00</div>
														<div class="product-added-description">
															Lettuce, cucumbers, tomatoes, scallions, corn, chicken with tangy barbecue ranch dressing.
														</div>
														<div class="product-added-actions">
															<button class="btn btn-light remove-from-cart">Remove from Cart</button>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-6 col-sm-12 col-12">
												<div class="product-added-card">
													<img class="product-added-img" src="assets/images/food/img9.jpg" alt="Admin Panel">
													<div class="product-added-card-body">
														<h5 class="product-added-title">Harvest Cobb Salad</h5>
														<div class="product-added-price">$15.00</div>
														<div class="product-added-description">
															Lettuce, cucumbers, tomatoes, scallions, corn, chicken with tangy barbecue ranch dressing.
														</div>
														<div class="product-added-actions">
															<button class="btn btn-light remove-from-cart">Remove from Cart</button>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-6 col-sm-12 col-12">
												<div class="product-added-card">
													<img class="product-added-img" src="assets/images/food/img2.jpg" alt="Admin Panel">
													<div class="product-added-card-body">
														<h5 class="product-added-title">Greek Salad</h5>
														<div class="product-added-price">$28.00</div>
														<div class="product-added-description">
															Lettuce, cucumbers, tomatoes, chicken with tangy barbecue ranch dressing.
														</div>
														<div class="product-added-actions">
															<button class="btn btn-light remove-from-cart">Remove from Cart</button>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-6 col-sm-12 col-12">
												<div class="product-added-card">
													<img class="product-added-img" src="assets/images/food/img6.jpg" alt="Admin Panel">
													<div class="product-added-card-body">
														<h5 class="product-added-title">Garden Chickpea Salad</h5>
														<div class="product-added-price">$22.00</div>
														<div class="product-added-description">
															Perfect for vegetarian and buffets, this is a job of gorgeous ingredients.
														</div>
														<div class="product-added-actions">
															<button class="btn btn-light remove-from-cart">Remove from Cart</button>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12">
												<div class="sub-total-container">
													<div class="total">Order Total: $90.00</div>
													<a href="checkout.html" class="btn btn-success btn-lg">Checkout</a>
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
