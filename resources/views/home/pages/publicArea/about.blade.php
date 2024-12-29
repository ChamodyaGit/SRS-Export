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
                            <h2><span>Provide Best</span>SRS Exports Holdings</h2>
                            <p>SRS Exports Holdings is specializing in the export of high-quality Ceylon cinnamon products
                                in Southern Province of Sri Lanka established in 2023. We have taken utmost of care in
                                processing our products to uplift your healthy lifestyle. </p>
                            <p>Ceylon cinnamon is known as ‘true cinnamon’ and ‘pure cinnamon’. It is obtained from the bark
                                of <i>Cinnamomum zeylanicum</i>, which is an evergreen plant native to Sri Lanka (Ceylon).
                            </p>
                            <p> The 90% of world production of true cinnamon originates from Sri Lanka. The unique method of
                                processing and curing of cinnamon entices the characteristic flavor of cinnamon production
                                of other countries. </p>
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
        <div class="team-area bg-gray pt-60 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-member mb-30">
                            <div class="team-thumb img-full">
                                <img src="assets/img/team/ceo_img.png" alt="">
                                <div class="team-social">
                                    <a href="https://www.facebook.com/darshana.kumara.14/"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="https://linkedin.com/in/darshana-sampath-kumara"><i class="fa fa-linkedin"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=+94710215712&text=Hello, more information!"><i class="fa fa-whatsapp"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>H.W.K.D.Sampath Kumara</h3>
                                <h6>Founder & CEO</h6>
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                    <div class="col-lg-9 col-md-6 col-sm-12">
                        {{-- <div class="team-member mb-30">
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
                        </div> --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title text-center">
                                    <h2>About Our CEO</h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <p>H.W.K.D. Sampath Kumara is the visionary founder and CEO of our company, which began as a
                                    home-based business in 2023 and has swiftly grown into a leading exporter in just one
                                    year. With over a decade of experience in the Cinnamon industry, Sampath’s deep
                                    understanding of Sri Lanka’s renowned cinnamon, known as the “King of Spices,” has been
                                    a key driver behind the company’s rapid success.</p><br />
                                <p>Driven by his enthusiasm for Sri Lankan cinnamon, Sampath is committed to ensuring the
                                    company becomes the number one exporter of this premium spice worldwide. His dedication
                                    to quality, sustainability, and innovation fuels the company’s growth, ensuring that Sri
                                    Lanka’s finest cinnamon reaches global markets while preserving the island’s legacy in
                                    spice production.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team area end -->

        <!-- testimonial area start -->
        {{-- <div class="testimonial-area pt-60 pb-88">
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
        </div> --}}
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
                            <i class="fa fa-star"></i>
                            <h4>Quality Assurance</h4>
                            <p>Good Manufacturing Process(GMP) certified Company and Fair Trade to ensure product quality
                                and ethical practices.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-choose-item text-center mb-md-30 mb-sm-30">
                            <i class="fa fa-plane"></i>
                            <h4>Custom Packaging & distribution</h4>
                            <p>Tailored packaging solutions to meet client specifications. Worldwide service will be
                                provided in to an any destination.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-choose-item text-center mb-md-30 mb-sm-30">
                            <i class="fa fa-comments"></i>
                            <h4>customers support</h4>
                            <p>Dedicated to quality and sustainability, ensuring top-notch customer support while delivering
                                premium cinnamon worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- choosing area end -->
    </main>
@endsection
