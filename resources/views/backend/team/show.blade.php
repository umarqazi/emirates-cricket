@extends('backend.layout.master-backend')

@section('title')
    <title>Uae Men Team| Admin Panel</title>
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
                            <h5 class="breadcrumbs-title mt-0 mb-0">{{$team->name}}</h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">{{$team->name}}
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
                                        <h4 class="card-title">{{$team->name}}</h4>

                                        @include('frontend.partials.session-messages')

                                        <div class="row">
                                            <!-- Form Advance -->
                                            <div class="col s12 m12 l12">
                                                <div id="Form-advance" class="card card card-default scrollspy">
                                                    <div class="card-content">
                                                        <form class="col s12" method="POST" action="{{route('team.update', $team->id)}}">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="row">
                                                                <div class="col-12">{{$team->name}} Description</div>
                                                                <div class="input-field col-12">
                                                                    <label for="message5"></label>
                                                                    <textarea id="message5" class="ckeditor @error('description') invalid @enderror" name="description" rows="15" placeholder="Type News Description in here...">{{$team->description}}</textarea>

                                                                    @error('description')
                                                                    <div class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            @can('Edit Team')
                                                                <div class="row">
                                                                    <div class="input-field col s12">
                                                                        <button class="btn cyan waves-effect waves-light right" type="submit">Update Description
                                                                            <i class="material-icons right">send</i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            @endcan
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @can('List Team Player')
                                            <div class="row">
                                                <div class="col s12">
                                                    <div class="team-player-section">
                                                        <div class="heading">
                                                        <span class="title">
                                                            <p>{{$team->name}} Players List</p>
                                                        </span>

                                                            @can('Create Team Player')
                                                                <span class="heading-icon">
                                                                    <a class="waves-effect waves-light btn add-player-btn" href="{{route('team-player.create')}}"><i class="material-icons">add</i></a>
                                                                </span>
                                                            @endcan
                                                        </div>

                                                        <table id="page-length-option" class="display team-player-table">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>CricInfo Profile URL</th>
                                                                <th>Image</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @if(!empty($team->players))
                                                                @foreach($team->players as $key=> $player)
                                                                    <tr class="team-player">
                                                                        <td>{{$key + 1}}</td>
                                                                        <td>{{$player->link}}</td>
                                                                        <td>{{$player->name}}</td>
                                                                        <td><img src="{{public_path('storage/uploads/team-players/'.$player->image)}}" /></td>
                                                                        <td>
                                                                            @can('Edit Team Player')
                                                                                <a href="{{route('team-player.edit', $player->id)}}" ><i class="material-icons">edit</i></a>
                                                                            @endcan

                                                                            @can('Delete Team Player')
                                                                                <form method="post" class="delete-form" action="{{ route('team-player.destroy', $player->id) }}">
                                                                                    @csrf
                                                                                    @method('DELETE')

                                                                                    <a type="button" class="delete-submit-btn" onclick="this.closest('form').submit()"><i class="material-icons">delete</i></a>
                                                                                </form>
                                                                            @endcan
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @else
                                                                <tr class="empty-row">
                                                                    <td colspan="6" class="center">No Players Available...</td>
                                                                </tr>
                                                            @endif
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        @endcan
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
                <script>
                    var team_player_url = "{{route('team-player.store')}}";
                </script>
                <!-- BEGIN VENDOR JS-->
                <!-- BEGIN PAGE VENDOR JS-->
                <script src="{{URL::asset('backend/assets/js/jquery.dataTables.min.js')}}"></script>
                <script src="{{URL::asset('backend/assets/js/dataTables.responsive.min.js')}}"></script>
                <script src="{{URL::asset('backend/assets/js/dataTables.select.min.js')}}"></script>
                <script src="{{URL::asset('backend/assets/js/data-tables.js')}}"></script>
                <!-- END PAGE VENDOR JS-->
@endsection
