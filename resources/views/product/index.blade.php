@extends('component.main')

@section('title', 'Product')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>Product</h2>
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
                <!-- client address start -->
                <div class="client-address">
                    <!-- section title start -->
                    <div class="section-small-title">
                        <h3>Product</h3>
                    </div>
                    <!-- section title start -->
                    <!-- client address form -->
                    <div class="client-address-form">
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Quantity">
                            <input type="text" placeholder="price">
                            <textarea cols="3" rows="5" placeholder="description"></textarea>
                        </form>
                    </div>
                </div>
                <!-- client address end -->
            </div>
            <div class="col-md-6">
                <!-- total cart area start -->
                <div class="cart-total">
                    <!-- section title start -->
                    <div class="section-small-title">
                        <h3>Pictures of this Product</h3>
                    </div>
                    <!-- section title end -->
                </div>
                <!-- total cart area end -->
                <!-- shopping button start -->
                <div class="shopping-button">
                    <a href="#">place order</a>
                </div>
                <!-- shopping button end -->
            </div>
        </div>
    </div>
</div>
<!-- checkout area end -->
@endsection
