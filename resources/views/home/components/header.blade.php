<header class="header-area">
    <!-- header top start -->
    <div class="header-top d-block d-lg-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo d-block d-lg-none">
                        <a href="index.html">
                            <img src="assets/img/logo/srs-logo.png" height="50" alt="Brand Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->

    <!-- main menu start -->
    <div class="main-menu-area sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-menu d-flex justify-content-between">
                        <div class="logo d-none d-lg-block">
                            <a href="{{ route('home') }}">
                                <img src="assets/img/logo/srs-logo.png" height="50" alt="brand logo">
                            </a>
                        </div>
                        <div class="sticky-logo d-lg-none">
                            <a href="{{ route('home') }}">
                                <img src="assets/img/logo/srs-logo.png" height="50" alt="brand logo">
                            </a>
                        </div>
                        <!-- main menu navbar start -->
                        <nav id="mobile-menu">
                            <ul>
                                <li class="{{ in_array(Route::currentRouteName(), ['home']) ? 'active' : '' }}"><a
                                        href="{{ route('home') }}">Home</a></li>
                                <li><a href="#">Blog</a></li>
                                <li class="{{ in_array(Route::currentRouteName(), ['about']) ? 'active' : '' }}"><a
                                        href="{{ route('about') }}">About Us</a></li>
                                <li class="{{ in_array(Route::currentRouteName(), ['contact']) ? 'active' : '' }}"><a
                                        href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                        <!-- main menu navbar end -->
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- main menu end -->

</header>
