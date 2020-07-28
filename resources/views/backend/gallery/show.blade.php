@extends('backend.layout.master-backend')

@section('title')
    <title>Show Gallery| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Show Gallery</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('player.index')}}">Gallery List</a>
                        </li>
                        <li class="breadcrumb-item active">Show Gallery
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
                                <form class="col s12" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    @if(file_exists(public_path('storage/uploads/gallery/'.$gallery->id.'/'.$gallery->image)))
                                        <div class="row">
                                            <div class="col m4 s4 offset-m8 mb-1 right-align">
                                                <img class="dummy_photo" src="{{asset('storage/uploads/gallery/'.$gallery->id.'/'.$gallery->image)}}">
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input id="title" type="text" name="title" class="validate @error('title') invalid @enderror" value="{{$gallery->title}}">
                                            <label for="title">Gallery Title</label>

                                            @error('title')
                                            <span class="invalid-feedback login-email-error" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s12">Gallery Description</div>
                                        <div class="input-field col s12">
                                            <textarea id="message5" class="ckeditor @error('text') invalid @enderror" name="text" rows="15" placeholder="Type Gallery Description in here...">{!! $gallery->text !!}</textarea>

                                            @error('text')
                                            <span class="invalid-feedback login-email-error" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s12 mt-3"><b>Upload Gallery Images</b></div>
                                        <div>
                                            @foreach($gallery->images as $image)
                                                @if(file_exists(public_path('storage/uploads/gallery/'.$gallery->id.'/'.$image->name)))
                                                    <img src="{{asset('storage/uploads/gallery/'.$gallery->id.'/'.$image->name)}}" width="200px" height="200px">
                                                @endif
                                            @endforeach
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
