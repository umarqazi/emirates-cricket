@extends('backend.layout.master-backend')

@section('title')
    <title>Add News| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Add News</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('player.index')}}">News List</a>
                        </li>
                        <li class="breadcrumb-item active">Add New News
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
                                <div class="card-header">Create New User</div>
                                <div class="row">
                                    <form class="col s12" method="POST" action="{{route('user.store')}}">
                                        @csrf

                                        <div class="row">
                                            <div class="input-field col m12 s12">
                                                <input id="title" type="text" name="name" class="validate @error('name') invalid @enderror" value="{{old('name')}}">
                                                <label for="title">User Name</label>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col m12 s12">
                                                <input id="title" type="email" name="email" class="validate @error('email') invalid @enderror" value="{{old('email')}}">
                                                <label for="title">User Email</label>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col m12 s12">
                                                <select name="role" class="@error('role') invalid @enderror">
                                                    <option value="" disabled selected>Select Role</option>
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}" {{old('role') === $role->id ? 'selected' : ''}}>{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                                <label>Select Role</label>

                                                @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <button class="btn cyan waves-effect waves-light right" type="submit">Create User
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
