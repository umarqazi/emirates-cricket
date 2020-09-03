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
                <a href="{{route('gallery')}}" class="child-page">Gallery</a>
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

                <div class="col-lg-3 col-md-6">
                    <div class="fancy-col-image">
                        <a href="https://www.scalloncustomhomes.com/wp-content/uploads/2019/03/IMG_8832-370x280.jpg" data-fancybox="images">
                            <img src="https://www.scalloncustomhomes.com/wp-content/uploads/2019/03/IMG_8832-370x280.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fancy-col-image">
                        <a href="https://images.unsplash.com/photo-1541336528065-8f1fdc435835?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" data-fancybox="images">
                            <img src="https://images.unsplash.com/photo-1541336528065-8f1fdc435835?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fancy-col-image">
                        <a href="https://images.unsplash.com/photo-1541079033018-63489731598f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" data-fancybox="images">
                            <img src="https://images.unsplash.com/photo-1541079033018-63489731598f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fancy-col-image">
                        <a href="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" data-fancybox="images">
                            <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fancy-col-image">
                        <a href="https://www.scalloncustomhomes.com/wp-content/uploads/2019/03/IMG_8844-370x280.jpg" data-fancybox="images">
                            <img src="https://www.scalloncustomhomes.com/wp-content/uploads/2019/03/IMG_8844-370x280.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fancy-col-image">
                        <a href="https://www.scalloncustomhomes.com/wp-content/uploads/2019/03/IMG_8854-370x280.jpg" data-fancybox="images">
                            <img src="https://www.scalloncustomhomes.com/wp-content/uploads/2019/03/IMG_8854-370x280.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fancy-col-image">
                        <a href="https://www.scalloncustomhomes.com/wp-content/uploads/2019/03/IMG_8832-370x280.jpg" data-fancybox="images">
                            <img src="https://www.scalloncustomhomes.com/wp-content/uploads/2019/03/IMG_8832-370x280.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fancy-col-image">
                        <a href="https://www.scalloncustomhomes.com/wp-content/uploads/2019/03/IMG_8844-370x280.jpg" data-fancybox="images">
                            <img src="https://www.scalloncustomhomes.com/wp-content/uploads/2019/03/IMG_8844-370x280.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
