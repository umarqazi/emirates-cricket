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

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">About</h1>
    </div>

    <!--     Team section       -->
    <div class="team-section">
        <div class="container">

            <div class="row justify-content-center">
                @foreach($about as $employee)
                    <?php if ($employee['designation'] === "Chairman") {?>
                    <div class="col-md-4">
                        <div class="member">
                            <figure class="member-default-img member-uploaded-img">
                                <a data-src="#employee_{{$employee->id}}" href="javascript:void(0)" class="about_modal">
                                    <img src="{{ URL::asset('storage/uploads/employees/'.$employee->image) }}" alt="">
                                </a>
                            </figure>
                            <h4>{{$employee->name}}</h4>
                            <h5>{{$employee->designation}}</h5>
                        </div>
                    </div>
                    <?php } ?>
                @endforeach
            </div>

            <div class="row justify-content-center">
                @foreach($about as $employee)
                    <?php if ($employee['designation'] === "Vice-Chairman") {?>
                    <div class="col-md-4">
                        <div class="member">
                            <figure class="member-default-img member-uploaded-img">
                                <a data-src="#employee_{{$employee->id}}" href="javascript:void(0)" class="about_modal">
                                    <img src="{{ URL::asset('storage/uploads/employees/'.$employee->image) }}" alt="">
                                </a>
                            </figure>
                            <h4>{{$employee->name}}</h4>
                            <h5>{{$employee->designation}}</h5>
                        </div>
                    </div>
                    <?php  } ?>

                    <?php if ($employee['designation'] == "General Secretary") {?>
                    <div class="col-md-4">
                        <div class="member">
                            <figure class="member-default-img member-uploaded-img">
                                <a data-src="#employee_{{$employee->id}}" href="javascript:void(0)" class="about_modal">
                                    <img src="{{ URL::asset('storage/uploads/employees/'.$employee->image) }}" alt="">
                                </a>
                            </figure>
                            <h4>{{$employee->name}}</h4>
                            <h5>{{$employee->designation}}</h5>
                        </div>
                    </div>
                    <?php  } ?>
                @endforeach
            </div>

            <div class="row justify-content-center">
                @foreach($about as $employees)
                    <?php if ($employees['designation'] == "Employee"){ ?>
                    <div class="col-md-4">
                        <div class="member">
                            <figure class="member-default-img member-uploaded-img">
                                <a data-src="#employee_{{$employees->id}}" href="javascript:void(0)" class="about_modal">
                                    <img src="{{ URL::asset('storage/uploads/employees/'.$employees->image) }}" alt="">
                                </a>
                            </figure>
                            <h4>{{$employees->name}}</h4>
                        </div>
                    </div>
                    <?php } ?>
                @endforeach
            </div>
        </div>
    </div>
@endsection
