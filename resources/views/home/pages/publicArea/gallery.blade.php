@extends('home.layouts.app')
@section('content')
    <style>
        .gallery-row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            -ms-flex: 33.33%;
            /* IE10 */
            flex: 33.33%;
            max-width: 33.33%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
            }
        }
    </style>
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <nav aria-label="breadcrumb">
                                <h2>Gallery</h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
                    <div class="col-12 mb-3">
                        <div class="about-text-wrap text-center">
                            <h2>Process Flow</h2>
                        </div>
                    </div>
                </div>
                {{-- <div class="grid-container">
                    <div class="img-container wide">
                        <img src="assets/img/process/process01.jpg" alt="Image 1" />
                    </div>
                    <div class="img-container">
                        <img src="assets/img/process/process02.jpg" alt="Image 2" />
                    </div>
                    <div class="img-container tall">
                        <img src="assets/img/process/process03.jpg" alt="Image 3" />
                    </div>
                    <div class="img-container">
                        <img src="assets/img/process/process04.jpg" alt="Image 4" />
                    </div>
                    <div class="img-container wide">
                        <img src="assets/img/process/process05.jpg" alt="Image 5" />
                    </div>
                    <div class="img-container">
                        <img src="assets/img/process/process06.jpg" alt="Image 6" />
                    </div>
                    <div class="img-container tall">
                        <img src="assets/img/process/process07.jpg" alt="Image 7" />
                    </div>
                    <div class="img-container">
                        <img src="assets/img/process/process08.jpg" alt="Image 8" />
                    </div>
                    <div class="img-container">
                        <img src="assets/img/process/process09.jpg" alt="Image 9" />
                    </div>
                </div> --}}
                <div class="gallery-row">
                    <div class="column">
                        <img src="assets/img/process/process01.jpg" style="width:100%">
                        <img src="assets/img/process/process02.jpg" style="width:100%">
                        <img src="assets/img/process/process03.jpg" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="assets/img/process/process04.jpg" style="width:100%">
                        <img src="assets/img/process/process05.jpg" style="width:100%">
                        <img src="assets/img/process/process06.jpg" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="assets/img/process/process07.jpg" style="width:100%">
                        <img src="assets/img/process/process08.jpg" style="width:100%">
                        <img src="assets/img/process/process09.jpg" style="width:100%">
                    </div>
                </div>
            </div>
        </div>
        <!-- about wrapper end -->
    </main>
@endsection
