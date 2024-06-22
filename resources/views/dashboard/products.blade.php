@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">
	<!-- Row start -->
	<div class="row">
	<div class="col-12">
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
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped m-0">
						<thead>
							<tr>
								<th>Image</th>
								<th>Name</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if ($products->isEmpty())
							<h3 align="center">No products found matching your search criteria.</h3>
							@else
							@foreach ($products as $index => $product)
							<tr>
								<td><img src="{{ $product->image }}" class="flag-img" ></td>
								<td>{{ $product->name }}</td>
								<td>{{ $product->quantity }}</td>
								<td>{{ $product->price }}</td>
								<td>{{ $product->description }}</td>
								<td><button type="button" class="btn btn-warning">Edit</button></td>
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
		{{$products->links()}}
		<div class="toolbar-bottom">
		</div>
		<!-- toolbar end -->
	</div>
</div>


</div>
<style>
    .pagination .page-item.active .page-link {
        background-color: #EE2050;
        border-color: #EE2050;
        color: white;
    }

    .pagination .page-link {
        color: #EE2050;
    }
</style>
@endsection