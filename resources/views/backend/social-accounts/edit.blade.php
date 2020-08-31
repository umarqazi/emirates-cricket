@extends('backend.layout.master-backend')

@section('title')
    <title>Edit {{$socialAccount->name}}| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Edit {{$socialAccount->name}}</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('social-accounts.index')}}">Social Accounts List</a>
                        </li>
                        <li class="breadcrumb-item active">Edit {{$socialAccount->name}}
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
                                <form class="col s12" method="POST" action="{{route('social-accounts.update', $socialAccount->id)}}">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <textarea id="message1" name="user_access_token" class="materialize-textarea validate @error('user_access_token') invalid @enderror">{{$socialAccount->user_access_token}}</textarea>
                                            <label for="message1">{{$socialAccount->name}} User Access Token</label>

                                            @error('user_access_token')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <textarea id="message2" name="page_access_token" class="materialize-textarea validate @error('page_access_token') invalid @enderror">{{$socialAccount->page_access_token}}</textarea>
                                            <label for="message2">{{$socialAccount->name}} Page Access Token</label>

                                            @error('page_access_token')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="message3" name="long_lived_access_token" class="materialize-textarea validate @error('long_lived_access_token') invalid @enderror">{{$socialAccount->long_lived_access_token}}</textarea>
                                            <label for="message3">Long Lived Access Token</label>

                                            @error('long_lived_access_token')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <textarea id="message4" name="refresh_token" class="materialize-textarea validate @error('refresh_token') invalid @enderror">{{$socialAccount->refresh_token}}</textarea>
                                            <label for="message4">{{$socialAccount->name}} Refresh Token</label>

                                            @error('refresh_token')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit">Update Tokens
                                                <i class="material-icons right">send</i>
                                            </button>
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
