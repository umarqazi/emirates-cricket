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
                <a href="{{route('home')}}" class="child-page">News Detail</a>
            </p>
        </div>
    </div>
    <!--    main heading        -->

    @if(!empty($news))
        <div class="container">
            <h1 class="main-heading">{{$news->headline}}</h1>
        </div>

        <!--   Content Section     -->
        <div class="content-page-section">
            <div class="container">
                <div class="news-post-image">
                    <img src="{{ URL::asset('storage/uploads/news/'.'/'.$news->image) }}"
                         class="feature-image" alt="">
                    <span class="p-4"><img src="{{ URL::asset('frontend/assets/images/calender.png') }}" alt="">
                        Publish at: <strong class="mx-2">{{\Carbon\Carbon::parse($news->date)->format('d/m/Y')}}</strong></span>
                </div>

                <div class="news-description">
                    <p>{!! $news->description !!}</p>
                </div>
            </div>
        </div>
    @endif
@endsection
