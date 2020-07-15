@extends('backend.layout.master-backend')

@section('styles')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/app-calendar.css')}}">

@endsection


@section('content')
    <div class="col s12">
        <div class="container">
            <div id="breadcrumbs-wrapper" data-image="{{url('backend/assets/images/gallery/breadcrumb-bg.jpg')}}">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0">Calendar</h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Apps</a>
                                </li>
                                <li class="breadcrumb-item active"> Calendar
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <!-- Full Calendar -->

                    <div id="app-calendar">

                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            Basic Calendar
                                        </h4>
                                        <div id="basic-calendar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            External Dragging
                                        </h4>
                                        <div class="row">
                                            <div class="col m3">
                                                <div id='external-events'>
                                                    <h5>Draggable Events</h5>
                                                    <div class="fc-events-container">
                                                        <div class='fc-event' data-color='#009688'>All Day Event</div>
                                                        <div class='fc-event' data-color='#4CAF50'>Long Event</div>
                                                        <div class='fc-event' data-color='#00bcd4'>Meeting</div>
                                                        <div class='fc-event' data-color='#ff5722'>Birthday party</div>
                                                        <div class='fc-event' data-color='#9c27b0'>Lunch</div>
                                                        <div class='fc-event' data-color='#e51c23'>Conference Meeting</div>
                                                        <div class='fc-event' data-color='#e91e63'>Party</div>
                                                        <div class='fc-event' data-color='#3f51b5'>Happy Hour</div>
                                                        <div class='fc-event' data-color='#ffc107'>Dance party</div>
                                                        <div class='fc-event' data-color='#4a148c'>Dinner</div>
                                                        <p>
                                                            <label>
                                                                <input type="checkbox" />
                                                                <span>Remove After Drop</span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col m9">
                                                <div id='fc-external-drag'></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--end container-->
        @endsection

        @section('scripts')

                <!-- BEGIN PAGE VENDOR JS-->
                <script src="{{URL::asset('backend/assets/js/jquery-ui.min.js')}}"></script>
                <script src="{{URL::asset('backend/assets/js/moment.min.js')}}"></script>
                <script src="{{URL::asset('backend/assets/js/fullcalendar.min.js')}}"></script>
                <!-- END PAGE VENDOR JS-->

                <!-- BEGIN PAGE LEVEL JS-->
                <script src="{{URL::asset('backend/assets/js/app-calendar.js')}}"></script>
                <!-- END PAGE LEVEL JS-->
        @endsection
