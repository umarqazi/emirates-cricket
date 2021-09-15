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
                <a href="{{route('about-us')}}" class="child-page">About</a>
            </p>
        </div>
    </div>

    <!--     Team section       -->
    <div class="team-section">
        <div class="container">

            <?php if (!empty($chairman)) {?>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="member">
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

            <div class="row justify-content-center">
                <?php if (!empty($viceChairman)) {?>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="member">
                        <figure  class="member-default-img member-uploaded-img">
                            <a data-src="#employee_{{$viceChairman->id}}" href="javascript:void(0)" class="about_modal">
                                <img src="{{ URL::asset('storage/uploads/employees/'.$viceChairman->image) }}" alt="">
                            </a>
                        </figure>
                        <h4>{{$viceChairman->name}}</h4>
                        <h5>{{$viceChairman->designation}}</h5>
                    </div>
                </div>
                <?php  } ?>

                @if(!$members->isEmpty())
                    @foreach($members as $member)
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="member">
                                <figure  class="member-default-img member-uploaded-img">
                                    <a data-src="#employee_{{$member->id}}" href="javascript:void(0)" class="about_modal">
                                        <img src="{{ URL::asset('storage/uploads/employees/'.$member->image) }}" alt="">
                                    </a>
                                </figure>
                                <h4>{{$member->name}}</h4>
                                <h5>{{$member->designation}}</h5>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="row justify-content-center">
                <?php if (!empty($secretary)) {?>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="member">
                        <figure  class="member-default-img member-uploaded-img">
                            <a data-src="#employee_{{$secretary->id}}" href="javascript:void(0)" class="about_modal">
                                <img src="{{ URL::asset('storage/uploads/employees/'.$secretary->image) }}" alt="">
                            </a>
                        </figure>
                        <h4>{{$secretary->name}}</h4>
                        <h5>{{$secretary->designation}}</h5>
                    </div>
                </div>
                <?php  } ?>
            </div>
        </div>
    </div>
@endsection
