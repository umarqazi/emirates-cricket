@extends('backend.layout.master-backend')

@section('title')
    <title>Add Employee| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Add Employee</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('employee.index')}}">Employee List</a>
                        </li>
                        <li class="breadcrumb-item active">Add New Employee
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
                                <div class="card-header">Create New Employee</div>
                                <div class="row">
                                    <form method="post" action="{{route('employee.store')}}" enctype="multipart/form-data">

                                        @csrf

                                        <div class="row">
                                            <div class="input-field col m12 s12">
                                                <input id="name" type="text" name="name" class="validate @error('name') invalid @enderror" value="{{ old('name') }}">
                                                <label for="name">Enter Employee Name</label>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col m12 s12">
                                                <select name="designation" class="@error('designation') invalid @enderror">
                                                    <option value="" disabled selected>Select Designation</option>
                                                    @foreach(config('constants.designations') as $designation)
                                                        <option value="{{$designation}}" {{old('designation') === $designation ? 'selected' : ''}}>{{$designation}}</option>
                                                    @endforeach
                                                </select>
                                                <label>Select Designation</label>

                                                @error('designation')
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col m12 col-12">
                                                <div class="col-12" style="margin-bottom: 10px">Employee Description</div>
                                                <textarea id="message5" class="ckeditor @error('description') invalid @enderror" name="description" rows="15" placeholder="Type Description in here...">{{old('description')}}</textarea>

                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col m12 s12">
                                                <input id="image" type="file" name="image" class="validate @error('image') invalid @enderror" value="">

                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit">Create Employee
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
