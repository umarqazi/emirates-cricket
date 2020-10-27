@extends('backend.layout.master-backend')

@section('title')
    <title>Edit Tournament Detail| Admin Panel</title>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/data-tables.css')}}">
@endsection

@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{url('backend/assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0">Edit Tournament Detail</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('news.index')}}">Tournament List</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Tournament Detail
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12">
        <div class="container">
            <div class="section">
                <!--Basic Form-->

                <!-- jQuery Plugin Initialization -->
                <div class="row">
                    <!-- Form Advance -->
                    <div class="col s12 m12 l12">
                        <div id="Form-advance" class="card card card-default scrollspy">
                            <div class="card-content">
                                <form class="col s12" method="POST" action="{{route('tournament.update', $tournament->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    @if($errors->any())
                                        {{ implode('', $errors->all('<div>:message</div>')) }}
                                    @endif

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input type="text" name="organizer_name" class="validate @error('organizer_name') invalid @enderror" value="{{$tournament->organizer_name}}">
                                            <label>Name of organizer</label>

                                            @error('organizer_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <input type="text" name="organizer_address" class="validate @error('organizer_address') invalid @enderror" value="{{$tournament->organizer_address}}">
                                            <label>Organizer Address</label>

                                            @error('organizer_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input type="text" name="organizer_telephone_no" class="validate @error('organizer_telephone_no') invalid @enderror" value="{{$tournament->organizer_telephone_no}}">
                                            <label>Telephone no.</label>

                                            @error('organizer_telephone_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <input type="text" name="organizer_mobile_no" class="validate @error('organizer_mobile_no') invalid @enderror" value="{{$tournament->organizer_mobile_no}}">
                                            <label>Mobile no.</label>

                                            @error('organizer_mobile_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input type="text" name="email" class="validate @error('email') invalid @enderror" value="{{$tournament->email}}">
                                            <label>Email</label>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <p>Is the organization a registered company in the UAE?.</p>
                                            <p>
                                                <label>
                                                    <input name="is_registered_company" type="radio" value="1" {{$tournament->is_registered_company === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="is_registered_company" type="radio" value="0" {{$tournament->is_registered_company === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input type="text" name="company_name" class="validate @error('company_name') invalid @enderror" value="{{$tournament->company_name}}">
                                            <label>Company Name</label>

                                            @error('company_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <input type="text" name="company_address" class="validate @error('company_address') invalid @enderror" value="{{$tournament->company_address}}">
                                            <label>Company Address</label>

                                            @error('company_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input type="text" name="company_telephone_no" class="validate @error('company_telephone_no') invalid @enderror" value="{{$tournament->company_telephone_no}}">
                                            <label>Telephone no.</label>

                                            @error('company_telephone_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <input type="text" name="website" class="validate @error('website') invalid @enderror" value="{{$tournament->website}}">
                                            <label>Website</label>

                                            @error('website')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input type="text" name="tournament_name" class="validate @error('tournament_name') invalid @enderror" value="{{$tournament->tournament_name}}">
                                            <label>Name of Tournament</label>

                                            @error('tournament_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <input type="text" name="proposed_date" class="validate @error('proposed_date') invalid @enderror" value="{{date('d/m/Y', strtotime($tournament->proposed_date))}}">
                                            <label>Proposed dates of Tournament</label>

                                            @error('proposed_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <select name="proposed_venue" class="validate @error('proposed_venue') invalid @enderror">
                                                <option value="" disabled selected>Select Venue</option>
                                                @foreach(config('constants.states') as $state)
                                                    <option value="{{$state}}" {{$tournament->proposed_venue === $state ? 'selected' : ''}}>{{$state}}</option>
                                                @endforeach
                                            </select>
                                            <label>Proposed venue(s)</label>

                                            @error('proposed_venue')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <select name="final_venue" class="validate @error('final_venue') invalid @enderror">
                                                <option value="" disabled selected>Select Venue</option>
                                                @foreach(config('constants.states') as $state)
                                                    <option value="{{$state}}" {{$tournament->final_venue === $state ? 'selected' : ''}}>{{$state}}</option>
                                                @endforeach
                                            </select>
                                            <label>Where will the final be played?</label>

                                            @error('final_venue')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <select name="surface" class="validate @error('surface') invalid @enderror">
                                                <option value="" disabled selected>Select Surface</option>
                                                <option value="Turf" {{$tournament->surface === 'Turf' ? 'selected' : ''}}>Turf</option>
                                                <option value="Artificial" {{$tournament->surface === 'Artificial' ? 'selected' : ''}}>Artificial</option>
                                                <option value="Sand" {{$tournament->surface === 'Sand' ? 'selected' : ''}}>Sand</option>
                                            </select>
                                            <label>Where will the final be played?</label>

                                            @error('surface')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <p>Are all matches to take place in one Emirate?</p>
                                            <p>
                                                <label>
                                                    <input name="matches_place_one_emirate" type="radio" value="1" {{$tournament->matches_place_one_emirate === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="matches_place_one_emirate" type="radio" value="0" {{$tournament->matches_place_one_emirate === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>

                                            @error('matches_place_one_emirate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Has this tournament been run previously?</p>
                                            <p>
                                                <label>
                                                    <input name="has_tournament_run_previously" type="radio" value="1" {{$tournament->has_tournament_run_previously === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="has_tournament_run_previously" type="radio" value="0" {{$tournament->has_tournament_run_previously === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>

                                            @error('has_tournament_run_previously')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>If YES please provide details of the previous approval(s)</p>
                                            <textarea id="message5" class="ckeditor" name="details" rows="15" placeholder="Type Details in here...">{!! $tournament->details !!}</textarea>

                                            @error('details')
                                            <div class="invalid-feedback mt-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Have any of the teams been sold by the organizers on a franchise arrangement?</p>
                                            <p>
                                                <label>
                                                    <input name="have_any_team_sold_before" type="radio" value="1" {{$tournament->have_any_team_sold_before === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="have_any_team_sold_before" type="radio" value="0" {{$tournament->have_any_team_sold_before === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>

                                            @error('have_any_team_sold_before')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Have any of the teams ever been prevented or banned from participating in approved cricket in the UAE?</p>
                                            <p>
                                                <label>
                                                    <input name="have_any_team_banned_before" type="radio" value="1" {{$tournament->have_any_team_banned_before === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="have_any_team_banned_before" type="radio" value="0" {{$tournament->have_any_team_banned_before === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>

                                            @error('have_any_team_banned_before')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Are you aware of any proposed payments being made to any players to take part in this tournament?</p>
                                            <p>
                                                <label>
                                                    <input name="proposed_payment" type="radio" value="1" {{$tournament->proposed_payment === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="proposed_payment" type="radio" value="0" {{$tournament->proposed_payment === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>

                                            @error('proposed_payment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Are you aware of any team that is proposing to use players who have been prevented or banned from participating in approved cricket in the UAE or elsewhere?</p>
                                            <p>
                                                <label>
                                                    <input name="any_team_using_banned_players" type="radio" value="1" {{$tournament->any_team_using_banned_players === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="any_team_using_banned_players" type="radio" value="0" {{$tournament->any_team_using_banned_players === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>

                                            @error('any_team_using_banned_players')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Have any of the players taking part in the tournament played in the last 24 months in Test, ODI or T20i cricket?</p>
                                            <p>
                                                <label>
                                                    <input name="have_player_played_any_tournament" type="radio" value="1" {{$tournament->have_player_played_any_tournament === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="have_player_played_any_tournament" type="radio" value="0" {{$tournament->have_player_played_any_tournament === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>

                                            @error('have_player_played_any_tournament')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Are there any cricketers from ANY country that have played First Class Cricket or List A cricket in the last 24 months?</p>
                                            <p>
                                                <label>
                                                    <input name="have_cricketers_played_any_tournament" type="radio" value="1" {{$tournament->have_cricketers_played_any_tournament === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="have_cricketers_played_any_tournament" type="radio" value="0" {{$tournament->have_cricketers_played_any_tournament === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>

                                            @error('have_cricketers_played_any_tournament')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Are there any high profile former international cricketers being used by the tournament organizers or teams as brand ambassadors?</p>
                                            <p>
                                                <label>
                                                    <input name="high_profile_former_international_cricketers" type="radio" value="1" checked="{{$tournament->high_profile_former_international_cricketers === 1 ? 'checked' : ''}}"/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="high_profile_former_international_cricketers" type="radio" value="0" checked="{{$tournament->high_profile_former_international_cricketers === 0 ? 'checked' : ''}}"/>
                                                    <span>No</span>
                                                </label>
                                            </p>

                                            @error('high_profile_former_international_cricketers')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input type="text" name="tournament_fees" class="validate @error('tournament_fees') invalid @enderror" value="{{$tournament->tournament_fees}}">
                                            <label>What Are The Tournament Fees For Each Participating Team?</label>

                                            @error('tournament_fees')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <input type="text" name="proposed_prize" class="validate @error('proposed_prize') invalid @enderror" value="{{$tournament->proposed_prize}}">
                                            <label>Give Details Of The Proposed Prize Money Or Awards?</label>

                                            @error('proposed_prize')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Are All Matches To Take Place In One Emirate?</p>
                                            <p>
                                                <label>
                                                    <input name="matches_in_one_emirate" type="radio" value="1" {{$tournament->matches_in_one_emirate === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="matches_in_one_emirate" type="radio" value="0" {{$tournament->matches_in_one_emirate === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>

                                            @error('matches_in_one_emirate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Give Full Details Of The Name/ Business Of Any Sponsors And The Amount Of Sponsorship?</p>
                                            <textarea id="business_details" class="ckeditor1" name="business_details" rows="15" placeholder="Type Details in here...">{!! $tournament->business_details !!}</textarea>

                                            @error('business_details')
                                            <div class="invalid-feedback mt-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col m12 s12">
                                            <p>Please Provide Tournament Detail File. </p>
                                            @if(!empty($tournament->tournament_file))
                                                <p><a href="{{route('tournament.file', ['id' => $tournament->id, 'name' => $tournament->tournament_file])}}" target="_blank">View File</a></p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="file-field input-field col m12 s12">
                                            <div class="btn custom-file-button">
                                                <span>File</span>
                                                <input type="file" name="tournament_file" class="validate @error('tournament_file') invalid @enderror">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>

                                            @error('tournament_file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col m12 s12">
                                            <p>Please Provide A List Of Participating Teams.</p>
                                            @if(!empty($tournament->participating_teams_file))
                                                <p><a href="{{route('tournament.file', ['id' => $tournament->id, 'name' => $tournament->participating_teams_file])}}" target="_blank">View File</a></p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="file-field input-field col m12 s12">
                                            <div class="btn custom-file-button">
                                                <span>File</span>
                                                <input type="file" name="participating_teams_file" class="validate @error('participating_teams_file') invalid @enderror">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>

                                            @error('participating_teams_file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>


                                    @can('Edit Tournament Registration')
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <button class="btn cyan waves-effect waves-light right mr-1" type="submit">Update
                                                    <i class="material-icons right">send</i>
                                                </button>

                                                @if(is_null($tournament->status))
                                                <a href="{{route('approve-tournament', $tournament->id)}}" class="btn green waves-effect waves-light right mr-1">Approve
                                                    <i class="material-icons right">check</i>
                                                </a>

                                                <a href="{{route('decline-tournament', $tournament->id)}}" class="btn red waves-effect waves-light right mr-1">Decline
                                                    <i class="material-icons right">close</i>
                                                </a>
                                                @elseif(!$tournament->status)
                                                    <a href="{{route('approve-tournament', $tournament->id)}}" class="btn green waves-effect waves-light right mr-1">Approve
                                                        <i class="material-icons right">check</i>
                                                    </a>
                                                @elseif($tournament->status)
                                                    <a href="{{route('decline-tournament', $tournament->id)}}" class="btn red waves-effect waves-light right mr-1">Decline
                                                        <i class="material-icons right">close</i>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    @endcan
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--end container-->
@endsection

@section('scripts')
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{URL::asset('backend/assets/js/form-layouts.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
@endsection
