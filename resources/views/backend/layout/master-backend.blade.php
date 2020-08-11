<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <link rel="apple-touch-icon" href="{{URL::asset('backend/assets/images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('backend/assets/images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/sweetalert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/dropzone.min.css')}}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/style.css')}}">
    <!-- END: Page Level CSS-->

{{-- Load Section Styles Start --}}

@yield('styles')

{{-- Load Section Styles End --}}

<!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/custom.css')}}">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu 2-columns  " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

<!-- BEGIN: Header-->
<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
            <div class="nav-wrapper">
                <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                    <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore {{env('APP_NAME')}}">
                </div>
                <ul class="navbar-list right">
                    {{--                    <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>--}}
                    <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                    <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
                    <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{URL::asset('backend/assets/images/avatar/avatar-7.png')}} " alt="avatar"><i></i></span></a></li>
                    <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
                </ul>

                <!-- notifications-dropdown-->
                <ul class="dropdown-content" id="notifications-dropdown">
                    <li>
                        <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                    </li>
                    <li class="divider"></li>
                    <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                    </li>
                    <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                    </li>
                    <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                    </li>
                    <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                    </li>
                    <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                    </li>
                </ul>

                <!-- profile-dropdown-->
                <ul class="dropdown-content" id="profile-dropdown">
                    <li><a class="grey-text text-darken-1" href="#"><i class="material-icons">person_outline</i> Profile</a></li>
                    <li class="divider"></li>
                    <li>
                        <a class="dropdown-item grey-text text-darken-1" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">keyboard_tab</i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <nav class="display-none search-sm">
                <div class="nav-wrapper">
                    <form>
                        <div class="input-field">
                            <input class="search-box-sm" type="search" required="">
                            <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </nav>
    </div>
</header>
<!-- END: Header-->



<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="{{route('dashboard')}}"><img src="{{URL::asset('backend/assets/images/logo/materialize-logo.png')}} " alt="{{env('APP_NAME')}}. logo"/><span class="logo-text hide-on-med-and-down">ECB</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
        <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Dashboard</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="active"><a class="collapsible-body active" href="{{route('dashboard')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Modern</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Applications</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="">Mail</span><span class="badge new badge pill pink accent-2 float-right mr-10">5</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('calendar')}}"><i class="material-icons">today</i><span class="menu-title" data-i18n="">Calendar</span></a>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Pages </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>

        @if(auth()->user()->can('List User') || auth()->user()->can('Create User'))
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Users</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        @if(auth()->user()->can('List User'))
                            <li>
                                <a class="collapsible-body" href="{{route('user.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Users List</span></a>
                            </li>
                        @endif

                        @if(auth()->user()->can('Create User'))
                            <li>
                                <a class="collapsible-body" href="{{route('user.create')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Add New</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
        @endif

        @if(auth()->user()->can('List Role') || auth()->user()->can('Create Role'))
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Role</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                        @if(auth()->user()->can('List Role'))
                            <li>
                                <a class="collapsible-body" href="{{route('role.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Role List</span></a>
                            </li>
                        @endif

                        @if(auth()->user()->can('Create Role'))
                            <li>
                                <a class="collapsible-body" href="{{route('role.create')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Add New</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
        @endif

        @if(auth()->user()->can('List Permission') || auth()->user()->can('Create Permission'))
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Permission</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        @if(auth()->user()->can('List Permission'))
                            <li>
                                <a class="collapsible-body" href="{{route('permission.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Permission List</span></a>
                            </li>
                        @endif

                        @if(auth()->user()->can('Create Permission'))
                            <li>
                                <a class="collapsible-body" href="{{route('permission.create')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Add New</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
        @endif

        @if(auth()->user()->can('List Team') || auth()->user()->can('Create Team'))
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">people</i><span class="menu-title" data-i18n="">Teams</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        @can('List Team')
                            <li>
                                <a class="collapsible-body" href="{{route('team.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Teams List</span></a>
                            </li>
                        @endcan

                        @can('Create Team')
                            <li>
                                <a class="collapsible-body" href="{{route('team-player.create')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Add New Player</span></a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </li>
        @endif

        @if(auth()->user()->can('List News') || auth()->user()->can('Create News'))
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">News</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        @if(auth()->user()->can('List News'))
                            <li>
                                <a class="collapsible-body" href="{{route('news.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>News List</span></a>
                            </li>
                        @endif

                        @if(auth()->user()->can('Create News'))
                            <li>
                                <a class="collapsible-body" href="{{route('news.create')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Add New News</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
        @endif

        @if(auth()->user()->can('List Update') || auth()->user()->can('Create Update'))
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Update</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        @can('List Update')
                            <li>
                                <a class="collapsible-body" href="{{route('update.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Updates List</span></a>
                            </li>
                        @endcan

                        @can('Create Update')
                            <li>
                                <a class="collapsible-body" href="{{route('update.create')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Add New Update</span></a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </li>
        @endif

        @if(auth()->user()->can('List Gallery') || auth()->user()->can('Create Gallery'))
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Social Gallery</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        @if(auth()->user()->can('List Gallery'))
                            <li>
                                <a class="collapsible-body" href="{{route('gallery.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Gallery List</span></a>
                            </li>
                        @endif

                        @if(auth()->user()->can('Create Gallery'))
                            <li>
                                <a class="collapsible-body" href="{{route('gallery.create')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Add New Gallery</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
        @endif

        @if(auth()->user()->can('List Sponsor') || auth()->user()->can('Create Sponsor'))
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Sponsor</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        @if(auth()->user()->can('List Sponsor'))
                            <li>
                                <a class="collapsible-body" href="{{route('sponsor.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sponsor List</span></a>
                            </li>
                        @endif

                        @if(auth()->user()->can('Create Sponsor'))
                            <li>
                                <a class="collapsible-body" href="{{route('sponsor.create')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Add New Sponsor</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
        @endif

        @if(auth()->user()->can('List Contact'))
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Contact Requests</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-body" href="{{route('contact.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Contact List</span></a>
                        </li>
                    </ul>
                </div>
            </li>
        @endif

        @if(auth()->user()->can('List Team Registration') || auth()->user()->can('Edit Team Registration'))
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Team Registration</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        @if(auth()->user()->can('List Team Registration'))
                            <li>
                                <a class="collapsible-body" href="{{route('news.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Team List</span></a>
                            </li>
                        @endif

                        @if(auth()->user()->can('Edit Team Registration'))
                            <li>
                                <a class="collapsible-body" href="{{route('news.create')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Add New</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
        @endif

        @if(auth()->user()->can('List Player Registration') || auth()->user()->can('Edit Player Registration'))
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Player Registration</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">

                        @if(auth()->user()->can('List Player Registration'))
                            <li>
                                <a class="collapsible-body" href="{{route('player.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span></span>Player List</a>
                            </li>
                        @endif

                        @if(auth()->user()->can('Edit Player Registration'))
                            <li>
                                <a class="collapsible-body" href="{{route('player.create')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Add New</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
        @endif
        <li class="navigation-header"><a class="navigation-header-text">Charts &amp; Maps </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Misc </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->

<!-- BEGIN: Page Main-->
<div id="main">

    <div class="container">
        {{--LOAD PAGE CONTENT IN HERE--}}
        @yield('content')
        {{--LOAD PAGE CONTENT IN HERE--}}
    </div>
</div>
</div>
</div>
<!-- END: Page Main-->

<!-- BEGIN: Footer-->

<footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
    <div class="footer-copyright">
        <div class="container"><span>&copy; 2020 <a href="#" target="_blank">{{env('APP_NAME')}}</a> All rights reserved.</span></div>
    </div>
</footer>
<script>
    var url = "{!! asset('') !!}";
</script>

<!-- END: Footer-->
<!-- BEGIN VENDOR JS-->
<script src="{{URL::asset('backend/assets/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->

<!-- BEGIN THEME  JS-->
<script src="{{URL::asset('backend/assets/js/plugins.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('backend/assets/js/ckeditor5-build-classic/ckeditor.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('backend/assets/js/dropzone.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('backend/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

{{-- Load Section Scripts Start --}}

@yield('scripts')

{{-- Load Section Scripts End --}}
<script src="{{URL::asset('backend/assets/js/sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('backend/assets/js/custom-script.js')}}" type="text/javascript"></script>
<!-- END THEME  JS-->
</body>
</html>
