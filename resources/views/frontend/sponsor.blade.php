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
                <a href="{{route('sponsor')}}" class="child-page">Sponsor</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Sponcer</h1>
    </div>

    <!--   Sponcer Section     -->
    <div class="sponcer-section">
        <div class="container">
            <div class="sponser-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="sponcer-company">
                                    <div class="sponcer-logo">
                                        <img src="{{ URL::asset('frontend/assets/images/company-logo1.png') }}" alt="">
                                    </div>
                                    <a href="#" class="btn">View Website</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="company-content">
                                    <h3>Pacific Venture</h3>
                                    <p>Al Nabooda Insurance Brokers (ANIB), and the Emirates Cricket Board, (ECB), have a dual relationship whereby ANIB are the sponsor of the Men's Women's and age-group representative teams, as well as the parties have signed an insurance agreement where ANIB will provide Emirates Cricket's centrally contracted players, and management team, with medical insurance coverage during their local and international fixtures.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sponser-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="sponcer-company">
                                    <div class="sponcer-logo">
                                        <img src="{{ URL::asset('frontend/assets/images/company-logo2.png') }}" alt="">
                                    </div>
                                    <a href="#" class="btn">View Website</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="company-content">
                                    <h3>Pinsent Masons</h3>
                                    <p>Pinsent Masons, a full-service international law firm with offices across the United Kingdom, Europe, Africa, Asia, and the Middle East, is the sponsor of the ECB’s Emirati Development Programme (EDP).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sponser-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="sponcer-company">
                                    <div class="sponcer-logo">
                                        <img src="{{ URL::asset('frontend/assets/images/company-logo3.png') }}" alt="">
                                    </div>
                                    <a href="#" class="btn">View Website</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="company-content">
                                    <h3>VIRAT</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
