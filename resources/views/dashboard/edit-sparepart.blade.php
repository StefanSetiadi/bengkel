@extends('dashboard.component.main')

@section('breadcrumb','Edit Onderdil')

@section('content')
<div class="content-wrapper">
<!-- Row start -->
<div class="row">
	<form action="{{route('editDataSparepart')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="text" name="id_sparepart" value="{{ $sparepart->id_sparepart }}" hidden>
		<div class="col-sm-12 col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Edit Produk</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6 col-12">
							<div class="card-border">
								<div class="card-border-title">Pratinjau Gambar</div>
								<div class="card-border-body">
									<div class="row">
										<div class="form-group">
											<div class="col-12">
												<img id="previewProduct" src="{{ $sparepart->image }}"
													class="rounded mx-auto d-block" width="270" height="330" alt="productPhoto">
											</div>
											<input type="file" id="productPhoto" name="productPhoto"
												class="file-upload-default productPhoto"
												onchange="previewImage('previewProduct','productPhoto')" accept="image/*" style="visibility:hidden">
											<div class="input-group col-12">
												<span class="input-group-append mx-auto">
													<button class="file-upload-browse btn btn-primary"
														type="button">Unggah</button>
												</span>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-sm-6 col-12">
							<div class="card-border">
								<div class="card-border-title">Informasi</div>
								<div class="card-border-body">
									<div class="row">
										<div class="col-sm-12 col-12">
											<div class="mb-3">
												<label class="form-label">Nama <span class="text-red">*</span></label>
												<input type="text" class="form-control" name="nama" placeholder="Masukan nama produk" value="{{ $sparepart->nama }}" required>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="mb-3">
												<label class="form-label">Harga <span class="text-red">*</span></label>
												<input type="number" class="form-control" name="harga" placeholder="Masukan harga produk" value="{{ $sparepart->harga }}" required>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="mb-3">
												<label class="form-label">Stock <span class="text-red">*</span></label>
												<input type="number" class="form-control" name="jumlah" placeholder="EMasukan stok produk" value="{{ $sparepart->jumlah}}" required>
											</div>
										</div>
										<div class="col-sm-12 col-12">
											<div class="mb-0">
												<label class="form-label">Description</label>
												<textarea rows="4" class="form-control" name="deskripsi"
													placeholder="Masukan deskripsi produk">{{ $sparepart->deskripsi }}</textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="custom-btn-group flex-end mt-5">
									<input type="reset" class="btn btn-light" value="Batal"></input>
									<button type="submit" class="btn btn-success">Simpan Perubahan</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</form>
</div>
<!-- Row end -->
</div>
<!-- checkout area end -->
<!-- plugins:js -->
<script src="{{ asset('css/vendors/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('css/vendors/Chart.min.js') }}"></script>
<script src="{{ asset('css/vendors/jquery.dataTables.js') }}"></script>
<script src="{{ asset('css/vendors/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('js/dataTables.select.min.js') }}"></script>
<!-- Custom js for this page-->
<script src="{{ asset('js/file-upload.js') }}"></script>
<script src="{{ asset('js/typeahead.js') }}"></script>
<script src="{{ asset('js/select2.js') }}"></script>
<!-- End custom js for this page-->

<script>
    function previewImage(preview, imageInputId) {
        var preview = document.getElementById(preview);
        var fileInput = document.getElementById(imageInputId);
        var file = fileInput.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        }
        preview.style.visibility = "visible";
    }

	function resetPreview(previewId, defaultImage) {
		var preview = document.getElementById(previewId);
		preview.src = defaultImage;
		preview.style.visibility = "visible";
	}

	document.addEventListener('DOMContentLoaded', function() {
		var form = document.querySelector('form');
		form.addEventListener('reset', function() {
			resetPreview('previewProduct', '{{ $sparepart->image }}');
		});
	});
</script>
@endsection
