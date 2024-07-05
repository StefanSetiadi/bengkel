@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">
	<!-- Row start -->
	<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
			@if (Session::has('success'))
				<style>
					#alertMessage {
						transition: opacity 0.8s ease-out;
					}
				</style>
				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
				<br>
				<div id="alertMessage" class="alert alert-success" role="alert">
					{{ Session::get('success') }}
				</div>
				<script>
					setTimeout(() => {
						const alertElement = document.getElementById('alertMessage');
						alertElement.style.opacity = '0';
						setTimeout(() => alertElement.style.display = 'none', 500); // Menunggu transisi selesai
					}, 5000);
				</script>
			@endif
				<form class="input-group mb-2" id="sortForm" action="{{ route('spareparts') }}">
					<input type="text" class="form-control" name="search" placeholder="Search anything" value="{{ request('search') }}">
					<button class="btn" type="submit">
						<i class="bi bi-search"></i>
					</button>
				</form>
				<a type="button" class="btn btn-info mb-2" href="{{ route('add-sparepart') }}"><i class="bi bi-plus-square"></i> Add</a>
				<br>
				<div class="table-responsive">
					<table class="table table-bordered table-striped m-0">
						<thead align="center">
							<tr>
								<th>Image</th>
								<th>Name</th>
								<th>Price</th>
								<th>Stock</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody align="center">
							@if ($spareparts->isEmpty())
							<td align="center" colspan="5">No spareparts found matching your search criteria.</td>
							@else
							@foreach ($spareparts as $index => $sparepart)
							<tr>
								<td width=200><div >
										<img src="{{ $sparepart->image }}" class="media-avatar" style="height: 80px; display: block; margin: 0 auto;">
										<div class="media-box-body">
											<div class="text-truncate"></div>
										</div>
									</div>
								</td>
								<td>{{ $sparepart->nama }}</td>
								<td width="150">Rp. {{ number_format($sparepart->harga, 0, ',', '.') }}</td>
								<td width="150">{{ $sparepart->jumlah }}</td>
								<td width="300" data-toggle="tooltip" title="{{ $sparepart->deskripsi }}">
									{{ \Illuminate\Support\Str::limit($sparepart->deskripsi, 150) }}
								</td>
								<td width="180"><button onclick="location.href='/editSparepart{{ $sparepart->id_sparepart }}'" class="btn btn-warning">Edit</button>
									<form action="{{ route('deleteDataSparepart') }}" method="post" style="display:inline-block;">
										@csrf 
										<input name="id_sparepart" value="{{ $sparepart->id_sparepart }}" hidden>
										<input type="submit"  class="btn btn-danger" value="Delete"></input></td>
									</form>
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
<style>
    .pagination .page-item.active .page-link {
        background-color: #007BFF;
        border-color: #007BFF;
        color: white;
        font-size: 12px;
        padding: 4px 8px;
    }

    .pagination .page-link {
        color: #007BFF;
        font-size: 12px;
        padding: 4px 8px;
        margin: 0 2px;
    }
</style>

@endsection