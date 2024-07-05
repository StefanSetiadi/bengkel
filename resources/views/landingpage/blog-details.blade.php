@extends('landingpage.component.main')

@section('title', 'Blog details')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>Blog details</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="{{ route('blog-details') }}">blog details</a></li>
                    </ul>
                </div>
                <!-- page title menu end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- blog details area start -->
<div class="blog-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-10 col-lg-offset-1">
                <!-- blog full post start -->
                <div class="blog-full-post">
                    <!-- blog img start -->
                    <div class="blog-img">
                        <a href="#">
                            <img src="img/blog/2-large.jpg" alt="">
                        </a>
                    </div>
                    <!-- blog img end -->
                    <!-- blog title start -->
                    <div class="blog-info">
                        <a href="#" class="blog-title">How to boost up your vehicle engine</a>
                    </div>
                    <!-- blog title end -->
                    <!-- post text start -->
                    <div class="post-text">
                        <p>Tattooed Cosby sweater whatever semiotics, Godard Portland VHS viral sustainable bespoke vinyl roof party. Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo. Tattooed Cosby sweater whatever semiotics, Godard Portland VHS viral sustainable bespoke vinyl roof party. Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over.</p>
                        <p>Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo. Tattooed Cosby sweater whatever semiotics, Godard Portland VHS viral sustainable bespoke vinyl roof party. Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo. Tattooed Cosby sweater whatever semiotics, Godard Portland VHS viral sustainable bespoke vinyl roof party.</p>
                        <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo. Tattooed Cosby sweater whatever semiotics, Godard Portland VHS viral sustainable bespoke vinyl roof party. Shabby chic selfies pickled Tumblr letterpress iPhone.</p>
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
                    </div>
                    <!-- post text end -->
                    <!-- post info start -->
                    <div class="blog-info">
                        <!-- post info -->
                        <p class="post-info">
                            <span> <i class="icofont icofont-user"></i> By admin</span>
                            <span> <i class="icofont icofont-heart"></i> (225)</span>
                            <span> <i class="icofont icofont-comment"></i> (115)</span>
                            <span class="pull-right"> <i class="icofont icofont-ui-calendar"></i> 25, Augest, 2016</span>
                        </p>
                    </div>
                    <!-- post info end -->
                    <!-- post comment box start -->
                    <div class="comment-box">
                        <div class="comment-list">
                            <ul>
                                <!-- comment reply start -->
                                <li>
                                    <div class="author-img">
                                        <img src="img/blog/user-1.jpg" alt="">
                                    </div>
                                    <div class="author-comment">
                                        <h5><a href="#">Hridoy roy</a>2016 25 September <a href="#" class="pull-right reply"><i class="icofont icofont-reply"></i></a></h5>
                                        <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo.Shabby.</p>
                                    </div>
                                </li>
                                <!-- comment reply end -->
                                <!-- comment reply start -->
                                <li class="comment-reply">
                                    <div class="author-img">
                                        <img src="img/blog/user-2.jpg" alt="">
                                    </div>
                                    <div class="author-comment">
                                        <h5><a href="#">Jhon Doe</a>2016 26 September <a href="#" class="pull-right reply"><i class="icofont icofont-reply"></i></a></h5>
                                        <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo.Shabby.</p>
                                    </div>
                                </li>
                                <!-- comment reply end -->
                                <!-- comment reply start -->
                                <li class="comment-reply">
                                    <div class="author-img">
                                        <img src="img/blog/user-3.jpg" alt="">
                                    </div>
                                    <div class="author-comment">
                                        <h5><a href="#">Jhon Smith</a>2016 28 September <a href="#" class="pull-right reply"><i class="icofont icofont-reply"></i></a></h5>
                                        <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo.Shabby.</p>
                                    </div>
                                </li>
                                <!-- comment reply end -->
                                <!-- comment reply start -->
                                <li>
                                    <div class="author-img">
                                        <img src="img/blog/user-1.jpg" alt="">
                                    </div>
                                    <div class="author-comment">
                                        <h5><a href="#">Hridoy roy</a>2016 29 September <a href="#" class="pull-right reply"><i class="icofont icofont-reply"></i></a></h5>
                                        <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo.Shabby.</p>
                                    </div>
                                </li>
                                <!-- comment reply end -->
                            </ul>
                        </div>
                    </div>
                    <!-- post comment box end -->
                    <!-- write comment start -->
                    <div class="blog-comment-form">
                        <!-- section title start -->
                        <div class="section-small-title">
                            <h3>WRITE YOUR COMMENT</h3>
                        </div>
                        <!-- section title end -->
                        <!-- blog comment start -->
                        <form action="#">
                            <input type="text" placeholder="Name*">
                            <input type="email" placeholder="Email address *">
                            <input type="text" placeholder="Subject">
                            <textarea cols="30" rows="3" placeholder="Message"></textarea>
                            <div class="shopping-button">
                                <button type="submit">post comment</button>
                            </div>
                        </form>
                        <!-- blog comment end -->
                    </div>
                    <!-- write comment end -->
                </div>
                <!-- blog full post end -->
            </div>
        </div>
    </div>
</div>
<!-- blog details area end -->
@endsection
