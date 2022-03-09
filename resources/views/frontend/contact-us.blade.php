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
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11433.97948007691!2d55.20984397947493!3d25.043926300177926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6dda73765d53%3A0x97a75a7af7de0788!2sDubai%20International%20Cricket%20Stadium!5e0!3m2!1sen!2s!4v1629725422198!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="map-overlay"></div>
        </div>
        <div class="contact-form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <form class="contact-form-inner" method="POST" action="{{route('submit-contact-form')}}">
                            @csrf

                            <div class="row no-gutters">
                                <div class="col-lg-12">
                                    <div class="contact-form-fields">
                                        <h4>Get in Touch</h4>

                                        @if(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif

                                        <div class="input-row">
                                            <label>Name</label>
                                            <input type="text" class="@error('name') is-invalid @enderror" name="name"
                                                   placeholder="Enter Name" value="{{old('name')}}" required>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-row">
                                            <label>Email</label>
                                            <input type="text" class="@error('email') is-invalid @enderror" name="email"
                                                   placeholder="Enter Email" value="{{old('email')}}" required>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-row">
                                            <label>Subject</label>
                                            <input type="text" class="@error('subject') is-invalid @enderror"
                                                   name="subject" placeholder="Enter Subject" value="{{old('subject')}}"
                                                   required>

                                            @error('subject')
                                            <span class="invalid-feedback login-email-error" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-row">
                                            <label>Your Message</label>
                                            <textarea class="@error('message') is-invalid @enderror" name="message"
                                                      placeholder="Write your message"
                                                      required>{{old('message')}}</textarea>

                                            @error('message')
                                            <span class="invalid-feedback login-email-error" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
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
