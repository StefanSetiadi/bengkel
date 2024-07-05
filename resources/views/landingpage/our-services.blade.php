@extends('landingpage.component.main')

@section('title', 'Our Services')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>our services</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="{{ route('our-services') }}">our services</a></li>
                    </ul>
                </div>
                <!-- page title menu end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- service area start -->
<div class="service-area section-padding pages">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- section title start -->
                <div class="section-heading text-center no-margin">
                    <h2>Tinker Best <span> Services</span></h2>
                </div>
                <!-- section title end -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-car"></i>
                        <h3> Car Wash</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-cogs"></i>
                        <h3> Engine repair</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-soccer-ball-o"></i>
                        <h3> wheel alignment</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-compass"></i>
                        <h3> suspension repair</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-cubes"></i>
                        <h3> brake service</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-life-ring"></i>
                        <h3> tire balance</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                </div>
                <!-- single service end -->
            </div>
        </div>
    </div>
</div>
<!-- service area end -->
@endsection
