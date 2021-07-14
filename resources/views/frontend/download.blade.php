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

            <!-- <div class="files-row">
                @php($catTitle = false)
                @php($catTitleLabel = '')
                @foreach($download_files as $file)
                    @if ($file['category'] == "Category Name 1")
                        @php($catTitle = true)
                        @php($catTitleLabel = $file['category'])
                    @endif
                @endforeach
                @if($catTitle)
                    <h2>{{ $catTitleLabel }}</h2>
                @endif
                <div class="row">
                    @foreach($download_files as $file)
                    @if ($file['category'] == "Category Name 1")
                    <div class="col-md-6 col-lg-4">
                        <div class="download-file">
                            <div class="bg-overlay"></div>
                            <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                            <div class="team-player">
                                <p>
                                    <i class="fa fa-paperclip"></i>
                                    <span>{{strstr($file->file, '.', true)}}</span>
                                </p>
                                <a href="{{ URL::asset('/storage/uploads/downloads/'.$file->file) }}" download><i class="fa fa-cloud-download"></i></a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

            <div class="files-row">
                @php($catTitle = false)
                @php($catTitleLabel = '')
                @foreach($download_files as $file)
                    @if ($file['category'] == "Category Name 2")
                        @php($catTitle = true)
                        @php($catTitleLabel = $file['category'])
                    @endif
                @endforeach
                @if($catTitle)
                    <h2>{{ $catTitleLabel }}</h2>
                @endif
                <div class="row">
                    @foreach($download_files as $file)
                        @if ($file['category'] == "Category Name 2")
                            <div class="col-md-6 col-lg-4">
                                <div class="download-file">
                                    <div class="bg-overlay"></div>
                                    <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                                    <div class="team-player">
                                        <p>
                                            <i class="fa fa-paperclip"></i>
                                            <span>{{strstr($file->file, '.', true)}}</span>
                                        </p>
                                        <a href="{{ URL::asset('/storage/uploads/downloads/'.$file->file) }}" download><i class="fa fa-cloud-download"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="files-row">
                @php($catTitle = false)
                @php($catTitleLabel = '')
                @foreach($download_files as $file)
                    @if ($file['category'] == "Category Name 3")
                        @php($catTitle = true)
                        @php($catTitleLabel = $file['category'])
                    @endif
                @endforeach
                @if($catTitle)
                    <h2>{{ $catTitleLabel }}</h2>
                @endif
                <div class="row">
                    @foreach($download_files as $file)
                        @if ($file['category'] == "Category Name 3")
                            <div class="col-md-6 col-lg-4">
                                <div class="download-file">
                                    <div class="bg-overlay"></div>
                                    <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                                    <div class="team-player">
                                        <p>
                                            <i class="fa fa-paperclip"></i>
                                            <span>{{strstr($file->file, '.', true)}}</span>
                                        </p>
                                        <a href="{{ URL::asset('/storage/uploads/downloads/'.$file->file) }}" download><i class="fa fa-cloud-download"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div> -->

        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="download-file">
                    <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                    <div class="download-file-content">
                    <h3>UAE SENIOR</h3>
                        <p>Emirates Cricket currently offers the region two development platforms</p>
                    </div>
                    <div class="team-player">
                        <a href="{{ URL::asset('/storage/uploads/downloads/'.$file->file) }}" download>Download</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="download-file">
                    <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                    <div class="download-file-content">
                    <h3>UAE SENIOR</h3>
                        <p>Emirates Cricket currently offers the region two development platforms  Emirates Cricket currently offers the region two development platforms</p>
                    </div>
                    <div class="team-player">
                        <a href="{{ URL::asset('/storage/uploads/downloads/'.$file->file) }}" download>Download</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="download-file">
                    <img src="{{ URL::asset('frontend/assets/images/pdf.png') }}" alt="">
                    <div class="download-file-content">
                    <h3>UAE SENIOR</h3>
                        <p>Emirates Cricket currently offers the region two development platforms Emirates Cricket currently offers the region two development platforms</p>
                    </div>
                    <div class="team-player">
                        <a href="{{ URL::asset('/storage/uploads/downloads/'.$file->file) }}" download>Download</a>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>

@endsection
