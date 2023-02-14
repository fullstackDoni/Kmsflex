<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>KMSFLEX</title>
    <!-- loader-->
    <link href="{{asset('/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('/js/pace.min.js')}}"></script>
    <!--favicon-->
    <link rel="icon" href="{{asset('/images/favicon.ico')}}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{asset('/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="{{asset('/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{asset('/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{asset('/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{asset('/css/sidebar-menu.css')}}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{asset('/css/app-style.css')}}" rel="stylesheet"/>

</head>

<body class="bg-theme bg-theme1">

<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a class="cs-site_branding" href="#"><img src="{{asset('/img/logo.png')}}" alt="Logo" width="40" height="40"></a>
            <h5 class="logo-text">KMSFLEX</h5>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header">Basqaruşy bet</li>
            <li>
                <a href="{{route('video.index')   }}">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>Basty bet</span>
                </a>
            </li>

            <li>
                <a href="{{route('admin.users.index')}}">
                    <i class="zmdi zmdi-account"></i> <span>Tırkeluşıler tızımı</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.categories.index')}}">
                    <i class="zmdi zmdi-bookmark"></i> <span>Kategoriasy</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.genres.index')}}">
                    <i class="zmdi zmdi-archive"></i> <span>Janrlar</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.videos.index')}}">
                    <i class="zmdi zmdi-youtube-play"></i> <span>Videolar</span>
                </a>
            </li>
        </ul>

    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="javascript:void();">
                        <i class="icon-menu menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                </li>
            </ul>

            <ul class="navbar-nav align-items-center right-nav-link">
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle"
                                                        alt="user avatar"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item user-details">
                            <a href="javaScript:void();">
                                <div class="media">
                                    <div class="avatar"><img class="align-self-start mr-3"
                                                             src="https://via.placeholder.com/110x110"
                                                             alt="user avatar"></div>
                                    <div class="media-body">
                                        <h6 class="mt-2 user-title">{{Auth::user()->name}}</h6>
                                        <p class="user-subtitle">{{Auth::user()->email}}</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-item"><a href="{{route('logout')}}"
                                                     onclick="event.preventDefault();document.getElementById('logout-form').submit();">Şyğu</a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST"
                                  class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <main class="py-4">
                @yield('content')
            </main>
            <!--Start Dashboard Content-->

            <div class="card mt-3">
                <div class="card-content">
                    <div class="row row-group m-0">
                    </div>
                </div>
            </div>


            <div class="overlay toggle-menu"></div>


        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © 2022 KMSFLEX
            </div>
        </div>
    </footer>
    <!--End footer-->

    <!--start color switcher-->
    <!--end color switcher-->

</div><!--End wrapper-->


<!-- Bootstrap core JavaScript-->
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/popper.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>

<!-- simplebar js -->
<script src="{{asset('/plugins/simplebar/js/simplebar.js')}}"></script>
<!-- sidebar-menu js -->
<script src="{{asset('/js/sidebar-menu.js')}}"></script>
<!-- loader scripts -->
<script src="{{asset('/js/jquery.loading-indicator.js')}}"></script>
<!-- Custom scripts -->
<script src="{{asset('/js/app-script.js')}}"></script>
<!-- Chart js -->

<script src="{{asset('/plugins/Chart.js/Chart.min.js')}}"></script>

<!-- Index js -->
<script src="{{asset('/js/index.js')}}"></script>


</body>
</html>

