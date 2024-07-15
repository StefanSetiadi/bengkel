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
														<th>Spare parts cost</th>
														<th>Service Fee</th>
														<th>Total</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													@if ($services->isEmpty())
													<td align="center" colspan="5">No booking data found</td>
													@else
													@foreach ($services as $index => $service)
													<tr>
														<td width=100>{{ $index + 1}}</td>
														<td width=150>{{ $service->no_kendaraan }}</td>
														<td width=150>Rp. {{ number_format($service->biaya_sparepart, 0, ',', '.') }}</td>
														<form action="{{ route('setServiceFee') }}" method="post">
															@csrf
															<td>
															<input name="id_service" value="{{ $service->id_service }}" hidden>
															<input type="text" name="biaya_jasa" value="{{ $service->biaya_jasa }}">
															<button type="submit" class="bi bi-check-lg"></button>
															</td>
														</form>
														<td width=150>Rp. {{ number_format($service->total_biaya, 0, ',', '.') }}</td>
														<td>
															<form action="{{ route('addSparepartService') }}" method="post" style="position:inline-block;">
																@csrf
																<input name="id_service" value="{{ $service->id_service }}" hidden>
																<input name="no_kendaraan" value="{{ $service->no_kendaraan }}" hidden>
																<button type="submit" class="btn btn-success">Add Spareparts</button>
															</form>
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
