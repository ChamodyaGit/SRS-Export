@extends('home.layouts.app')
@section('content')
    <main>
        <!-- hero slider area start -->
        <section class="hero-slider-area">
            <div class="hero-slider-active slider-arrow-style">
                <div class="single-slider hero-bg hero-bg__1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="content-inner">
                                    <div class="slider-content">
                                        <h1>Exporter of premium Ceylon cinnamon products</h1>
                                        <p>SRS EXPORTS HOLDINGS is specializing in the export of high-quality Ceylon
                                            cinnamon products in Southern Province of Sri Lanka established in 2023</p>
                                        <a href="{{ route('contact') }}" class="btn">Contact Us</a>
                                    </div>
                                    <div class="slider-img">
                                        <img src="assets/img/slider/cinnamon-slide1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider hero-bg hero-bg__1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="content-inner">
                                    <div class="slider-content">
                                        <h1>Carefully processed for a healthier lifestyle.</h1>
                                        <p>We have taken utmost of care in processing our products to uplift your healthy
                                            lifestyle</p>
                                        <a href="{{ route('contact') }}" class="btn">Contact Us</a>
                                    </div>
                                    <div class="slider-img">
                                        <img src="assets/img/slider/cinnamon-slide3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero slider area start -->

        <!-- service features start -->
        <section class="service-features pt-30">
            <div class="container">
                <div class="service-features-inner theme-color d-none d-md-flex">
                    <div class="single-features-item">
                        <div class="features-icon">
                            <i class="ion-paper-airplane"></i>
                        </div>
                        <div class="features-content">
                            <h5>Worldwide Distribution</h5>
                            <p>Global delivery to any destination</p>
                        </div>
                    </div>
                    <div class="single-features-item">
                        <div class="features-icon">
                            <i class="ion-chatbubbles"></i>
                        </div>
                        <div class="features-content">
                            <h5>Customers Support</h5>
                            <p>Quality and sustainability first</p>
                        </div>
                    </div>
                    <div class="single-features-item">
                        <div class="features-icon">
                            <i class="bi bi-stars"></i>
                        </div>
                        <div class="features-content">
                            <h5>High Quality</h5>
                            <p>Supply from a GMP certified company</p>
                        </div>
                    </div>
                </div>
                <div class="service-features-inner theme-color d-block d-md-none">
                    <div class="col-12 single-features-item">
                        <div class="features-icon" style="width: 60px;">
                            <i class="ion-paper-airplane"></i>
                        </div>
                        <div class="features-content">
                            <h5>Worldwide Distribution</h5>
                            <p>Global delivery to any destination</p>
                        </div>
                    </div>
                    <div class="col-12 single-features-item">
                        <div class="features-icon" style="width: 60px;">
                            <i class="ion-chatbubbles"></i>
                        </div>
                        <div class="features-content">
                            <h5>Customers Support</h5>
                            <p>Quality and sustainability first</p>
                        </div>
                    </div>
                    <div class="col-12 single-features-item">
                        <div class="features-icon" style="width: 60px;">
                            <i class="bi bi-stars"></i>
                        </div>
                        <div class="features-content">
                            <h5>High Quality</h5>
                            <p>Supply from a GMP certified company</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service features end -->

        <!-- popular category start -->
        <section class="popular-category bg-gray mt-minus pt-60 pb-60 pb-md-30 pb-sm-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="welcome-content-inner mt-3 mt-md-5">
                            <p>Welcome to <b>SRS EXPORTS HOLDINGS</b>. We are one of the fastest-growing suppliers of
                                organic Ceylon cinnamon in both the global wholesale and retail markets. Our product range
                                includes both Organic and conventional Ceylon Cinnamon Sticks, Cinnamon Powder and Cinnamon
                                Oil. All sourced directly from the beautiful island of Sri Lanka.</p>
                        </div>
                        <div class="welcome-sub-content-inner mt-3">
                            <p>Strict adherence to international safety standards is maintained during the cultivation and
                                harvesting of all cinnamon plants. We put our customers' health first and make sure that our
                                products adhere to the strictest safety and quality standards. SRS EXPORTS HOLDINGS is an
                                officially recognized exporter/seller of Ceylon Cinnamon by the Export Development Board of
                                Sri Lanka. We are pleased to provide Ceylon cinnamon, the best in the world, which comes
                                from Sri Lanka, the fascinating Wonder of Asia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- popular category end -->

        <!-- product tab area start -->
        <section class="product-tab pt-60 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>Our Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- product tab menu start -->
                        <div class="product-tab-menu pb-30">
                            <ul class="nav justify-content-center">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#tab_one">Ceylon Cinnamon Powder</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#tab_two">Cinnamon Extracts and Oils</a>
                                </li>
                            </ul>
                        </div>
                        <!-- product tab menu end -->
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tab_one">
                                <div class="product-tab-wrapper">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <img src="assets/img/cinnamon_products/cPowder.webp" alt="">
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-8">
                                            <div class="blog-share-link mt-4">
                                                <h5>Ground cinnamon for use in various culinary applications.</h5>
                                            </div>
                                            <div class="card-body mt-3">
                                                Cinnamon can help lower blood sugar levels in people with type 2 diabetes.
                                                It can do this by increasing glucose uptake, improving insulin sensitivity,
                                                and slowing gastric emptying. Cinnamon powder can be used in savory dishes
                                                to add a warm, spicy flavor. It can be added to meat dishes, vegetable
                                                dishes, stews and soups to add a touch of flavor.
                                            </div>
                                        </div>
                                        {{-- <div class="col-12 col-md-6 col-lg-4"></div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_two">
                                <div class="product-tab-wrapper">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <img src="assets/img/cinnamon_products/cOil.webp" alt="">
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-8">
                                            <div class="blog-share-link mt-4">
                                                <h5>Concentrated forms of cinnamon for use in food, beverages, and
                                                    cosmetics.</h5>
                                            </div>
                                            <div class="card-body mt-3">
                                                Cinnamon oil is a widely used ingredient in the food and beverages industry.
                                                It is one of the main ingredients in many products including sugar-free gum
                                                and hard candy. It is also used in the preparation of commercial baked goods
                                                as a natural food preservative. SRS Cinnamon Bark essential oil leaves you
                                                feeling stable and grounded.
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card-body">
                                                Cinnamon oil is also used as a flavouring in tea and wine. In cooking, most
                                                recipes involve cinnamon oil as an additive. Cinnamon oil is an active
                                                ingredient used in the cosmetic and personal care industry including in the
                                                manufacturing of items such as
                                                soap, shampoo, Perfumes, and face creams. The oil is used to soothe dry
                                                skin. Certain cosmetic remedies involve the application of cinnamon oil
                                                along with regular face cream since cinnamon functions as a therapeutic and
                                                rejuvenating skin moisturizer.
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-8">
                                            <div class="card-body mt-3">
                                                Cinnamon oil’s combination of compounds such as cinnamaldehyde, cinnamate,
                                                and cinnamic acid makes it a potent medication against neurodegenerative
                                                diseases. It is also rich in antioxidants and has anti inflammatory,
                                                anticancer and antimicrobial properties that make it an ideal ingredient for
                                                many traditional and modern medicines for treating Parkinson’s disease and
                                                Alzheimer’s disease.
                                            </div>
                                            <div class="card-body mt-3">
                                                Ceylon Cinnamon leaf oil is the variety that is used mostly in soap,
                                                shampoo, and perfume making since it is high in its fragrance value when
                                                compared to bark oil and Chinese
                                                cassia oil.
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <img src="assets/img/cinnamon_products/cOil2.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product tab area end -->

        <!-- brand area start -->
        <div class="bg-gray brand-area">
            <div class="container">
                <div class="brand-inner pt-30 pb-30 mb-md-4">
                    {{-- <div class="footer-widget-title text-center">
                        <h4>SRS Exports Holdings</h4>
                    </div> --}}
                    <div class="section-title text-center mt-md-3">
                        <h2>Categories</h2>
                        <p class="pt-md-3">We are producing the below mentioned all categories of pure Ceylon Cinnamon in a
                            hygienic condition.</p>
                    </div>
                    <div class="brand-active slick-padding justify-content-center">
                        <div class="brand-item text-center">
                            <a href="#">
                                <img src="assets/img/brand/cbr1.png" alt="brand image">
                            </a>
                            <p class="d-block d-md-none">Albha</p>
                        </div>
                        <div class="brand-item text-center">
                            <a href="#">
                                <img src="assets/img/brand/cbr2.png" alt="brand image">
                            </a>
                            <p class="d-block d-md-none">C5 Extra Special</p>
                        </div>
                        <div class="brand-item text-center">
                            <a href="#">
                                <img src="assets/img/brand/cbr3.png" alt="brand image">
                            </a>
                            <p class="d-block d-md-none">C5</p>
                        </div>
                        <div class="brand-item text-center">
                            <a href="#">
                                <img src="assets/img/brand/cbr4.png" alt="brand image">
                            </a>
                            <p class="d-block d-md-none">C4</p>
                        </div>
                        <div class="brand-item text-center">
                            <a href="#">
                                <img src="assets/img/brand/cbr5.png" alt="brand image">
                            </a>
                            <p class="d-block d-md-none">C3</p>
                        </div>
                        <div class="brand-item text-center">
                            <a href="#">
                                <img src="assets/img/brand/cbr6.png" alt="brand image">
                            </a>
                            <p class="d-block d-md-none">H1</p>
                        </div>
                        <div class="brand-item text-center">
                            <a href="#">
                                <img src="assets/img/brand/cbr7.png" alt="brand image">
                            </a>
                            <p class="d-block d-md-none">H2</p>
                        </div>
                        <div class="brand-item text-center">
                            <a href="#">
                                <img src="assets/img/brand/cbr8.png" alt="brand image">
                            </a>
                            <p class="d-block d-md-none">H3</p>
                        </div>
                        <div class="brand-item text-center">
                            <a href="#">
                                <img src="assets/img/brand/cbr9.png" alt="brand image">
                            </a>
                            <p class="d-block d-md-none">M4</p>
                        </div>
                        <div class="brand-item text-center">
                            <a href="#">
                                <img src="assets/img/brand/cbr10.png" alt="brand image">
                            </a>
                            <p class="d-block d-md-none">M5 Special</p>
                        </div>
                        <div class="brand-item text-center">
                            <a href="#">
                                <img src="assets/img/brand/cbr11.png" alt="brand image">
                            </a>
                            <p class="d-block d-md-none">M5</p>
                        </div>
                    </div>
                    <div class="brand-active slick-padding justify-content-center d-none d-md-block">
                        <div class="brand-item text-center">
                            <p>Albha</p>
                        </div>
                        <div class="brand-item text-center">
                            <p>C5 Extra Special</p>
                        </div>
                        <div class="brand-item text-center">
                            <p>C5</p>
                        </div>
                        <div class="brand-item text-center">
                            <p>C4</p>
                        </div>
                        <div class="brand-item text-center">
                            <p>C3</p>
                        </div>
                        <div class="brand-item text-center">
                            <p>H1</p>
                        </div>
                        <div class="brand-item text-center">
                            <p>H2</p>
                        </div>
                        <div class="brand-item text-center">
                            <p>H3</p>
                        </div>
                        <div class="brand-item text-center">
                            <p>M4</p>
                        </div>
                        <div class="brand-item text-center">
                            <p>M5 Special</p>
                        </div>
                        <div class="brand-item text-center">
                            <p>M5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

        <!-- banner statistic area start -->
        <section class="py-5">
            <div class="banner-statistics">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h2>Cinnamon Grades</h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="20%">Grade</th>
                                            <th width="20%">Diameter of cinnamon sticks<br />(Maximum)<br />(mm)
                                            </th>
                                            <th width="20%">Number of 42 inch long cinnamon sticks in 1 kg</th>
                                            <th width="20%">Gross size (maximum) as a percentage of freckles</th>
                                            <th width="20%">Width of bark to be taken in making cinnamon<br />(mm)
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td><span>Alba</span></td>
                                            <td><span>6</span></td>
                                            <td><span>45</span></td>
                                            <td><span>10</span></td>
                                            <td><span>22</span></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-topic">Continental</span></td>
                                            <td class="bg-topic"><span></span></td>
                                            <td class="bg-topic"><span></span></td>
                                            <td class="bg-topic"><span></span></td>
                                            <td class="bg-topic"><span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span>C5 (Very special)</span></td>
                                            <td><span>8</span></td>
                                            <td><span>33</span></td>
                                            <td><span>10</span></td>
                                            <td><span>29</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>C5 (Special)</span></td>
                                            <td><span>10</span></td>
                                            <td><span>30</span></td>
                                            <td><span>10</span></td>
                                            <td><span>35</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>C5</span></td>
                                            <td><span>12</span></td>
                                            <td><span>27</span></td>
                                            <td><span>15</span></td>
                                            <td><span>42</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>C4</span></td>
                                            <td><span>16</span></td>
                                            <td><span>22</span></td>
                                            <td><span>15</span></td>
                                            <td><span>54</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>C3</span></td>
                                            <td><span>18</span></td>
                                            <td><span>20</span></td>
                                            <td><span>20</span></td>
                                            <td><span>61</span></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-topic">Mexican</span></td>
                                            <td class="bg-topic"><span></span></td>
                                            <td class="bg-topic"><span></span></td>
                                            <td class="bg-topic"><span></span></td>
                                            <td class="bg-topic"><span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span>M5 (Special)</span></td>
                                            <td><span>16</span></td>
                                            <td><span>22</span></td>
                                            <td><span>60</span></td>
                                            <td><span>54</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>M5</span></td>
                                            <td><span>18</span></td>
                                            <td><span>20</span></td>
                                            <td><span>60</span></td>
                                            <td><span>60</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>M4</span></td>
                                            <td><span>21</span></td>
                                            <td><span>15</span></td>
                                            <td><span>60</span></td>
                                            <td><span>70</span></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-topic">Hamburg</span></td>
                                            <td class="bg-topic"><span></span></td>
                                            <td class="bg-topic"><span></span></td>
                                            <td class="bg-topic"><span></span></td>
                                            <td class="bg-topic"><span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span>H1</span></td>
                                            <td><span>23</span></td>
                                            <td><span>10</span></td>
                                            <td><span>25</span></td>
                                            <td><span>76</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>H2 (Special)</span></td>
                                            <td><span>25</span></td>
                                            <td><span>09</span></td>
                                            <td><span>40</span></td>
                                            <td><span>83</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>H2</span></td>
                                            <td><span>32</span></td>
                                            <td><span>07</span></td>
                                            <td><span>55</span></td>
                                            <td><span>105</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>H3</span></td>
                                            <td><span>38</span></td>
                                            <td><span>06</span></td>
                                            <td><span>65</span></td>
                                            <td><span>123</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner statistic area end -->

        <!-- choose us and testimonial area start -->
        <section class="bg-gray pt-60 pb-60 mt-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title text-center">
                                    <h2>why choose us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="choose-us-wrapper">
                                    <div class="accordion" id="choose-us">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="accordio-heading" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <i class="ion-ribbon-b"></i>
                                                        Quality Assurance
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-bs-parent="#choose-us">
                                                <div class="card-body">
                                                    Supply from a Good Manufacturing Process (GMP) certified company to
                                                    ensure product quality and ethical practices
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="accordio-heading" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-controls="collapseTwo">
                                                        <i class="ion-android-car"></i>
                                                        Custom Packaging and distribution
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-bs-parent="#choose-us">
                                                <div class="card-body">
                                                    Tailored packaging solutions to meet client specifications. Worldwide
                                                    service will be provided in to an any destination
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="accordio-heading" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-controls="collapseThree">
                                                        <i class="ion-university"></i>
                                                        Sourcing and Production
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-bs-parent="#choose-us">
                                                <div class="card-body">
                                                    Cinnamon is sourced from local farmers in Sri Lanka, ensuring
                                                    high-quality raw materials
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h5 class="mb-0">
                                                    <button class="accordio-heading" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-controls="collapseFour">
                                                        <i class="ion-university"></i>
                                                        Production Facilities
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                data-bs-parent="#choose-us">
                                                <div class="card-body">
                                                    Traditional processing methods facilities equipped with good packing to
                                                    preserve the quality of the cinnamon
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 pt-md-60 pt-sm-60">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title text-center">
                                    <h2>What People Say</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="testimonial-wrapper">
                                    <div class="testimonial-tab-menu">
                                        <ul class="nav">
                                            <li>
                                                <a data-bs-toggle="tab" href="#testimonial_one">
                                                    <img class="testimonial-thumb"
                                                        src="assets/img/testimonial/customer-avatar.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a class="active" data-bs-toggle="tab" href="#testimonial_two">
                                                    <img class="testimonial-thumb"
                                                        src="assets/img/testimonial/customer-avatar.jpg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="tab" href="#testimonial_three">
                                                    <img class="testimonial-thumb"
                                                        src="assets/img/testimonial/customer-avatar.jpg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-tab-wrapper">
                                        <div class="tab-content">
                                            <div class="tab-pane fade" id="testimonial_one">
                                                <div class="testimonial-content-inner">
                                                    <p>“ I’ve been sourcing cinnamon from SRS Exports Holdings for years,
                                                        and their quality is consistently excellent. The
                                                        shipments are always timely, and their customer service is
                                                        top-notch. Highly recommend! ”</p>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="designation">
                                                        Alper
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade active show" id="testimonial_two">
                                                <div class="testimonial-content-inner">
                                                    <p>“ SRS Exports Holdings is our trusted partner for premium cinnamon.
                                                        Their attention to detail in sourcing and exporting ensures that we
                                                        always receive the best products. Great company to work with! ”</p>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="designation">
                                                        Antony
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="testimonial_three">
                                                <div class="testimonial-content-inner">
                                                    <p>“ We’ve been working with SRS Exports Holdings for our cinnamon
                                                        needs, and they never disappoint. The cinnamon is always of the
                                                        highest quality, and the communication throughout the process is
                                                        seamless. A reliable and professional exporter! ”</p>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="designation">
                                                        Mamoru
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose us and testimonial area start -->

    </main>
@endsection
