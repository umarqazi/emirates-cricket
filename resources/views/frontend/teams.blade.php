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
            @foreach($teams as $team)
                <div class="team-content">
                    {!! $team->description !!}
                    @if($team->type == \App\Team::$Mens)
                        <a href="{{ route('uae-men') }}" class="btn">{{$team->name}}</a>
                    @elseif($team->type == \App\Team::$Womens)
                        <a href="{{ route('uae-women') }}" class="btn">UAE Women's</a>
                    @elseif($team->type == \App\Team::$U19)
                        <a href="{{ route('under-19') }}" class="btn">UAE 19 Men's</a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

@endsection
