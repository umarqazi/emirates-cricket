@extends('backend.layout.master-backend')

@section('title')
    <title>Show About Page| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Show About Page</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('about.index')}}">Show Page List</a>
                        </li>
                        <li class="breadcrumb-item active">Show About Page
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
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input id="title" type="text" name="page_type" class="validate @error('page_type') invalid @enderror" value="{{$about->page_type}}">
                                            <label for="title">Page Title</label>

                                            @error('page_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input id="title" type="text" name="about_type" class="validate @error('about_type') invalid @enderror" value="{{$about->about_type}}">
                                            <label for="title">About Type</label>

                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input id="title" type="text" name="council_type" class="validate @error('council_type') invalid @enderror" value="{{$about->council_type}}">
                                            <label for="title">Council Type</label>

                                            @error('council_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s12">Page Content</div>
                                        <div class="input-field col s12">
                                            <textarea id="message5" class="ckeditor @error('content') invalid @enderror" name="content" rows="15" placeholder="Type About Content in here...">{!! $about->content !!}</textarea>

                                            @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
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
