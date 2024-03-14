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
                                <h2>contact</h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">contact us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- contact area start -->
        <div class="contact-area">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="contact-message pt-56 pb-60">
                            <h2>tell us your project</h2>
                            <form id="contact-form" action="{{ route('mail.send') }}" method="post" class="contact-form"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="first_name" placeholder="Name *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="phone" placeholder="Phone *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="email_address" placeholder="Email *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="contact_subject" placeholder="Subject *" type="text">
                                    </div>
                                    <div class="col-12">
                                        <div class="contact2-textarea text-center">
                                            <textarea placeholder="Message *" name="message" class="form-control2" required=""></textarea>
                                        </div>
                                        <div class="contact-btn">
                                            <button class="btn btn__bg btn__sqr" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info bg-gray pt-56 pb-md-46 mb-sm-24">
                            <h2>contact us</h2>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit
                                litterarum formas human.</p>
                            <ul>
                                <li><i class="fa fa-fax"></i> Address : Your address goes here</li>
                                <li><i class="fa fa-phone"></i> demo@example.com</li>
                                <li><i class="fa fa-envelope-o"></i> 0123456789</li>
                            </ul>
                            <div class="working-time">
                                <h3>Working hours</h3>
                                <p><span>Monday – Saturday:</span>08AM – 22PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end -->

        <!-- map area start -->
        <div class="map-area-wrapper">
            {{-- <div id="map_content" data-lat="37.0906456474321" data-lng="-95.70791328350927" data-zoom="5"
                data-maptitle="Hastech" data-mapaddress="Induruwa, Sri Lanka">
            </div> --}}
            {{-- <div id="map_content" data-lat="6.5202030" data-lng="79.9932100" data-zoom="10"
                data-maptitle="Hastech" data-mapaddress="Maggona, Sri Lanka">
            </div> --}}
            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Weheragala%20Kanda,%20Temple%20Road,%20Pothuwila,%20Payagala+(SRS%20Exports%20Holdings)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps tracker sport</a></iframe></div>
        </div>
        <!-- map area end -->
    </main>
@endsection
