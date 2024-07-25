@extends('landingpage.component.main')

@section('title', 'Home')

@section('content')
<!-- slider area start -->
<div class="slider-area">
    <div class="bend niceties preview-1">
        <!-- slider images start -->
        <div id="nivoslider" class="slides">
            <img src="img/slider/1.jpg" style="height: 700px" alt="slider_1" title="#slider-direction-1"/>
            <img src="img/slider/2.jpg" style="height: 700px" alt="slider_2" title="#slider-direction-2"/>
        </div>
        <!-- slider images end -->
        <!-- slider 1 direction -->
        <div id="slider-direction-1" class="t-cn slider-direction">
            <!-- slider progress start -->
            <div class="slider-progress"></div>
            <!-- slider progress end -->
            <!-- slider caption start -->
            <div class="slider-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- layer 1 -->
                            <div class="layer-1-1">
                                <h2 class="title-1">Perawatan dan Pelayanan </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2">
                                <h2 class="title-2"> Terbaik untuk Mobil Anda </h2>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3">
                                <p class="title-3"> Kami menawarkan perawatan dan pelayanan terbaik untuk memastikan mobil Anda selalu dalam kondisi prima. Dengan tim ahli dan peralatan canggih, kami siap memberikan solusi terbaik untuk semua kebutuhan mobil Anda.</p>
                            </div>
                            <!-- layer 4 -->
                            <div class="layer-1-4">
                                <a href="#" class="title-4">Hubungi </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider caption end -->
        </div>
        <!-- slider 2 direction -->
        <div id="slider-direction-2" class="t-cn slider-direction">
            <!-- slider progress start -->
            <div class="slider-progress"></div>
            <!-- slider progress end -->
            <!-- slider caption start -->
            <div class="slider-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- layer 1 -->
                            <div class="layer-2-1">
                                <h2 class="title-1">Layanan Terbaik </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2-2">
                                <h2 class="title-2"> dan Perawatan Berkualitas </h2>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-2-3">
                                <p class="title-3">Kami menyediakan layanan terbaik dengan perawatan berkualitas untuk memastikan kendaraan Anda selalu dalam kondisi prima. Tim profesional kami siap memberikan solusi terbaik untuk kebutuhan perawatan dan perbaikan kendaraan Anda.</p>
                            </div>
                            <!-- layer 4 -->
                            <div class="layer-2-4">
                                <a href="#" class="title-4">Hubungi </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider caption end -->
        </div>
    </div>
</div>
<!-- slider area end -->
<!-- about us area start -->
<div class="about-us-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- section title start -->
                <div class="section-heading">
                    <h2>Tentang <span> Kami</span></h2>
                </div>
                <!-- section title end -->
                <!-- about content start -->
                <div class="about-us-info">
                    <p>Bengkel Artemis siap membantu memperbaiki mobil Anda dengan layanan terbaik yang kami tawarkan. Tim ahli kami akan memastikan mobil Anda kembali dalam kondisi prima dengan perawatan dan perbaikan berkualitas tinggi. Nikmati kemudahan dalam memesan layanan kami yang cepat dan terpercaya.</p>
                    <p>Jangan ragu untuk memesan layanan kami hanya di Bengkel Artemis, tempat di mana kualitas dan kepuasan pelanggan adalah prioritas utama. Hubungi kami sekarang untuk mendapatkan perawatan terbaik bagi mobil Anda!</p>
                    <a href="about-us.html" class="default-button">learn more</a>
                </div>
                <!-- about content end -->
            </div>
            <div class="col-md-6 hidden-xs">
                <!-- about us img start -->
                <div class="about-us-img">
                    <img src="img/slider/2.jpg" alt="">
                </div>
                <!-- about us img end -->
            </div>
        </div>
    </div>
</div>
<!-- about us area end -->
<!-- service area start -->
<div class="service-area section-padding overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- section title start -->
                <div class="section-heading light text-center no-margin">
                    <h2>Layanan yang kami sediakan</h2>
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
                        <h3> CUCI MOBIL</h3>
                    </div>
                    <p>Nikmati layanan cuci mobil terbaik kami yang akan membuat kendaraan Anda berkilau seperti baru. Tim kami menggunakan teknik dan produk terbaru untuk memastikan mobil Anda bersih sempurna.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-cogs"></i>
                        <h3> PERBAIKAN MESIN</h3>
                    </div>
                    <p>Percayakan perbaikan mesin Anda kepada teknisi ahli kami. Kami menangani segala jenis masalah mesin dengan cepat dan efisien, menggunakan peralatan canggih untuk memastikan kendaraan Anda kembali berfungsi optimal.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-soccer-ball-o"></i>
                        <h3> PENYELARASAN RODA</h3>
                    </div>
                    <p>Pastikan kenyamanan dan keamanan berkendara Anda dengan layanan penyelarasan roda kami. Kami menggunakan teknologi presisi tinggi untuk memastikan roda Anda sejajar sempurna, mengurangi keausan ban dan meningkatkan kinerja kendaraan.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-compass"></i>
                        <h3> PERBAIKAN SUSPENSI</h3>
                    </div>
                    <p>Dapatkan perbaikan suspensi yang andal dari tim profesional kami. Kami memastikan suspensi kendaraan Anda dalam kondisi terbaik untuk pengalaman berkendara yang halus dan aman.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-cubes"></i>
                        <h3> SERVIS REM</h3>
                    </div>
                    <p>Pastikan sistem rem Anda berfungsi dengan sempurna dengan layanan servis rem kami. Kami memeriksa dan memperbaiki komponen rem dengan teliti untuk menjamin keamanan dan performa optimal kendaraan Anda.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-life-ring"></i>
                        <h3> KESEIMBANGAN BAN</h3>
                    </div>
                    <p>Nikmati perjalanan yang lebih mulus dengan layanan keseimbangan ban kami. Kami memastikan ban Anda seimbang dengan sempurna, mengurangi getaran dan meningkatkan umur pakai ban serta kenyamanan berkendara Anda.</p>
                </div>
                <!-- single service end -->
            </div>
        </div>
    </div>
</div>
<!-- service area end -->
<!-- features area start -->
<div class="features-area section-padding overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <!-- single feature start -->
                <div class="single-feature text-center">
                    <div class="feature-icon">
                        <i class="icofont icofont-tea"></i>
                    </div>
                    <div class="feature-content">
                        <h3>SECANGKIR KOPI</h3>
                        <p>Untuk Pelanggan Tercinta</p>
                    </div>
                </div>
                <!-- single feature start -->
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- single feature start -->
                <div class="single-feature text-center">
                    <!-- feature icon -->
                    <div class="feature-icon">
                        <i class="icofont icofont-dart"></i>
                    </div>
                    <!-- feature content -->
                    <div class="feature-content">
                        <h3>GARANSI</h3>
                        <p>Untuk Semua Layanan</p>
                    </div>
                </div>
                <!-- single feature end -->
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- single feature start -->
                <div class="single-feature text-center">
                    <!-- feature icon -->
                    <div class="feature-icon">
                        <i class="icofont icofont-badge"></i>
                    </div>
                    <!-- feature content -->
                    <div class="feature-content">
                        <h3>PRESTASI</h3>
                        <p>10 Tahun Pengalaman</p>
                    </div>
                </div>
                <!-- single feature end -->
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- single feature start -->
                <div class="single-feature text-center">
                    <!-- feature icon -->
                    <div class="feature-icon">
                        <i class="icofont icofont-ui-settings"></i>
                    </div>
                    <!-- feature content -->
                    <div class="feature-content">
                        <h3>SUKU CADANG</h3>
                        <p>Selalu Tersedia</p>
                    </div>
                </div>
                <!-- single feature end -->
            </div>
        </div>
    </div>
</div>
<!-- features area end -->
<!-- team member area start -->
<div class="team-member section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- section title start -->
                <div class="section-heading text-center">
                    <h2>Artemis Team <span> Members</span></h2>
                </div>
                <!-- section title end -->
            </div>
        </div>
        <div class="row">
            <!-- single team start -->
            <div class="col-sm-4">
                <div class="single-team hover-style pull-left">
                    <div class="team-img">
                        <!-- team img start -->
                        <a href="#" class="main-img">
                            <img src="img/team/1.png" alt="">
                        </a>
                        <!-- team img end -->
                        <!-- team info start -->
                        <div class="team-info">
                            <h3>Wawan Julian</h3>
                            <p>Owner</p>
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
                            <img src="img/team/2.png" alt="">
                        </a>
                        <!-- team img end -->
                        <!-- team info start -->
                        <div class="team-info">
                            <h3>Ridho Ilahi</h3>
                            <p>Mechanic</p>
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
                            <img src="img/team/3.png" alt="">
                        </a>
                        <!-- team img end -->
                        <!-- team info start -->
                        <div class="team-info">
                            <h3>Ringga</h3>
                            <p>Mechanic</p>
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
<!-- team member area end -->
<!-- testimonial area start -->
<div class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- testimonial slider start -->
                <div class="testimonial-slider owl-preview-1">
                    <!-- single testimonial start -->
                    <div class="single-testimonial">
                        <!-- testimonil img -->
                        <div class="testimonial-img hidden-xs">
                            <div class="writer-img">
                                <img src="img/testimonial/1.png" alt="">
                            </div>
                        </div>
                        <!-- testimonial content -->
                        <div class="testimonial-content">
                            <div class="test-writer">
                                <h3>Trio</h3>
                                <p>Creative Director</p>
                            </div>
                            <div class="test-spech">
                                <p>Bengkel Artemis adalah tempat favorit saya untuk memperbaiki mobil. Mereka selalu memberikan layanan yang cepat dan efisien. Saya suka bagaimana mereka selalu mengutamakan kepuasan pelanggan dan memberikan solusi terbaik untuk setiap masalah. Mobil saya selalu dalam kondisi terbaik setelah di-service di sini. Luar biasa!</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial end -->
                    <!-- single testimonial start -->
                    <div class="single-testimonial">
                        <!-- testimonial img -->
                        <div class="testimonial-img hidden-xs">
                            <div class="writer-img">
                                <img src="img/testimonial/2.png" alt="">
                            </div>
                        </div>
                        <!-- testimonial content -->
                        <div class="testimonial-content">
                            <div class="test-writer">
                                <h3>Budi Aldian</h3>
                                <p>chief executive officer</p>
                            </div>
                            <div class="test-spech">
                                <p>Saya sangat senang dengan pengalaman saya di Bengkel Artemis. Mekaniknya sangat profesional dan menjelaskan masalah mobil saya dengan bahasa yang mudah dimengerti. Proses perbaikan juga cepat dan harga yang ditawarkan sangat masuk akal. Mobil saya sekarang berjalan seperti baru. Terima kasih Bengkel Artemis!</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial end -->
                    <!-- single testimonial start -->
                    <div class="single-testimonial">
                        <!-- testimonial img -->
                        <div class="testimonial-img hidden-xs">
                            <div class="writer-img">
                                <img src="img/testimonial/3.png" alt="">
                            </div>
                        </div>
                        <!-- testimonial content -->
                        <div class="testimonial-content">
                            <div class="test-writer">
                                <h3>Aldi Nur</h3>
                                <p>Petugas Pajak</p>
                            </div>
                            <div class="test-spech">
                                <p>Ini pertama kalinya saya membawa mobil ke Bengkel Artemis dan saya benar-benar puas dengan pelayanan mereka. Stafnya ramah dan membantu, dan mereka menangani mobil saya dengan sangat baik. Saya sangat menghargai transparansi mereka mengenai biaya dan proses perbaikan. Pasti akan merekomendasikan Bengkel Artemis ke teman-teman saya.</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial end -->
                </div>
                <!-- testimonial slider end -->
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end -->

@endsection
