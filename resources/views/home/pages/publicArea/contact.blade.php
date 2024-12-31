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
                            <h2>Tell us what you want</h2>
                            <form id="contact-form" class="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <input name="name" placeholder="Name *" type="text" required>
                                    </div>
                                    <div class="col-12">
                                        <input name="email" placeholder="Email *" type="email" required>
                                        <!-- Changed type to email -->
                                    </div>
                                    <div class="col-12">
                                        <div class="contact2-textarea text-center">
                                            <textarea placeholder="Message *" name="message" class="form-control2" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-btn">
                                            <button class="btn btn__bg btn__sqr" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="form-message"></p> <!-- Fixed typo here -->
                                    </div>
                                </div>
                            </form>

                            <script>
                                document.getElementById('contact-form').addEventListener('submit', function(event) {
                                    event.preventDefault(); // Prevent the normal form submission

                                    // Disable the submit button to prevent multiple submissions
                                    const submitButton = document.querySelector('button[type="submit"]');
                                    submitButton.disabled = true;
                                    submitButton.textContent = 'Sending...';

                                    // Get the CSRF token
                                    const csrfToken = document.querySelector('input[name="_token"]').value;

                                    // Prepare form data
                                    let formData = new FormData(this);
                                    formData.append('_token', csrfToken); // Add CSRF token manually

                                    // Clear previous messages
                                    let messageElement = document.querySelector('.form-message'); // Fixed typo here
                                    messageElement.textContent = '';

                                    // Send the form data using Fetch API
                                    fetch("{{ route('send.mail') }}", {
                                            method: 'POST',
                                            body: formData,
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.success) {
                                                // Show success message
                                                messageElement.textContent = data.success;
                                                messageElement.style.color = 'green';

                                                setTimeout(function() {
                                                    location.reload(); // Reload the page
                                                }, 3000);
                                            } else if (data.error) {
                                                // Show error message
                                                messageElement.textContent = data.error;
                                                messageElement.style.color = 'red';

                                                setTimeout(function() {
                                                    location.reload(); // Reload the page
                                                }, 3000);
                                            }
                                        })
                                        .catch(error => {
                                            messageElement.textContent = 'Something went wrong. Please try again later.';
                                            messageElement.style.color = 'red';

                                            setTimeout(function() {
                                                location.reload(); // Reload the page
                                            }, 3000);
                                        })
                                        .finally(() => {
                                            // Re-enable the submit button after the request is complete
                                            submitButton.disabled = false;
                                            submitButton.textContent = 'Send Message';
                                        });
                                });
                            </script>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info bg-gray pt-56 pb-md-46 mb-sm-24">
                            <h2>contact us</h2>
                            <p>We produce our own products to the international market. Pure cinnamon sticks, quills,
                                Cinnamon Powder/Ground cinnamon and Cinnamon oil are our major products. Clove, Peppers and
                                other spices and also pure coconut oil are the other products we‘re producing.</p>
                            <ul>
                                <li><i class="fa fa-fax"></i> Address : 91/1, Dalukgalpotta, Olaganduwa, Induruwa</li>
                                <li><a href="tel:+94710215712" class="contact-txt-color"><i class="fa fa-phone"></i> +94 71
                                        021 5712</a></li>
                                <li><a href="mailto:sampathwkd@gmail.com" class="contact-txt-color"><i
                                            class="fa fa-envelope-o"></i> sampathwkd@gmail.com</a></li>
                                <li>
                                    <a href="#" class="social-icon-colors fs-4 me-2"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=+94710215712&text=Hello, more information!"
                                        class="social-icon-colors fs-4 me-2"><i class="fa fa-whatsapp"></i></a>
                                    {{-- <a href="#" class="social-icon-colors fs-4 me-2"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="social-icon-colors fs-4 me-2"><i class="fa fa-youtube"></i></a> --}}
                                </li>
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
            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=%E2%80%9DSanda%E2%80%9D,%201/91,%20Dalukgalpotta,%20Olaganduwa,%20Induruwa,%20Galle,%20Sri%20Lanka.+(SRS%20Exports%20Holdings)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.gps.ie/">gps tracker sport</a></iframe></div>
        </div>
        <!-- map area end -->
    </main>
@endsection
