<html>
<head>
    <title> @yield('title')</title>
    <meta charset="utf-8">
    <meta name="yandex-verification" content="b19eaf226c9b90c0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">


    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('css/app.css') }}" rel="stylesheet" type="text/css"/>


</head>
<body>
<header>
    <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <nav id="main-navigation">
                        <ul class="top-nav d-flex">
                            <li class="item">
                                <a href="#">
                                    {{ __('messages.about_link') }}
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    {{ __('messages.promotion_link') }}
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    {{ __('messages.catalog_link') }}
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    {{ __('messages.delivery_link') }}

                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    {{ __('messages.pay_link') }}

                                </a>
                            </li>

                        </ul>
                    </nav>

                </div>
                <div class="col-md-6 col-xs-12 ">
                    <ul class="list-accout-links d-flex justify-content-end">
                        <li>
                            <a class="login-link" href="#">
                                {{ __('messages.login_link') }}
                            </a>
                        </li>
                        <li>
                            <a class="registration-link" href="#">
                                {{ __('messages.registration_link') }}
                            </a>
                        </li>


                    </ul>
                </div>

            </div>
        </div>

    </div>
    <div id="center-header">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between">
                <div class=" col-lg-2 col-xs-12">
                    <div id="logo">
                        <a href="{{ route('homePage') }}" title="Главная страница">
                            <img src="{{ url('images/logo.png') }}" alt="Логотип"/>
                        </a>

                    </div>
                </div>
                <div class="col-lg-7 col-xs-12">
                    <div id="search-bar">
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group d-flex align-items-center">
                                <input type="text" class="form-control" name="q"
                                       placeholder="Поиск"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                           <i class="fas fa-search"></i>
                                        </button>
                                    </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-12 d-flex align-items-center ">
                    <div id="wish-block">
                        <a href="#">
                            <i class="far fa-heart"></i>
                            <span>0</span>
                        </a>
                    </div>
                    <div id="cart" class="d-flex">
                        <div class="cart">
                            <a href="#">
                                <i class="fas fa-shopping-cart"></i>
                                <span>0</span>
                            </a>

                        </div>
                        <div class="price">
                            100 <span> P</span>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom-header">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <ul class="catalog-navigation d-flex">
                    <li>
                        <a href="#">
                            {{ __('navigation.woman') }}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{ __('navigation.men') }}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{ __('navigation.child') }}

                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{ __('navigation.shoes') }}

                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{ __('navigation.accessory') }}

                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{ __('navigation.books') }}

                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{ __('navigation.stationery') }}

                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{ __('navigation.zoo') }}

                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</header>

@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <h3 class="title">
                    {{ __('messages.company') }}
                </h3>
                <ul class="list-footer-links">
                    <li>
                        <a href="#" class="link">

                            {{ __('messages.about_us') }}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="link">
                            {{ __('messages.promotion') }}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="link">
                            {{ __('messages.blog') }}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="link">
                            {{ __('messages.contacts') }}
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <h3 class="title">
                    {{ __('messages.byers') }}

                </h3>
                <ul class="list-footer-links">
                    <li>
                        <a href="#" class="link">
                            {{ __('messages.delivery') }}

                        </a>
                    </li>
                    <li>
                        <a href="#" class="link">
                            {{ __('messages.pay') }}

                        </a>
                    </li>
                    <li>
                        <a href="#" class="link">
                            {{ __('messages.exchange') }}

                        </a>
                    </li>
                    <li>
                        <a href="#" class="link">
                            {{ __('messages.corporative') }}

                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <h3 class="title">
                    {{ __('messages.shop') }}

                </h3>
                <ul class="list-footer-links">
                    <li>
                        <a href="#" class="link">
                            {{ __('messages.guarantees') }}

                        </a>
                    </li>
                    <li>
                        <a href="#" class="link">
                            {{ __('messages.support') }}

                        </a>
                    </li>
                    <li>
                        <a href="#" class="link">
                            {{ __('messages.faq') }}

                        </a>
                    </li>


                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <h3 class="title">
                    {{ __('messages.contacts') }}
                </h3>
                <ul class="list-footer-links">
                    <li>
                        <p>
                            {{ __('messages.city') }} <br>
                            5th Monetchikovsky Lane 35
                        </p>
                    </li>
                    <li>
                        <a href="#" class="link">
                            +7 (880) 000-00-00
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</footer>
<link href="{{ url('css/fontawesome-all.css') }}" rel="stylesheet" type="text/css"/>


</body>
</html>