@extends('backend.layout.master-backend')

@section('title')
    <title>Employee List| Admin Panel</title>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/select.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/data-tables.css')}}">
@endsection

@section('content')
    <div class="col s12">
        <div class="container">
            <div id="breadcrumbs-wrapper" data-image="{{url('backend/assets/images/gallery/breadcrumb-bg.jpg')}}">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0">Employee List</h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Employee List
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-data-tables">
                        <!-- Page Length Options -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title">Employees</h4>

                                        @include('frontend.partials.session-messages')

                                        <div class="row">
                                            <div class="col s12">
                                                <table id="page-length-option" class="display">
                                                    <thead>
                                                    <tr>
                                                        <th>Employee Name</th>
                                                        <th>Employee Designation</th>
                                                        <th>Employee Image</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if(!empty($employees))
                                                    @foreach($employees as $row)

                                                        <tr>
                                                            <td>{{$row->name}}</td>
                                                            <td>{{$row->designation}}</td>
                                                            <td><img src="{{ URL::asset('storage/uploads/employees/'). '/'. $row->image }}"  class="img-thumbnail" width="75" /></td>
                                                            <td>
                                                                @can('Edit Employee')
                                                                    <a href="{{route('employee.edit', $row->id)}}"><i class="material-icons">edit</i></a>
                                                                @endcan

                                                                @can('Delete Employee')
                                                                    <form method="post" class="delete-form" action="{{ route('employee.destroy', $row->id) }}">
                                                                        @csrf
                                                                        @method('DELETE')

                                                                        <a type="button" class="delete-submit-btn"><i class="material-icons">delete</i></a>
                                                                    </form>
                                                                @endcan
                                                            </td>
                                                        </tr>

                                                    @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="4" class="center">No Employee Available...</td>
                                                        </tr>
                                                    @endif
                                                    </tbody>
                                                    <tfoot>

                                                </table>
                                            </div>
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
            <!-- BEGIN VENDOR JS-->
                <!-- BEGIN PAGE VENDOR JS-->
                <script src="{{URL::asset('backend/assets/js/jquery.dataTables.min.js')}}"></script>
                <script src="{{URL::asset('backend/assets/js/dataTables.responsive.min.js')}}"></script>
                <script src="{{URL::asset('backend/assets/js/dataTables.select.min.js')}}"></script>
                <script src="{{URL::asset('backend/assets/js/data-tables.js')}}"></script>
                <!-- END PAGE VENDOR JS-->
@endsection
