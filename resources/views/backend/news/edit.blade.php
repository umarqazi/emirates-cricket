@extends('backend.layout.master-backend')

@section('title')
    <title>Edit News| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Edit News</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('news.index')}}">News List</a>
                        </li>
                        <li class="breadcrumb-item active">Edit News
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
                                <form class="col s12" method="POST" action="{{route('news.update', $news->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    @if(file_exists(public_path('storage/uploads/news/'.$news->image)))
                                        <div class="row">
                                            <div class="col m6 s6 offset-m6 mb-1 right-align">
                                                <img class="dummy_photo news-featured-image" src="{{asset('storage/uploads/news/'.$news->image)}}">
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col m6 s6 offset-m6 mb-1 right-align">
                                                <img class="dummy_photo news-featured-image" src="{{URL::asset('frontend/assets/images/default-news-image.jpg')}}">
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input id="headline" type="text" name="headline" class="validate @error('headline') invalid @enderror" value="{{$news->headline}}">
                                            <label for="headline">Headline</label>

                                            @error('headline')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input id="summary" type="text" name="summary" class="validate @error('summary') invalid @enderror" value="{{$news->summary}}">
                                            <label for="summary">Summary</label>

                                            @error('summary')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input id="source" type="text" name="source" class="validate @error('source') invalid @enderror" value="{{ $news->source }}">
                                            <label for="source">Source</label>

                                            @error('source')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-12">Summary</div>
                                        <div class="input-field col-12">
                                            <textarea id="summary" class="ckeditor @error('summary') invalid @enderror" name="summary" rows="15" placeholder="Type News Summary in here...">{!! $news->description !!}</textarea>

                                            @error('summary')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">Description</div>
                                        <div class="input-field col-12">
                                            <textarea id="message5" class="ckeditor1 @error('description') invalid @enderror" name="description" rows="15" placeholder="Type News Description in here...">{!! $news->description !!}</textarea>

                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="file-field input-field">
                                            <div class="btn custom-file-button">
                                                <span>Image</span>
                                                <input type="file" name="image" class="validate @error('image') invalid @enderror">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit">Update News
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
