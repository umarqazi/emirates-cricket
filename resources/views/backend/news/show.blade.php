@extends('backend.layout.master-backend')

@section('title')
    <title>Show News Detail| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">News Detail</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('player.index')}}">News List</a>
                        </li>
                        <li class="breadcrumb-item active">News Detail
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

                                    @if(file_exists(public_path('storage/uploads/news/'.$news->id.'/'.$news->image)))
                                        <div class="row">
                                            <div class="col m6 s6 offset-m6 mb-1 right-align">
                                                <img class="dummy_photo news-featured-image" src="{{asset('storage/uploads/news/'.$news->id.'/'.$news->image)}}">
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input id="title" type="text" name="title" class="validate" value="{{$news->title}}">
                                            <label for="title">News Title</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s12">News Description</div>
                                        <div class="input-field col s12">
                                            <textarea id="message5" class="ckeditor" name="text" rows="15" placeholder="Type News Description in here...">{!! $news->text !!}</textarea>
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
