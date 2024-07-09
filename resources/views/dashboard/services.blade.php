@extends('dashboard.component.main')

@section('breadcrumb','Services')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Services</div>
									</div>
									<div class="card-body">

										<div class="table-responsive">
											<table class="table v-middle m-0">
												<thead>
													<tr>
														<th>No</th>
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
														<td width=100>{{ $index + 1}}</td>
														<td width=150>{{ $booking->no_kendaraan }}</td>
														<td width=450>{{ $booking->deskripsi }}</td>
														@php
															$datetime = $booking->waktu;
															$date = \Carbon\Carbon::parse($datetime)->format('Y-m-d');
															$time = \Carbon\Carbon::parse($datetime)->format('H:i:s');
														@endphp
														<td width=150>{{ $date }}</td>
														<td width=150>{{ $time }}</td>
														<td>
														<a href="" class="btn btn-success">Add Spareparts</a>
														<a href="" class="btn btn-warning">Create Payment</a>
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
