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
            <h1 class="main-heading">{{$news->title}}</h1>
        </div>

        <!--   Content Section     -->
        <div class="content-page-section">
            <div class="container">
                <div class="news-post-image">
                    @if($name == 'international_service')
                        <img src="{{ URL::asset('storage/uploads/international-news/'.'/'.$news->id.'/'.$news->image) }}"
                            class="feature-image" alt="">
                    @else
                        <img src="{{ URL::asset('storage/uploads/news/'.'/'.$news->id.'/'.$news->image) }}"
                             class="feature-image" alt="">
                    @endif
                    <span><img src="{{ URL::asset('frontend/assets/images/calender.png') }}"
                               alt=""> Publish at: <strong>{{$news->created_at->format('m-d-Y')}}</strong></span>
                </div>
                <div class="news-description">
                    @if(isset($news->description))
                        <p>{!! $news->description !!}</p>
                    @else
                        <p>{!! $news->text !!}</p>
                    @endif
                </div>
            </div>
        </div>
    @endif
@endsection
