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
                @if(file_exists(public_path('storage/uploads/news/'.$news->image)))
                    <img src="{{ URL::asset('storage/uploads/news/'.$news->image) }}" class="feature-image" alt="">
                @else
                    <img src="{{URL::asset('frontend/assets/images/default-news-image.jpg')}}"  class="feature-image">
                @endif
                    <span class="p-4">
                        <img src="{{ URL::asset('frontend/assets/images/calender.png') }}" alt="">
                        Publish at: <strong
                            class="mx-2">{{\Carbon\Carbon::parse($news->date)->format('F d Y')}}</strong>
                    </span>
                </div>
                <div class="news-description">
                    <p>{!! $news->description !!}</p>
                </div>
            </div>
        </div>

    @else
        <div class="container">
            <h1 class="main-heading">{{$international_news->headline}}</h1>
        </div>

        <!--   Content Section     -->
        <div class="content-page-section">
            <div class="container">
                <div class="news-post-image">
                    @if(file_exists(public_path('storage/uploads/international-news/'.'/'.$international_news->id.'/'.$international_news->image)))
                        <img src="{{ URL::asset('storage/uploads/international-news/'.'/'.$international_news->id.'/'.$international_news->image) }}" alt="" class="feature-image">
                    @else
                        <img src="{{URL::asset('frontend/assets/images/default-news-image.jpg')}}" class="feature-image">
                    @endif

                    <span class="p-4">
                        <img src="{{ URL::asset('frontend/assets/images/calender.png') }}" alt="" >
                        Publish at: <strong
                            class="mx-2">{{\Carbon\Carbon::parse($international_news->date)->format('F d Y')}}</strong>
                    </span>
                </div>

                <div class="news-description">
                    <p>{!! $international_news->description !!}</p>
                </div>
            </div>
        </div>
    @endif
@endsection
