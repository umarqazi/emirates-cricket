@extends('backend.layout.master-backend')

@section('title')
    <title>Show Contact Detail| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Player Detail</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('player.index')}}">Player List</a>
                        </li>
                        <li class="breadcrumb-item active">Player Detail
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
                                <form class="col s12" method="POST" action="{{route('contact.update', $player->id)}}">
                                    @csrf
                                    @method('PUT')

                                    @if(file_exists(public_path('storage/uploads/players/'.$player->id.'/'.$player->photo)))
                                        <div class="row">
                                            <div class="col m4 s4 offset-m8 mb-1 right-align">
                                                <img class="dummy_photo" src="{{asset('storage/uploads/players/'.$player->id.'/'.$player->photo)}}">
                                            </div>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="input-field col m6 s12">
                                            <input id="first_name01" type="text" class="@error('first_name') invalid @enderror" name="first_name" value="{{$player->first_name}}">
                                            <label for="first_name01">First Name</label>

                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s12">
                                            <input id="first_name01" type="text" class="@error('last_name') is-invalid @enderror" name="last_name" value="{{$player->last_name}}">
                                            <label for="first_name01">Last Name</label>

                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s12">
                                            <input id="last_name" type="text" name="email" class="@error('email') invalid @enderror" value="{{$player->email}}">
                                            <label for="last_name">Email</label>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s12">
                                            <input id="last_name" type="text" class="@error('mobile') invalid @enderror" name="mobile" value="{{$player->mobile}}">
                                            <label for="last_name">Mobile</label>

                                            @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s12">
                                            <input id="dob" type="text" name="dob" class="@error('dob') invalid @enderror" value="{{$player->dob}}">
                                            <label for="dob">Date Of Birth</label>

                                            @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s12">
                                            <select name="living_in" class="@error('living_in') invalid @enderror">
                                                <option value="" disabled selected>Select Emirate Living In</option>
                                                @foreach(config('constants.states') as $state)
                                                    <option value="{{$state}}" {{$player->living_in === $state ? 'selected' : ''}}>{{$state}}</option>
                                                @endforeach
                                            </select>
                                            <label>Select Emirate</label>

                                            @error('living_in')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s12">
                                            <select name="nationality" class="@error('nationality') is-invalid @enderror">
                                                <option value="" disabled selected>Choose Nationality</option>
                                                @foreach($countries as $country)
                                                    <option value="{{$country->id}}" {{$player->nationality === $country->id ? 'selected' : ''}}>{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                            <label>Select Nationality</label>

                                            @error('nationality')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="input-field col m6 s12">
                                            <select name="visa_status" class="@error('visa_status') invalid @enderror">
                                                <option value="" disabled selected>Choose Visa Status</option>
                                                <option value="1" {{$player->visa_status === 1 ? 'selected' : ''}}>Residence/Employment</option>
                                                <option value="0" {{$player->visa_status === 0 ? 'selected' : ''}}>Visit Visa</option>
                                            </select>
                                            <label>Select Visa Status</label>

                                            @error('visa_status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <select name="playing_with" class="@error('playing_with') invalid @enderror">
                                                <option value="" disabled selected>Select Emirate Playing With</option>
                                                @foreach(config('constants.states') as $state)
                                                    <option value="{{$state}}" {{$player->playing_with === $state ? 'selected' : ''}}>{{$state}}</option>
                                                @endforeach
                                            </select>
                                            <label>Select Emirate Playing With</label>

                                            @error('playing_with')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="message5" name="message" class="materialize-textarea @error('message') invalid @enderror">{{$player->message}}</textarea>
                                            <label for="message">Message</label>

                                            @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right mr-1" type="submit">Update
                                                <i class="material-icons right">send</i>
                                            </button>

                                            <a href="{{route('approve-player', $player->id)}}" class="btn green waves-effect waves-light right mr-1">Approve
                                                <i class="material-icons right">check</i>
                                            </a>

                                            <a href="{{route('decline-player', $player->id)}}" class="btn red waves-effect waves-light right mr-1">Decline
                                                <i class="material-icons right">close</i>
                                            </a>
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
