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

                            @include('home.components.category_sidebar') <!-- single sidebar end -->

                        </div>
                    </div>
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="blog-item-wrapper blog-item-wrapper__blog-grid blog-item-wrapper__blog-details">
                            <div class="blog-img">
                                <div class="blog-gallery-slider slider-arrow-style slider-arrow-style__style-2">
                                    <div class="blog-single-slide">
                                        <img src="assets/img/blog/original_alba1.jpg" alt="">
                                    </div>
                                    <div class="blog-single-slide">
                                        <img src="assets/img/blog/original_alba1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="blog-inner-content">
                                <h5 class="cat-name"><a href="#">CINNAMON</a></h5>
                                <h3>Alba</h3>
                                <ul class="blog-meta">
                                    <li>Post by: <span>Admin</span></li>
                                    <li>March 10 2023</li>
                                </ul>
                                <p>This is authentic Ceylon cinnamon, which grows naturally on the Sri Lankan island. Ceylon
                                    cinnamon sticks are readily flaked, supple, and coiled like a cigar with multiple thin
                                    strips of cinnamon bark.
                                    Expert craftsmen manufacture the sticks from the inner bark of the cinnamon tree using a
                                    special handmade process. After two years of growth, the thin inner bark of the cinnamon
                                    stems is removed and gathered. after which it was cut into strips, formed into quills,
                                    and dried to produce the item you are holding. </p>
                                <blockquote>
                                    <p>Ceylon Alba cinnamon is the thinnest and best grade of cinnamon among the cinnamon
                                        sticks. This has the highest price tag because it is also recognized as the best
                                        commercial grade cinnamon. Alba is made by extremely talented peelers because of its
                                        pencil-thin gauge diameter (6-7 mm). Alba has the greatest aroma, the most sweet
                                        flavor, and the most golden color compared to the other grades.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- blog main wrapper end -->
    </main>
@endsection
