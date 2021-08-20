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
    <div class="container d-flex justify-content-between">
        <h1 class="main-heading">News</h1>
        <select name="search" id="search">
            <option value="" selected disabled hidden>Select Year</option>
            @foreach($years as $year)
                <option value="{{ $year['year'] }}" {{ request()->get('year')==$year['year'] ? 'selected' : '' }}> {{ $year['year'] }} </option>
            @endforeach
        </select>
    </div>

    <!--  Post Section     -->
    <div class="post-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="latest-news international-news news-render">

                        @if(!empty($news))
                           
                                <div class="news-inner-content">
                                    <div class="row no-gutters">
                                    @foreach($news as $new)
                                        <div class="col-md-4 p-2">
                                        <a href="{{route('news-detail',[encodeData($new->id)])}}"
                                                       tabindex="0">
                                            <div class="inner-news-img-container">
                                            @if(file_exists(public_path('storage/uploads/news/'.$new->image)))
                                                <div class="inner-news-uploaded-img">
                                                    <img src="{{ URL::asset('storage/uploads/news/'.$new->image) }}" alt="">
                                                </div>
                                            @else
                                                <div class="inner-news-default-img">
                                                    <img src="{{URL::asset('frontend/assets/images/default-news-image.jpg')}}">
                                                </div>
                                                
                                            @endif
                                            <div class="inner-news-content">
                                                <h4>{{$new->headline}}</h4>
                                                <!-- <p> {!! $new->summary !!} </p> -->
                                                <!-- <p class="read-more">
                                                    <a href="{{route('news-detail',[encodeData($new->id)])}}"
                                                       tabindex="0">Read more</a>
                                                </p> -->
                                                <div>
                                                    <p>
                                                        {{\Carbon\Carbon::parse($new->date)->format('F d Y')}}
                                                    </p>
                                                </div>
                                            </div>
                                            </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                           
                        @endif

                        <div class="paginated_results">
                            @if(request()->get('year'))
                                {{ $news->appends(array('year' => request()->get('year')))->links() }}
                            @else
                                {{ $news->links() }}
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
