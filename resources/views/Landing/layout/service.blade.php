<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Abbabill</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Shreethemes" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset ('images/logoicon.jpg')}}">
    <!-- Bootstrap -->
    <style>
  .home-testimonial {
    background-color: #231834;
    height: 380px
}

.home-testimonial-bottom {
    background-color: #f8f8f8;
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    margin-top: 20px;
    margin-bottom: 0px;
    position: relative;
    height: 130px;
    top: 190px
}

.home-testimonial h3 {
    color: var(--orange);
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase
}

.home-testimonial h2 {
    color: white;
    font-size: 28px;
    font-weight: 700
}

.testimonial-inner {
    position: relative;
    top: -174px
}

.testimonial-pos {
    position: relative;
    top: 24px
}

.testimonial-inner .tour-desc {
    border-radius: 5px;
    padding: 40px
}

.color-grey-3 {
    font-family: "Montserrat", Sans-serif;
    font-size: 14px;
    color: #6c83a2
}

.testimonial-inner img.tm-people {
    width: 60px;
    height: 60px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -o-object-fit: cover;
    object-fit: cover;
    max-width: none
}

.link-name {
    font-family: "Montserrat", Sans-serif;
    font-size: 14px;
    color: #6c83a2
}

.link-position {
    font-family: "Montserrat", Sans-serif;
    font-size: 12px;
    color: #6c83a2
}
</style>
    <link href="{{asset('landrick-asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Magnific -->
    <link href="{{asset('landrick-asset/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{asset('landrick-asset/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Main css -->
    <link href="{{asset('landrick-asset/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{('landrick-asset/css/owl.carousel.min.css')}}"/> 
    <link rel="stylesheet" href="{{('landrick-asset/css/owl.theme.default.min.css')}}"/> 

</head>
<body>
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <header id="topnav" class="defaultscroll sticky">
                @include('Landing.layout.header.header')
                <!--end container-->
            </header>
           
        <!-- Hero End -->

        <!-- Feature Start -->
        <section class="section">
            <div class="container">
            <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="main-title mb-4">Service</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="features mt-5">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/pen.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Management Seller</h4>
                                <p class="text-muted mb-0">Management seller untuk memudahkan mu memantau seller.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/video.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Management Vendor</h4>
                                <p class="text-muted mb-0">Atur semua nya sesuai keinginan mu.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/intellectual.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Management Reseller</h4>
                                <p class="text-muted mb-0">Atur dan pantau reseller mu untuk perkembangan nya.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/user.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Terintegrasi Dengan Banyak Kurir</h4>
                                <p class="text-muted mb-0">Tidak usah repot-repot memantau pengiriman mu ke halaman website lain, Kami sudah menyediakan jasa pengiriman langsung.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/calendar.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Laporan Penjualan</h4>
                                <p class="text-muted mb-0">Buat Laporan penjualan mu dengan waktu yang kamu tentukan sendiri.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/sand-clock.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Mudah Untuk Digunakan</h4>
                                <p class="text-muted mb-0">Tidak perlu ribet dan takut kesulitan, Semuanya diatur dengan keinginan mu sendiri.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Feature Start -->
        
       
        <!-- Project Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="main-title mb-4">Dashboard</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Mulai bisnis mu dengan <span class="text-primary font-weight-bold">Abbabill</span> Maka semuanya akan menjadi lebih mudah.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6 col-md-6 mt-4 pt-2">
                        <div class="work-container position-relative rounded">                                
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset ('images/adminvendor.jpg')}}" class="img-fluid rounded" alt="work-image">
                                <div class="overlay-work"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white d-block font-weight-bold">Admin Vendor</a>
                                    <small class="text-light">Admin Vendor</small>
                                </div>
                                <div class="client">
                                    <small class="text-light user d-block"><i class="mdi mdi-account"></i> Ahmad Diyaz</small>
                                    <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13 Januari, 2021</small>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 mt-4 pt-2">
                        <div class="work-container position-relative shadow rounded">                                
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset ('images/reseller.jpg')}}" class="img-fluid rounded" alt="work-image">
                                <div class="overlay-work"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white d-block font-weight-bold">Reseller</a>
                                    <small class="text-light">Reseller</small>
                                </div>
                                <div class="client">
                                    <small class="text-light user d-block"><i class="mdi mdi-account"></i> Ahmad Diyaz</small>
                                    <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13 Januari, 2021</small>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 mt-4 pt-2">
                        <div class="work-container position-relative shadow rounded">                                
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset ('images/seller.jpg')}}" class="img-fluid rounded" alt="work-image">
                                <div class="overlay-work"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white d-block font-weight-bold">Seller</a>
                                    <small class="text-light">Seller</small>
                                </div>
                                <div class="client">
                                    <small class="text-light user d-block"><i class="mdi mdi-account"></i> Ahmad Diyaz</small>
                                    <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13 Januar, 2021</small>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->                    
                </div><!--end row-->
                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog position-relative overflow-hidden shadow rounded">
                            <video controls>
                                <source src="https://sintesa-dev.s3.ap-southeast-1.amazonaws.com/public/assets/video-first.mp4" type="video/webm" />
                            </video>
                            <div class="card-body">
                                <h5 class="card-title text-dark">Tonton Video Kami</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog position-relative overflow-hidden shadow rounded">
                            <video controls>
                                <source src="https://sintesa-dev.s3.ap-southeast-1.amazonaws.com/public/assets/video-first.mp4" type="video/webm" />
                            </video>
                            <div class="card-body">
                                <h5 class="card-title text-dark">Tonton Video Kami</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog position-relative overflow-hidden shadow rounded">
                            <video controls>
                                <source src="https://sintesa-dev.s3.ap-southeast-1.amazonaws.com/public/assets/video-first.mp4" type="video/webm" />
                            </video>
                            <div class="content p-4">
                                <h4><a href="javascript:void(0)" class="title text-dark">Tonton Video Kami</a></h4>
                               
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
            <br>
        </section><!--end section-->
        <footer class="footer">
        @include('Landing.layout.footer.footer')
        <!--end container-->
    </footer>
    <!--end footer-->
    <hr>


            <footer class="footer footer-bar">
                @include('Landing.layout.footer.footer-bar')
                <!--end container-->
            </footer>
            <!--end footer-->
            <!-- Footer End -->


            <!-- Back to top -->
            <a href="#" class="back-to-top rounded text-center" id="back-to-top">
                <i class="mdi mdi-chevron-up d-block"> </i>
            </a>
            <!-- Back to top -->


    <!-- javascript -->
    <script src="{{asset('landrick-asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('landrick-asset/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('landrick-asset/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('landrick-asset/js/scrollspy.min.js')}}"></script>

    <!-- Main Js -->
    <script src="{{asset('landrick-asset/js/app.js')}}"></script>
    <script src="{{asset('landrick-asset/js/owl.carousel.min.js')}} "></script>
     <script src="{{asset('landrick-asset/js/owl.init.js')}} "></script>
</body>

</html>