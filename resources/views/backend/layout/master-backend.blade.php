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
    <title>Dashboard | Admin</title>
    <link rel="apple-touch-icon" href="{{URL::asset('backend/assets/images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('backend/assets/images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/vendors.min.css')}}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/assets/css/materialize.min.css')}}">
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
                    <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize">
                </div>
                <ul class="navbar-list right">
{{--                    <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>--}}
                    <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                    <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
                    <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{URL::asset('backend/assets/images/avatar/avatar-7.png')}} " alt="avatar"><i></i></span></a></li>
                    <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
                </ul>
                <!-- translation-button-->
                {{--<ul class="dropdown-content" id="translation-dropdown">
                    <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-gb"></i> English</a></li>
                    <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-fr"></i> French</a></li>
                    <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-cn"></i> Chinese</a></li>
                    <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-de"></i> German</a></li>
                </ul>--}}
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
                    <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
{{--                    <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> Chat</a></li>--}}
{{--                    <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i> Help</a></li>--}}
                    <li class="divider"></li>
{{--                    <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i class="material-icons">lock_outline</i> Lock</a></li>--}}
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
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img src="{{URL::asset('backend/assets/images/logo/materialize-logo.png')}} " alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
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
        <li class="bold"><a class="waves-effect waves-cyan " href="app-email.html"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="">Mail</span><span class="badge new badge pill pink accent-2 float-right mr-10">5</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('calendar')}}"><i class="material-icons">today</i><span class="menu-title" data-i18n="">Calendar</span></a>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Pages </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
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
    <div class="row">
            {{--LOAD PAGE CONTENT IN HERE--}}
            @yield('content')
            {{--LOAD PAGE CONTENT IN HERE--}}

            <!-- START RIGHT SIDEBAR NAV -->
                <aside id="right-sidebar-nav">
                    <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
                        <div class="row">
                            <div class="slide-out-right-title">
                                <div class="col s12 border-bottom-1 pb-0 pt-1">
                                    <div class="row">
                                        <div class="col s2 pr-0 center">
                                            <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                                        </div>
                                        <div class="col s10 pl-0">
                                            <ul class="tabs">
                                                <li class="tab col s4 p-0">
                                                    <a href="#messages" class="active">
                                                        <span>Messages</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="#settings">
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="#activity">
                                                        <span>Activity</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-out-right-body">
                                <div id="messages" class="col s12">
                                    <div class="collection border-none">
                                        <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                                        <ul class="collection p-0">
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-7.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Elizabeth Elliott</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                                </div>
                                                <span class="secondary-content medium-small">5.00 AM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-1.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Mary Adams</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                                </div>
                                                <span class="secondary-content medium-small">4.14 AM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-2.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Caleb Richards</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                                </div>
                                                <span class="secondary-content medium-small">4.14 AM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-3.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Caleb Richards</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                                                </div>
                                                <span class="secondary-content medium-small">9.00 PM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-4.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">June Lane</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                                                </div>
                                                <span class="secondary-content medium-small">4.14 AM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-5.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Edward Fletcher</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                                                </div>
                                                <span class="secondary-content medium-small">5.15 PM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-6.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Crystal Bates</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                                                </div>
                                                <span class="secondary-content medium-small">8.00 AM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-7.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Nathan Watts</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                                                </div>
                                                <span class="secondary-content medium-small">9.53 PM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-8.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Willard Wood</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                                                </div>
                                                <span class="secondary-content medium-small">4.20 AM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-1.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Ronnie Ellis</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                                                </div>
                                                <span class="secondary-content medium-small">5.20 AM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-9.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Daniel Russell</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                                </div>
                                                <span class="secondary-content medium-small">12.00 AM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-10.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Sarah Graves</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                                                </div>
                                                <span class="secondary-content medium-small">11.14 PM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-off avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-11.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Andrew Hoffman</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                                                </div>
                                                <span class="secondary-content medium-small">7.30 PM</span>
                                            </li>
                                            <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"
                        ><img src="{{URL::asset('backend/assets/images/avatar/avatar-12.png')}}" alt="avatar" />
                           <i></i>
                        </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">Camila Lynch</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                                                </div>
                                                <span class="secondary-content medium-small">2.00 PM</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="settings" class="col s12">
                                    <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
                                    <ul class="collection border-none">
                                        <li class="collection-item border-none mt-3">
                                            <div class="m-0">
                                                <span>Notifications</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input checked type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none mt-3">
                                            <div class="m-0">
                                                <span>Show recent activity</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none mt-3">
                                            <div class="m-0">
                                                <span>Show recent activity</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none mt-3">
                                            <div class="m-0">
                                                <span>Show Task statistics</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none mt-3">
                                            <div class="m-0">
                                                <span>Show your emails</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none mt-3">
                                            <div class="m-0">
                                                <span>Email Notifications</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input checked type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                                    <ul class="collection border-none">
                                        <li class="collection-item border-none mt-3">
                                            <div class="m-0">
                                                <span>System Logs</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none mt-3">
                                            <div class="m-0">
                                                <span>Error Reporting</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none mt-3">
                                            <div class="m-0">
                                                <span>Applications Logs</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input checked type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none mt-3">
                                            <div class="m-0">
                                                <span>Backup Servers</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none mt-3">
                                            <div class="m-0">
                                                <span>Audit Logs</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="activity" class="col s12">
                                    <div class="activity">
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                        <ul class="collection with-header">
                                            <li class="collection-item">
                                                <div class="font-weight-900">
                                                    Homepage mockup design <span class="secondary-content">Just now</span>
                                                </div>
                                                <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                                <span class="new badge amber" data-badge-caption="Important"> </span>
                                            </li>
                                            <li class="collection-item">
                                                <div class="font-weight-900">
                                                    Melissa liked your activity Drinks. <span class="secondary-content">10 mins</span>
                                                </div>
                                                <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                                <span class="new badge light-green" data-badge-caption="Resolved"></span>
                                            </li>
                                            <li class="collection-item">
                                                <div class="font-weight-900">
                                                    12 new users registered <span class="secondary-content">30 mins</span>
                                                </div>
                                                <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                            </li>
                                            <li class="collection-item">
                                                <div class="font-weight-900">
                                                    Tina is attending your activity <span class="secondary-content">2 hrs</span>
                                                </div>
                                                <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                            </li>
                                            <li class="collection-item">
                                                <div class="font-weight-900">
                                                    Josh is now following you <span class="secondary-content">5 hrs</span>
                                                </div>
                                                <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                                <span class="new badge red" data-badge-caption="Pending"></span>
                                            </li>
                                        </ul>
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                        <ul class="collection with-header">
                                            <li class="collection-item">
                                                <div class="font-weight-900">
                                                    New order received urgent <span class="secondary-content">Just now</span>
                                                </div>
                                                <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                            </li>
                                            <li class="collection-item">
                                                <div class="font-weight-900">System shutdown. <span class="secondary-content">5 min</span></div>
                                                <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                                <span class="new badge blue" data-badge-caption="Urgent"> </span>
                                            </li>
                                            <li class="collection-item">
                                                <div class="font-weight-900">
                                                    Database overloaded 89% <span class="secondary-content">20 min</span>
                                                </div>
                                                <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                            </li>
                                        </ul>
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                        <ul class="collection with-header">
                                            <li class="collection-item">
                                                <div class="font-weight-900">System error <span class="secondary-content">10 min</span></div>
                                                <p class="mt-0 mb-2">Melissa liked your activity.</p>
                                            </li>
                                            <li class="collection-item">
                                                <div class="font-weight-900">
                                                    Production server down. <span class="secondary-content">1 hrs</span>
                                                </div>
                                                <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                                                <span class="new badge blue" data-badge-caption="Urgent"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Out Chat -->
                    <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
                        <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                            <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
                        </li>
                        <li class="chat-body">
                            <ul class="collection">
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img src="{{URL::asset('backend/assets/images/avatar/avatar-7.png')}}" alt="avatar" />
               </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">hello!</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">How can we help? We're here for you!</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img src="{{URL::asset('backend/assets/images/avatar/avatar-7.png')}}" alt="avatar" />
               </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">I am looking for the best admin template.?</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
                                    </div>
                                </li>

                                <li class="collection-item display-grid width-100 center-align">
                                    <p>8:20 a.m.</p>
                                </li>

                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img src="{{URL::asset('backend/assets/images/avatar/avatar-7.png')}}" alt="avatar" />
               </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">Ohh! very nice</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">Thank you.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img src="{{URL::asset('backend/assets/images/avatar/avatar-7.png')}}" alt="avatar" />
               </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">How can I purchase it?</p>
                                    </div>
                                </li>

                                <li class="collection-item display-grid width-100 center-align">
                                    <p>9:00 a.m.</p>
                                </li>

                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">From ThemeForest.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">Only $24</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img src="{{URL::asset('backend/assets/images/avatar/avatar-7.png')}}" alt="avatar" />
               </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">Ohh! Thank you.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
               <span class="avatar-status avatar-online avatar-50"
               ><img src="{{URL::asset('backend/assets/images/avatar/avatar-7.png')}}" alt="avatar" />
               </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">I will purchase it for sure.</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">Great, Feel free to get in touch on</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">https://pixinvent.ticksy.com/</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="center-align chat-footer">
                            <form class="col s12" onsubmit="slide_out_chat()" action="javascript:void(0);">
                                <div class="input-field">
                                    <input id="icon_prefix" type="text" class="search" />
                                    <label for="icon_prefix">Type here..</label>
                                    <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
                                </div>
                            </form>
                        </li>
                    </ul>
                </aside>
                <!-- END RIGHT SIDEBAR NAV -->
            </div>
        </div>
    </div>
</div>
<!-- END: Page Main-->

<!-- BEGIN: Footer-->

<footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
    <div class="footer-copyright">
        <div class="container"><span>&copy; 2019          <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a></span></div>
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

{{-- Load Section Scripts Start --}}

@yield('scripts')

{{-- Load Section Scripts End --}}
<script src="{{URL::asset('backend/assets/js/custom-script.js')}}" type="text/javascript"></script>
<!-- END THEME  JS-->
</body>
</html>
