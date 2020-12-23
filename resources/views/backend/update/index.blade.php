@extends('backend.layout.master-backend')

@section('title')
    <title>Updates List| Admin Panel</title>
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
                            <h5 class="breadcrumbs-title mt-0 mb-0">Updates List</h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Updates List
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
                                        <h4 class="card-title">Updates</h4>

                                        @include('frontend.partials.session-messages')

                                        <div class="row">
                                            <div class="col s12">
                                                <table id="page-length-option" class="display">
                                                    <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Creation Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if(!empty($updates))
                                                        @foreach($updates as $update)
                                                            <tr>
                                                                <td>{{\Illuminate\Support\Str::limit($update->title, 50)}}</td>
                                                                <td>{{date('d/m/Y', strtotime($update->created_at))}}</td>
                                                                <td>
                                                                    @can('Show Update')
                                                                        <a href="{{route('update.show', $update->id)}}"><i class="material-icons">visibility</i></a>
                                                                    @endcan

                                                                    @can('Edit Update')
                                                                        <a href="{{route('update.edit', $update->id)}}"><i class="material-icons">edit</i></a>
                                                                    @endcan

                                                                    @can('Delete Update')
                                                                        <form method="post" class="delete-form" action="{{ route('update.destroy', $update->id) }}">
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
                                                            <td colspan="3" class="center">No Updates Available...</td>
                                                        </tr>
                                                    @endif
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Creation Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </tfoot>
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
