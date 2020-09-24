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
        {{--        <h1 class="main-heading">FIXTURES & RESULTS</h1>--}}
    </div>

    <!--   tabs section     -->
    <div class="tabs-section">
        <div class="container">
            <div class="fixtures-result-slider">
                <div class="row">
                    <div class="col-12">
                        {{-- Slider HTML --}}
                        @if(!empty($results))
                            <div class="fixture_slide">
                                @foreach($results as $result)
                                    <a href="{{str_replace(array('{ClubId}', '{MatchId}'), array(env('CRIC_CLUB_ID'), $result['matchID']), env('CRIC_CLUB_VIEW_SCORECARD'))}}" class="fixture_item">
                                        <div class="row no-gutters">
                                            <div class="icon col-4">
                                                <i class="fa fa-calendar"></i>
                                                <p>{{date('F j Y',strtotime($result['date']))}}</p>
                                            </div>
                                            <div class="col-8">
                                                <div class="result">
                                                    <div class="t1">
                                                        <img src="{{env('CRIC_CLUB_SITE_URL').$result['t1_logo_file_path']}}" alt="">
                                                        <p>{{strtoupper($result['teamOneCode'])}}</p>
                                                        @php
                                                            $t1overs = floor($result['t1balls'] / 6) .'.'. $result['t1balls'] % 6;
                                                        @endphp
                                                        <p>{{$result['t1total'].'/'.$result['t1wickets']. '('.$t1overs.')'}}</p>
                                                    </div>
                                                    <div class="t2">
                                                        <img src="{{env('CRIC_CLUB_SITE_URL').$result['t2_logo_file_path']}}" alt="">
                                                        <p>{{strtoupper($result['teamTwoCode'])}}</p>
                                                        @php
                                                            $t2overs = floor($result['t2balls'] / 6) .'.'. $result['t2balls'] % 6;
                                                        @endphp
                                                        <p>{{$result['t2total'].'/'.$result['t2wickets']. '('.$t2overs.')'}}</p>
                                                    </div>
                                                </div>
                                                <p class="text-center mt-1">{{$result['result']}}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{--     fixtures content      --}}
            <div class="row">
                <div class="col-lg-7">fdfd</div>
                <div class="col-lg-5">
                    <div class="sidebar-section">
                        <div class="tab_wrapper fixtures">

                            <ul class="tab_list">
                                <li class="active">Live</li>
                                <li>Results</li>
                                <li>Schedule</li>
                            </ul>

                            <div class="content_wrapper">
                                <div class="tab_content active">
                                    <p>There are no Live matches available now</p>
                                    <a href="#">Complete List</a>
                                </div>

                                <div class="tab_content">
                                    @foreach($results as $res)
                                        <div class="team-vs-team">
                                            <div class="row no-gutters">
                                                <div class="col-4">
                                                    <div class="teams-logo">
                                                        <img src="{{env('CRIC_CLUB_SITE_URL').$res['t1_logo_file_path']}}" alt="">
                                                        <img src="{{env('CRIC_CLUB_SITE_URL').$res['t2_logo_file_path']}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p><span>{{$res['teamOneName']}}</span> <b>VS</b> <span>{{$res['teamTwoName']}}</span></p>
                                                    @php
                                                        $t1overs = floor($res['t1balls'] / 6) .'.'. $res['t1balls'] % 6;
                                                        $t2overs = floor($res['t2balls'] / 6) .'.'. $res['t2balls'] % 6;
                                                    @endphp
                                                    <p>
                                                        <span>{{$res['t1total'].'/'.$res['t1wickets']. '('.$t1overs.')'}}</span>
                                                        <span>{{$res['t2total'].'/'.$res['t2wickets']. '('.$t2overs.')'}}</span>
                                                    </p>
                                                    <a href="#">{{$res['result']}}</a>
                                                </div>
                                            </div>
                                            <a href="{{str_replace(array('{ClubId}', '{MatchId}'), array(env('CRIC_CLUB_ID'), $result['matchID']), env('CRIC_CLUB_VIEW_SCORECARD'))}}" class="result-link">
                                                <img src="{{asset('frontend/assets/images/list-dot.png')}}" alt ="">
                                            </a>
                                        </div>
                                    @endforeach
                                    <p style="text-align: center; margin-bottom: 0; margin-top: 20px">
                                        <a href="{{str_replace(array('{ClubId}'), array(env('CRIC_CLUB_ID')), env('CRIC_CLUB_LIST_MATCHES'))}}">Complete List</a>
                                    </p>
                                </div>

                                <div class="tab_content">
                                    <p>There are no Live matches available now</p>
                                    <a href="#">Complete List</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
