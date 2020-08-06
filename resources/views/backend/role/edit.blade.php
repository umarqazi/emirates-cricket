@extends('backend.layout.master-backend')

@section('title')
    <title>Add Role| Admin Panel</title>
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
                    <h5 class="breadcrumbs-title mt-0 mb-0">Add Role</h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('player.index')}}">Roles List</a>
                        </li>
                        <li class="breadcrumb-item active">Add New Role
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
                                <form class="col s12" method="POST" action="{{route('role.update', $role->id)}}">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <input id="title" type="text" name="name" class="validate" value="{{$role->name}}">
                                            <label for="title">Role Name</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <h5>Permissions</h5>

                                            <table id="page-length-option" class="display">
                                                <thead>
                                                <tr>
                                                    <th>Modules</th>
                                                    <th colspan="5">Permissions</th>
                                                </tr>
                                                </thead>
                                                @foreach($permissions as $key=>$permission)
                                                    <tr>
                                                        <th width="20%">
                                                            <label>
                                                                <input type="checkbox" name="select_row" class="filled-in select_row">
                                                                <span><b>{{strtoupper($key)}}</b></span>
                                                            </label>
                                                        </th>
                                                        @for($i=0;$i<=4;$i++)
                                                            @if(!empty($permission[$i]))
                                                                <th width="16%">
                                                                    <label>
                                                                        <input type="checkbox" name="permission[]" class="filled-in" value="{{$permission[$i]['id']}}" {{!empty($rolePermissions) && in_array($permission[$i]['id'], $rolePermissions) ? 'checked' : ''}}>
                                                                        <span>{{$permission[$i]['name']}}</span>
                                                                    </label>
                                                                </th>
                                                            @else
                                                                <th width="20%"></th>
                                                            @endif
                                                        @endfor
                                                    </tr>
                                                @endforeach
                                                <tfoot>
                                                <tr>
                                                    <th>Modules</th>
                                                    <th colspan="5">Permissions</th>
                                                </tr>
                                                </tfoot>
                                            </table>

                                            @error('permission')
                                            <div class="invalid-feedback mt-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit">Update Role
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
