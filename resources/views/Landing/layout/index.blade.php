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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset ('slider.css')}}">
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <style>
     /* Slider */
     .slick-slide {
  margin: 0px 20px;
}

.logo-carousel {
  overflow: inherit;
  border-top: 1px solid #353535;
  border-bottom: 1px solid #353535;
}

.slick-slide img {
  width: 100%;
}

.slick-track::before,
.slick-track::after {
  display: table;
  content: '';
}

.slick-track::after {
  clear: both;
}

.slick-track {
  padding: 1rem 0;
}

.slick-loading .slick-track {
  visibility: hidden;
}

.slick-slide.slick-loading img {
  display: none;
}

.slick-slide.dragging img {
  pointer-events: none;
}

.slick-loading .slick-slide {
  visibility: hidden;
}

.slick-arrow {
  position: absolute;
  top: 50%;
  background: url(https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/arrow.svg?sanitize=true) center no-repeat;
  color: #fff;
  filter: invert(77%) sepia(32%) saturate(1%) hue-rotate(344deg) brightness(105%) contrast(103%);
  border: none;
  width: 2rem;
  height: 1.5rem;
  text-indent: -10000px;
  margin-top: -16px;
  z-index: 99;
}

.slick-arrow.slick-next {
  right: -40px;
  transform: rotate(180deg);
}

.slick-arrow.slick-prev {
  left: -40px;
}

/* Media Queries */

@media (max-width: 768px) {
  .slick-arrow {
    width: 1rem;
    height: 1rem;
  }
}
 

/* JsFiddle Example only/don't use */
.logo-carousel {
  margin-top: 32px;
}

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
            <section class="bg-half-170 border-bottom agency-wrapper" id="home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5 order-1 order-md-2">
                         
                            <video width="530" height="350" controls>
                            <source src="https://sintesa-dev.s3.ap-southeast-1.amazonaws.com/public/assets/video-first.mp4" type="video/webm" />
                        </video>
                        </div>
                        <!--end col-->

                        <div class="col-lg-7 col-md-7 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                          <div class="title-heading mt-4 ml-lg-5">
                                <h1 class="heading mt-3 mb-3">Kami Abbabill hadir untuk solusi bisnis anda</h1>
                                <p class="para-desc text-muted">Kami membantu anda mendapatkan data-data menarik dari hasil penjualan anda agar anda dapat menjual lebih banyak produk, <p class="text-muted para-desc mb-0 mx-auto">Mulai dengan membuat website dengan nama <span class="text-danger font-weight-bold">Toko mu</span> sendiri.</p>
                                <span class="text-primary font-weight-bold"><q>Kalau Jualan Bisa Lebih Mudah, Kenapa Harus Ribet.</q></span>
                                <div class="watch-video mt-4 pt-2">
                                    <!-- <a href="javascript:void(0)" class="btn btn-primary">Whatsapp Sekarang!<i class="mdi mdi-chevron-right"></i></a> -->
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
            <!--end home desc center-->
        </div>
        <!--end home center-->
    </section>

        
        <!-- Hero End -->

        <!-- Feature Start -->
        <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <img src="{{ asset ('landrick-asset/images/saas/1.png') }}" class="img-fluid shadow" alt="">
                </div>
                <!--end col-->
                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-3">
                        <h4 class="title mb-4">Mulai Usaha Mu Dengan Produk Kami</h4>
                        <p class="text-muted">Abbabill bergerak dibidang e-commerce yang dapat membantu para pengusaha untuk memantau penjualan dan juga dapat mengajak reseller untuk join ke dalam grup dan dapat memantau proses perkembanganya</p>
                        <ul class="list-unstyled feature-list text-muted">
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Solusi Bisnis Anda</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Buat Toko Mu Menjadi Terkenal Dengan Website Nama Toko Sendiri</li>
                        </ul>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container-fluid">
            <div class="row">
                <div class="home-shape-bottom">
                    <img src="images/shapes/curve-white.png" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
            <!--end row-->
        </div> <!-- END CONTAINER -->
    </section>
    <section class="section_quick_link">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
					<div class="carousel" data-arrows="true" data-autoplay="true" data-items="5" data-items-sm="3" data-items-xs="1">
						<div class="carousel-item">
                        <img src="{{asset ('image/anteraja.jpg')}}" style="width:128px;height:128px;" class="img-fluid" alt="">
						</div>
						<!--.carousel-item-->
						<div class="carousel-item">
                        <img src="{{asset ('image/bca.jpg')}}" style="width:128px;height:128px;" class="img-fluid" alt="">
						</div>
						<!--.carousel-item-->
						<div class="carousel-item">
                        <img src="{{asset ('image/gopay.jpg')}}" style="width:128px;height:128px;" class="img-fluid" alt="">
						</div>
						<!--.carousel-item-->
						<div class="carousel-item">
                        <img src="{{asset ('image/idexpres.jpg')}}" style="width:128px;height:128px;" class="img-fluid" alt="">
						</div>
						<!--.carousel-item-->
						<div class="carousel-item">
                        <img src="{{asset ('image/jne.jpg')}}" style="width:128px;height:128px;" class="img-fluid" alt="">
						</div>
						<!--.carousel-item-->
						<div class="carousel-item">
                        <img src="{{asset ('image/j&t.jpg')}}" style="width:128px;height:128px;" class="img-fluid" alt="">
						</div>
						<!--.carousel-item-->
						<div class="carousel-item">
                        <img src="{{asset ('image/ovo.jpg')}}" style="width:128px;height:128px;" class="img-fluid" alt="">
						</div>
						<!--.carousel-item-->
                        <div class="carousel-item">
                        <img src="{{asset ('image/qris.jpg')}}" style="width:128px;height:128px;" class="img-fluid" alt="">
						</div>
						<!--.carousel-item-->
                        <div class="carousel-item">
                        <img src="{{asset ('image/seriu.jpg')}}" style="width:128px;height:128px;" class="img-fluid" alt="">
						</div>
						<!--.carousel-item-->
                        <div class="carousel-item">
                        <img src="{{asset ('image/shope.jpg')}}" style="width:128px;height:128px;" class="img-fluid" alt="">
						</div>
						<!--.carousel-item-->
					</div>
					<!--.carousel-->
				</div>
			</div>
			<!--.row-->
		</div>
       
        <!-- Project Start -->
        <section class="section">
            <div class="container">
            <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-60">
                            <h4 class="main-title mb-4">Fitur yang di dapat</h4>
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
                                <h4 class="title-2">Buat Website Dengan Domain Toko Mu Sendiri</h4>
                                <p class="text-muted mb-0">Website dengan nama toko mu sendiri jadi lebih terkenal loh website mu </p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/video.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Sudah Terintegrasi Dengan Ekspedisi</h4>
                                <p class="text-muted mb-0">Toko mu bisa langsung memantau pengiriman barang kepada pelanggan.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/intellectual.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Dapat Membuka Reseller</h4>
                                <p class="text-muted mb-0">Ajak teman-teman mu untuk join menjadi reseller dengan toko mu sendiri.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/user.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Kamu Bisa Memantau Progres Reseller</h4>
                                <p class="text-muted mb-0">Kamu akan bisa tau Progres reseller secara langsung.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/calendar.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Reseller Mendapatkan Komisi Penjualan</h4>
                                <p class="text-muted mb-0">Jangan takut!!!, Reseller dapat komisi penjualan juga kok.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <img src="{{asset ('landrick-asset/images/icon/sand-clock.svg')}}" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Reseller Dapat Mencairkan Dana Langsung</h4>
                                <p class="text-muted mb-0">Setelah dapat komisi dari seller maka reseller akan bisa langsung mencairkan dana.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row justify-content-center">
                    <div class="col-12 text-center mt-4 pt-2">
                        <a href="{{ url('/feature')}}" class="btn btn-primary">Lihat Selengkapnya <i class="mdi mdi-arrow-right"></i></a>
                    </div><!--end col-->
                </div><!--end row-->
  
            </div><!--end container-->
        </section><!--end section-->
        <section class="home-testimonial">
    <div class="container-fluid">
        
        <div class="row d-flex justify-content-center testimonial-pos">
            <div class="col-md-12 pt-4 d-flex justify-content-center">
                <h3>Ulasan Costumer</h3>
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
                                <div class="tour-text color-grey-3 text-center">“Bekerja sama bersama Abbabill membuat saya lebih mudah dalam memantau dan mengatur keuangan dan mengatur semua produk saya.”</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Ahmad Diyaz</div>
                                <div class="link-position d-flex justify-content-center">Owner in Widjaya Web</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">“Saya membuka toko sepatu online sebelum menggunakan Abbabill itu banyak sekali barang yang tidak sampai atau bahkan tidak terkirim sama sekali, semenjak saya bergabung di Abbabill
                                    saya dapat memantau pengirimin barang saya.”</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Hendi</div>
                                <div class="link-position d-flex justify-content-center">Owner off Nazma Shoes</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">“Saya mempunyai beberapa toko baju di kota Tangerang, Abbabill membantu saya dalam memantau progress toko saya baik cabang ataupun pusat.”</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Andrew Pranesta</div>
                                <div class="link-position d-flex justify-content-center">Owner off Klambi Ananta</div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        </section>
        <section>
            <br>
            <br>
            
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
        </section>
        <script>
			jQuery(document).ready(function ($) {
			        $('.carousel').slick({
			          dots: false,
					  infinite: true,
			          speed: 300,
			          slidesToShow: 5,
					  slidesToScroll: 1,
					  autoplay: true,
			          responsive: [
			            {
			              breakpoint: 1024,
			              settings: {
			                slidesToShow: 3,
			                slidesToScroll: 3,
			                infinite: true,
			                dots: true
			              }
			            },
			            {
			              breakpoint: 600,
			              settings: {
			                slidesToShow: 2,
			                slidesToScroll: 2
			              }
			            },
			            {
			              breakpoint: 480,
			              settings: {
			                slidesToShow: 1,
			                slidesToScroll: 1
			              }
			            }
			            // You can unslick at a given breakpoint now by adding:
			            // settings: "unslick"
			            // instead of a settings object
			          ]
              });
          });
		</script>
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