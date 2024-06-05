@extends('component.main')

@section('title', 'Shop Details')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>Shop details</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="#">shop details</a></li>
                    </ul>
                </div>
                <!-- page title menu end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- shop details area start -->
<div class="shop-details section-padding">
    <div class="container">
        <div class="row">
            <div class="single-list-shop">
                <div class="col-md-5 col-sm-6">
                    <!-- product img start -->
                    <div class="product-img">
                        <a href="single-shop.html"><img src="img/product/1-large.jpg" alt=""></a>
                    </div>
                    <!-- product img end -->
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="single-product">
                        <div class="product-name">
                            <a href="#">{{ $product->name }}</a>
                        </div>
                        <div class="price-rating">
                            <div class="product-price pull-left">
                                <p>Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                            </div>
                            <!-- ratings -->
                            <div class="ratings pull-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(Based on 04 reviews)</span>
                            </div>
                        </div>
                        <div class="product-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnage aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatese Duis aute irure dolor in reprehenderit in voluptate istadio</p>
                        </div>
                        <!-- cart plus minus start -->
                        <div class="cart-plus-minus">
                            <label>Quantity: </label>
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                        </div>
                        <!-- cart plus minus end -->
                        <!-- shop details color start -->
                        <div class="shop-detail-color">
                            <h3>color:</h3>
                            <div class="colors">
                                <ul>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- shop details color end -->
                        <!-- product action start -->
                        <div class="product-action">
                            <div class="action-btn">
                                <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                <button class="text-button action-single-btn"> add to cart</button>
                                <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                            </div>
                        </div>
                        <!-- product action end -->
                        <!-- shop details social start -->
                        <div class="shop-details-social">
                            <ul>
                                <li> <span> share on: </span></li>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                            </ul>
                        </div>
                        <!-- shop details social end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- shop details tab area start -->
                <div class="shop-details-tab">
                    <!-- shop details tab bar -->
                    <ul class="shop-details-tab-bar" role="tablist">
                        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Description</a></li>
                        <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">reviews</a></li>
                        <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">product tag</a></li>
                    </ul>
                    <!-- shop details tab content -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                            <!-- description start -->
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <ul>
                                    <li>- Lorem ipsum dolor sit amet, consectetur product</li>
                                    <li>- Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
                                    <li>- Excepteur sinted occaecat cupidatat non proident products</li>
                                    <li>- Voluptate velit esse cillum.</li>
                                </ul>
                            </div>
                            <!-- description end -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <!-- rate product start -->
                            <div class="rate-product">
                                <div class="section-small-title">
                                    <h3>You're reviewing: name of product</h3>
                                    <h3>How do you rate this product? <em>*</em></h3>
                                </div>
                                <form action="#">
                                    <table class="table table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>1 star</th>
                                                <th>2 star</th>
                                                <th>3 star</th>
                                                <th>4 star</th>
                                                <th>5 star</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Price</th>
                                                <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                            </tr>
                                            <tr>
                                                <th>Value</th>
                                                <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                            </tr>
                                            <tr>
                                                <th>Quality</th>
                                                <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <ul class="form-list">
                                        <li class="pull-left">
                                            <input type="text" placeholder="Name*">
                                        </li>
                                        <li class="pull-right">
                                            <input type="email" placeholder="Email*">
                                        </li>
                                        <li>
                                            <textarea cols="3" rows="5" placeholder="Write Review *"></textarea>
                                        </li>
                                    </ul>
                                    <div class="shopping-button text-right">
                                        <button type="submit"> submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- rate product end -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                            <!-- product tag start -->
                            <div class="product-tag">
                                <div class="section-small-title">
                                    <h3>add your tag</h3>
                                </div>
                                <div class="input-box">
                                    <input type="text" placeholder="type here">
                                </div>
                                <div class="shopping-button">
                                    <button type="submit"> add tag</button>
                                </div>
                            </div>
                            <!-- product tag end -->
                        </div>
                    </div>
                </div>
                <!-- shop details tab area end -->
            </div>
        </div>
    </div>
</div>
<!-- shop details area end -->
@endsection
