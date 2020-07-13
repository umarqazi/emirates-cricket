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
                <a href="{{route('download')}}" class="child-page">Download</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Download</h1>
    </div>

    <!--   download Section     -->
    <div class="download-section">
        <div class="container">
            <div class="files-row">
                <h2>Team Players</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="download-file">
                            <div class="bg-overlay"></div>
                            <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                            <div class="team-player">
                                <p>
                                    <i class="fa fa-paperclip"></i>
                                    Team Player
                                </p>
                                <a href="#"><i class="fa fa-cloud-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="download-file">
                            <div class="bg-overlay"></div>
                            <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                            <div class="team-player">
                                <p>
                                    <i class="fa fa-paperclip"></i>
                                    Team Player
                                </p>
                                <a href="#"><i class="fa fa-cloud-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="download-file">
                            <div class="bg-overlay"></div>
                            <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                            <div class="team-player">
                                <p>
                                    <i class="fa fa-paperclip"></i>
                                    Team Player
                                </p>
                                <a href="#"><i class="fa fa-cloud-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="files-row">
                <h2>Team Players</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="download-file">
                            <div class="bg-overlay"></div>
                            <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                            <div class="team-player">
                                <p>
                                    <i class="fa fa-paperclip"></i>
                                    Team Player
                                </p>
                                <a href="#"><i class="fa fa-cloud-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="download-file">
                            <div class="bg-overlay"></div>
                            <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                            <div class="team-player">
                                <p>
                                    <i class="fa fa-paperclip"></i>
                                    Team Player
                                </p>
                                <a href="#"><i class="fa fa-cloud-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="download-file">
                            <div class="bg-overlay"></div>
                            <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                            <div class="team-player">
                                <p>
                                    <i class="fa fa-paperclip"></i>
                                    Team Player
                                </p>
                                <a href="#"><i class="fa fa-cloud-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="files-row">
                <h2>Team Players</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="download-file">
                            <div class="bg-overlay"></div>
                            <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                            <div class="team-player">
                                <p>
                                    <i class="fa fa-paperclip"></i>
                                    Team Player
                                </p>
                                <a href="#"><i class="fa fa-cloud-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="download-file">
                            <div class="bg-overlay"></div>
                            <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                            <div class="team-player">
                                <p>
                                    <i class="fa fa-paperclip"></i>
                                    Team Player
                                </p>
                                <a href="#"><i class="fa fa-cloud-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="download-file">
                            <div class="bg-overlay"></div>
                            <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                            <div class="team-player">
                                <p>
                                    <i class="fa fa-paperclip"></i>
                                    Team Player
                                </p>
                                <a href="#"><i class="fa fa-cloud-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
