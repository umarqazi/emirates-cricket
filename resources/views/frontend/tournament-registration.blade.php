@extends('frontend.layout.master-frontend')

@section('title')
    <title>Tournament Registration Form</title>
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
                <a href="{{route('tournament-registration')}}" class="child-page">Tournament Registration </a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Tournament Registration</h1>

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>

    <!--   Tournament Registration     -->
    <div class="tournament-registration">
        <div class="container">
            <form id="tournament-registration" method="POST" action="{{route('submit-tournament-registration')}}" enctype="multipart/form-data">
                @csrf

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
                                        <input type="text" name="organizer_name" class="@error('organizer_name') is-invalid @enderror" value="{{old('organizer_name')}}">

                                        @error('organizer_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Organizer Address</label>
                                        <input type="text" name="organizer_address" class="@error('organizer_address') is-invalid @enderror" value="{{old('organizer_address')}}">

                                        @error('organizer_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Telephone no.</label>
                                        <input type="text" name="organizer_telephone_no" class="@error('organizer_telephone_no') is-invalid @enderror" value="{{old('organizer_telephone_no')}}">

                                        @error('organizer_telephone_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Mobile no.</label>
                                        <input type="text" name="organizer_mobile_no" class="@error('organizer_mobile_no') is-invalid @enderror" value="{{old('organizer_mobile_no')}}">

                                        @error('organizer_mobile_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Email</label>
                                        <input type="email" name="email" class="@error('email') is-invalid @enderror" value="{{old('email')}}">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Is the organization a registered company in the UAE?.</label>
                                        <div class="organization-radio-btns">
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="yes" name="is_registered_company" value="1" {{old('is_registered_company') === '1' ? 'checked' : ''}}>
                                                <label for="yes">Yes</label>
                                            </div>
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="no" name="is_registered_company" value="0" {{old('is_registered_company') === '0' ? 'checked' : ''}}>
                                                <label for="no">No</label>
                                            </div>
                                        </div>

                                        @error('is_registered_company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Company name</label>
                                        <input type="text" name="company_name" class="@error('company_name') is-invalid @enderror" value="{{old('company_name')}}">

                                        @error('company_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Company Address</label>
                                        <input type="text" name="company_address" class="@error('company_address') is-invalid @enderror" value="{{old('company_address')}}">

                                        @error('company_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Telephone no.</label>
                                        <input type="text" name="company_telephone_no" class="@error('company_telephone_no') is-invalid @enderror" value="{{old('company_telephone_no')}}">

                                        @error('company_telephone_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Website</label>
                                        <input type="text" name="website" class="@error('website') is-invalid @enderror" value="{{old('website')}}">

                                        @error('website')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab_content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Name of Tournament</label>
                                        <input type="text" name="tournament_name" class="@error('tournament_name') is-invalid @enderror" value="{{old('tournament_name')}}">

                                        @error('tournament_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Proposed dates of Tournament</label>
                                        <input type="text" class="datepicker-here date-calender @error('proposed_date') is-invalid @enderror" name="proposed_date" placeholder="01-01-2021" value="{{old('proposed_date')}}">

                                        @error('proposed_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Proposed venue(s)</label>
                                        <select name="proposed_venue" class="@error('proposed_venue') is-invalid @enderror">
                                            <option value="">Select Venue</option>
                                            @foreach(config('constants.states') as $state)
                                                <option value="{{$state}}" {{old('proposed_venue') === $state ? 'selected' : ''}}>{{$state}}</option>
                                            @endforeach
                                        </select>

                                        @error('proposed_venue')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Where will the final be played?</label>
                                        <select name="final_venue" class="@error('final_venue') is-invalid @enderror">
                                            <option value="">Select Final's Venue</option>
                                            @foreach(config('constants.states') as $state)
                                                <option value="{{$state}}" {{old('final_venue') === $state ? 'selected' : ''}}>{{$state}}</option>
                                            @endforeach
                                        </select>

                                        @error('final_venue')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Are all matches to take place in one Emirate?</label>
                                        <div class="organization-radio-btns">
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="yes1" name="matches_place_one_emirate" value="1" {{old('matches_place_one_emirate') === '1' ? 'checked' : ''}}>
                                                <label for="yes1">Yes</label>
                                            </div>
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="no1" name="matches_place_one_emirate" value="0" {{old('matches_place_one_emirate') === '0' ? 'checked' : ''}}>
                                                <label for="no1">No</label>
                                            </div>
                                        </div>

                                        @error('matches_place_one_emirate')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Match playing surface?</label>
                                        <div class="organization-radio-btns">
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="Turf" name="surface" value="Turf" {{old('surface') === 'Turf' ? 'checked' : ''}}>
                                                <label for="Turf">Turf</label>
                                            </div>
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="Artificial" name="surface" value="Artificial" {{old('surface') === 'Artificial' ? 'checked' : ''}}>
                                                <label for="Artificial">Artificial</label>
                                            </div>
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="Sand" name="surface" value="Sand" {{old('surface') === 'Sand' ? 'checked' : ''}}>
                                                <label for="Sand">Sand</label>
                                            </div>
                                        </div>

                                        @error('surface')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Has this tournament been run previously?</label>
                                        <div class="organization-radio-btns">
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="yes2" name="has_tournament_run_previously" value="1" {{old('has_tournament_run_previously') === '1' ? 'checked' : ''}}>
                                                <label for="yes2">Yes</label>
                                            </div>
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="no2" name="has_tournament_run_previously" value="0" {{old('has_tournament_run_previously') === '0' ? 'checked' : ''}}>
                                                <label for="no2">No</label>
                                            </div>
                                        </div>

                                        @error('has_tournament_run_previously')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-7">
                                    <div class="form-drag-wrapper">
                                        <label>If YES please provide details of the previous approval(s)</label>
                                        <textarea placeholder="Write your message" name="details">{{old('details')}}</textarea>

                                        @error('details')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
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
                                            <input id="file-upload" name="tournament_file" type="file" style="display:none;">
                                        </div>

                                        @error('tournament_file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
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
                                            <input type="radio" id="sold" name="have_any_team_sold_before" value="1" {{old('have_any_team_sold_before') === '1' ? 'checked' : ''}}>
                                            <label for="sold">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold1" name="have_any_team_sold_before" value="0" {{old('have_any_team_sold_before') === '0' ? 'checked' : ''}}>
                                            <label for="sold1">No</label>
                                        </div>
                                    </div>
                                </div>

                                @error('have_any_team_sold_before')
                                <span class="invalid-feedback pl-4" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                            <input type="radio" id="sold2" name="have_any_team_banned_before" value="1" {{old('have_any_team_banned_before') === '1' ? 'checked' : ''}}>
                                            <label for="sold2">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold3" name="have_any_team_banned_before" value="0" {{old('have_any_team_banned_before') === '0' ? 'checked' : ''}}>
                                            <label for="sold3">No</label>
                                        </div>
                                    </div>
                                </div>

                                @error('have_any_team_banned_before')
                                <span class="invalid-feedback pl-4" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                            <input type="radio" id="sold4" name="proposed_payment" value="1" {{old('proposed_payment') === '1' ? 'checked' : ''}}>
                                            <label for="sold4">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold5" name="proposed_payment" value="0" {{old('proposed_payment') === '0' ? 'checked' : ''}}>
                                            <label for="sold5">No</label>
                                        </div>
                                    </div>
                                </div>

                                @error('proposed_payment')
                                <span class="invalid-feedback pl-4" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                            <input type="radio" id="sold6" name="any_team_using_banned_players" value="1" {{old('any_team_using_banned_players') === '1' ? 'checked' : ''}}>
                                            <label for="sold6">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold7" name="any_team_using_banned_players" value="0" {{old('any_team_using_banned_players') === '0' ? 'checked' : ''}}>
                                            <label for="sold7">No</label>
                                        </div>
                                    </div>
                                </div>

                                @error('any_team_using_banned_players')
                                <span class="invalid-feedback pl-4" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                            <input type="radio" id="sold8" name="have_player_played_any_tournament" value="1" {{old('have_player_played_any_tournament') === '1' ? 'checked' : ''}}>
                                            <label for="sold8">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold9" name="have_player_played_any_tournament" value="0" {{old('have_player_played_any_tournament') === '0' ? 'checked' : ''}}>
                                            <label for="sold9">No</label>
                                        </div>
                                    </div>
                                </div>

                                @error('have_player_played_any_tournament')
                                <span class="invalid-feedback pl-4" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                            <input type="radio" id="sold10" name="have_cricketers_played_any_tournament" value="1" {{old('have_cricketers_played_any_tournament') === '1' ? 'checked' : ''}}>
                                            <label for="sold10">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold11" name="have_cricketers_played_any_tournament" value="0" {{old('have_cricketers_played_any_tournament') === '0' ? 'checked' : ''}}>
                                            <label for="sold11">No</label>
                                        </div>
                                    </div>
                                </div>

                                @error('have_cricketers_played_any_tournament')
                                <span class="invalid-feedback pl-4" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                            <input type="radio" id="sold12" name="high_profile_former_international_cricketers" value="1" {{old('high_profile_former_international_cricketers') === '1' ? 'checked' : ''}}>
                                            <label for="sold12">Yes</label>
                                        </div>
                                        <div class="custom-radio-btns">
                                            <input type="radio" id="sold13" name="high_profile_former_international_cricketers" value="0" {{old('high_profile_former_international_cricketers') === '0' ? 'checked' : ''}}>
                                            <label for="sold13">No</label>
                                        </div>
                                    </div>
                                </div>

                                @error('high_profile_former_international_cricketers')
                                <span class="invalid-feedback pl-4" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                            <input id="file-upload1" name="participating_teams_file" type="file" style="display:none;">
                                        </div>

                                        @error('participating_teams_file')
                                        <span class="invalid-feedback pl-4" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab_content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>What are the tournament fees for each participating team?</label>
                                        <input type="text" name="tournament_fees" class="@error('tournament_fees') is-invalid @enderror" value="{{old('tournament_fees')}}">

                                        @error('tournament_fees')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Give details of the proposed prize money or awards?</label>
                                        <input type="text" name="proposed_prize" class="@error('proposed_prize') is-invalid @enderror" value="{{old('proposed_prize')}}">

                                        @error('proposed_prize')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Give full details of the name/ business of any sponsors and the amount of sponsorship?</label>
                                        <textarea placeholder="Details" name="business_details" class="@error('business_details') is-invalid @enderror">{{old('business_details')}}</textarea>

                                        @error('business_details')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-row">
                                        <label>Are all matches to take place in one Emirate?</label>
                                        <div class="organization-radio-btns">
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="model1" name="matches_in_one_emirate" value="1" {{old('matches_in_one_emirate') === '1' ? 'checked' : ''}}>
                                                <label for="model1">Yes</label>
                                            </div>
                                            <div class="custom-radio-btns">
                                                <input type="radio" id="model2" name="matches_in_one_emirate" value="0" {{old('matches_in_one_emirate') === '0' ? 'checked' : ''}}>
                                                <label for="model2">No</label>
                                            </div>
                                        </div>

                                        @error('matches_in_one_emirate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-checkboxes">
                                        <input type="checkbox" id="agreement" name="terms-and-condition" class="terms-and-condition">
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
                                        <p>Total Cost: <span>{{$setting->tournament_fees}}dh</span></p>
                                        <input type="submit" class="btn input-submit tournament-registration" value="Register" disabled="disabled">
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
