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
                <option
                    value="{{ $year['year'] }}" {{ request()->get('year')==$year['year'] ? 'selected' : '' }}> {{ $year['year'] }} </option>
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
                                <div>
                                    <ul>
                                        @foreach($news as $new)
                                            <li class="news-inner-list">
                                                <div class="inner-news-content-main">
                                                    <div class="row  align-items-center">
                                                        <div class="col-md-6">
                                                            <a href="{{route('news-detail',[encodeData($new->id)])}}">
                                                                <h4>{{ \Illuminate\Support\Str::limit($new->headline, 150)}}</h4>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3"><p>
                                                                {{\Carbon\Carbon::parse($new->date)->format('F d Y')}}
                                                            </p></div>
                                                        <div class="col-md-3"><a
                                                                href="{{route('news-detail',[encodeData($new->id)])}}"
                                                                class="btn">View Detail</a></div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
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
