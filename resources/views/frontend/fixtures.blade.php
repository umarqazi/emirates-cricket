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
                <a href="{{route('fixtures')}}" class="child-page">Fixtures & Results</a>
            </p>
        </div>
    </div>

    <!--   Tabs Section     -->
    <div class="tabs-section">
        <div class="container">

            <!--            <div class="row">
                            <div class="col-md-12">
                                <iframe id="stats-iframe"
                                        src="https://cricclubs.com/UAE"></iframe>
                            </div>
                        </div>-->

            {{--     Fixtures Content      --}}
            <div class="row mb-5">
                <div class="col-lg-7">
                    <div class="fixtures-content-section">
                        <div class="batting-stats">
                            <iframe id="batting-stats-iframe"
                                    src="https://cricclubs.com/UAE/battingRecords.do?clubId=15272&embedView=true"></iframe>
                        </div>

                        <div class="bowling-stats">
                            <iframe id="bowling-stats-iframe"
                                    src="https://cricclubs.com/uae/bowlingRecords.do?clubId=15272&embedView=true"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="fixtures-sidebar-section">
                        <iframe id="results-stats-iframe"
                                src="https://cricclubs.com/resultsViewEV.do?clubId=15272&embedView=true"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
