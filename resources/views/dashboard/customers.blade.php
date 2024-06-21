@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Customers</div>
									</div>
									<div class="card-body">

										<div class="table-responsive">
											<table class="table v-middle m-0">
												<thead>
													<tr>
														<th>NO</th>
														<th>Profile</th>
														<th>Name</th>
														<th>Contact</th>
														<th>Email</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															1
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user2.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Dolly Winters</div>
																	<p>ID: #Arise00763</p>
																</div>
															</div>
														</td>
														<td>067-676-98320</td>
														<td>
															<span class="badge shade-green min-70">Active</span>
														</td>
														<td>87</td>
														<td>
															<div class="actions">
																<a href="#" class="viewRow" data-bs-toggle="modal" data-bs-target="#viewRow">
																	<i class="bi bi-list text-green"></i>
																</a>
																<a href="#" class="deleteRow">
																	<i class="bi bi-trash text-red"></i>
																</a>
															</div>
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
