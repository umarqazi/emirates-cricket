<div class="sidebar-back-layer">

</div>
<div class="sidebar">

    <div class="logo">
        <!-- <img class="uae-flag" src="{{ URL::asset('frontend/assets/images/uae-flag.png') }}" alt=""> -->
        <a href="{{route('home')}}"><img class="header-logo" src="{{ URL::asset('frontend/assets/images/logo.png') }}" alt=""></a>
        <div class="hamburger mt-2 ps-2">
                        <div class="line line1"></div>
                        <div class="line line2"></div>
                        <div class="line line3"></div>
                    </div>
    </div>

    <!--   Mobile navigation button     -->
    <!-- <div class="mobile-btn">
        <span></span>
        <span></span>
        <span></span>
    </div> -->
    <ul class="sidebar-nav">
        <div class="custom-sidebar-button">
            <a href="{{route('player-registration')}}">Player Registration</a>
        </div>
        <li>
            <a href="{{route('news')}}">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/newspaper.png') }}" alt="">
                    </span>
                <span>News</span>
            </a>
        </li>
        <li>
            <a href="#">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/newspaper.png') }}" alt="">
                    </span>
                <span>About</span>
            </a>
            <i class="fa fa-chevron-down"></i>
            <ul class="sub-menu">
                <li>
                    <a href="{{route('about-us')}}">
                        <i class=" fa-angle-double-right"></i>
                        <span>The Board</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('chairman-message')}}">
                        <i class=" fa-angle-double-right"></i>
                        <span>Chairman’s Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class=" fa-angle-double-right"></i>
                        <span>Councils</span>
                    </a>
                    <a class="dubai-states" href="https://www.facebook.com/AbuDhabiCricket" target="_blank">
                        <i class="fa-angle-right"></i>
                        <span>Abu Dhabi</span>
                    </a>
                    <a class="dubai-states" href="https://www.facebook.com/dubaicricketcouncil" target="_blank">
                        <i class="fa-angle-right"></i>
                        <span>Dubai</span>
                    </a>
                    <a class="dubai-states" href="https://www.facebook.com/sharjahcricketstadiumofficial/" target="_blank">
                        <i class="fa-angle-right"></i>
                        <span>Sharjah</span>
                    </a>
                    <a class="dubai-states" href="https://www.facebook.com/ajccofficialpage/" target="_blank">
                        <i class="fa-angle-right"></i>
                        <span>Ajman</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class=" fa-angle-double-right"></i>
                        <span>Cricket Governing Bodies</span>
                    </a>
                    <a class="dubai-states" href="https://www.icc-cricket.com/" target="_blank">
                        <i class="fa-angle-right"></i>
                        <span>ICC</span>
                    </a>
                    <a class="dubai-states" href="http://www.asiancricket.org/" target="_blank">
                        <i class="fa-angle-right"></i>
                        <span>ACC</span>
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
                    <a href="{{route('uae-men')}}">
                            <span>
                                <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/under-19.png') }}" alt="">
                            </span>
                        <span>UAE Men's</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('uae-women')}}">
                            <span>
                                <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/women.png') }}" alt="">
                            </span>
                        <span>UAE Women's</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('under-19')}}">
                            <span>
                                <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/under-19.png') }}" alt="">
                            </span>
                        <span>UAE 19 Men's</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('development')}}">
                    <span>
                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/development.png') }}" alt="">
                    </span>
                <span>Development</span>
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
        <li>
        </li>
    </ul>
    <!-- <div class="mobile-menu-container">
        <div class="mobile-menu-container-inner">
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
                    <a href="#">
                            <span>
                                <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/newspaper.png') }}" alt="">
                            </span>
                        <span>About</span>
                    </a>
                    <i class="fa fa-chevron-down"></i>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('about-us')}}">
                                <i class=" fa-angle-double-right"></i>
                                <span>The Board</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('chairman-message')}}">
                                <i class=" fa-angle-double-right"></i>
                                <span>Chairman’s Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class=" fa-angle-double-right"></i>
                                <span>Councils</span>
                            </a>
                            <a class="dubai-states" href="https://www.facebook.com/AbuDhabiCricket" target="_blank">
                                <i class="fa-angle-right"></i>
                                <span>Abu Dhabi</span>
                            </a>
                            <a class="dubai-states" href="https://www.facebook.com/dubaicricketcouncil" target="_blank">
                                <i class="fa-angle-right"></i>
                                <span>Dubai</span>
                            </a>
                            <a class="dubai-states" href="https://www.facebook.com/sharjahcricketstadiumofficial/" target="_blank">
                                <i class="fa-angle-right"></i>
                                <span>Sharjah</span>
                            </a>
                            <a class="dubai-states" href="https://www.facebook.com/ajccofficialpage/" target="_blank">
                                <i class="fa-angle-right"></i>
                                <span>Ajman</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class=" fa-angle-double-right"></i>
                                <span>Cricket Governing Bodies</span>
                            </a>
                            <a class="dubai-states" href="https://www.icc-cricket.com/" target="_blank">
                                <i class="fa-angle-right"></i>
                                <span>ICC</span>
                            </a>
                            <a class="dubai-states" href="http://www.asiancricket.org/" target="_blank">
                                <i class="fa-angle-right"></i>
                                <span>ACC</span>
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
                            <a href="{{route('uae-men')}}">
                                    <span>
                                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/under-19.png') }}" alt="">
                                    </span>
                                <span>UAE Men's</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('uae-women')}}">
                                    <span>
                                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/women.png') }}" alt="">
                                    </span>
                                <span>UAE Women's</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('under-19')}}">
                                    <span>
                                        <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/under-19.png') }}" alt="">
                                    </span>
                                <span>UAE 19 Men's</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('development')}}">
                            <span>
                                <img class="nav-icon" src="{{ URL::asset('frontend/assets/images/development.png') }}" alt="">
                            </span>
                        <span>Development</span>
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
                <li>
                </li>
            </ul>
        </div>
    </div> -->
</div>
