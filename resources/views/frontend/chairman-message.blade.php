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
                <a href="{{route('about-us')}}" class="child-page">Chairman's Message</a>
            </p>
        </div>
    </div>

    <!--     Team section       -->
    <div class="team-section">
        <div class="container">

            <?php if (!empty($chairman)) {?>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="chairman-message">
                        <figure class="member-default-img member-uploaded-img">
                            <a data-src="#employee_{{$chairman->id}}" href="javascript:void(0)" class="about_modal">
                                <img src="{{ URL::asset('storage/uploads/employees/'.$chairman->image) }}" alt="">
                            </a>
                        </figure>
                        <h4>{{$chairman->name}}</h4>
                        <h5>{{$chairman->designation}}</h5>
                    </div>
                </div>
            </div>
            <?php } ?>
                <h1 class="main-heading px-4 mb-0">{{ $data->about_type === \App\Repos\IAboutType::aboutChairmanMessage ? $data->about_type.': '.str_replace('-', ' ', $data->council_type) : strtoupper($data->about_type)}}</h1>
                <div class="content-page-section px-4 py-2">
                    <div>{!! $data->content !!}</div>
                </div>
        </div>
    </div>
@endsection
