<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ThemeMarch">
    <!-- Site Title -->
    <title>KMSFLEX</title>
    <link rel="stylesheet" href="{{asset('/css/plugins/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>

<body class="cs-dark">

<!-- Start Header Section -->
<header class="cs-site_header cs-style1 cs-sticky-header cs-white_bg">
    <div class="cs-main_header">
        <div class="container-fluid">
            <div class="cs-main_header_in">
                <div class="cs-main_header_left">
                    <a class="cs-site_branding" href="{{route('video.index')}}"><img src="{{asset('/img/logo.png')}}" alt="Logo"></a>
                </div>
                <div class="cs-main_header_right">
                    <div class="cs-nav_wrap">
                        <div class="cs-nav_out">
                            <div class="cs-nav_in">
                                <div class="cs-nav">
                                    <ul class="cs-nav_list"></ul>
                                    <a href="{{route('video.index')}}">Basty bet</a></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @guest
                        <div class="cs-nav_wrap">
                            <div class="cs-nav_out">
                                <div class="cs-nav_in">
                                    @if(Route::has('login'))
                                        <div class="cs-nav">
                                            <ul class="cs-nav_list"></ul>
                                            <a class="nav-link" href="{{route('login.form')}}">Kıru</a></ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="cs-nav_wrap">
                            <div class="cs-nav_out">
                                <div class="cs-nav_in">
                                    @if(Route::has('register'))
                                        <div class="cs-nav">
                                            <ul class="cs-nav_list"></ul>
                                            <a class="nav-link" href="{{route('register.form')}}">Tırkelu</a></ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endguest
                    @auth
                        <div class="cs-header_btns_wrap">
                            <div class="cs-header_btns">
                                <div class="cs-header_icon_btn cs-center cs-mobile_search_toggle">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.16667 16.3333C12.8486 16.3333 15.8333 13.3486 15.8333 9.66667C15.8333 5.98477 12.8486 3 9.16667 3C5.48477 3 2.5 5.98477 2.5 9.66667C2.5 13.3486 5.48477 16.3333 9.16667 16.3333Z"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17.5 18L13.875 14.375" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="cs-toggle_box cs-notification_box">
                                </div>
                                <div class="cs-toggle_box cs-profile_box">
                                    <div class="cs-toggle_btn cs-header_icon_btn cs-center">
                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.5 15.75V14.25C15.5 13.4544 15.1839 12.6913 14.6213 12.1287C14.0587 11.5661 13.2956 11.25 12.5 11.25H6.5C5.70435 11.25 4.94129 11.5661 4.37868 12.1287C3.81607 12.6913 3.5 13.4544 3.5 14.25V15.75"
                                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path
                                                d="M9.5 8.25C11.1569 8.25 12.5 6.90685 12.5 5.25C12.5 3.59315 11.1569 2.25 9.5 2.25C7.84315 2.25 6.5 3.59315 6.5 5.25C6.5 6.90685 7.84315 8.25 9.5 8.25Z"
                                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="cs-toggle_body">
                                        <ul>
                                            <div class="cs-user_info">
                                                <h3 class="cs-user_name">{{Auth::user()->name}}</h3>
                                            </div>
                                        </ul>
                                        @can('viewAdmin', App\Models\User::class)
                                            <ul>
                                                <div class="cs-user_info">
                                                    <h3 class="cs-user_name"><a href="{{route('admin.users.index')}}">Admin
                                                            panel</a></h3>
                                                </div>
                                            </ul>
                                        @endcan
                                        @can('viewModerator', App\Models\User::class)
                                            <ul>
                                                <div class="cs-user_info">
                                                    <h3 class="cs-user_name"><a href="{{route('moderator.videos.index')}}">Moderator panel</a></h3>
                                                </div>
                                            </ul>
                                        @endcan
                                        <ul>
                                            <li>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mode_switch"
                                                           checked>
                                                    <label class="form-check-label" for="mode_switch">Qarañğy/Aq
                                                        mod</label>
                                                </div>
                                            </li>
                                            <li><a href="{{route('logout')}}"
                                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">Şyğu</a>
                                                <form id="logout-form" action="{{route('logout')}}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>

<main class="py-4">
    @yield('content')
</main>
<footer class="cs-footer cs-style1">
    <div class="cs-footer_bg"></div>
    <div class="cs-height_100 cs-height_lg_60"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="cs-footer_widget">
                            <h2 class="cs-widget_title">Bölımder</h2>
                            <ul class="cs-widget_nav">
                                <li><a href="#">Kino</a></li>
                                <li><a href="#">Serial</a></li>
                                <li><a href="#">Mültfilm</a></li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-4 col-sm-4">
                        <div class="cs-footer_widget">
                            <h2 class="cs-widget_title">Kompania</h2>
                            <ul class="cs-widget_nav">
                                <li><a href="{{route('aboutus')}}">Bız turaly</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="cs-footer_widget">
                            <h2 class="cs-widget_title">Qūqyq ielenuşılerge:</h2>
                            <ul class="cs-widget_nav">
                                <li>Saittağy barlyq materialdar tegın jäne tek üi jağdaiynda köruge
                                    arnalğan. Barlyq kontentter aşyq aqparat közderınen alynady. Eger qandai-da bır
                                    material sızdıñ avtorlyq qūqyğyñyzdy būzsa, bızben bailanysyñyz, bız ony dereu
                                    joiamyz. Bızdıñ pochta: kmsflex@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs-height_60 cs-height_lg_20"></div>
    <div class="cs-footer_bottom">
        <div class="container">
            <div class="cs-footer_separetor"></div>
            <div class="cs-footer_bottom_in">
                <div class="cs-copyright">Copyright 2022-2023 KMSFLEX</div>
                <ul class="cs-footer_menu">
                    <li><a href="#">Qūpialylyq saiasaty</a></li>
                    <li><a href="#">Merzımı men şarty</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
