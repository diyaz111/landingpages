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
            <section class="section pt-5 mt-4">
            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <img src="{{asset ('landrick-asset/images/icon/bitcoin.svg')}}" alt="">
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Phone</h4>
                                <p class="text-muted">Start working with Landrick that can provide everything</p>
                                <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <img src="{{asset ('landrick-asset/images/icon/Email.svg')}}" alt="">
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Email</h4>
                                <p class="text-muted">Start working with Landrick that can provide everything</p>
                                <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <img src="{{asset ('landrick-asset/images/icon/location.svg')}}" alt="">
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Location</h4>
                                <p class="text-muted">C/54 Northwest Freeway, Suite 558, <br>Houston, USA 485</p>
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" class="video-play-icon h6 text-primary">View on Google map</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                        <div class="pt-5 pb-5 p-4 bg-light shadow rounded">
                        @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif   
                            <h4>Get In Touch !</h4>
                            <div class="custom-form mt-4">
                                <div id="message"></div>
                                <form method="post" action="">
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Your Name <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-account ml-3 icons"></i>
                                                <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-email ml-3 icons"></i>
                                                <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                            </div> 
                                        </div><!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Subject</label>
                                                <i class="mdi mdi-book ml-3 icons"></i>
                                                <input name="subject" id="subject" class="form-control pl-5" placeholder="Your subject :">
                                            </div>                                                                               
                                        </div><!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Comments</label>
                                                <i class="mdi mdi-comment-text-outline ml-3 icons"></i>
                                                <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Your Message :"></textarea>
                                            </div>
                                        </div>
                                    </div><!--end row-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                        <button class="submitBnt btn btn-primary btn-block">Send</button>
                                            <div id="simple-msg"></div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form--> 
                            </div><!--end custom-form-->
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 order-1 order-md-2">
                        <img src="{{asset ('landrick-asset/images/contact.png')}}" class="img-fluid" alt="">
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

        </section><!--end section--><!--end section-->
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