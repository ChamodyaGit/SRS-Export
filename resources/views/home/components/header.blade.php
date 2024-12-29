<header class="header-area">
    <!-- header top start -->
    <div class="header-top d-block d-lg-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="logo d-flex d-lg-none justify-content-center">
                        <a href="index.html">
                            <img src="assets/img/logo/srs-logo.png" height="45" alt="Brand Logo">
                        </a>
                        {{-- <h1 class="logo-styles">SRS</h1><span class="logo-styles ms-2" style="margin-bottom: -3px;">Exports Holdings</span> --}}
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
                            {{-- <h1 class="logo-styles">SRS Exports Holdings</h1> --}}
                        </div>
                        <div class="sticky-logo d-lg-none justify-content-center">
                            <a href="{{ route('home') }}">
                                <img src="assets/img/logo/srs-logo.png" height="38" alt="brand logo">
                            </a>
                            {{-- <h1 class="logo-styles">SRS</h1><span class="logo-styles ms-2" style="margin-bottom: -3px;">Exports Holdings</span> --}}
                        </div>
                        <!-- main menu navbar start -->
                        <nav id="mobile-menu">
                            <ul>
                                <li class="{{ in_array(Route::currentRouteName(), ['home']) ? 'active' : '' }}"><a
                                        href="{{ route('home') }}">Home</a></li>
                                <li class="{{ in_array(Route::currentRouteName(), ['gallery']) ? 'active' : '' }}"><a
                                        href="{{ route('gallery') }}">Gallery</a></li>
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
