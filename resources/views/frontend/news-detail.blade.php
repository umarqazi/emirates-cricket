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
                <a href="{{route('home')}}" class="child-page">International News</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->

    @if(!empty($international_news))
    <div class="container">
        <h1 class="main-heading">{{$international_news->title}}</h1>
    </div>

    <!--   Content Section     -->
    <div class="content-page-section">
        <div class="container">
            <div class="news-post-image">
                <img src="{{ URL::asset('storage/uploads/international-news/'.'/'.$international_news->id.'/'.$international_news->image) }}" alt="">
                <span><img src="{{ URL::asset('frontend/assets/images/calender.png') }}" alt=""> Publish at: <strong>{{$international_news->created_at->format('m-d-Y')}}</strong></span>
            </div>
            <div class="news-description">
                <p>{!! $international_news->description !!}</p>
            </div>
        </div>
    </div>
    @endif
@endsection
