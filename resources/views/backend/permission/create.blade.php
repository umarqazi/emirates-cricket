@extends('backend.layout.master-backend')

@section('title')
    <title>Add Permission| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Add Permission</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('player.index')}}">Permission List</a>
                        </li>
                        <li class="breadcrumb-item active">Add New Permission
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
                                <div class="card-header">Create New Permission</div>
                                <div class="row">
                                    <form class="col s12" method="POST" action="{{route('permission.store')}}">
                                        @csrf

                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <input id="title" type="text" name="name" class="validate @error('name') invalid @enderror" value="{{old('name')}}">
                                                <label for="title">Permission Name</label>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="input-field col m6 s12">
                                                <select name="module" class="@error('module') invalid @enderror">
                                                    <option value="" disabled selected>Select Module</option>
                                                    @foreach(config('constants.modules') as $module)
                                                        <option value="{{$module}}" {{old('module') === $module ? 'selected' : ''}}>{{$module}}</option>
                                                    @endforeach
                                                </select>
                                                <label>Select Module</label>

                                                @error('module')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <button class="btn cyan waves-effect waves-light right" type="submit">Create Permission
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
    </div>


    <!--end container-->
@endsection

@section('scripts')
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{URL::asset('backend/assets/js/form-layouts.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
@endsection
