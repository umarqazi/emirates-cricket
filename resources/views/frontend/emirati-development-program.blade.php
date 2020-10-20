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
                <a href="{{route('development')}}" class="child-page">Development</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Development</h1>
    </div>

    <!--   Teams Section     -->
    <div class="teams-section">
        <div class="container">
            @if($emirati)
                <div class="team-content">
                    <h4>{!! $emirati->heading !!}</h4>
                    {{--<a href="{{route('emirati-development-program')}}" class="btn">{{$emirati->title}}</a>--}}
                </div>

                @if(!$emirati->images->isEmpty())
                    <div class="developement-images">
                        <div class="row no-gutters">

                            @foreach($emirati->images as $image)
                            <div class="col-md-4">
                                <div class="cricket-images">
                                    <img src="{{ asset('storage/uploads/development/'.$emirati->id.'/'.$image->name) }}" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="development-content">
                    {!! $emirati->description !!}
                </div>
            @endif

        </div>
    </div>

@endsection
