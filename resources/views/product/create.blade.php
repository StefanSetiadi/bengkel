@extends('component.main')

@section('title', 'Create Product')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>Create Product</h2>
                </div>
                <!-- page title end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- checkout area start -->
<div class="checkout-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- total cart area start -->
                <div class="cart-total">
                    <!-- section title start -->
                    <div class="section-small-title">
                        <h3>Pictures of this Product</h3>
                    </div>
                    <div class="form-group">
                        <!-- <label>File Foto Mobil</label> -->
                        <div class="col-md-12 text-center">
                            <img id="previewMobil" src="img/product/1.jpg"
                                class="rounded mx-auto d-block" width="270" height="330" alt="foto_mobil">
                        </div><br>
                        <input type="file" id="foto_mobil" name="foto_mobil"
                            class="file-upload-default foto_mobil"
                            onchange="previewImage('previewMobil','foto_mobil')" accept="image/*" style="visibility:hidden;">
                        <div class="input-group col-xs-12 text-center">
                            <!-- <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image"> -->
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary"
                                    type="button">Upload Image</button>
                            </span>
                        </div>
                    </div>
                    <!-- section title end -->
                </div>
                <!-- total cart area end -->
            </div>
            <div class="col-md-6">
                <!-- client address start -->
                <div class="client-address">
                    <!-- section title start -->
                    <div class="section-small-title">
                        <h3>Product</h3>
                    </div>
                    <!-- section title start -->
                    <!-- client address form -->
                    <form action="{{route('addProduct')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="client-address-form">
                                <input type="text" placeholder="Name" name="name">
                                <input type="text" placeholder="Quantity" name="quantity">
                                <input type="text" placeholder="price" name="price">
                                <textarea cols="3" rows="5" placeholder="description" name="description"></textarea>
                            </div>
                        </div>
                        <!-- client address end -->
                        <!-- shopping button start -->
                        <div class="shopping-button">
                            <button type="submit">Create</button>
                        </div>
                        <!-- shopping button end -->
                    </form>
            </div>
        </div>
    </div>
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
</script>
<!-- Custom js for this page-->
<script src="{{ asset('js/file-upload.js') }}"></script>
<script src="{{ asset('js/typeahead.js') }}"></script>
<script src="{{ asset('js/select2.js') }}"></script>
<!-- End custom js for this page-->
@endsection
