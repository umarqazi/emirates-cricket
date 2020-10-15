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
                <a href="{{route('contact')}}" class="child-page">Contact</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">{{ $data->about_type === \App\Repos\IAboutType::aboutRegionalCouncils ? $data->about_type.': '.str_replace('-', ' ', $data->council_type) : strtoupper($data->about_type)}}</h1>
    </div>

    <!--   Content Section     -->
    <div class="container">
        <div class="content-page-section">
            <div>{!! $data->content !!}</div>
        </div>
    </div>
@endsection
