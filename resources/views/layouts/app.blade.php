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

</header>

@yield('content')
</body>
</html>