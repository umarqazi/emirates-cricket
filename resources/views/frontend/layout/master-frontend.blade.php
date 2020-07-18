<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Emirates Cricket Academy</title>

    @yield('title')

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/assets/css/font-awesome.min.css') }}">

    {{-- Load Section Styles Start --}}
    @yield('styles')
    {{-- Load Section Styles End --}}

    {{-- Custom Css --}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/assets/css/style.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="main-container home">

    <!--sidebar-->
    @include('frontend.partials.sidebar')

    <!--content-section (right-section)-->
    <div class="content-section">
        @yield('content')
    </div>
</div>

@include('frontend.partials.footer')

<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/assets/css/slick.css') }} ">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/assets/css/slick-theme.css') }} ">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/assets/css/jquery.mCustomScrollbar.min.css') }} ">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/assets/css/jquery.fancybox.min.css') }} ">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/assets/css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/assets/css/tabs.css') }}">

<script src="{{ URL::asset('frontend/assets/js/jquery-3.2.1.min.js') }} "></script>
<script src="{{ URL::asset('frontend/assets/js/bootstrap.min.js') }} "></script>
<script src="{{ URL::asset('frontend/assets/js/mCustomScrollbar.concat.min.js') }} "></script>
<script src="{{ URL::asset('frontend/assets/js/jquery.fancybox.min.js') }} "></script>
<script src="{{ URL::asset('frontend/assets/js/jquery.multipurpose_tabcontent.js') }} "></script>
<script src="{{ URL::asset('frontend/assets/js/slick.js') }} "></script>

{{-- Load Section Scripts Start --}}
@yield('scripts')
{{-- Load Section Scripts End --}}

<script src="{{ URL::asset('frontend/assets/js/custom.js') }} "></script>
</body>
</html>
