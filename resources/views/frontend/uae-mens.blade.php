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
                <h4>The UAE senior Men’s team is the team that represents the United Arab Emirates (UAE) in all official and unofficial cricket matches. UAE Men’s became an affiliate member of the International Cricket Council (ICC) in 1989 and an associate member in 1990. The UAE also gained ODI status, through to 2018.</h4>
                <a href="#" class="btn">Uae Men's</a>
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
                                    <td>Muhammad Naveed</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Rohan Mustafa</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashfaq Ahmed</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Shaiman Anwar</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Rameez Shahzad</td>
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
