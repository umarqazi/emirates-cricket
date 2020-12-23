
@extends('backend.layout.master-backend')

@section('title')
    <title>Add Development List| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Add Development List</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('employee.index')}}">Development List</a>
                        </li>
                        <li class="breadcrumb-item active">Add New Development List
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div id="Form-advance" class="card card card-default scrollspy">
                            <div class="card-content">
                                <div class="card-header">Create New List</div>
                                <div class="row">
                                    <form method="post" action="{{route('development.store')}}" enctype="multipart/form-data">

                                        @csrf

                                        <div class="row">
                                            <div class="input-field col m12 s12">
                                                <input id="title" type="text" name="title" class="validate @error('title') invalid @enderror" value="">
                                                <label for="title">Enter Title</label>

                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col m12 s12">
                                                <textarea id="message4" class="ckeditor1 @error('heading') invalid @enderror" name="heading" rows="15" placeholder="Type short description in here...">{{old('text')}}</textarea>

                                                @error('heading')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col m12 col-12">
                                                <div class="col-12" style="margin-bottom: 10px">Description</div>
                                                <textarea id="message5" class="ckeditor @error('description') invalid @enderror" name="description" rows="15" placeholder="Type Description in here...">{{old('text')}}</textarea>

                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col m12 s12">
                                                <select name="type" class="@error('type') invalid @enderror">
                                                    <option value="" disabled selected>Select Type</option>
                                                    <option value="1">Emirati Development Program</option>
                                                    <option value="2">Development Pathway</option>
                                                </select>
                                                <label>Select Type</label>

                                                @error('type')
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col m12 s12">
                                                <input id="title" type="file" name="image" class="validate @error('image') invalid @enderror" value="">

                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit">Create List
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>

                                    </form>
                                </div>
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
