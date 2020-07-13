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
                <a href="{{route('payment')}}" class="child-page">Payment</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Payment</h1>
    </div>

    <!--   payment Section     -->
    <div class="payment-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="organization-radio-btns payment-btn">
                        <div class="custom-radio-btns">
                            <input type="radio" id="visa" name="payment-group">
                            <label for="visa">
                                <div class="payment-img">
                                    <img src="{{ URL::asset('frontend/assets/images/visa.png') }}" alt="">
                                </div>
                            </label>
                        </div>
                        <div class="custom-radio-btns">
                            <input type="radio" id="master_card" name="payment-group">
                            <label for="master_card">
                                <div class="payment-img">
                                    <img src="{{ URL::asset('frontend/assets/images/mc.png') }}" alt="">
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="input-row">
                        <label>Card Number</label>
                        <input type="text">
                    </div>
                    <div class="input-row">
                        <label>Cardholder name</label>
                        <input type="text">
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-row">
                                <label>End Day</label>
                                <input type="text" class="date-calender">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-row">
                                <label>End Month</label>
                                <input type="text" class="date-calender">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-row">
                                <label>CVV</label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="total-cost">
                        <p>Total Cost: <span>200dh</span></p>
                    </div>
                    <div class="paynow-btn">
                        <a href="#" class="btn input-submit">Pay Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
