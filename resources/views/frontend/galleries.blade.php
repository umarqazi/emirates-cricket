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
                <a href="#" class="first-parent">Social</a>
                <img src="{{ URL::asset('frontend/assets/images/right-arrow.png') }}" alt="">
                <a href="{{route('galleries')}}" class="child-page">Gallery</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Gallery</h1>
    </div>

    <!--    gallery section    -->
    <div class="gallery-fodlers">
        <div class="container">
            <div class="row justify-content-center">
                @if(!$galleries->isEmpty())
                    @foreach($galleries as $gallery)
                    <div class="col-md-6 col-lg-4">
                        <div class="images-folder">
                            <div class="womens-team galleries">
                                <a href="#">
                                    <img src="{{ URL::asset('storage/uploads/gallery/'.$gallery->id.'/'.$gallery->image) }}" alt="">
                                </a>
                            </div>
                            <p>{{$gallery->title}}</p>
                            <div class="more-info">
                                <a href="#">
                                    <img src="{{ URL::asset('frontend/assets/images/gallery.png') }}" class="gallery-icon" alt="">
                                    <span>More</span>
                                </a>
                                <a href="#">{{date('M d, Y', strtotime($gallery->created_at))}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div>
                        <h4>No Galleries Available.</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
