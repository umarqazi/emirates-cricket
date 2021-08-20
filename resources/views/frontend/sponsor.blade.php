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
                <a href="{{route('sponsor')}}" class="child-page">Sponsors</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Sponsors</h1>
    </div>

    <!--   Sponsor Section     -->
    <div class="sponcer-section">
        <div class="container">
            <div class="sponser-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="row align-items-center mt-3">
                            @if(!empty($sponsors))
                                @foreach($sponsors as $sponsor)
                                    <div class="col-md-4">
                                        <div class="sponcer-company">
                                            <div class="sponcer-logo">
                                                <img
                                                    src="{{ URL::asset('storage/uploads/sponsor/'.$sponsor->id.'/'.$sponsor->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="company-content">
                                                <h3>{{$sponsor->name}}</h3>
                                                <p>{!! $sponsor->text !!}</p>
                                            </div>
                                            <a href="{{$sponsor->website}}" target="_blank" class="btn">View Website</a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
