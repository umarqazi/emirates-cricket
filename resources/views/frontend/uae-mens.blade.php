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
                <a href="javascript:void(0)" class="btn">Uae Men's</a>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="teams-table-content">
                        <div class="table-responsive">
                            <table class="table teams-table">
                                <thead>
                                <tr>
                                    <th width="50%" scope="col">No</th>
                                    <th width="50%" scope="col">Player</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!$team->players->isEmpty())
                                    @foreach($team->players as $key=>$player)
                                        <tr>
                                            <th scope="row">{{$key + 1}}</th>
                                            <td>{{$player->name}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <th colspan="2" class="text-center">No Player Selected Yet.</th>
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
