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
                <a href="{{route('gallery', $gallery->id)}}" class="child-page">Gallery</a>
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
                @if(!$gallery->images->isEmpty())
                    @foreach($gallery->images as $image)
                        <div class="col-lg-3 col-md-6">
                            <div class="fancy-col-image">
                                <a href="{{ URL::asset('storage/uploads/gallery/'.$gallery->id.'/'.$image->name) }}" data-fancybox="images">
                                    <img src="{{ URL::asset('storage/uploads/gallery/'.$gallery->id.'/'.$image->name) }}" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div>
                        <p>This Gallery Has No Images.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
