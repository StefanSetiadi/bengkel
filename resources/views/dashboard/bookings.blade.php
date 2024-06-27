@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Booking</div>
									</div>
									<div class="card-body">

										<div class="table-responsive">
											<table class="table v-middle m-0">
												<thead>
													<tr>
														<th>No</th>
														<th>ID Customers</th>
														<th>Plate Number</th>
														<th>Description</th>
														<th>Date</th>
														<th>Time</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													@if ($bookings->isEmpty())
													<td align="center" colspan="5">No booking data found</td>
													@else
													@foreach ($bookings as $index => $booking)
													<tr>
														<td>{{ $index + 1}}</td>
														<td>{{ $booking->id_customer }}</td>
														<td>{{ $booking->no_kendaraan }}</td>
														<td>{{ $booking->deskripsi }}</td>
														@php
															$datetime = $booking->waktu;
															$date = \Carbon\Carbon::parse($datetime)->format('Y-m-d');
															$time = \Carbon\Carbon::parse($datetime)->format('H:i:s');
														@endphp
														<td>{{ $date }}</td>
														<td>{{ $time }}</td>
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
													@endforeach
													@endif
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
