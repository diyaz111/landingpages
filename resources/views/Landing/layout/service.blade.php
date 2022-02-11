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
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="features mt-5">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/pen.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Design & Development</h4>
                                <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a Aliquam aenean elementum semper.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/video.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Management & Marketing</h4>
                                <p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the text by established compiling unusual word.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/intellectual.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Stratagy & Research</h4>
                                <p class="text-muted mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum fragments texts used today.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/user.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Easy To Use</h4>
                                <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a Aliquam aenean elementum semper.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/calendar.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Daily Reports</h4>
                                <p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the text by compiling unusual established word.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/sand-clock.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Real Time Zone</h4>
                                <p class="text-muted mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used fragments today.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Feature Start -->
        <section class="home-testimonial">
    <div class="container-fluid">
        
        <div class="row d-flex justify-content-center testimonial-pos">
            <div class="col-md-12 pt-4 d-flex justify-content-center">
                <h3>Client Reviews</h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <h2>Explore With Abbabill experience</h2>
            </div>
        </div>
        <section class="home-testimonial-bottom">
            <div class="container testimonial-inner">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">“At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.”</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">“At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.”</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">“At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.”</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        </section>
       
        <!-- Project Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="main-title mb-4">Our Latest Projects</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6 col-md-6 mt-4 pt-2">
                        <div class="work-container position-relative rounded">                                
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset ('landrick-asset/images/work/1.jpg')}}" class="img-fluid rounded" alt="work-image">
                                <div class="overlay-work"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white d-block font-weight-bold">Shifting Perspective</a>
                                    <small class="text-light">Studio</small>
                                </div>
                                <div class="client">
                                    <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                    <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 mt-4 pt-2">
                        <div class="work-container position-relative shadow rounded">                                
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset ('landrick-asset/images/work/2.jpg')}}" class="img-fluid rounded" alt="work-image">
                                <div class="overlay-work"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white d-block font-weight-bold">Colors Magazine</a>
                                    <small class="text-light">Web Design</small>
                                </div>
                                <div class="client">
                                    <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                    <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 mt-4 pt-2">
                        <div class="work-container position-relative shadow rounded">                                
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset ('landrick-asset/images/work/3.jpg')}}" class="img-fluid rounded" alt="work-image">
                                <div class="overlay-work"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white d-block font-weight-bold">Spa Cosmetics</a>
                                    <small class="text-light">Developing</small>
                                </div>
                                <div class="client">
                                    <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                    <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 mt-4 pt-2">
                        <div class="work-container position-relative shadow rounded">                                
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset ('landrick-asset/images/work/4.jpg')}}" class="img-fluid rounded" alt="work-image">
                                <div class="overlay-work"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white d-block font-weight-bold">Riser Coffee</a>
                                    <small class="text-light">Branding</small>
                                </div>
                                <div class="client">
                                    <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                    <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                                </div>
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
                        
                            <div class="mt-3">
                                <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2">Coba Gratis</a>
                              
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
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