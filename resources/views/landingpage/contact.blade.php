@extends('landingpage.component.main')

@section('title', 'Contact')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>contact us</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="{{ route('contact') }}">contact us</a></li>
                    </ul>
                </div>
                <!-- page title menu end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- google map area start -->
<div class="google-map-area">
    <!-- google map start -->
    <div id="googleMap"></div>
    <!-- google map end -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <!-- contact box start -->
                <div class="contact-box spacer">
                    <!-- contact address start -->
                    <div class="contact-info">
                        <!-- title -->
                        <h3 class="contact-title">contact address</h3>
                        <!-- single address start -->
                        <div class="single-address">
                            <div class="icon"><i class="icofont icofont-location-pin"></i></div>
                            <div class="icon-text">
                                <p>28 Green Tower, Street Name <br> New York City, USA</p>
                            </div>
                        </div>
                        <!-- single address end -->
                        <!-- single address start -->
                        <div class="single-address">
                            <div class="icon"><i class="icofont icofont-phone"></i></div>
                            <div class="icon-text">
                                <p>Phone : +061012345678 <br> Fax : +0061012345678</p>
                            </div>
                        </div>
                        <!-- single address end -->
                        <!-- single address start -->
                        <div class="single-address">
                            <div class="icon"><i class="icofont icofont-envelope"></i></div>
                            <div class="icon-text">
                                <p>Contact@yourename.com <br> Support@yourname.com</p>
                            </div>
                        </div>
                        <!-- single address end -->
                    </div>
                    <!-- contact address end -->
                    <!-- contact form start -->
                    <div class="contact-form">
                        <form id="contact-form" action="mail.php" method="post">
                            <!-- title -->
                            <h3 class="contact-title">get in touch</h3>
                            <!-- input name -->
                            <input name="name" type="text" placeholder="Name*">
                            <!-- input email -->
                            <input name="email" type="email" placeholder="Email*">
                            <!-- message -->
                            <textarea name="message" cols="10" rows="1" placeholder="Your message"></textarea>
                            <!-- send button -->
                            <div class="shopping-button">
                                <button type="submit">Send Message</button>
                            </div>
                            <p class="form-messege"></p>
                        </form>
                    </div>
                    <!-- contact form end -->
                </div>
                <!-- contact box end -->
            </div>
        </div>
    </div>
</div>
<!-- google map area end -->
@endsection
