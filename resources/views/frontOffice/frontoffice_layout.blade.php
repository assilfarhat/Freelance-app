<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>WorkWise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- bootstrap -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    @vite(['resources/assets/frontoffice_asset/css/animate.css'])
    @vite(['resources/assets/frontoffice_asset/css/bootstrap.min.css'])
    @vite(['resources/assets/frontoffice_asset/css/line-awesome.css'])
    @vite(['resources/assets/frontoffice_asset/css/line-awesome-font-awesome.min.css'])
    @vite(['resources/assets/frontoffice_asset/vendor/fontawesome-free/css/all.min.css'])
    @vite(['resources/assets/frontoffice_asset/css/font-awesome.min.css'])
    @vite(['resources/assets/frontoffice_asset/css/jquery.mCustomScrollbar.min.css'])
    @vite(['resources/assets/frontoffice_asset/lib/slick/slick.css'])
    @vite(['resources/assets/frontoffice_asset/lib/slick/slick-theme.css'])
    @vite(['resources/assets/frontoffice_asset/css/style.css'])
    @vite(['resources/assets/frontoffice_asset/css/responsive.css'])
    @vite(['resources/assets/frontoffice_asset/css/timeline.css'])


    @vite(['resources/assets/frontoffice_asset/js/jquery.min.js'])
    @vite(['resources/assets/frontoffice_asset/js/popper.js'])
    @vite(['resources/assets/frontoffice_asset/js/bootstrap.min.js'])
    @vite(['resources/assets/frontoffice_asset/js/jquery.mCustomScrollbar.js'])
    @vite(['resources/assets/frontoffice_asset/lib/slick/slick.min.js'])
    @vite(['resources/assets/frontoffice_asset/js/scrollbar.js'])
    @vite(['resources/assets/frontoffice_asset/js/script.js'])

</head>

<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="header-data">
                    <div class="logo">
                        <a href="index.html" title=""><img
                                src="{{ Vite::asset('resources/assets/frontoffice_asset/images/logo.png') }}"
                                alt=""></a>
                    </div><!--logo end-->
                    <div class="search-bar">
                        <form>
                            <input type="text" name="search" placeholder="Search...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div><!--search-bar end-->
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}" title="">
                                    <span><img
                                            src="{{ Vite::asset('resources/assets/frontoffice_asset/images/icon1.png') }}"
                                            alt=""></span>
                                    Home
                                </a>
                                <ul>
                                    <li><a href="{{ url('/service') }}" title="">services feed</a></li>
                                    <li><a href="{{ url('/jobs') }}" title="">job feed</a></li>
                                    <li><a href="{{ url('/projects') }}" title="">project feed</a></li>
                                    <li><a href="{{ url('/events') }}" title="">events feed</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="/projects" title="">
                                    <span><img
                                            src="{{ Vite::asset('resources/assets/frontoffice_asset/images/icon3.png') }}"
                                            alt=""></span>
                                    Projects
                                </a>
                            </li>
                            <li>
                                <a href="profiles.html" title="">
                                    <span><img
                                            src="{{ Vite::asset('resources/assets/frontoffice_asset/images/icon4.png') }}"
                                            alt=""></span>
                                    Profiles
                                </a>

                            </li>
                            <li>
                                <a href="{{ url('/jobs') }}" title="">
                                    <span><img
                                            src="{{ Vite::asset('resources/assets/frontoffice_asset/images/icon5.png') }}"
                                            alt=""></span>
                                    Jobs
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/posts') }}" title="">
                                    <span><img
                                            src="{{ Vite::asset('resources/assets/frontoffice_asset/images/blogg.png') }}"
                                            alt=""></span>
                                    Blog
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/events') }}" title="" class="not-box-openm">
                                    <span><img
                                            src="{{ Vite::asset('resources/assets/frontoffice_asset/images/icon2.png') }}"
                                            alt=""></span>
                                    Events
                                </a>

                            </li>
                            <li>
                                <a href="#" title="" class="not-box-open">
                                    <span><img
                                            src="{{ Vite::asset('resources/assets/frontoffice_asset/images/icon7.png') }}"
                                            alt=""></span>
                                    Notification
                                </a>
                                <div class="notification-box noti" id="notification">
                                    <div class="nt-title">
                                        <h4>Setting</h4>
                                        <a href="#" title="">Clear all</a>
                                    </div>
                                    <div class="nott-list">
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{ Vite::asset('resources/assets/frontoffice_asset/images/resources/ny-img1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on
                                                    your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{ Vite::asset('resources/assets/frontoffice_asset/images/resources/ny-img2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on
                                                    your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{ Vite::asset('resources/assets/frontoffice_asset/images/resources/ny-img3.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on
                                                    your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{ Vite::asset('resources/assets/frontoffice_asset/images/resources/ny-img2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on
                                                    your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class="view-all-nots">
                                            <a href="#" title="">View All Notification</a>
                                        </div>
                                    </div><!--nott-list end-->
                                </div><!--notification-box end-->
                            </li>
                        </ul>
                    </nav><!--nav end-->
                    <div class="menu-btn">
                        <a href="#" title=""><i class="fa fa-bars"></i></a>
                    </div><!--menu-btn end-->
                    <div class="user-account">
                        <div class="user-info">

                            <img src="{{ Vite::asset('storage/app/public/' . Auth::user()->profileImage) }}"
                                alt="" width="30%">
                            <a href="#" title="">{{Auth::user()->name}}</a>
                            <i class="fa fa-sort-down"></i>
                            <i class="fa fa-sort-down"></i>
                        </div>
                        <div class="user-account-settingss" id="users">
                            <h3>Online Status</h3>
                            <ul class="on-off-status">
                                <li>
                                    <div class="fgt-sec">
                                        <input type="radio" name="cc" id="c5">
                                        <label for="c5">
                                            <span></span>
                                        </label>
                                        <small>Online</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="fgt-sec">
                                        <input type="radio" name="cc" id="c6">
                                        <label for="c6">
                                            <span></span>
                                        </label>
                                        <small>Offline</small>
                                    </div>
                                </li>
                            </ul>
                            <h3>Custom Status</h3>
                            <div class="search_form">
                                <form>
                                    <input type="text" name="search">
                                    <button type="submit">Ok</button>
                                </form>
                            </div><!--search_form end-->
                            <h3>Setting</h3>
                            <ul class="us-links">
                                <li> <a href="{{ url('/users/edit') }}" title="">Account Setting</a></li>

                            </ul>
                            <h3 class="tc">
                                <a href="#" title="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </h3>

                            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                @csrf
                            </form>



                        </div><!--user-account-settingss end-->
                    </div>
                </div><!--header-data end-->
            </div>
        </header><!--header end-->
        @yield('frontoffice')

    </div>



</body>

</html>
