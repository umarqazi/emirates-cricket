@extends('backend.layout.master-backend')

@section('title')
    <title>Edit Sponsor| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Edit Sponsor</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('player.index')}}">Sponsor List</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Sponsor
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
                                <form class="col s12" method="POST" action="{{route('sponsor.update', $sponsor->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    @if(file_exists(public_path('storage/uploads/sponsor/'.$sponsor->id.'/'.$sponsor->image)))
                                        <div class="row">
                                            <div class="col m6 s6 offset-m6 mb-1 right-align">
                                                <img class="dummy_photo news-featured-image" src="{{asset('storage/uploads/sponsor/'.$sponsor->id.'/'.$sponsor->image)}}">
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input id="title" type="text" name="name" class="validate @error('name') invalid @enderror" value="{{$sponsor->name}}">
                                            <label for="title">Sponsor Name</label>

                                            @error('name')
                                            <span class="invalid-feedback login-email-error" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input id="title" type="text" name="website" class="validate @error('website') invalid @enderror" value="{{$sponsor->website}}">
                                            <label for="title">Sponsor Website</label>

                                            @error('website')
                                            <span class="invalid-feedback login-email-error" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s12">Sponsor Description</div>
                                        <div class="input-field col s12">
                                            <textarea id="message5" class="ckeditor @error('text') invalid @enderror" name="text" rows="15" placeholder="Type Sponsor Description in here...">{!! $sponsor->text !!}</textarea>

                                            @error('text')
                                            <span class="invalid-feedback login-email-error" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file" name="image" class="validate @error('image') invalid @enderror">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>

                                            @error('image')
                                            <span class="invalid-feedback login-email-error" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Update Sponsor
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
