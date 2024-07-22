@extends('dashboard.component.main')

@section('breadcrumb','Daftar Pemesanan')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Daftar Pesanan</div>
									</div>
									<div class="card-body">

										<div class="table-responsive">
											<table class="table v-middle m-0">
												<thead>
													<tr>
														<th>No</th>
														<th>Plat Nomor</th>
														<th>Deskripsi</th>
														<th>Tanggal</th>
														<th>Jam</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													@if ($bookings->isEmpty())
													<td align="center" colspan="5">Belum ada pesanan hingga saat ini.</td>
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
														@if ($booking->status_booking == 'waiting')
														<div class="actions">
															<form action="{{ route('rejectBooking') }}" method="post" id="rejectBookingForm">
																@csrf
																<input name="id_booking" value="{{ $booking->id_booking }}" hidden>
																<a href="#" onclick="document.getElementById('rejectBookingForm').submit(); return false;" type="submit" class="deleteRow">
																	<i class="bi bi-x text-red"></i>
																</a>
															</form>
															<form action="{{ route('acceptBooking') }}" method="post" id="acceptBookingForm">
																@csrf
																<input name="id_booking" value="{{ $booking->id_booking }}" hidden>
																<a onclick="document.getElementById('acceptBookingForm').submit(); return false;" type="submit" class="viewRow" data-bs-toggle="modal" data-bs-target="#viewRow">
																	<i class="bi bi-check text-green"></i>
																</a>
															</form>
														</div>
														@elseif($booking->status_booking == 'accepted')
														<form action="{{ route('createBill') }}" method="post">
															@csrf
															<input name="id_booking" value="{{ $booking->id_booking }}" hidden>
															<input name="no_kendaraan" value="{{ $booking->no_kendaraan }}" hidden>
															<button type="submit" class="btn btn-primary">
																Buat Tagihan
															</button>
														</form>
														@else
														<div class="actions">
															<a class="deleteRow">
																<i class="bi bi-x text-red"></i>
															</a>
														</div>
														@endif														
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
