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

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">FIXTURES & RESULTS</h1>
    </div>

    <!--   tabs section     -->
    <div class="tabs-section">
        <div class="container">
            <div class="col-12">
                <div class="tab_wrapper fixtures">

                    <ul class="tab_list">
                        <li class="active">Fixtures</li>
                        <li>Results</li>
                    </ul>

                    <div class="content_wrapper">
                        <div class="tab_content active">
                            <div class="table-responsive">
                                <table class="table table-bordered fixed-table">
                                    <tbody>
                                    <tr>
                                        <th>
                                            <p>04 May, 2020 <br> 15:00(PKT)</p>
                                        </th>
                                        <td>
                                            <div class="company-logo">
                                                <img src="{{ URL::asset('frontend/assets/images/logo-shape.png') }}" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="team-matches">
                                                <p>
                                                    <span>UAE Inter Emirates National Tournament</span>
                                                    <img src="{{ URL::asset('frontend/assets/images/logo-shape.png') }}" alt="">
                                                </p>
                                                <span>vs.</span>
                                                <p>
                                                    <span>UAE Inter Emirates National Tournament</span>
                                                    <img src="{{ URL::asset('frontend/assets/images/logo-shape.png') }}" alt="">
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>04 May, 2020 <br> 15:00(PKT)</p>
                                        </th>
                                        <td>
                                            <div class="company-logo">
                                                <img src="{{ URL::asset('frontend/assets/images/logo-shape.png') }}" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="team-matches">
                                                <p>
                                                    <span>UAE Inter Emirates National Tournament</span>
                                                    <img src="{{ URL::asset('frontend/assets/images/logo-shape.png') }}" alt="">
                                                </p>
                                                <span>vs.</span>
                                                <p>
                                                    <span>UAE Inter Emirates National Tournament</span>
                                                    <img src="{{ URL::asset('frontend/assets/images/logo-shape.png') }}" alt="">
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>04 May, 2020 <br> 15:00(PKT)</p>
                                        </th>
                                        <td>
                                            <div class="company-logo">
                                                <img src="{{ URL::asset('frontend/assets/images/logo-shape.png') }}" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="team-matches">
                                                <p>
                                                    <span>UAE Inter Emirates National Tournament</span>
                                                    <img src="{{ URL::asset('frontend/assets/images/logo-shape.png') }}" alt="">
                                                </p>
                                                <span>vs.</span>
                                                <p>
                                                    <span>UAE Inter Emirates National Tournament</span>
                                                    <img src="{{ URL::asset('frontend/assets/images/logo-shape.png') }}" alt="">
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab_content">
                            <h3>Tab content 2</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
