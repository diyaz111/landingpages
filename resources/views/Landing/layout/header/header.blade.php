<div class="container">
    <!-- Logo container-->
    <div>
        <a class="logo" href="index.html"><img src="{{asset ('images/logoicon.jpg')}}" width="50" height="auto;">Abbabill<span class="text-primary">.</span></a>
    </div>
    <!-- <div class="buy-button">
                    <a href="{{ url ('/wizard')}}" target="_blank" class="btn btn-primary">Coba Gratis</a>
                </div>end login button -->
    <!--end login button-->
    <!-- End Logo container-->
    <div class="menu-extras">
        <div class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <!-- End mobile menu toggle-->
        </div>
    </div>

    <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">
            <li><a href="{{url ('/')}}">Home</a></li>
            <li>
                <a href="{{ url('/profile')}}">Tentang Kami</a><span class="menu-arrow"></span>
            </li><li>
                <a href="{{ url('/feature')}}">Feature</a><span class="menu-arrow"></span>
            </li>
            <li>
                <a href="{{ url('/service')}}">Service</a><span class="menu-arrow"></span>
            </li>
            <li>
                <a href="{{url ('/contact')}}">Hubungi Kami</a><span class="menu-arrow"></span>
            </li>
          
        </ul>
        <!--end navigation menu-->
    </div>
    <!--end navigation-->
</div>

</header>