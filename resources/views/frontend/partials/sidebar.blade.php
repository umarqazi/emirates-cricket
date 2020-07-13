<div class="sidebar">

    <!--   nav button     -->
    <div class="nav-button"></div>

    <div class="logo">
        <img class="uae-flag" src="{{ URL::asset('frontend/assets/images/uae-flag.png') }}" alt="">
        <a href="{{route('home')}}"><img class="header-logo" src="{{ URL::asset('frontend/assets/images/logo.png') }}" alt=""></a>
    </div>

    <!--   Mobile navigation button     -->
    <div class="mobile-btn">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <ul class="sidebar-nav">
        <li>
            <a href="{{route('news')}}">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/newspaper.png') }}" alt="">
                    </span>
                <span>News</span>
            </a>
        </li>
        <li>
            <a href="{{route('about')}}">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/newspaper.png') }}" alt="">
                    </span>
                <span>About</span>
            </a>
            <i class="fa fa-chevron-down"></i>
            <ul class="sub-menu about-sections">
                <li>
                    <a href="#">
                        <i class=" fa-angle-double-right"></i>
                        <span>The board</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class=" fa-angle-double-right"></i>
                        <span>Mandate</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class=" fa-angle-double-right"></i>
                        <span>Regional Councils</span>
                    </a>
                    <a class="dubai-states" href="#">
                        <i class="fa-angle-right"></i>
                        <span>Abu Dhabi</span>
                    </a>
                    <a class="dubai-states" href="#">
                        <i class="fa-angle-right"></i>
                        <span>Dubai</span>
                    </a>
                    <a class="dubai-states" href="#">
                        <i class="fa-angle-right"></i>
                        <span>Sharjah</span>
                    </a>
                    <a class="dubai-states" href="#">
                        <i class="fa-angle-right"></i>
                        <span>Ajman</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class=" fa-angle-double-right"></i>
                        <span>Cricket Governing Bodies</span>
                    </a>
                    <a class="dubai-states" href="#">
                        <i class="fa-angle-right"></i>
                        <span>Abu Dhabi</span>
                    </a>
                    <a class="dubai-states" href="#">
                        <i class="fa-angle-right"></i>
                        <span>Dubai</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class=" fa-angle-double-right"></i>
                        <span>Academies</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class=" fa-angle-double-right"></i>
                        <span>Education and Downloads</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('contact')}}">
                        <i class=" fa-angle-double-right"></i>
                        <span>Contact us</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('fixtures')}}">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/newspaper.png') }}" alt="">
                    </span>
                <span>Fixtures & Results</span>
            </a>
        </li>
        <li>
            <a href="{{route('team')}}">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/team-sport.png') }}" alt="">
                    </span>
                <span>Team</span>
            </a>
            <i class="fa fa-chevron-down"></i>
            <ul class="sub-menu">
                <li>
                    <a href="{{route('uae-mens')}}">
                            <span>
                                <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/batsman.png') }}" alt="">
                            </span>
                        <span>Uae Men's</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('uae-womens')}}">
                            <span>
                                <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/women.png') }}" alt="">
                            </span>
                        <span>Uae Women's</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('under-19')}}">
                            <span>
                                <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/under-19.png') }}" alt="">
                            </span>
                        <span>Uae 19 Men's</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('download')}}">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/development.png') }}" alt="">
                    </span>
                <span>Development</span>
            </a>
        </li>
        <li>
            <a href="#">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/social.png') }}" alt="">
                    </span>
                <span>Socials</span>
            </a>
            <i class="fa fa-chevron-down"></i>
            <ul class="sub-menu">
                <li>
                    <a href="{{route('galleries')}}">
                            <span>
                                <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/fan.png') }}" alt="">
                            </span>
                        <span>Gallery</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('fan-club')}}">
                            <span>
                                <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/fan.png') }}" alt="">
                            </span>
                        <span>Fan Club</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('sponcer')}}">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/sponcer.png') }}" alt="">
                    </span>
                <span>Sponcers</span>
            </a>
        </li>
        <li>
            <a href="{{route('player-registration')}}">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/player_registration.png') }}" alt="">
                    </span>
                <span>Player Registration</span>
            </a>
        </li>
        <li>
            <a href="{{route('tournament-registration')}}">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/tournament_registration.png') }}" alt="">
                    </span>
                <span>Tournament Registration</span>
            </a>
        </li>
        <li>
            <a href="{{route('contact')}}">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/contact.png') }} " alt="">
                    </span>
                <span>Contact Us</span>
            </a>
        </li>
        <li>
            <a href="{{route('download')}}">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/newspaper.png') }}" alt="">
                    </span>
                <span>Downloads</span>
            </a>
        </li>
    </ul>
</div>
