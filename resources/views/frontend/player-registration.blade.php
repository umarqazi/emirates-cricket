@extends('frontend.layout.master-frontend')

@section('title')
    <title>Player Registration Form</title>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/assets/css/datepicker.min.css') }}">
@endsection

@section('content')

    <!--   top bar     -->
    @include('frontend.partials.top-bar')


    <!--   Breadcrums     -->
    <div class="breadcrumb">
        <div class="container">
            <p>
                <a href="{{route('home')}}" class="paren-page">Main page</a>
                <img src="{{ URL::asset('frontend/assets/images/right-arrow.png') }}" alt="">
                <a href="{{route('player-registration')}}" class="child-page">Player Registration Details</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Player registration</h1>
    </div>

    <!--   Player registration Section     -->
    <div class="player-registration">
        <div class="container">
            <h4>Emirates Cricket Board Player registrations are now open!</h4>
            <h5>In completing the registration form, you hereby,</h5>
            <ul class="registration-list">
                <li>Acknowledge that you understand and accept the Emirates Cricket Board Code of Conduct and agree to abide by it;</li>
                <li>All documents uploaded are original and deemed correct.</li>
            </ul>
            <p>Please note that registration is linked to an email address so every registrant will need to have an email address to complete and verify their registration.</p>
            <p><span style="font-weight: 700">Privacy Policy:</span> Your registration information WILL NOT be provided to any third party for any purpose. This information is for the purpose of maintaining participant records for the purposes of resource allocation, facility development and providing you with information on fixtures and competitions.</p>

            <div class="guidlines">
                <h2>Registration Guidlines</h2>
                <div class="registration-form">
                    <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                    <a href="#">Download</a>
                </div>
            </div>

            <div class="general-information">
                <h2>General Information</h2>
                <form method="POST" action="{{route('submit-player-registration')}}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>First name</label>
                                <input type="text" class="@error('first_name') is-invalid @enderror" name="first_name" placeholder="Enter First Name" value="{{old('first_name')}}">

                                @error('first_name')
                                <span class="invalid-feedback login-email-error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Last name</label>
                                <input type="text" class="@error('last_name') is-invalid @enderror" name="last_name" placeholder="Enter Last Name" value="{{old('last_name')}}">

                                @error('last_name')
                                <span class="invalid-feedback login-email-error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Date of birth</label>
                                <input type="text" class="datepicker-here date-calender @error('dob') is-invalid @enderror" name="dob" placeholder="21-06-1994" value="{{old('dob')}}">

                                @error('dob')
                                <span class="invalid-feedback login-email-error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Email</label>
                                <input type="email" class="@error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{old('email')}}">

                                @error('email')
                                <span class="invalid-feedback login-email-error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Mobile no.</label>
                                <input type="number" class="@error('mobile') is-invalid @enderror" name="mobile" placeholder="Enter Mobile No" value="{{old('mobile')}}">

                                @error('mobile')
                                <span class="invalid-feedback login-email-error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Nationality</label>
                                <select name="nationality" class="@error('nationality') is-invalid @enderror">
                                    <option value="">Select a Nationality</option>
                                    @foreach(config('constants.nations') as $nation)
                                        <option value="{{$nation}}" {{old('nationality') === $nation ? 'selected' : ''}}>{{$nation}}</option>
                                    @endforeach
                                </select>

                                @error('nationality')
                                <span class="invalid-feedback login-email-error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Emirates Living in</label>
                                <select name="living_in" class="@error('living_in') is-invalid @enderror">
                                    @foreach(config('constants.states') as $state)
                                        <option value="{{$state}}" {{old('living_in') === $state ? 'selected' : ''}}>{{$state}}</option>
                                    @endforeach
                                </select>

                                @error('living_in')
                                <span class="invalid-feedback login-email-error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Visa Status</label>
                                <select name="visa_status" class="@error('visa_status') is-invalid @enderror">
                                    <option value="1" {{old('visa_status') === 1 ? 'selected' : ''}}>On</option>
                                    <option value="0" {{old('visa_status') === 0 ? 'selected' : ''}}>Off</option>
                                </select>

                                @error('visa_status')
                                <span class="invalid-feedback login-email-error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Emirate most likely to be playing with</label>
                                <div class="playing-checkbox">
                                    @foreach(config('constants.states') as $state)

                                        <div class="custom-checkboxes">
                                            <input type="radio" class="@error('playing_with') is-invalid @enderror" name="playing_with" id="{{$state}}" value="{{$state}}" {{old('playing_with') === $state ? 'checked' : ''}}>
                                            <label for="{{$state}}">{{$state}}</label>
                                        </div>
                                    @endforeach
                                </div>

                                @error('playing_with')
                                <span class="invalid-feedback login-email-error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-8">
                            <div class="form-drag-wrapper">
                                <label>Upload file</label>
                                <div class="custom-drag-file">
                                    <input type="file" name="files" multiple>
                                    <img src="{{ URL::asset('frontend/assets/images/pdf-img.png') }}" alt="">
                                    <p>Drag your files</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="choose-file-wrapper">
                                <label>Headshot photo</label>
                                <div class="upload-btn-wrapper">
                                    <label for="file-upload" class="custom-file-upload">
                                        No file chosen
                                        <div class="choose-text">
                                            <span>
                                                <i class="fa fa-cloud-upload"></i> Upload Image
                                            </span>
                                        </div>
                                    </label>
                                    <input id="file-upload" name='photo' type="file" style="display:none;">
                                </div>

                                @error('photo')
                                <span class="invalid-feedback login-email-error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-8">
                            <label>Your message</label>
                            <textarea name="message" placeholder="Write your message">{{old('message')}}</textarea>

                            @error('message')
                            <span class="invalid-feedback login-email-error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <div class="agreement">
                                <div class="custom-checkboxes">
                                    <input type="checkbox" class="terms-and-condition" id="agreement">
                                    <label class="terms-label" for="agreement">I agree to the <span>Terms & Conditions</span></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="submit-btn">
                        <input type="submit" class="btn input-submit player-registration" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ URL::asset('frontend/assets/js/datepicker.min.js') }} "></script>
    <script src="{{ URL::asset('frontend/assets/js/datepicker.en.js') }} "></script>
    <script>
        $('.datepicker-here').datepicker({
            language: 'en',
            maxDate: new Date(),
            autoClose: true,
            dateFormat: 'dd/mm/yyyy',
        });
    </script>
@endsection
