@extends('backend.layout.master-backend')

@section('title')
    <title>Show Tournament Detail| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Tournament Detail</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('news.index')}}">Tournament List</a>
                        </li>
                        <li class="breadcrumb-item active">Tournament Detail
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
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->organizer_name}}">
                                            <label for="title">Name of organizer</label>
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->organizer_address}}">
                                            <label for="title">Organizer Address</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->organizer_telephone_no}}">
                                            <label for="title">Telephone no.</label>
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->organizer_mobile_no}}">
                                            <label for="title">Mobile no.</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->email}}">
                                            <label for="title">Email</label>
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <p>Is the organization a registered company in the UAE?.</p>
                                            <p>
                                                <label>
                                                    <input name="group1" type="radio" {{$tournament->is_registered_company === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="group1" type="radio" {{$tournament->is_registered_company === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->company_name}}">
                                            <label for="title">Company Name</label>
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->company_address}}">
                                            <label for="title">Company Address</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->company_telephone_no}}">
                                            <label for="title">Telephone no.</label>
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->website}}">
                                            <label for="title">Website</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->tournament_name}}">
                                            <label for="title">Name of Tournament</label>
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{date('d/m/Y', strtotime($tournament->proposed_date))}}">
                                            <label for="title">Proposed dates of Tournament</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->proposed_venue}}">
                                            <label for="title">Proposed venue(s)</label>
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->final_venue}}">
                                            <label for="title">Where will the final be played?</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s6">
                                            <input id="title" type="text" name="title" class="validate" value="{{$tournament->surface}}">
                                            <label for="title">Match playing surface?</label>
                                        </div>

                                        <div class="input-field col m6 s6">
                                            <p>Are all matches to take place in one Emirate?</p>
                                            <p>
                                                <label>
                                                    <input name="group2" type="radio" {{$tournament->matches_place_one_emirate === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="group2" type="radio" {{$tournament->matches_place_one_emirate === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Has this tournament been run previously?</p>
                                            <p>
                                                <label>
                                                    <input name="group3" type="radio" {{$tournament->has_tournament_run_previously === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="group3" type="radio" {{$tournament->has_tournament_run_previously === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>If YES please provide details of the previous approval(s)</p>
                                            <textarea id="message5" class="ckeditor" name="text" rows="15" placeholder="Type News Description in here...">{!! $tournament->details !!}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Have any of the teams been sold by the organizers on a franchise arrangement?</p>
                                            <p>
                                                <label>
                                                    <input name="group4" type="radio" {{$tournament->have_any_team_sold_before === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="group4" type="radio" {{$tournament->have_any_team_sold_before === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Have any of the teams ever been prevented or banned from participating in approved cricket in the UAE?</p>
                                            <p>
                                                <label>
                                                    <input name="group5" type="radio" {{$tournament->have_any_team_banned_before === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="group5" type="radio" {{$tournament->have_any_team_banned_before === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Are you aware of any proposed payments being made to any players to take part in this tournament?</p>
                                            <p>
                                                <label>
                                                    <input name="group6" type="radio" {{$tournament->proposed_payment === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="group6" type="radio" {{$tournament->proposed_payment === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Are you aware of any team that is proposing to use players who have been prevented or banned from participating in approved cricket in the UAE or elsewhere?</p>
                                            <p>
                                                <label>
                                                    <input name="group7" type="radio" {{$tournament->any_team_using_banned_players === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="group7" type="radio" {{$tournament->any_team_using_banned_players === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Have any of the players taking part in the tournament played in the last 24 months in Test, ODI or T20i cricket?</p>
                                            <p>
                                                <label>
                                                    <input name="group8" type="radio" {{$tournament->have_player_played_any_tournament === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="group8" type="radio" {{$tournament->have_player_played_any_tournament === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Are there any cricketers from ANY country that have played First Class Cricket or List A cricket in the last 24 months?</p>
                                            <p>
                                                <label>
                                                    <input name="group9" type="radio" {{$tournament->have_cricketers_played_any_tournament === 1 ? 'checked' : ''}}/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="group9" type="radio" {{$tournament->have_cricketers_played_any_tournament === 0 ? 'checked' : ''}}/>
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <p>Are there any high profile former international cricketers being used by the tournament organizers or teams as brand ambassadors?</p>
                                            <p>
                                                <label>
                                                    <input name="group10" type="radio" checked="{{$tournament->high_profile_former_international_cricketers === 1 ? 'checked' : ''}}"/>
                                                    <span>Yes</span>
                                                </label>

                                                <label>
                                                    <input name="group10" type="radio" checked="{{$tournament->high_profile_former_international_cricketers === 0 ? 'checked' : ''}}"/>
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s12">
                                            <p>Please Provide Tournament Detail File</p>
                                            <a href="{{route('tournament.file', ['id' => $tournament->id, 'name' => $tournament->tournament_file])}}" target="_blank">View File</a>
                                        </div>

                                        <div class="input-field col m6 s12">
                                            <p>Please Provide A List Of Participating Teams</p>
                                            <a href="{{route('tournament.file', ['id' => $tournament->id, 'name' => $tournament->participating_teams_file])}}" target="_blank">View File</a>
                                        </div>
                                    </div>
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
