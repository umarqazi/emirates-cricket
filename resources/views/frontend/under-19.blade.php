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
                <h4>The UAE Under 19 (U19’s) team is the team that represents the United Arab Emirates (UAE) in all U19 official and unofficial cricket matches. UAE’s U19’s recently competed in the 2015 ACC Premier Tournament where they finished 4th.</h4>
                <a href="#" class="btn">Uae 19 Men's</a>
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
                                    <td>Vriitya Aravind</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Osama Hassan</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Alishan Sharafu</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Wasi Shah</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Akasha Tahir</td>
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
