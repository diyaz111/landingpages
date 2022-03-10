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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <style>
        html {
                scroll-behavior: smooth;
            }
    </style>
</head>
<body>
            <header id="topnav" class="defaultscroll sticky">
                @include('Landing.layout.header.header')
                <!--end container-->
            </header>

            <section class="bg-half-170 border-bottom agency-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="main-title mb-4">Feature Kami</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Mulai Bisnis Mu Dengan <span class="text-primary font-weight-bold">Abbabill</span>
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
                                <h4 class="title mb-0"><a href="#responsive"  target="_self" class="js-scroll-trigger">Fully Responsive</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-internet-explorer text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#tokosendiri">Website Nama Toko Sendiri</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-cryengine text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#bukareseller">Dapat Membuka Reseller</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-bootstrap text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#integrasi">Terintegrasi Dengan Ekspedisi</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-cube-outline text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#progress" target="">Pantau Progress Reseller</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-sass text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#komisi">Reseller Komisi Penjualan</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-check-decagram text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#cairkan">Cairkan Dana Langsung</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-vector-bezier text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#dashboard"> Dashboard Sendiri</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-settings-outline text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#atur">Atur Komisi Reseller</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-motorbike text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#cekresi">Cek Resi Otomatis</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-printer text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#cetakresi">Cetak Resi Otomatis</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-contactless-payment
                                 text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#validasi">Auto Validasi Pembayaran</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-chat text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#livechat">Live Chat</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-account-circle text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#costumer">Costumer Support</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-arrow-down-bold-box-outline text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#reporting">Reporting</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-dropbox text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#produk">Filter Produk</a></h4>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-filter-variant text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#data">Manajemen Data Produk</a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-home text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#dekorasi">Dekorasi Toko Sendiri </a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-cash-multiple text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#cash">Costum Promo </a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-cash text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#vendor">Atur Komisi Per Produk </a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-monitor-multiple text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#monitoring">Monitoring Seller dan Reseller </a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="key-feature d-flex p-3 rounded shadow bg-white">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-alphabetical text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0"><a href="#kode">Join Dengan Kode Sendiri </a></h4>
                            </div>
                        </div>
                    </div>

                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <section>
        <div class="container" id="responsive">
        
        <div class="panel panel-default">
            <div class="panel-heading">Responsive</div>
            <div class="panel-body">Pasalnya, dengan responsive web design, maka berbagai komposisi, tata letak, akan menyesuaikan dengan sendirinya.
Misalnya, pengunjung akan mudah membaca tanpa harus zoom in atau zoom out, dan menikmati berbagai konten yang ditampilkan sesuai dengan device yang digunakan.</div>
        </div>    
        </section>
        <section class="page-section bg-light" id="tokosendiri">
            <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Buat Website Dengan Nama Toko Sendiri</div>
                <div class="panel-body">Buat website mu dengan nama toko sendiri dan buat terkenal toko mu dengan lebih luas misalnya tokoku.abbabill</div>
            </div>  
            </div>    
        </section>
        <br>
        <section class="page-section bg-light" id="bukareseller">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Dapat Membuka Reseller</div>
                <div class="panel-body">Ajak teman-teman mu menjadi bagian dari kesuksesan toko mu dengan menjadi reseller toko mu sendiri.</div>
            </div>  
            </div>    
        </div>    
        </section>
        <br>
        <section class="page-section bg-light" id="integrasi">
            <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Terintegrasi Dengan Ekspedisi</div>
                <div class="panel-body">Tidak Perlu repot-repot untuk mengecek status ekspedisi secara manual, kita sudah terintegrasi dengan ekspedisi sehingga dapat memudahkan dalam pemantauan pengiriman barang.</div>
            </div>  
            </div>    
        </div>    
        </section>
        <br>
        <section class="page-section bg-light" id="progress">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Dapat Pantau Progress Reseller</div>
                <div class="panel-body">Pantau Progress perkembangan reseller mu dan bantu mereka.</div>
            </div>  
            </div>       
        </section>
        <br>
        <section class="page-section bg-light" id="komisi">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Reseller Dapat Komisi Penjualan</div>
                <div class="panel-body">Dari hasil penjualan reseller dapat komisi penjualan juga dari seller.</div>
            </div>  
            </div>         
        </section>
        <br>
        <section class="page-section bg-light" id="cairkan">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Reseller Dapat Mencairkan Dana Langsung</div>
                <div class="panel-body">Sesudah mendapatkan komisi maka reseller dapat mencairkan dana langsung tanpa harus menunggu lama.</div>
            </div>  
            </div>    
        </section>
        <br>
        <section class="page-section bg-light" id="dashboard">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard Sendiri</div>
                <div class="panel-body">Dashboard Sendiri yang memudahkan mu dalam mengatur segala tentang produk penjualan mu.</div>
            </div>  
            </div>    
        </section>
        <br>
        <section class="page-section bg-light" id="atur">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Atur Komisi Reseller</div>
                <div class="panel-body">Seller dapat mengatur komisi reseller dari setiap penjualan nya.</div>
            </div>  
            </div>    
        </section>
        <br>
        <section class="page-section bg-light" id="cekresi">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Cek Resi Otomatis</div>
                <div class="panel-body">Tidak Perlu cek resi ke website ekspedisi nya, kamu sudah bisa cek resi langsung di dashboard mu</div>
            </div>  
            </div>    
        </section>

        <br>
        <section class="page-section bg-light" id="cetakresi">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Cetak Resi Otomatis</div>
                <div class="panel-body">Kamu tidak perlu mengetik ulang resi untuk mencetak, kamu sudah bisa cetak langsung resi per transaksi langsung di dashboard mu</div>
            </div>  
            </div>    
        </section>

        <br>
        <section class="page-section bg-light" id="validasi">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Auto Validasi Pembayaran</div>
                <div class="panel-body">Kamu tidak perlu mengecek pembayaran secara manual, karna sudah ter cek langsung pembayaran dari setiap transaksi.</div>
            </div>  
            </div>    
        </section>

        <br>
        <section class="page-section bg-light" id="livechat">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Live Chat</div>
                <div class="panel-body">Kamu bingung atau kamu kesulitan? Kamu bisa langsung chat dengan admin kami yang akan membantu kamu ketika kamu kesulitan dan bingung.</div>
            </div>  
            </div>    
        </section>

        <br>
        <section class="page-section bg-light" id="costumer">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Costumer Support</div>
                <div class="panel-body">Pelanggan toko mu kesulitan? Tidak perlu khawatir ada customer support yang siap membantu pelanggan mu.</div>
            </div>  
            </div>    
        </section>
        
        <br>
        <section class="page-section bg-light" id="reporting">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Reporting</div>
                <div class="panel-body">kamu mau tau hasil penghasilan mu per bulan? per tahun? Tidak usah khawatir kami sudah menyiapkan fitur laporan untuk membantu mu dalam manage toko mu.</div>
            </div>  
            </div>    
        </section>

        <br>
        <section class="page-section bg-light" id="produk">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Filter Produk</div>
                <div class="panel-body">Pilih produk mu sesuai dengan kategori yang nanti nya akan memudahkan pelanggan dalam memilih produk kamu </div>
            </div>  
            </div>    
        </section>

        <br>
        <section class="page-section bg-light" id="data">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Manajemen Data Produk</div>
                <div class="panel-body">Tidak perlu khawatir dalam menambahkan atau mengubah data produk, kami sudah menyiapkan manajemen data produk untuk toko mu sehingga kamu dapat lebih mudah menambahkan, mengubah, bahkan menghapus produk mu.</div>
            </div>  
            </div>    
        </section>

        <br>
        <section class="page-section bg-light" id="dekorasi">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Dekorasi Toko Sendiri</div>
                <div class="panel-body">Bosen dengan tampilan dashboar yang monoton? Kamu bisa custom dashboard mu sendiri dengan kreativitas mu senyaman mungkin.</div>
            </div>  
            </div>    
        </section>

        <br>
        <section class="page-section bg-light" id="cash">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Costum Promo</div>
                <div class="panel-body">Toko mu ada diskon atau promo? Kamu tidak perlu khawatir ada costum promo yang memudahkan mu memberikan diskon di setiap produk yang kamu inginkan.</div>
            </div>  
            </div>    
        </section>

        <br>
        <section class="page-section bg-light" id="vendor">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Atur Komisi Per Produk</div>
                <div class="panel-body">Atur komisi penjualan per produk bagi reseller yang sudah join di toko mu.</div>
            </div>  
            </div>    
        </section>

        <br>
        <section class="page-section bg-light" id="monitoring">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Monitoring Seller dan Reseller</div>
                <div class="panel-body">Kamu bisa memantau seller dan reseller dalam mengembangkan produk mu dan kamu juga bisa membantu mereka dalam penjualan.</div>
            </div>  
            </div>    
        </section>

        <br>
        <section class="page-section bg-light" id="kode">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Join Dengan Kode Sendiri</div>
                <div class="panel-body">Kamu mau mengajak teman untuk join? Kamu tidak perlu takut prosesnya ribet, Kamu hanya perlu kasih kode referall toko mu dan teman mu sudah bisa join ke toko mu</div>
            </div>  
            </div>    
        </section>

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