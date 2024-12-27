<footer class="footer-wrapper">

    <!-- footer main area start -->
    <div class="footer-main-area">
        <div class="container">
            <div class="footer-main-inner bdr-top pt-56 pb-60 pb-md-20 pb-sm-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-widget-title">
                                <h4>SRS Exports Holdings</h4>
                            </div>
                            <div class="footer-widget-body">
                                <div class="newsletter-desc">
                                    <p>To deliver the finest quality Ceylon cinnamon to global markets while promoting
                                        sustainable and ethical farming practices.</p>
                                    <a id="mc-form" href="{{ route('contact') }}">
                                        <button id="mc-submit"><i class="ion-headphone"></i>Contact</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-widget-title">
                                <h4>Links</h4>
                            </div>
                            <div class="footer-widget-body">
                                <ul class="location-wrap">
                                    <li>
                                        <a href="{{ route('home') }}" class="contact-txt-color"><i
                                                class="bi bi-chevron-right"></i> Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('gallery') }}" class="contact-txt-color"><i
                                                class="bi bi-chevron-right"></i> Gallery</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}" class="contact-txt-color"><i
                                                class="bi bi-chevron-right"></i> About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}" class="contact-txt-color"><i
                                                class="bi bi-chevron-right"></i> Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-widget-title">
                                <h4>contact info</h4>
                            </div>
                            <div class="footer-widget-body">
                                <ul class="location-wrap">
                                    <li>
                                        <h6 class="title">call us now:</h6>
                                        <p><a href="tel:+94710215712" class="contact-txt-color"><i
                                                    class="fa fa-phone"></i> +94 71 021 5712</a></p>
                                    </li>
                                    <li>
                                        <h6 class="title">email:</h6>
                                        <p>
                                            <a href="mailto:sampathwkd@gmail.com" class="contact-txt-color"><i
                                                    class="fa fa-envelope-o"></i> sampathwkd@gmail.com</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-widget-title">
                                <h4>Location</h4>
                            </div>
                            <div class="footer-widget-body">
                                <ul class="location-wrap">
                                    <li class="d-flex">
                                        <i class="bi bi-geo-alt-fill mr-2"></i>
                                        <p>Induruwa, Southern Province, Sri Lanka.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer main area end -->

    <!-- footer bottom area start -->
    <div class="footer-bootom bg-gray pt-13 pb-13">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright-text text-center text-md-start" style="margin-top: 5px;">
                        <p>© {{ date('Y') }} <b>SRS</b> Made with <i class="fa fa-heart text-danger"></i> by <a
                                href="mailto:chamodya152@gmail.com">Chamodya</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment-method text-md-end text-center py-0">
                        {{-- <img src="assets/img/payment.png" alt=""> --}}
                        <a href="#" class="social-icon-colors fs-4 ms-3"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-icon-colors fs-4 ms-3"><i class="fa fa-whatsapp"></i></a>
                        <a href="#" class="social-icon-colors fs-4 ms-3"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-icon-colors fs-4 ms-3"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom area end -->

</footer>
