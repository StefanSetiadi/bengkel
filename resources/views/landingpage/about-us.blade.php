@extends('landingpage.component.main')

@section('title', 'About Us')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>about us</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="{{ route('about-us') }}">About us</a></li>
                    </ul>
                </div>
                <!-- page title menu end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- about us area start -->
<div class="about-us-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- section title start -->
                <div class="section-heading">
                    <h2>About <span> Tinker</span></h2>
                </div>
                <!-- section title end -->
                <!-- about content start -->
                <div class="about-us-info">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incdunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerciti aulamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehederit essete cillum dolore eu fugiat nulla pariatur.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis. aliquip ex ea commodo consequat. Duis aute irure dolor in reprehederit laborum.</p>
                    <!-- about social start -->
                    <div class="about-social">
                        <ul>
                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                        </ul>
                    </div>
                    <!-- about social end -->
                </div>
                <!-- about content end -->
            </div>
            <div class="col-md-6 hidden-xs">
                <!-- about us img start -->
                <div class="about-us-img">
                    <img src="img/about/1.png" alt="">
                </div>
                <!-- about us img end -->
            </div>
        </div>
    </div>
</div>
<!-- about us area end -->
<!-- mission vision area start -->
<div class="mission-vision-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <!-- mission area start -->
                <div class="mission-area mbm-50">
                    <!-- section title start -->
                    <div class="section-heading light">
                        <h2>Our <span> Mission</span></h2>
                    </div>
                    <!-- section title end -->
                    <!-- content start -->
                    <div class="mission-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborgum. </p>
                    </div>
                    <!-- content end -->
                </div>
                <!-- mission area end -->
            </div>
            <div class="col-sm-6">
                <!-- vision area start -->
                <div class="mission-area">
                    <!-- section title start -->
                    <div class="section-heading light">
                        <h2>Our <span> vision</span></h2>
                    </div>
                    <!-- section title end -->
                    <!-- content start -->
                    <div class="vision-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborgum. </p>
                    </div>
                    <!-- content end -->
                </div>
                <!-- vision area end -->
            </div>
        </div>
    </div>
</div>
<!-- mission vision area end -->
<!-- team member area start -->
<div class="team-member section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- section title start -->
                <div class="section-heading text-center">
                    <h2>Tinker Team <span> Members</span></h2>
                </div>
                <!-- section title end -->
            </div>
        </div>
        <div class="row">
            <div class="team-slider">
                <!-- single team start -->
                <div class="col-sm-4">
                    <div class="single-team hover-style pull-left">
                        <div class="team-img">
                            <!-- team img start -->
                            <a href="#" class="main-img">
                                <img src="img/team/1.jpg" alt="">
                            </a>
                            <!-- team img end -->
                            <!-- team info start -->
                            <div class="team-info">
                                <h3>Hridoy Roy</h3>
                                <p>chief executive officer</p>
                            </div>
                            <!-- team info end -->
                            <!-- team social start -->
                            <div class="team-social">
                                <a href="#"> <i class="icofont icofont-social-facebook"></i> </a>
                                <a href="#"> <i class="icofont icofont-social-google-plus"></i> </a>
                                <a href="#"> <i class="icofont icofont-social-twitter"></i> </a>
                                <a href="#"> <i class="icofont icofont-social-vimeo"></i> </a>
                            </div>
                            <!-- team social end -->
                        </div>
                    </div>
                </div>
                <!-- single team end -->
                <!-- single team start -->
                <div class="col-sm-4">
                    <div class="single-team hover-style">
                        <div class="team-img">
                            <!-- team img start -->
                            <a href="#" class="main-img">
                                <img src="img/team/2.jpg" alt="">
                            </a>
                            <!-- team img end -->
                            <!-- team info start -->
                            <div class="team-info">
                                <h3>Judy Bailey</h3>
                                <p>Engine Mechanic</p>
                            </div>
                            <!-- team info end -->
                            <!-- team social start -->
                            <div class="team-social">
                                <a href="#"> <i class="icofont icofont-social-facebook"></i> </a>
                                <a href="#"> <i class="icofont icofont-social-google-plus"></i> </a>
                                <a href="#"> <i class="icofont icofont-social-twitter"></i> </a>
                                <a href="#"> <i class="icofont icofont-social-vimeo"></i> </a>
                            </div>
                            <!-- team social end -->
                        </div>
                    </div>
                </div>
                <!-- single team end -->
                <!-- single team start -->
                <div class="col-sm-4">
                    <div class="single-team hover-style pull-right">
                        <div class="team-img">
                            <!-- team img start -->
                            <a href="#" class="main-img">
                                <img src="img/team/3.jpg" alt="">
                            </a>
                            <!-- team img end -->
                            <!-- team info start -->
                            <div class="team-info">
                                <h3>MSN TRIO</h3>
                                <p>Creative Director</p>
                            </div>
                            <!-- team info end -->
                            <!-- team social start -->
                            <div class="team-social">
                                <a href="#"> <i class="icofont icofont-social-facebook"></i> </a>
                                <a href="#"> <i class="icofont icofont-social-google-plus"></i> </a>
                                <a href="#"> <i class="icofont icofont-social-twitter"></i> </a>
                                <a href="#"> <i class="icofont icofont-social-vimeo"></i> </a>
                            </div>
                            <!-- team social end -->
                        </div>
                    </div>
                </div>
                <!-- single team end -->
            </div>
        </div>
    </div>
</div>

@endsection
