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
                {{-- <div class="process-container">
                    <!-- Step 1 -->
                    <div class="process-item">
                        <img src="assets/img/process/process01.jpg" alt="Step 1">
                        <p>Step 1</p>
                    </div>
                    <div class="arrow-right">&#10145;</div>
                    <!-- Step 2 -->
                    <div class="process-item">
                        <img src="assets/img/process/process02.jpg" alt="Step 2">
                        <p>Step 2</p>
                    </div>
                    <div class="arrow-right">&#10145;</div>
                    <!-- Step 3 -->
                    <div class="process-item">
                        <img src="assets/img/process/process03.jpg" alt="Step 3">
                        <p>Step 3</p>
                    </div>
                    <div class="arrow-right">&#10145;</div>
                    <!-- Step 4 -->
                    <div class="process-item">
                        <img src="assets/img/process/process04.jpg" alt="Step 4">
                        <p>Step 4</p>
                    </div>
                    <div class="arrow-down">&#11015;</div>
                    <!-- Step 5 -->
                    <div class="process-item">
                        <img src="assets/img/process/process05.jpg" alt="Step 5">
                        <p>Step 5</p>
                    </div>
                    <div class="arrow-right">&#10145;</div>
                    <!-- Step 6 -->
                    <div class="process-item">
                        <img src="assets/img/process/process06.jpg" alt="Step 6">
                        <p>Step 6</p>
                    </div>
                    <div class="arrow-right">&#10145;</div>
                    <!-- Step 7 -->
                    <div class="process-item">
                        <img src="assets/img/process/process07.jpg" alt="Step 7">
                        <p>Step 7</p>
                    </div>
                    <div class="arrow-right">&#10145;</div>
                    <!-- Step 8 -->
                    <div class="process-item">
                        <img src="assets/img/process/process08.jpg" alt="Step 8">
                        <p>Step 8</p>
                    </div>
                    <div class="arrow-down">&#11015;</div>
                    <!-- Step 9 -->
                    <div class="process-item">
                        <img src="assets/img/process/process09.jpg" alt="Step 9">
                        <p>Step 9</p>
                    </div>
                </div> --}}
                <div class="grid-container">
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
                </div>
            </div>
        </div>
        <!-- about wrapper end -->
    </main>
@endsection
