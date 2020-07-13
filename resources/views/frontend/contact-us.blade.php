@extends('frontend.layout.master-frontend')

@section('content')

    <!--   top bar     -->
    @include('frontend.partials.top-bar')

    <!--   Breadcrums     -->
    <div class="breadcrumb">
        <div class="container">
            <p>
                <a href="{{route('home')}}" class="paren-page">Main page</a>
                <img src="{{ URL::asset('frontend/assets/images/right-arrow.png') }}" alt="">
                <a href="{{route('contact')}}" class="child-page">Contact</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Contact us</h1>
    </div>

    <!--   contact Section     -->
    <div class="contact-section">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435521.4148945854!2d74.05351341665515!3d31.48263373327119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1593777792722!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="map-overlay"></div>
        </div>
        <div class="contact-form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <form class="contact-form-inner">
                            <div class="row no-gutters">
                                <div class="col-lg-5">
                                    <div class="contact-left">
                                        <div class="contact-info">
                                            <i class="fa fa-map-marker"></i>
                                            <h6>Our Location</h6>
                                            <p>Towering high at 302 meters across 63 levels</p>
                                        </div>
                                        <div class="contact-info">
                                            <i class="fa fa-envelope"></i>
                                            <h6>Contact Details</h6>
                                            <p><a href="mailto:info@emiratescricket.com">info@emiratescricket.com</a></p>
                                        </div>
                                        <div class="contact-info">
                                            <i class="fa fa-phone"></i>
                                            <h6>Contact Us</h6>
                                            <p><a href="tel:971-2345-135">971-2345-135</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="contact-form-fields">
                                        <h4>Get in Touch</h4>
                                        <div class="input-row">
                                            <label>Name</label>
                                            <input type="text">
                                        </div>
                                        <div class="input-row">
                                            <label>Email</label>
                                            <input type="email">
                                        </div>
                                        <div class="input-row">
                                            <label>Subject</label>
                                            <input type="text">
                                        </div>
                                        <div class="input-row">
                                            <label>Your Message</label>
                                            <textarea placeholder="Write your message"></textarea>
                                        </div>
                                        <div class="submit-contact">
                                            <input type="submit" class="btn input-submit" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
