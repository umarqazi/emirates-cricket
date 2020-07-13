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
                <a href="{{route('development')}}" class="child-page">Development</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Development</h1>
    </div>

    <!--   Teams Section     -->
    <div class="teams-section">
        <div class="container">
            <div class="team-content">
                <h4>With just over a million Emirati’s living in UAE, the Emirati Development Programme forms an important part of Emirates Cricket’s strategic plan in growing the game.</h4>
                <a href="{{route('emirati-developent-program')}}" class="btn">Emirati Development Programme</a>
            </div>
            <div class="developement-images">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="cricket-images">
                            <img src="{{ URL::asset('frontend/assets/images/development-1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cricket-images">
                            <img src="{{ URL::asset('frontend/assets/images/development-2.jpg') }}" alt="">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cricket-images">
                            <img src="{{ URL::asset('frontend/assets/images/development-3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="development-content">
                <p>With just over a million Emirati’s living in UAE, the Emirati Development Programme forms an important part of Emirates Cricket’s strategic plan in growing the game.</p>
                <p>The UAE National squad currently comprises of 3 Emirati Nationals and it’s the aim of the Emirati Development Programme to ensure that there will be a steady integration of National players available for selection, in all forms of the game, in the future.</p>
                <p>Cricket, traditionally amongst the Emirati population, has had a very low participation rate, with a majority never having experienced the game.</p>
                <p>Through this affiliation the ECB now has the resources to take professional coaching into local schools and provide playing opportunities that have been limited before. A resource book of cricket in Arabic has been created and playing equipment provided to encourage and support this learning and development.</p>
                <p>In addition, the Programme has been bolstered by the employment of a dedicated Arabic speaking Development Officer who will be able to take the game forward. For more information about the Emirati Development Programme contact Emirates Cricket’s National Development Manager, Andrew Russell via email: <a href="mailto:andrew.russell@emiratescricket.com">andrew.russell@emiratescricket.com</a></p>
            </div>

        </div>
    </div>

@endsection
