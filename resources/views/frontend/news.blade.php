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
                <a href="{{route('news')}}" class="child-page">News</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">News</h1>
    </div>

    <!--  Post Section     -->
    <div class="post-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="latest-news international-news">

                        @if(!empty($news))
                            @foreach($news as $new)
                                <div class="news-inner-content">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <div class="international-news-image">
                                                @if(file_exists(public_path('storage/uploads/news/'.$new->image)))
                                                    <img src="{{ URL::asset('storage/uploads/news/'.$new->image) }}" alt="">
                                                @else
                                                    <img src="{{URL::asset('frontend/assets/images/default-news-image.jpg')}}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="international-news-content international-content-news">
                                                <h4>{{$new->headline}}</h4>
                                                <p> {!! $new->summary !!} </p>
                                                <p class="read-more">
                                                    <a href="{{route('news-detail',[encodeData($new->id)])}}"
                                                       tabindex="0">Read more</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <div class="paginated_results">
                            {{ $news->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
