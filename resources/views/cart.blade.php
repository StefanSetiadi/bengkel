@extends('component.main')

@section('title', 'Cart')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>cart</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="{{ route('cart') }}">cart</a></li>
                    </ul>
                </div>
                <!-- page title menu end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- cart area start -->
<div class="cart-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- cart table start -->
                <div class="table-responsive">
                    <table class="table-bordered table">
                        <thead>
                            <tr>
                                <!-- product img title -->
                                <th class="item-img"></th>
                                <!-- product name title -->
                                <th class="product-name">Product</th>
                                <!-- unit price title -->
                                <th class="unit-price">Price</th>
                                <!-- stock status -->
                                <th class="stock text-center">stock status</th>
                                <!-- quantity -->
                                <th class="quantity text-center">Quantity</th>
                                <!-- remove button -->
                                <th class="remove-icon text-center">remove</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <!-- product img end -->
                                <td class="item-img">
                                    <a href="single-product.html">
                                        <img src="img/product/1.jpg" alt="">
                                    </a>
                                </td>
                                <!-- product img end -->
                                <!-- product name start -->
                                <td class="cart-product-name text-left">
                                    <a href="single-product.html">Starter Parst Car</a>
                                </td>
                                <!-- product name end -->
                                <!-- price start -->
                                <td class="unit-price text-left">
                                    <span>$1170</span>
                                </td>
                                <!-- price end -->
                                <!-- stock status start -->
                                <td class="stock">
                                    <span>in stock</span>
                                </td>
                                <!-- stock status end -->
                                <!-- quantity start -->
                                <td class="quantity">
                                        <input class="" type="text" name="qtybutton" value="1">
                                </td>
                                <!-- quantity end -->
                                <!-- remove icon start -->
                                <td class="remove-icon">
                                    <button> <i class="icofont icofont-close-line"></i> </button>
                                </td>
                                <!-- remove icon end -->
                            </tr>
                            <tr>
                                <!-- product img end -->
                                <td class="item-img">
                                    <a href="single-product.html">
                                        <img src="img/product/2.jpg" alt="">
                                    </a>
                                </td>
                                <!-- product img end -->
                                <!-- product name start -->
                                <td class="cart-product-name text-left">
                                    <a href="single-product.html">Car Exhaust Pipe</a>
                                </td>
                                <!-- product name end -->
                                <!-- price start -->
                                <td class="unit-price text-left">
                                    <span>$220.50</span>
                                </td>
                                <!-- price end -->
                                <!-- stock status start -->
                                <td class="stock">
                                    <span>in stock</span>
                                </td>
                                <!-- stock status end -->
                                <!-- quantity start -->
                                <td class="quantity">
                                    <input class="" type="text" name="qtybutton" value="1">
                                </td>
                                <!-- quantity end -->
                                <!-- remove icon start -->
                                <td class="remove-icon">
                                    <button> <i class="icofont icofont-close-line"></i> </button>
                                </td>
                                <!-- remove icon end -->
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- cart table end -->
            </div>
        </div>
        <!-- cart addition info area start -->
        <div class="row">
            <div class="cart-addition-area">
                <div class="col-md-4">
                    <!-- shipping location start -->
                    <div class="shipping-location">
                        <!-- section title start -->
                        <div class="section-small-title">
                            <h3>ESTIMATE SHIPPING AND TAX</h3>
                        </div>
                        <!-- section title end -->
                        <!-- shipping country start -->
                        <div class="single-shipping-location pull-left">
                            <select>
                                <option value="country" selected >country</option>
                                <option value="afganistan" >afganistan</option>
                                <option value="bangladesh" >bangladesh</option>
                                <option value="canada" >canada</option>
                                <option value="china" >china</option>
                                <option value="chili" >chili</option>
                                <option value="india" >india</option>
                                <option value="unitedstate" >united state</option>
                                <option value="unitedkingdom" >united kingdom</option>
                            </select>
                        </div>
                        <!-- shipping country start -->
                        <!-- shipping city start -->
                        <div class="single-shipping-location pull-right">
                            <select>
                                <option value="city" selected >city</option>
                                <option value="dhaka" >dhaka</option>
                                <option value="rajshahi" >rajshahi</option>
                                <option value="chittagong" >chittagong</option>
                                <option value="barishal" >barishal</option>
                                <option value="mymensingh" >mymensingh</option>
                                <option value="rangpur" >rangpur</option>
                                <option value="netrakona" >netrakona</option>
                                <option value="josore" >josore</option>
                            </select>
                        </div>
                        <!-- shipping city end -->
                        <!-- shipping state start -->
                        <div class="single-shipping-location pull-left">
                            <select>
                                <option value="state" selected >State/Province</option>
                                <option value="chadpur" >chadpur</option>
                                <option value="kisorgong" >kisorgong</option>
                                <option value="shylet" >shylet</option>
                                <option value="bagura" >bagura</option>
                                <option value="khkulna" >khkulna</option>
                            </select>
                        </div>
                        <!-- shipping state end -->
                        <!-- shipping zip code start -->
                        <div class="single-shipping-location pull-right">
                            <select>
                                <option value="zipcode" selected >Zip/Postal Code</option>
                                <option value="zip-2403" >2403</option>
                                <option value="zip-2405" >2405</option>
                                <option value="zip-2570" >2570</option>
                                <option value="zip-1350" >1350</option>
                                <option value="zip-2380" >2380</option>
                                <option value="zip-1405" >1405</option>
                                <option value="zip-5570" >5570</option>
                                <option value="zip-1230" >1230</option>
                                <option value="zip-3280" >3280</option>
                            </select>
                        </div>
                        <!-- shipping zip code end -->
                        <!-- shopping button start -->
                        <div class="shopping-button text-right">
                            <button type="submit">  Get a Quote</button>
                        </div>
                        <!-- shopping button end -->
                    </div>
                    <!-- shipping location end -->
                </div>
                <div class="col-md-4">
                    <!-- discount coupon start  -->
                    <div class="discount-coupon">
                        <div class="section-small-title">
                            <h3>Coupon discount</h3>
                        </div>
                        <p>Enter your coupon code if you have one.</p>
                        <div class="input-box">
                            <input type="text">
                        </div>
                        <div class="shopping-button text-right">
                            <button type="submit">apply coupon</button>
                        </div>
                    </div>
                    <!-- discount coupon end  -->
                </div>
                <div class="col-md-4">
                    <!-- cart total start -->
                    <div class="cart-total">
                        <div class="section-small-title">
                            <h3>cart total</h3>
                        </div>
                        <p>Subtotal <span class="pull-right">$1390.50</span> </p>
                        <p class="no-border">shipping <span class="pull-right">Free shipping</span> </p>
                        <p class="total-price">grand total <span class="pull-right">$1390.50</span> </p>
                        <div class="shopping-button text-right">
                            <a href="checkout.html">procced to checkout</a>
                        </div>
                    </div>
                    <!-- cart total end -->
                </div>
            </div>
        </div>
        <!-- cart addition info area end -->
    </div>
</div>
<!-- cart area end -->
@endsection
