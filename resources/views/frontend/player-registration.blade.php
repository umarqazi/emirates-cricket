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
                <form>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>First name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Last name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Date of birth</label>
                                <input type="text" class="date-calender">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Email</label>
                                <input type="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Mobile no.</label>
                                <input type="number">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Nationality</label>
                                <select>
                                    <option>Dubai</option>
                                    <option>Pakistan</option>
                                    <option>England</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Emirates Living in</label>
                                <select>
                                    <option>Dubai</option>
                                    <option>Pakistan</option>
                                    <option>England</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Visa Status</label>
                                <select>
                                    <option>On</option>
                                    <option>Off</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-row">
                                <label>Emirate most likely to be playing with</label>
                                <div class="playing-checkbox">
                                    <div class="custom-checkboxes">
                                        <input type="checkbox" id="abudhabi">
                                        <label for="abudhabi">Abu dhabi</label>
                                    </div>
                                    <div class="custom-checkboxes">
                                        <input type="checkbox" id="dubai">
                                        <label for="dubai">dubai</label>
                                    </div>
                                    <div class="custom-checkboxes">
                                        <input type="checkbox" id="sharjah">
                                        <label for="sharjah">dubai</label>
                                    </div>
                                    <div class="custom-checkboxes">
                                        <input type="checkbox" id="ajman">
                                        <label for="ajman">Ajman</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-8">
                            <div class="form-drag-wrapper">
                                <label>Upload file</label>
                                <div class="custom-drag-file">
                                    <input type="file" multiple>
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
                                    <input id="file-upload" name='upload_cont_img' type="file" style="display:none;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-8">
                            <label>Your message</label>
                            <textarea placeholder="Write your message"></textarea>
                            <div class="agreement">
                                <div class="custom-checkboxes">
                                    <input type="checkbox" id="agreement">
                                    <label class="tems-label" for="agreement">I agree to the <span>Terms & Conditions</span></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="submit-btn">
                        <input type="submit" class="btn input-submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
