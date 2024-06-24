@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">
	<!-- Row start -->
	<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
			@if ($message = Session::get('success'))
				<style>
					#alertMessage {
						transition: opacity 0.8s ease-out;
					}
				</style>
				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
				<br>
				<div id="alertMessage" class="alert alert-success" role="alert">
					{{ $message }}
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
						<thead>
							<tr>
								<th>Image</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Jumlah</th>
								<th>Kategori</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@if ($spareparts->isEmpty())
							<h3 align="center">No spareparts found matching your search criteria.</h3>
							@else
							@foreach ($spareparts as $index => $sparepart)
							<tr>
								<td><div class="media-box">
										<img src="{{ $sparepart->image }}" class="media-avatar">
										<div class="media-box-body">
											<div class="text-truncate"></div>
										</div>
									</div>
								</td>
								<td>{{ $sparepart->nama }}</td>
								<td>{{ $sparepart->harga }}</td>
								<td>{{ $sparepart->jumlah }}</td>
								<td>{{ $sparepart->kategori }}</td>
								<td><button onclick="location.href='/editSparepart{{ $sparepart->id_sparepart }}'" class="btn btn-warning">Edit</button></td>
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