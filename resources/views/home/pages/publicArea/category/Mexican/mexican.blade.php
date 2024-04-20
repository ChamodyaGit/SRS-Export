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
                                <h2>Mexican</h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mexican</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- blog main wrapper start -->
        <div class="blog-main-wrapper pt-60 pb-60 pb-md-54 pb-sm-54">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="blog-sidebar-wrapper pt-md-60 pt-sm-60">

                            <div class="blog-sidebar">
                                <h4 class="title">categories</h4>
                                <ul class="blog-archive blog-category">
                                    <li><a href="#">Alba Cinnamon</a></li>
                                    <li><a href="{{ route('alba') }}"
                                            style="{{ Route::currentRouteName() === 'alba' ? 'color: #62d2a2;' : '' }}">Alba Cinnamon</a></li>
                                    <li><a href="#">Continental</a></li>
                                    <li>
                                        <a href="{{ route('mexican') }}"
                                            style="{{ Route::currentRouteName() === 'mexican' ? 'color: #62d2a2;' : '' }}">Mexican</a>
                                    </li>
                                    <li><a href="#">Hamburg</a></li>
                                </ul>
                            </div> <!-- single sidebar end -->

                        </div>
                    </div>
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog-item-wrapper blog-item-wrapper__blog-grid mb-40">
                                    <div class="blog-img">
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/m5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-inner-content">
                                        <h5 class="cat-name"><a href="#">Cinnamon</a></h5>
                                        <h3><a href="blog-details.html">M5 Special</a></h3>
                                        <ul class="blog-meta">
                                            {{-- <li>Post by: <span>Admin</span></li>
                                            <li>March 10 2023</li> --}}
                                        </ul>
                                        <p>Out of the Mexican cinnamon grades, M5 grade can be identified as best quality of
                                            cinnamon, the sticks of which are golden brown and thinner in appearance.</p>
                                        <a href="blog-details.html" class="btn btn__bg">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-item-wrapper blog-item-wrapper__blog-grid mb-40">
                                    <div class="blog-img">
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/m4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-inner-content">
                                        <h5 class="cat-name"><a href="#">Cinnamon</a></h5>
                                        <h3><a href="blog-details.html">M4</a></h3>
                                        <ul class="blog-meta">
                                            {{-- <li>Post by: <span>Admin</span></li>
                                            <li>March 10 2023</li> --}}
                                        </ul>
                                        <p>The M4 cinnamon is also processed from the same plant as Cinnamomum Verum. Ceylon
                                            M4 Cinnamon grade has good demand because of the price and appearance of...
                                            {{-- quills as a middle-rate grade. --}}
                                        </p>
                                        <a href="blog-details.html" class="btn btn__bg">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start pagination area -->
                        {{-- <div class="paginatoin-area text-center mt-20">
                            <ul class="pagination-box">
                                <li><a class="Previous" href="#"><i class="ion-ios-arrow-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="Next" href="#"><i class="ion-ios-arrow-right"></i></a></li>
                            </ul>
                        </div> --}}
                        <!-- end pagination area -->
                    </div>
                </div>
            </div>
        </div>
        <!-- blog main wrapper end -->
    </main>
@endsection
