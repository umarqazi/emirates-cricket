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
                <a href="{{route('team')}}" class="child-page">Teams</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Teams</h1>
    </div>

    <!--   Teams Section     -->
    <div class="teams-section">
        <div class="container">
            <div class="team-content">
                <h4>The UAE Women’s team is the team that represents the United Arab Emirates (UAE) in international and regional cricket matches. In July 2007, the UAE Women’s team made their international debut in the Asian Cricket Council’s (ACC) Women’s Tournament, which was played in Malaysia.</h4>
                <a href="#" class="btn">Uae Women's</a>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="teams-table-content">
                        <div class="table-responsive">
                            <table class="table teams-table">
                                <thead>
                                <tr>
                                    <th width="50%" scope="col">No</th>
                                    <th width="50%" scope="col">Player</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Humaira Tasneem</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Chamani Seneviratne</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Subha Srinivasan</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Neha Sharma</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Kavisha Kumari</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
