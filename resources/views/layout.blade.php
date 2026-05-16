<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NewsForge &#8211; Best news, blog & magazine template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">

    <meta name="theme-color" content="#030303">
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300;1,500&family=Poppins:ital,wght@0,300;0,500;0,700;1,300;1,400&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"
        crossorigin="anonymous">
    <link href="./css/newsforge-theme.css" rel="stylesheet">
    <link href="./css/newsforge-ui.css" rel="stylesheet">
</head>

<body>
    <!-- Header news -->
    <header class="bg-light">
        <!-- Navbar Top -->
        <div class="topbar d-none d-sm-block">
            <div class="container ">
                <div class="row align-items-center ">

                    <div class="col-md-5">
                        <div class="topbar-left">
                            <span class="topbar-text">
                                <i class="fa fa-calendar me-1"></i> Monday, March 22, 2020
                            </span>
                        </div>
                    </div>

                    <div class="col-md-7 mt-3 mb-3">
                        <div class="d-flex align-items-center justify-content-end gap-3">

                            <!-- Nav Links -->
                            <ul class="topbar-link d-flex align-items-center gap-3 list-unstyled mb-0">
                                <li><a href="#" title="">Career</a></li>
                                <li><a href="#" title="">Contact Us</a></li>

                                @if (Auth::check())
                                    <li class="d-flex align-items-center gap-2">
                                        <span class="text-muted small">
                                            <i class="fa fa-user me-1"></i>{{ Auth::user()->name }}
                                        </span>
                                        <form method="POST" action="{{ route('logout') }}" class="mb-0">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="fa fa-sign-out me-1"></i> Logout
                                            </button>
                                        </form>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}" class="btn btn-danger btn-sm" title="">
                                            <i class="fa fa-sign-in me-1"></i> Login / Register
                                        </a>
                                    </li>
                                @endif
                            </ul>

                            <!-- Social Media -->
                            <ul class="topbar-sosmed d-flex align-items-center gap-2 list-unstyled mb-0">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Navbar Top -->
        <!-- Navbar  -->
        <!-- Navbar menu  -->
        <div class="navigation-wrap navigation-shadow bg-white">
            <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
                <div class="container">
                    <div class="offcanvas-header">
                        <div data-bs-toggle="modal" data-bs-target="#modal_aside_right" class="btn-md">
                            <span class="navbar-toggler-icon"></span>
                        </div>
                    </div>
                    <figure class="mb-0 mx-auto">
                        <a href="homepage-v1.html" class="site-logo text-dark">
                            <span class="site-logo__text">News<span class="text-primary">Forge</span></span>
                        </a>
                    </figure>

                    <div class="collapse navbar-collapse justify-content-between" id="main_nav99">
                        <ul class="navbar-nav ms-auto ">
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    Home </a>
                                <ul class="dropdown-menu dropdown-menu-start">
                                    <li><a class="dropdown-item" href="/homepage-v1.html"> Home version one </a>
                                    </li>
                                    <li><a class="dropdown-item" href="homepage-v2.html"> Home version two </a></li>
                                    <li><a class="dropdown-item" href="/homepage-v3.html"> Home version three </a></li>
                                    <li><a class="dropdown-item" href="/homepage-v4.html"> Home version four </a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Pages </a>
                                <ul class="dropdown-menu animate fade-up">

                                    <li><a class="dropdown-item icon-arrow" href="#"> Blog </a>
                                        <ul class="submenu dropdown-menu  animate fade-up">
                                            <li><a class="dropdown-item" href="/category-style-v1.html">Style 1</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/category-style-v2.html">Style 2</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/category-style-v3.html">Style 3</a>
                                            </li>

                                            <li><a class="dropdown-item icon-arrow" href="">Submenu item 3 </a>
                                                <ul class="submenu dropdown-menu  animate fade-up">
                                                    <li><a class="dropdown-item" href="">Multi level 1</a></li>
                                                    <li><a class="dropdown-item" href="">Multi level 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="">Submenu item 4</a></li>
                                            <li><a class="dropdown-item" href="">Submenu item 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item icon-arrow" href="#"> Blog single detail </a>
                                        <ul class="submenu dropdown-menu  animate fade-up">
                                            <li><a class="dropdown-item" href="/article-detail-v1.html">Style 1</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/article-detail-v2.html">Style 2</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/article-detail-v3.html">Style 3</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li><a class="dropdown-item icon-arrow" href="#"> Search Result </a>
                                        <ul class="submenu dropdown-menu  animate fade-up">
                                            <li><a class="dropdown-item" href="/search-result.html">Style 1</a></li>
                                            <li><a class="dropdown-item" href="/search-result-v1.html">Style 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="/login.html">Login </a>
                                    <li><a class="dropdown-item" href="/register.html"> Register </a>
                                    <li><a class="dropdown-item" href="/contact.html"> Contact </a>
                                    <li><a class="dropdown-item" href="/404.html"> 404 Error </a>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    About </a>
                                <ul class="dropdown-menu dropdown-menu-start">
                                    <li><a class="dropdown-item" href="/about-us.html"> Style 1 </a>
                                    </li>
                                    <li><a class="dropdown-item" href="/about-us-v1.html"> Style 2 </a></li>

                                </ul>
                            </li>

                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> News
                                </a>
                                <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                                    <div class="container wrap__mobile-megamenu">
                                        <div class="col-megamenu">
                                            <h5 class="title">Recent news</h5>
                                            <hr>
                                            <!-- Popular news carousel -->
                                            <div class="popular__news-header-carousel">

                                                <div class="top__news__slider">
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat
                                                                        sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat
                                                                        sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat
                                                                        sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat
                                                                        sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="#">
                                                                    <img src="images/placeholder/500x400.jpg"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="article__content">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item">
                                                                        <span class="text-primary">
                                                                            by david hall
                                                                        </span>,
                                                                    </li>

                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            descember 09, 2016
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <h5>
                                                                    <a href="#">
                                                                        Proin eu nisl et arcu iaculis placerat
                                                                        sollicitudin ut est.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- col-megamenu.// -->
                                    </div>
                                </div> <!-- dropdown-mega-menu.// -->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#"> Category </a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact.html"> contact </a></li>
                        </ul>


                        <!-- Search bar.// -->
                        <ul class="navbar-nav ">
                            <li class="nav-item search hidden-xs hidden-sm "> <a class="nav-link" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Search content bar.// -->
                        <div class="top-search navigation-shadow">
                            <div class="container">
                                <div class="input-group ">
                                    <form action="#">

                                        <div class="row g-0 mt-3">
                                            <div class="col">
                                                <input class="form-control border-secondary border-end-0 rounded-0"
                                                    type="search" value="" placeholder="Search "
                                                    id="example-search-input4">
                                            </div>
                                            <div class="col-auto">
                                                <a class="btn btn-outline-secondary border-start-0 rounded-0 rounded-end"
                                                    href="/search-result.html">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Search content bar.// -->
                    </div> <!-- navbar-collapse.// -->
                </div>
            </nav>
        </div>
        <!-- End Navbar menu  -->

        <!-- Navbar sidebar menu  -->
        <div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-aside" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="widget__form-search-bar  ">
                            <div class="row g-0">
                                <div class="col">
                                    <input class="form-control border-secondary border-end-0 rounded-0" value=""
                                        placeholder="Search">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-outline-secondary border-start-0 rounded-0 rounded-end">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <nav class="list-group list-group-flush">
                            <ul class="navbar-nav ">
                                <li class="nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle text-dark" href="#"
                                        data-bs-toggle="dropdown"> Home
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-start">
                                        <li><a class="dropdown-item text-dark" href="/homepage-v1.html"> Home version
                                                one </a>
                                        </li>
                                        <li><a class="dropdown-item text-dark" href="homepage-v2.html"> Home version
                                                two </a>
                                        </li>
                                        <li><a class="dropdown-item text-dark" href="/homepage-v3.html"> Home version
                                                three </a>
                                        </li>
                                        <li><a class="dropdown-item text-dark" href="/homepage-v4.html"> Home version
                                                four </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle  text-dark" href="#"
                                        data-bs-toggle="dropdown"> Pages </a>
                                    <ul class="dropdown-menu animate fade-up">

                                        <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Blog </a>
                                            <ul class="submenu dropdown-menu  animate fade-up">
                                                <li><a class="dropdown-item" href="/category-style-v1.html">Style
                                                        1</a></li>
                                                <li><a class="dropdown-item" href="/category-style-v2.html">Style
                                                        2</a></li>
                                                <li><a class="dropdown-item" href="/category-style-v3.html">Style
                                                        3</a></li>

                                                <li><a class="dropdown-item icon-arrow  text-dark"
                                                        href="">Submenu item 3 </a>
                                                    <ul class="submenu dropdown-menu  animate fade-up">
                                                        <li><a class="dropdown-item" href="">Multi level 1</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Multi level 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item  text-dark" href="">Submenu item
                                                        4</a></li>
                                                <li><a class="dropdown-item" href="">Submenu item 5</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Blog single
                                                detail </a>
                                            <ul class="submenu dropdown-menu  animate fade-up">
                                                <li><a class="dropdown-item" href="/article-detail-v1.html">Style
                                                        1</a></li>
                                                <li><a class="dropdown-item" href="/article-detail-v2.html">Style
                                                        2</a></li>
                                                <li><a class="dropdown-item" href="/article-detail-v3.html">Style
                                                        3</a></li>

                                            </ul>
                                        </li>

                                        <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Search
                                                Result </a>
                                            <ul class="submenu dropdown-menu  animate fade-up">
                                                <li><a class="dropdown-item" href="/search-result.html">Style 1</a>
                                                </li>
                                                <li><a class="dropdown-item" href="/search-result-v1.html">Style 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item  text-dark" href="/login.html">Login </a>
                                        <li><a class="dropdown-item  text-dark" href="/register.html"> Register </a>
                                        <li><a class="dropdown-item  text-dark" href="/contact.html"> Contact </a>
                                        <li><a class="dropdown-item  text-dark" href="/404.html"> 404 Error </a>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle  text-dark" href="#"
                                        data-bs-toggle="dropdown"> About
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-start">
                                        <li><a class="dropdown-item" href="/about-us.html"> Style 1 </a>
                                        </li>
                                        <li><a class="dropdown-item" href="/about-us-v1.html"> Style 2 </a></li>

                                    </ul>
                                </li>


                                <li class="nav-item"><a class="nav-link  text-dark" href="#"> Category </a>
                                </li>
                                <li class="nav-item"><a class="nav-link  text-dark" href="/contact.html"> contact
                                    </a></li>
                            </ul>

                        </nav>
                    </div>
                    <div class="modal-footer">
                        <p>© 2020 <a href="{{ url('/') }}"
                                title="Premium WordPress news &amp; magazine theme">NewsForge</a>
                            -
                            Premium template news, blog & magazine &amp;
                            magazine theme by <a href="#" title="NewsForge">NewsForge</a>.</p>
                    </div>
                </div>
            </div> <!-- modal-bialog .// -->
        </div> <!-- modal.// -->
        <!-- End Navbar sidebar menu  -->
        <!-- End Navbar  -->
    </header>
    <!-- End Header news -->

    @yield('main')

    <section class="wrapper__section p-0">
        <div class="wrapper__section__components">
            <!-- Footer -->
            <footer>
                <div class="wrapper__footer bg__footer-dark pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer ">
                                        <h4 class="footer-title">
                                            world
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>

                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">global economy</a>

                                        </li>
                                        <li>
                                            <a href="#">religion</a>
                                        </li>
                                        <li>
                                            <a href="#">bitcoin</a>
                                        </li>
                                        <li>
                                            <a href="#">conflict</a>
                                        </li>
                                        <li>
                                            <a href="#">sports</a>
                                        </li>
                                        <li>
                                            <a href="#">scandals</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer">
                                        <h4 class="footer-title">
                                            entertainment
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>

                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">celebity news</a>
                                        </li>
                                        <li>
                                            <a href="#">movies</a>
                                        </li>
                                        <li>
                                            <a href="#">tv news</a>
                                        </li>
                                        <li>
                                            <a href="#">music news</a>
                                        </li>
                                        <li>
                                            <a href="#">life style</a>
                                        </li>
                                        <li>
                                            <a href="#">entertainment video</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer">
                                        <h4 class="footer-title">
                                            health
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>
                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">medical research</a>
                                        </li>
                                        <li>
                                            <a href="#">healthy living</a>
                                        </li>
                                        <li>
                                            <a href="#">mental health</a>
                                        </li>
                                        <li>
                                            <a href="#">virus corona</a>
                                        </li>
                                        <li>
                                            <a href="#">children's health</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer">
                                        <h4 class="footer-title">
                                            business
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>

                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">merkets</a>
                                        </li>
                                        <li>
                                            <a href="#">technology</a>
                                        </li>
                                        <li>
                                            <a href="#">features</a>
                                        </li>
                                        <li>
                                            <a href="#">property</a>
                                        </li>
                                        <li>
                                            <a href="#">business leaders</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <figure class="image-logo">
                                        <a href="homepage-v1.html"
                                            class="site-logo site-logo--footer text-white">News<span
                                                class="text-primary">Forge</span></a>
                                    </figure>
                                </div>
                                <div class="col-md-8 my-auto ">

                                    <div class="social__media">

                                        <ul class="list-inline">

                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white whatsapp">
                                                    <i class="fa fa-whatsapp"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white telegram">
                                                    <i class="fa fa-telegram"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white linkedin">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer bottom -->
                <div class="wrapper__footer-bottom bg__footer-dark">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="border-top-1 bg__footer-bottom-section">
                                    <ul class="list-inline link-column">
                                        <li class="list-inline-item">
                                            <a href="/contact-us.html">
                                                contact us
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> terms of use</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                adchoice
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="/about-us.html">
                                                about us
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                newsletters
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                sitemap
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                NewsForge store
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span>
                                                Copyright © 2019 News and Magazine template based on Bootstrap 5.3 Theme
                                                by <a href="#">NewsForge</a>
                                            </span>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </footer>
        </div>
    </section>


    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sticky-sidebar@3.3.1/dist/sticky-sidebar.min.js" crossorigin="anonymous">
    </script>
    <script src="./js/newsforge.js"></script>
</body>

</html>
