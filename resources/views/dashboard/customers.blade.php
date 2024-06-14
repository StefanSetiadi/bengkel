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
														<th>Country</th>
														<th>Customer</th>
														<th>Contact</th>
														<th>Status</th>
														<th>Orders</th>
														<th>Last Order</th>
														<th>Amount</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<img src="assets/images/flags/4x3/ca.svg" class="flag-img-lg"
																alt="Best Admin Dashboards" />
															Canada
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
														<td>2022/01/25</td>
														<td>$32800</td>
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
													<tr>
														<td>
															<img src="assets/images/flags/1x1/jp.svg" class="flag-img-lg" alt="Clean Dashboards" />
															Japan
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user5.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Cedric Kelly</div>
																	<p>ID: #Arise00582</p>
																</div>
															</div>
														</td>
														<td>009-543-77650</td>
														<td>
															<span class="badge shade-green min-70">Active</span>
														</td>
														<td>34</td>
														<td>2022/01/22</td>
														<td>$65890</td>
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
													<tr>
														<td>
															<img src="assets/images/flags/1x1/us.svg" class="flag-img-lg" alt="Clean Dashboards" />
															United States
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Tiya Davidson</div>
																	<p>ID: #Arise00554</p>
																</div>
															</div>
														</td>
														<td>067-676-98320</td>
														<td>
															<span class="badge shade-green min-70">Active</span>
														</td>
														<td>21</td>
														<td>2022/01/10</td>
														<td>$25678</td>
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
													<tr>
														<td>
															<img src="assets/images/flags/1x1/tr.svg" class="flag-img-lg" alt="Modern Dashboards" />
															Turkey
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user4.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Zozi Williams</div>
																	<p>ID: #Arise00831</p>
																</div>
															</div>
														</td>
														<td>002-434-66659</td>
														<td>
															<span class="badge shade-green min-70">Active</span>
														</td>
														<td>55</td>
														<td>2022/01/21</td>
														<td>$24571</td>
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
													<tr>
														<td>
															<img src="assets/images/flags/1x1/in.svg" class="flag-img-lg" alt="Google Dashboards" />
															India
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user3.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Karan Kumar</div>
																	<p>ID: #Arise00987</p>
																</div>
															</div>
														</td>
														<td>030-998-03437</td>
														<td>
															<span class="badge shade-green min-70">Active</span>
														</td>
														<td>61</td>
														<td>2021/09/18</td>
														<td>$12309</td>
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
													<tr>
														<td>
															<img src="assets/images/flags/1x1/br.svg" class="flag-img-lg" alt="Admin Panels" />
															Brazil
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user6.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Lilly Desmet</div>
																	<p>ID: #Arise00987</p>
																</div>
															</div>
														</td>
														<td>030-998-03437</td>
														<td>
															<span class="badge shade-red min-70">Blocked</span>
														</td>
														<td>61</td>
														<td>2021/09/18</td>
														<td>$12309</td>
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
													<tr>
														<td>
															<img src="assets/images/flags/1x1/it.svg" class="flag-img-lg" alt="Google Dashboards" />
															Italy
														</td>
														<td>
															<div class="media-box">
																<img src="assets/images/user7.png" class="media-avatar" alt="Bootstrap Themes" />
																<div class="media-box-body">
																	<div class="text-truncate">Tiya Nixon</div>
																	<p>ID: #Arise00987</p>
																</div>
															</div>
														</td>
														<td>030-998-03437</td>
														<td>
															<span class="badge shade-red min-70">Blocked</span>
														</td>
														<td>61</td>
														<td>2021/09/18</td>
														<td>$12309</td>
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
