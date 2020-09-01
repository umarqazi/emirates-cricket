@extends('backend.layout.master-backend')

@section('title')
    <title>{{$socialAccount->name}} Posts List| Admin Panel</title>
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
                            <h5 class="breadcrumbs-title mt-0 mb-0">{{$socialAccount->name}} Posts List</h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">{{$socialAccount->name}} Posts List
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
                                        <div class="social-heading">
                                            <h4 class="card-title social-title">{{$socialAccount->name}} Posts List</h4>

                                            @if(\Carbon\Carbon::parse($socialAccount->expires_in)->isPast())
                                                <a href="{{$loginUrl}}">
                                                    <button class="btn cyan waves-effect waves-light right">Log In With {{$socialAccount->name}}</button>
                                                </a>
                                            @else
                                                <a href="{{$fetchPostsRoute}}">
                                                    <button class="btn cyan waves-effect waves-light right">Fetch Latest Posts
                                                        <i class="material-icons right">get_app</i>
                                                    </button>
                                                </a>
                                            @endif
                                        </div>

                                        @include('frontend.partials.session-messages')

                                        <div class="row">
                                            <div class="col s12">
                                                <table id="page-length-option" class="display">
                                                    <thead>
                                                    <tr>
                                                        <th>Post</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if(!empty($socialAccount->posts))
                                                        @foreach($socialAccount->posts as $post)
                                                            @php
                                                                $data = json_decode($post->data);
                                                            @endphp
                                                            <tr>
                                                                <td>{{\Illuminate\Support\Str::limit($data->message, 50)}}</td>
                                                                <td>
                                                                    <a href="{{$data->permalink_url}}" target="_blank"><i class="material-icons">visibility</i></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="3" class="center">No Social Posts Available...</td>
                                                        </tr>
                                                    @endif
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Post</th>
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
