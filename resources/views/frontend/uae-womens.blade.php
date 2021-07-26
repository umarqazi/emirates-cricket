@extends('frontend.layout.master-frontend')

@section('content')

    <!--   top bar     -->
    @include('frontend.partials.top-bar')

    <!--   Breadcrums     -->
    <div class="breadcrumb">
        <div class="container">
            <p>
                <a href="{{route('home')}}" class="paren-page">Main page</a>
                <img src="{{ URL::asset('frontend/assets/images/right-arrow.png') }}" alt="">
                <a href="{{route('team')}}" class="child-page">Teams</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Teams</h1>
    </div>

    <!--   Teams Section     -->
    <div class="teams-section">
        <div class="container">
            <div class="team-content">
                <h4>{!! $team->description !!}</h4>
                <a href="javascript:void(0)" class="btn">Uae Women's</a>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="teams-table-content">
                        <div class="table-responsive">
                            <table class="table teams-table">
                                <thead>
                                <tr>
                                    <th width="20%" scope="col">No#</th>
                                    <th width="20%" scope="col">Image</th>
                                    <th width="20%" scope="col">Player</th>
                                    <th width="20%" scope="col">Description</th>
                                    <th width="20%" scope="col">Cricinfo</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!$team->players->isEmpty())
                                    @foreach($team->players as $key=>$player)
                                        <tr>
                                            <td scope="row">{{$key + 1}}</td>
                                            <td>
                                                <img src="{{asset('storage/uploads/team-players/'.$player->image)}}" />
                                            </td>
                                            <td>{{$player->name}}</td>
                                            <td>{{\Illuminate\Support\Str::limit(str_replace("&nbsp;", '',strip_tags($player->description)),40)}}</td>
                                            <td>
                                                <a href="{{$player->link}}">CricInfo Profile</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <th colspan="4" class="text-center">No Player Selected Yet.</th>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
