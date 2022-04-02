
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
    <link href="{{asset ('landrick-asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{asset ('landrick-asset/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Main css -->
    <link href="{{asset ('landrick-asset/css/style.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->
    
    <div class="back-to-home rounded d-none d-sm-block">
        <a href="index.html" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
    </div>

    <!-- Hero Start -->
    <section class="bg-home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-6">
                            <div class="mr-lg-5">   
                                <img src="{{asset ('landrick-asset/images/user/signup.png')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="login_page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">Signup</h4>  
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">                                               
                                                <label for="name">Name <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-account ml-3 icons"></i>
                                                <input type="name"  id="name" class="form-control pl-5  @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}"  name="name" autocomplete="name" autofocus>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-key ml-3 icons"></i>
                                                <input type="alamat"  id="alamat" class="form-control pl-5  @error('alamat') is-invalid @enderror" placeholder="Alamat" value="{{ old('alamat') }}"  name="alamat" autocomplete="alamat" autofocus>
                                                    @error('alamat')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label for="phone">No Telpon <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-key ml-3 icons"></i>
                                                <input type="phone"  id="phone" class="form-control pl-5  @error('phone') is-invalid @enderror" placeholder="No Telepon" value="{{ old('phone') }}"  name="phone" autocomplete="phone" autofocus>
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label for="email">Your Email <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-account ml-3 icons"></i>
                                                <input type="email"  id="email" class="form-control pl-5  @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}"  name="email" autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label for="password">Password <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-key ml-3 icons"></i>
                                                <input type="password" id="password" class="form-control pl-5 @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label for="password-confirm">Confirm Password <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-key ml-3 icons"></i>
                                             
                                                <input type="password" id="password-confirm" class="form-control pl-5" placeholder="Password Confirm" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary w-100">Register</button>
                                        </div>
                                        <div class="col-lg-12 mt-4 text-center">
                                            <h6>Or Signup With</h6>
                                            <ul class="list-unstyled social-icon mb-0 mt-3">
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google"></i></a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-github-circle" title="Github"></i></a></li>
                                            </ul><!--end icon-->
                                        </div>
                                        <div class="mx-auto">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="page_login.html" class="text-dark font-weight-bold">Sign in</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!--end col-->
                    </div><!--end row-->
                </div> <!--end container-->
            </div>
        </div>
    </section><!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    <script src="{{asset ('landrick-asset/js/jquery.min.js')}}"></script>
    <script src="{{asset ('landrick-asset/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('landrick-asset/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset ('landrick-asset/js/scrollspy.min.js')}}"></script>
    <!-- Main Js -->
    <script src="{{asset ('landrick-asset/js/app.js')}}"></script>
</body>
</html>