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
                <a href="{{route('tournament-registration')}}" class="child-page">Tournament Registration </a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Tournament Registration</h1>
    </div>

    <!--   Tournament Registration     -->
    <div class="tournament-registration">
        <div class="container">
            <form id="tournament-registration">
                <div class="tab_wrapper tournament-registration-accordian">
                    <ul class="tab_list">
                        <li class="active">
                            <h2>Applicant Details</h2>
                        </li>
                        <li>
                            <h2>Tournament Details</h2>
                        </li>
                        <li>
                            <h2>Details of Participating Teams & Players</h2>
                        </li>
                        <li>
                            <h2>Commercial Arrangements</h2>
                        </li>
                    </ul>

                    <div class="content_wrapper">
                        <div class="tab_content active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Name of organizer</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Address</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Telephone no.</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Mobile no.</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Email</label>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Is the organization a registered company in the UAE?.</label>
                                        <div class="organization-radio-btns">
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="yes" name="radio-group-btn">
                                                <label for="yes">Yes</label>
                                            </div>
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="no" name="radio-group-btn">
                                                <label for="no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Company name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Address</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Telephone no.</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Website</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab_content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Name of Tournament</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Proposed dates of Tournament</label>
                                        <input type="text" class="date-calender">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Proposed venue(s)</label>
                                        <select>
                                            <option selected>Select</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Where will the final be played?</label>
                                        <select>
                                            <option selected>Select</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Are all matches to take place in one Emirate?</label>
                                        <div class="organization-radio-btns">
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="yes1" name="radio-group">
                                                <label for="yes1">Yes</label>
                                            </div>
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="no1" name="radio-group">
                                                <label for="no1">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Match playing surface?</label>
                                        <div class="organization-radio-btns">
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="Turf" name="play-group">
                                                <label for="Turf">Turf</label>
                                            </div>
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="Artificial" name="play-group">
                                                <label for="Artificial">Artificial</label>
                                            </div>
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="Sand" name="play-group">
                                                <label for="Sand">Sand</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Has this tournament been run previously?</label>
                                        <div class="organization-radio-btns">
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="yes2" name="tournament-group">
                                                <label for="yes2">Yes</label>
                                            </div>
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="no2" name="tournament-group">
                                                <label for="no2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-7">
                                    <div class="form-drag-wrapper">
                                        <label>If YES please provide details of the previous approval(s)</label>
                                        <textarea placeholder="Write your message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-5">
                                    <div class="choose-file-wrapper">
                                        <label>Choose file</label>
                                        <div class="upload-btn-wrapper">
                                            <label for="file-upload" class="custom-file-upload">
                                                No file chosen
                                                <div class="choose-text">
                                                    <span>
                                                        <i class="fa fa-cloud-upload"></i> Choose file
                                                    </span>
                                                </div>
                                            </label>
                                            <input id="file-upload" name="upload_cont_img" type="file" style="display:none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab_content">
                            <div class="row teams-section-row">
                                <div class="col-md-9">
                                    <div class="teams-section">
                                        <h5>Have any of the teams been sold by the organizers on a franchise arrangement?</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="organization-radio-btns teams-section-btns">
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold" name="sold-group">
                                            <label for="sold">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold1" name="sold-group">
                                            <label for="sold1">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row teams-section-row">
                                <div class="col-md-9">
                                    <div class="teams-section">
                                        <h5>Have any of the teams ever been prevented or banned from participating in approved cricket in the UAE?</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="organization-radio-btns teams-section-btns">
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold2" name="sold2-group">
                                            <label for="sold2">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold3" name="sold2-group">
                                            <label for="sold3">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row teams-section-row">
                                <div class="col-md-9">
                                    <div class="teams-section">
                                        <h5>Are you aware of any proposed payments being made to any players to take part in this tournament?</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="organization-radio-btns teams-section-btns">
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold4" name="sold4-group">
                                            <label for="sold4">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold5" name="sold4-group">
                                            <label for="sold5">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row teams-section-row">
                                <div class="col-md-9">
                                    <div class="teams-section">
                                        <h5>Are you aware of any team that is proposing to use players who have been prevented or banned from participating in approved cricket in the UAE or elsewhere?</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="organization-radio-btns teams-section-btns">
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold6" name="sold6-group">
                                            <label for="sold6">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold7" name="sold6-group">
                                            <label for="sold7">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row teams-section-row">
                                <div class="col-md-9">
                                    <div class="teams-section">
                                        <h5>Have any of the players taking part in the tournament played in the last 24 months in Test, ODI or T20i cricket?</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="organization-radio-btns teams-section-btns">
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold8" name="sold8-group">
                                            <label for="sold8">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold9" name="sold9-group">
                                            <label for="sold9">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row teams-section-row">
                                <div class="col-md-9">
                                    <div class="teams-section">
                                        <h5>Are there any cricketers from ANY country that have played First Class Cricket or List A cricket in the last 24 months?</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="organization-radio-btns teams-section-btns">
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold10" name="sold10-group">
                                            <label for="sold10">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold11" name="sold10-group">
                                            <label for="sold11">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row teams-section-row">
                                <div class="col-md-9">
                                    <div class="teams-section">
                                        <h5>Are there any high profile former international cricketers being used by the tournament organizers or teams as brand ambassadors?</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="organization-radio-btns teams-section-btns">
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold12" name="sold12-group">
                                            <label for="sold10">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold13" name="sold13-group">
                                            <label for="sold13">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="choose-file-wrapper">
                                        <label>Please provide a list of participating teams</label>
                                        <div class="upload-btn-wrapper">
                                            <label for="file-upload1" class="custom-file-upload">
                                                No file chosen
                                                <div class="choose-text">
                                                    <span>
                                                        <i class="fa fa-cloud-upload"></i> Choose file
                                                    </span>
                                                </div>
                                            </label>
                                            <input id="file-upload1" name="upload_cont_img" type="file" style="display:none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab_content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>What are the tournament fees for each participating team?</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Give details of the proposed prize money or awards?</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Give full details of the name/ business of any sponsors and the amount of sponsorship?</label>
                                        <textarea placeholder="Details"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Are all matches to take place in one Emirate?</label>
                                        <div class="organization-radio-btns">
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="model1" name="model-group">
                                                <label for="model1">Yes</label>
                                            </div>
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="model2" name="radio-group">
                                                <label for="model2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-checkboxes">
                                        <input type="checkbox" id="agreement">
                                        <label class="terms-label" for="agreement">I agree to the <span>Privacy & Policy</span></label>
                                    </div>
                                    <div class="registration-form">
                                        <img src="" alt="">
                                        <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                                        <a href="#">Download</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="register-btn">
                                        <p>Total Cost: <span>200dh</span></p>
                                        <input type="submit" class="btn input-submit" value="Register">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
