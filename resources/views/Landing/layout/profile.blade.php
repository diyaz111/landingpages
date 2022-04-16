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
<header id="topnav" class="defaultscroll sticky">
                @include('Landing.layout.header.header')
                <!--end container-->
            </header>
        <!-- Hero End -->

        <!-- About Start -->
        <section class="bg-half-170 border-bottom agency-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="main-title mb-4">Tentang Kami</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="position-relative">
                            <img src="images/about.jpg" class="rounded img-fluid mx-auto d-block" alt="">
                            <div class="play-icon">
                            <img src="{{asset ('images/logo.png')}}">
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title ml-lg-4">
                            <h4 class="title mb-4">Abbabill</h4>
                            <p class="text-muted">Kami membantu anda mendapatkan data-data menarik dari hasil penjualan anda agar anda dapat menjual lebih banyak produk. <br><span class="text-primary font-weight-bold">Abbabill</span> bergerak dibidang e-commerce yang dapat membantu para pengusaha untuk memantau penjualan dan juga dapat mengajak reseller untuk join ke dalam grup dan dapat memantau proses perkembanganya.</p>
                            <span class="text-primary font-weight-bold"><q>Kalau Jualan Bisa Lebih Mudah, Kenapa Harus Ribet.</q></span>
                            <a href="javascript:void(0)" class="btn btn-primary mt-3">Coba Gratis <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- About End -->

        <!-- Team Start -->
        <!-- <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="main-title mb-4">Our Team</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Abbabill</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="team text-center">
                            <div class="position-relative">
                                <img src="{{asset ('landrick-asset/images/team/1.jpg')}}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                                <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content pt-3 pb-3">
                                <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Adit</a></h5>
                                <small class="designation text-muted">C.E.O</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="team text-center">
                            <div class="position-relative">
                                <img src="{{asset ('landrick-asset/images/team/1.jpg')}}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                                <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content pt-3 pb-3">
                                <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Mulki</a></h5>
                                <small class="designation text-muted">Developer</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="team text-center">
                            <div class="position-relative">
                                <img src="images/team/3.jpg" class="img-fluid d-block rounded-pill mx-auto" alt="">
                                <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content pt-3 pb-3">
                                <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ryan</a></h5>
                                <small class="designation text-muted">Developer</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="team text-center">
                            <div class="position-relative">
                                <img src="images/team/4.jpg" class="img-fluid d-block rounded-pill mx-auto" alt="">
                                <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content pt-3 pb-3">
                                <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ahmad Diyaz</a></h5>
                                <small class="designation text-muted">Developer Orang Ganteng</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        
        <!-- Project Start -->
        
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