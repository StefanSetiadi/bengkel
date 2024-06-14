@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title dark">Accordion</div>
									</div>
									<div class="card-body">
										<div class="accordion" id="accordionExample2">
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingOneLight">
													<button class="accordion-button" type="button" data-bs-toggle="collapse"
														data-bs-target="#collapseOneLight" aria-expanded="true"
														aria-controls="collapseOneLight">Accordion Item #1</button>
												</h2>
												<div id="collapseOneLight" class="accordion-collapse collapse show"
													aria-labelledby="headingOneLight" data-bs-parent="#accordionExample2">
													<div class="accordion-body">
														<strong>This is the first item's accordion body.</strong> It is shown by default, until the
														collapse plugin adds the appropriate classes that we use to style each element. These
														classes control the overall appearance, as well as the showing and hiding via CSS
														transitions. You can modify any of this with custom CSS or overriding our default variables.
														It's also worth noting that just about any HTML can go within the
														<code>.accordion-body</code>, though the transition does limit overflow.
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingTwoLight">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
														data-bs-target="#collapseTwoLight" aria-expanded="false"
														aria-controls="collapseTwoLight">Accordion Item #2</button>
												</h2>
												<div id="collapseTwoLight" class="accordion-collapse collapse" aria-labelledby="headingTwoLight"
													data-bs-parent="#accordionExample2">
													<div class="accordion-body">
														<strong>This is the second item's accordion body.</strong> It is hidden by default, until
														the collapse plugin adds the appropriate classes that we use to style each element. These
														classes control the overall appearance, as well as the showing and hiding via CSS
														transitions. You can modify any of this with custom CSS or overriding our default variables.
														It's also worth noting that just about any HTML can go within the
														<code>.accordion-body</code>, though the transition does limit overflow.
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingThreeLight">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
														data-bs-target="#collapseThreeLight" aria-expanded="false"
														aria-controls="collapseThreeLight">Accordion Item #3</button>
												</h2>
												<div id="collapseThreeLight" class="accordion-collapse collapse"
													aria-labelledby="headingThreeLight" data-bs-parent="#accordionExample2">
													<div class="accordion-body">
														<strong>This is the third item's accordion body.</strong> It is hidden by default, until the
														collapse plugin adds the appropriate classes that we use to style each element. These
														classes control the overall appearance, as well as the showing and hiding via CSS
														transitions. You can modify any of this with custom CSS or overriding our default variables.
														It's also worth noting that just about any HTML can go within the
														<code>.accordion-body</code>, though the transition does limit overflow.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-12">
								<div class="col-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Accordion Always Open</div>
										</div>
										<div class="card-body">
											<div class="accordion" id="accordionPanelsStayOpenExample">
												<div class="accordion-item">
													<h2 class="accordion-header" id="panelsStayOpen-headingOne">
														<button class="accordion-button" type="button" data-bs-toggle="collapse"
															data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
															aria-controls="panelsStayOpen-collapseOne">
															Accordion Item #1
														</button>
													</h2>
													<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
														aria-labelledby="panelsStayOpen-headingOne">
														<div class="accordion-body">
															<strong>This is the first item's accordion body.</strong> It is shown by default, until
															the collapse plugin adds the appropriate classes that we use to style each element. These
															classes control the overall appearance, as well as the showing and hiding via CSS
															transitions. You can modify any of this with custom CSS or overriding our default
															variables. It's also worth noting that just about any HTML can go within the
															<code>.accordion-body</code>, though the transition does limit overflow.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="panelsStayOpen-headingTwo">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
															data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
															aria-controls="panelsStayOpen-collapseTwo">
															Accordion Item #2
														</button>
													</h2>
													<div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
														aria-labelledby="panelsStayOpen-headingTwo">
														<div class="accordion-body">
															<strong>This is the second item's accordion body.</strong> It is hidden by default, until
															the collapse plugin adds the appropriate classes that we use to style each element. These
															classes control the overall appearance, as well as the showing and hiding via CSS
															transitions. You can modify any of this with custom CSS or overriding our default
															variables. It's also worth noting that just about any HTML can go within the
															<code>.accordion-body</code>, though the transition does limit overflow.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="panelsStayOpen-headingThree">
														<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
															data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
															aria-controls="panelsStayOpen-collapseThree">
															Accordion Item #3
														</button>
													</h2>
													<div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
														aria-labelledby="panelsStayOpen-headingThree">
														<div class="accordion-body">
															<strong>This is the third item's accordion body.</strong> It is hidden by default, until
															the collapse plugin adds the appropriate classes that we use to style each element. These
															classes control the overall appearance, as well as the showing and hiding via CSS
															transitions. You can modify any of this with custom CSS or overriding our default
															variables. It's also worth noting that just about any HTML can go within the
															<code>.accordion-body</code>, though the transition does limit overflow.
														</div>
													</div>
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
