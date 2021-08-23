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
            <div class="row">
                @foreach($download_files as $file)
                    <div class="col-md-4 col-lg-4">
                        <div class="download-file">
                            <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                            <div class="download-file-content">
                                <h3>{{$file['category']}}</h3>
                                <p>{!! $file['description'] !!}</p>
                            </div>
                            <div class="team-player">
                                <a href="{{ URL::asset('/storage/uploads/downloads/'.$file->file) }}" download>Download</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
