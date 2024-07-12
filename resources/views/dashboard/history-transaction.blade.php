@extends('dashboard.component.main')

@section('breadcrumb','History Transaction')

@section('content')
<div class="content-wrapper">

	<!-- Row start -->
	<div class="row">
		<div class="col-sm-12 col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">History Transaction</div>
				</div>
				<div class="card-body">

					<div class="table-responsive">
						<table class="table v-middle m-0">
							<thead>
								<tr>
									<th>No</th>
									<th>Image</th>
									<th>Name</th>
									<th>Quantity Sold</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								@if ($spareparts->isEmpty())
								<td align="center" colspan="5">No transaction data found</td>
								@else
								@foreach ($spareparts as $index => $sparepart)
								<tr>
									<td width=100>{{ $index + 1}}</td>
									<td width=100><div>
											<img src="{{ $sparepart->image }}" class="media-avatar" style="height: 80px; display: block; margin: 0 auto;">
											<div class="media-box-body">
												<div class="text-truncate"></div>
											</div>
										</div>
									</td>
									<td width=450>{{ $sparepart->nama }}</td>
									<td width=150>{{ $sparepart->jumlah }}</td>
									@php
										$datetime = $sparepart->waktu;
										$date = \Carbon\Carbon::parse($datetime)->format('Y-m-d');
									@endphp
									<td width=150>{{ $date }}</td>
								</tr>
								@endforeach
								@endif
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-12 text-center" >
				<!-- toolbar start -->
				{{$spareparts->links()}}
				<div class="toolbar-bottom">
				</div>
				<!-- toolbar end -->
			</div>
		</div>
	</div>
	<!-- Row end -->
</div>
@endsection
