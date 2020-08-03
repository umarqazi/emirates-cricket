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
                            <h5 class="breadcrumbs-title mt-0 mb-0">UAE Men Team</h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">UAE Men Team
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
                                        <h4 class="card-title">UAE Men Team</h4>

                                        @include('frontend.partials.session-messages')

                                        <div class="row">
                                            <!-- Form Advance -->
                                            <div class="col s12 m12 l12">
                                                <div id="Form-advance" class="card card card-default scrollspy">
                                                    <div class="card-content">
                                                        <form class="col s12" method="POST" action="{{route('team.update', $team->id)}}">
                                                            @csrf

                                                            <div class="row">
                                                                <div class="col-12">UAE Men Description</div>
                                                                <div class="input-field col-12">
                                                                    <label for="message5"></label>
                                                                    <textarea id="message5" class="ckeditor @error('description') invalid @enderror" name="description" rows="15" placeholder="Type News Description in here...">{{$team->description}}</textarea>

                                                                    @error('description')
                                                                    <span class="invalid-feedback login-email-error" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Update Description
                                                                        <i class="material-icons right">send</i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s12">
                                                <div class="team-player-section">
                                                    <div class="heading">
                                                        <span class="title">
                                                            <p>Players List</p>
                                                        </span>
                                                        <span class="heading-icon">
                                                        <a class="waves-effect waves-light btn add-player-btn" href="#" data-toggle="modal" data-target="#addplayermodal"><i class="material-icons">add</i></a>
                                                        </span>

                                                        <!-- Create Modal -->
                                                        <div class="modal fade custom-add-modal" id="addplayermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Please Enter Player Name</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form id="create-team-player-form" method="POST" action="">
                                                                            <input type="text" name="name" class="validate add_player_input" required>
                                                                            <span class="form-error name"></span>

                                                                            <input type="hidden" name="team_id" value="{{$team->id}}">
                                                                            <button type="submit" class="btn cyan waves-effect waves-light right create-player">Create!</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{--Edit Modal--}}
                                                        <div class="modal fade custom-add-modal" id="editplayermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Please Edit Player Name</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form id="edit-team-player-form" method="POST" action="">
                                                                            @method('PUT')

                                                                            <input type="text" name="name" class="validate edit_player_input" required>
                                                                            <span class="form-error name"></span>

                                                                            <input type="hidden" name="team_id" value="{{$team->id}}">
                                                                            <button type="submit" class="btn cyan waves-effect waves-light right create-player">Create!</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <table id="page-length-option" class="display team-player-table">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if(!empty($team->players))
                                                            @foreach($team->players as $key=> $player)
                                                                <tr class="team-player-{{$player->id}}">
                                                                    <td>{{$key + 1}}</td>
                                                                    <td>{{$player->name}}</td>
                                                                    <td>
                                                                        <a href="{{route('player.edit', $player->id)}}" ><i class="material-icons">edit</i></a>

                                                                        <form method="post" class="delete-form" action="{{ route('player.destroy', $player->id) }}">
                                                                            @csrf
                                                                            @method('DELETE')

                                                                            <a type="button" class="delete-submit-btn"><i class="material-icons">delete</i></a>
                                                                        </form>
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
