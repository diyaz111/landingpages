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
<body>
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
                                <img src="{{asset ('landrick-asset/images/user/login.png')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="login-page bg-white shadow rounded p-4">
                                <div class="text-center">
                                    <h4 class="mb-4">{{ __('Login') }}</h4>  
                                </div>
                                
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label for="email">{{ __('Email Address') }} <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-account ml-3 icons"></i>
                                                <input type="email"  id="email" class="form-control pl-5  @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}"  name="email" autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>{{ __('Password') }} <span class="text-danger">*</span></label>
                                                <i class="mdi mdi-key ml-3 icons"></i>
                                                <input type="password" id="password" class="form-control pl-5 @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                  
                                        <div class="col-lg-12">
                                            @if (Route::has('password.request'))
                                            <p class="float-right forgot-pass"><a href="{{ route('password.request') }}" class="text-dark font-weight-bold">Forgot password ?</a></p>
                                            @endif
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-0">
                                            <button class="btn btn-primary w-100"> {{ __('Login') }}</button>
                                        </div>
                                      
                                        <div class="col-12 text-center">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="{{ route('register') }}" class="text-dark font-weight-bold">Sign Up</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div><!---->
                        </div> <!--end col-->
                    </div><!--end row-->
                </div> <!--end container-->
            </div>
        </div>
    </section><!--end section-->
     <!-- javascript -->
     <script src="{{asset ('landrick-asset/js/jquery.min.js')}}"></script>
    <script src="{{asset ('landrick-asset/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('landrick-asset/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('landrick-asset/js/scrollspy.min.js')}}"></script>
    <!-- Main Js -->
    <script src="{{asset ('landrick-asset/js/app.js')}}"></script>
    </body>
</html>

