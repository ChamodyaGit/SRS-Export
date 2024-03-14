@extends('home.layouts.app')
@section('content')

<main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <nav aria-label="breadcrumb">
                                <h2>About</h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">about us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- about wrapper start -->
        <div class="about-us-wrapper pt-60 pb-60 pb-lg-56 pt-sm-58">
            <div class="container">
                <div class="row">
                    <!-- About Text Start -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-text-wrap">
                            <h2><span>Provide Best</span>Product For You</h2>
                            <p>We provide the best Beard oile all over the world. We are the worldd best store in indi
                                for Beard Oil. You can buy our product without any hegitation because they truste us
                                and buy our product without any hagitation because they belive and always happy buy our
                                product.</p>
                            <p>Some of our customer say’s that they trust us and buy our product without any hagitation
                                because they belive us and always happy to buy our product.</p>
                            <p>We provide the beshat they trusted us and buy our product without any hagitation because
                                they belive us and always happy to buy.</p>
                        </div>
                    </div>
                    <!-- About Text End -->
                    <!-- About Image Start -->
                    <div class="col-xl-5 col-lg-6 ml-auto">
                        <div class="about-image-wrap">
                            <img src="assets/img/about/about.jpg" alt="About" />
                        </div>
                    </div>
                    <!-- About Image End -->
                </div>
            </div>
        </div>
        <!-- about wrapper end -->

        <!-- team area start -->
        {{-- <div class="team-area bg-gray pt-60 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>our creative team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-member mb-30">
                            <div class="team-thumb img-full">
                                <img src="assets/img/team/team_member_1.jpg" alt="">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>Jonathan Scott</h3>
                                <h6>CEO</h6>
                                <p>Amadea Shop is a very slick and clean e-commerce template with endless
                                    possibilities.</p>
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-member mb-30">
                            <div class="team-thumb img-full">
                                <img src="assets/img/team/team_member_2.jpg" alt="">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>oliver bastin</h3>
                                <h6>designer</h6>
                                <p>Amadea Shop is a very slick and clean e-commerce template with endless
                                    possibilities.</p>
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-member mb-30">
                            <div class="team-thumb img-full">
                                <img src="assets/img/team/team_member_3.jpg" alt="">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>erik jonson</h3>
                                <h6>developer</h6>
                                <p>Amadea Shop is a very slick and clean e-commerce template with endless
                                    possibilities.</p>
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-member mb-30">
                            <div class="team-thumb img-full">
                                <img src="assets/img/team/team_member_4.jpg" alt="">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>maria mandy</h3>
                                <h6>marketing officer</h6>
                                <p>Amadea Shop is a very slick and clean e-commerce template with endless
                                    possibilities.</p>
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                </div>
            </div>
        </div> --}}
        <!-- team area end -->

        <!-- testimonial area start -->
        <div class="testimonial-area pt-60 pb-88">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="text-white">testimonial</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-carousel-active slick-dot-style">
                            <div class="testimonial-item text-center">
                                <div class="testimonial-thumb">
                                    <img src="assets/img/testimonial/team-member-1.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu aliquam eu,
                                        luctus vehicula velit. Nam eget tortor ut felis fermentum sodales ac eu lacus.
                                        Etiam rhoncus congue arcu sed interdum. Cras dolor diam,</p>
                                    <h3><a href="#">Elizabeth Taylor</a></h3>
                                </div>
                            </div> <!-- end single testimonial item -->
                            <div class="testimonial-item text-center">
                                <div class="testimonial-thumb">
                                    <img src="assets/img/testimonial/team-member-2.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu aliquam eu,
                                        luctus vehicula velit. Nam eget tortor ut felis fermentum sodales ac eu lacus.
                                        Etiam rhoncus congue arcu sed interdum. Cras dolor diam,</p>
                                    <h3><a href="#">jhon doe</a></h3>
                                </div>
                            </div> <!-- end single testimonial item -->
                            <div class="testimonial-item text-center">
                                <div class="testimonial-thumb">
                                    <img src="assets/img/testimonial/team-member-1.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu aliquam eu,
                                        luctus vehicula velit. Nam eget tortor ut felis fermentum sodales ac eu lacus.
                                        Etiam rhoncus congue arcu sed interdum. Cras dolor diam,</p>
                                    <h3><a href="#">erik jonson</a></h3>
                                </div>
                            </div> <!-- end single testimonial item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->

        <!-- choosing area start -->
        <div class="choosing-area pt-60 pb-56 pb-md-24 pb-sm-24">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>why choose us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-choose-item text-center mb-md-30 mb-sm-30">
                            <i class="fa fa-globe"></i>
                            <h4>free shipping</h4>
                            <p>Amadea Shop is a very slick and clean e-commerce template with endless possibilities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-choose-item text-center mb-md-30 mb-sm-30">
                            <i class="fa fa-plane"></i>
                            <h4>fast delivery</h4>
                            <p>Amadea Shop is a very slick and clean e-commerce template with endless possibilities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-choose-item text-center mb-md-30 mb-sm-30">
                            <i class="fa fa-comments"></i>
                            <h4>customers support</h4>
                            <p>Amadea Shop is a very slick and clean e-commerce template with endless possibilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- choosing area end -->
    </main>

@endsection
