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
        <section class="section">
            <div class="container">
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
                            <h4 class="title mb-4">Our Story</h4>
                            <p class="text-muted">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. Dummy texts have been in use by typesetters since the 16th century.</p>
                            <span class="text-primary font-weight-bold"><q>Kalau Jualan Bisa Lebih Mudah, Kenapa Harus Ribet.</q></span>
                            <a href="javascript:void(0)" class="btn btn-primary mt-3">Coba Gratis <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="main-title mb-4">Feature Kami</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Mulai Bisnis Mu Dengan <span class="text-primary font-weight-bold">Ababbil</span>
                          <p class="text-muted para-desc mb-0 mx-auto">Mulai dengan membuat website dengan nama <span class="text-danger font-weight-bold">Toko mu</span> sendiri.</p>
                            <span class="text-primary font-weight-bold"><q>Kalau Jualan Bisa Lebih Mudah, Kenapa Harus Ribet.</q></span>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-responsive text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Fully Responsive</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-internet-explorer text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Website Nama Toko Sendiri</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-cryengine text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Dapat Membuka Reseller</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-bootstrap text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Terintegrasi Dengan Ekspedisi</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-cube-outline text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Pantau Progress Reseller</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-sass text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Reseller Komisi Penjualan</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-check-decagram text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Cairkan Dana Langsung</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-vector-bezier text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"> Dashboard Sendiri</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-settings-outline text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Atur Komisi Reseller</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-12 text-center mt-4 pt-2">
                        <a href="javascript:void(0)" class="btn btn-primary">See More <i class="mdi mdi-arrow-right"></i></a>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- About End -->

        <!-- Team Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="main-title mb-4">Our Team</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Ababbil</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

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
                    </div><!--end col-->

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
                    </div><!--end col-->
                    
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
                    </div><!--end col-->
                    
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
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title mb-4">See everything about your employee at one place.</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        
                            <div class="mt-6">
                                <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2">Free Trial</a>
                               
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        
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