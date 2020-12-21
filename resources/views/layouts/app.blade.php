<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel</title>

    <!-- Fonts -->
{{--    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">--}}

{{--    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css"/>--}}
{{--    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css"/>--}}
{{--    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>--}}
{{--    <link href="https://bootstraptema.ru/snippets/element/2020/bootstrap-table.css" rel="stylesheet"/>--}}
{{--    <script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>--}}
{{--    <script type="text/javascript" src="http://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>--}}
{{--    <script type="text/javascript" src="https://bootstraptema.ru/snippets/element/2020/bootstrap-table.js"></script>--}}


{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"--}}
{{--          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">--}}

    <!-- Styles -->
{{--     <link href="{{ elixir('css/app.css') }}" rel="stylesheet">--}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style1.css') }}" />
    <link href="/css/style1.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style2.css') }}" />
    <link href="/css/style2.css">

    <!-- Styles -->
{{--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}

    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style3.css') }}" />
    <link href="/css/style3.css">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style4.css') }}" />
    <link href="/css/style4.css">

    <link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style5.css') }}" />
    <link href="/css/style5.css">

    <link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style6.css') }}" />
    <link href="/css/style6.css">

    <link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-addons-4.19.1.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style7.css') }}" />
    <link href="/css/style7.css">


{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">--}}

    <style>

        body {
            font-family: 'Roboto';
            font-size:1rem !important;
        }

        .fa-btn {
            margin-right: 6px;
        }

        .vertus {
            margin-bottom: 5px;
            background-color: #ccc;
            color: #333;
            padding: 10px;
            text-align: center;
            width: 100%;
            height: 2%;

            text-indent: 0px;
            border: 1px solid #888;
            -moz-transition: all 3s ease-out;
            -o-transition: all 3s ease-out;
            -webkit-transition: all 3s ease-out;
            cursor: pointer;
        }

        #box4:hover {
            background-color: #97CE68;
            color: #000;
            -webkit-transform: scale(2);
            -moz-transform: scale(2);
            -o-transform: scale(2);
        }

        .centered-naz {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 100px;
            color: white;
            font-family: "East Sea Dokdo";
        }

        .centered-text {
            position: absolute;
            top: -10%;
            left: 70%;
            width: 40%;
            transform: translate(-50%, 130%);
            background: white;
            border-radius: 10px;
            margin-top: -10%;
            padding: 3%;
            opacity: 1;
            text-align: center;

        }

        .md-form .prefix {
            top: 1.25rem !important;
            font-size: 1.75rem;
        }

        .kz {
            background: url(img/kaizen1.jpg) no-repeat center center fixed !important;
            background-size: cover;
            margin-top: 5%;
            margin-bottom: 20%;
            position: relative;
        }

        .grow:hover {
            -webkit-transform: scale(1.2);
            -ms-transform: scale(1.2);
            transform: scale(1.2);
        }

        /*затухание*/
        .fade:hover {
            opacity: 0.9;
        }

        .fade {
            opacity: 1.5;
        }

        /*внутрення рамка*/
        .border:hover {
            box-shadow: inset 0 0 0 3px #53ea93;
        }

        /*3д с тенью*/
        .threed:hover {
            box-shadow: 1px 1px 3px 3px white;

            -webkit-transform: translateX(-7px);
            transform: translateX(-7px);
        }

        h1 {
            animation: shadow 2s infinite ease-in-out;
        }

        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .view {
                height: 1000px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .view {
                height: 650px;
            }
        }

        @media (min-width: 300px) and (max-width: 350px) {
            .navbar-brand {
                font-size:1rem !important;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331 !important;
            }
        }

        /* Navbar animation */
        .navbar {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .top-nav-collapse {
            background-color: #1C2331;
        }

        /* Adding color to the Navbar on mobile */
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }
/*Ipad*/
/*        @media only screen and (width: 768px) and (height: 1024px) {*/
/*            .full-page-intro {*/
/*                margin-top: -30% !important;*/
/*            }*/
/*        }*/
/*        @media only screen and (width: 1024px) and (height: 768px) and (orientation: landscape){*/
/*            .full-page-intro {*/
/*                margin-top:0% !important;*/
/*            }*/
/*        }*/
/*        @media (min-width: 768px)*/
/*            .col-md-6 {*/
/*                max-width:100% !important;*/
/*            }*/
/*!*Ipad*!*/
/*!*IPAD pro*!*/
        @media only screen and (width: 1024px) and (height: 1366px) {
            .full-page-intro {
                /*margin-top:-55% !important;*/
                height:90%;
            }
        }

        @media only screen and (width: 1366px) and (height: 1024px) {
            .full-page-intro {
                /*margin-top:-15% !important;*/
            }
        }
        /*Ipad pro*/

        /*"Выйти"*/
        @media only screen and (min-width: 1360px) and (max-height: 1025px) {
            .dropdown-menu show {
                margin-left:-100% !important;
            }
        }
/*"Выйти"*/
            @media only screen and (min-width: 319px) and (max-height: 570px) {
                .navbar-right {
                    font-size:0.8rem;
                }
            }
        @media only screen and (min-width: 810px) and (max-height: 380px) {
            .fadeIn {
                margin-top:10%;
            }
        }
/*Pixel 2xl*/
        @media only screen and (width: 823px) and (height: 411px) {
            .full-page-intro {
                margin-top:10% !important;
            }
        }
        /*Pixel 2xl*/
/*Iphone X*/
        @media only screen and (width: 812px) and (height: 375px) {
            .full-page-intro {
                margin-top:10% !important;
            }
        }
        /*Iphone X*/

        @media only screen and (max-width: 768px){
            .display-4 {
                /*margin-top:-55% !important;*/
                font-size: 2.5rem !important;
            }
        }

        /* Footer color for sake of consistency with Navbar */
        .page-footer {
            background-color: #1C2331;
        }


        .formes {
            margin-bottom: 5px;

            padding: 10px;
            /*text-align: center;*/
            -moz-transition: all 1s ease-out;
            -o-transition: all 1s ease-out;
            -webkit-transition: all 1s ease-out;
            cursor: pointer;
        }

        .formes:hover {


            -webkit-transform: scale(1.03);
            -moz-transform: scale(1.03);
            -o-transform: scale(1.03);
        }

        /*th {*/
        /*    font-size: 13px;*/
        /*    font-weight: normal;*/
        /*    background: #b9c9fe;*/
        /*    border-top: 4px solid #aabcfe;*/
        /*    border-bottom: 1px solid #fff;*/
        /*    color: #039;*/
        /*    padding: 8px;*/
        /*}*/
        /*td {*/
        /*    background: #e8edff;*/
        /*    border-bottom: 1px solid #fff;*/
        /*    color: #669;*/
        /*    border-top: 1px solid transparent;*/
        /*    padding: 8px;*/
        /*}*/
        /*tr:hover td {background: #ccddff;}*/
        /*table {*/
        /*    width: 100%;*/
        /*}*/

        /*table, th, tr, td {*/
        /*    font-size: 100% !important;*/
        /*    color: black;*/
        /*}*/

        /*table {*/
        /*    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;*/

        /*    border-radius: 10px;*/
        /*    border-spacing: 0;*/
        /*    text-align: center;*/
        /*}*/

        /*th {*/
        /*    background: #BCEBDD;*/
        /*    color: white;*/
        /*    text-shadow: 0 1px 1px #2D2020;*/
        /*    padding: 10px 20px;*/
        /*}*/

        /*th, td {*/
        /*    border-style: solid;*/
        /*    border-width: 0 1px 1px 0;*/
        /*    border-color: white;*/
        /*}*/

        /*th:first-child, td:first-child {*/
        /*    text-align: left;*/
        /*}*/

        /*th:first-child {*/
        /*    border-top-left-radius: 10px;*/
        /*}*/

        /*th:last-child {*/
        /*    border-top-right-radius: 10px;*/
        /*    border-right: none;*/
        /*}*/

        /*td {*/
        /*    padding: 10px 20px;*/
        /*    background: #F8E391;*/
        /*}*/

        /*tr:last-child td:first-child {*/
        /*    border-radius: 0 0 0 10px;*/
        /*}*/

        /*tr:last-child td:last-child {*/
        /*    border-radius: 0 0 10px 0;*/
        /*}*/

        /*tr td:last-child {*/
        /*    border-right: none;*/
        /*}*/

        /*table {*/
        /*    width: 100%;*/
        /*    border-collapse: separate;*/
        /*    border-spacing: 4px;*/
        /*}*/

        /*table thead tr {*/
        /*    color: #ffffff;*/
        /*    font-weight: bold;*/
        /*}*/

        /*table thead tr td {*/
        /*    border-radius: 4px 4px 0 0;*/
        /*    background: #2e82c3;*/
        /*}*/

        /*table tbody tr td {*/
        /*    border: 1px solid #2e82c3;*/
        /*    border-radius: 4px;*/
        /*    background: #cbdfef;*/
        /*}*/

        /*table tbody tr td:hover {*/
        /*    background: #a2c3dd;*/
        /*    transition-duration: 0.2s;*/
        /*}*/
        table {width: 100%; border-collapse: collapse;}
        table thead tr {color: #ffffff; font-weight: bold; background: #00bf80;}
        table thead tr td {border: 1px solid khaki;}
        table tbody tr td {border: 1px solid white;}
        table tbody tr:nth-child(2n) {background: white;}
        table tbody tr:hover {background: khaki;}


        .select-css {
            display: block;
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 700;
            color: #444;
            line-height: 1.3;
            padding: .6em 1.4em .5em .8em;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            margin: 0;
            border: 1px solid #aaa;
            box-shadow: 0 1px 0 1px rgba(0, 0, 0, .04);
            border-radius: .5em;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            background-color: #fff;
            background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'), linear-gradient(to bottom, #ffffff 0%, #e5e5e5 100%);
            background-repeat: no-repeat, repeat;
            background-position: right .7em top 50%, 0 0;
            background-size: .65em auto, 100%;
        }

        .select-css::-ms-expand {
            display: none;
        }

        .select-css:hover {
            border-color: #888;
        }

        .select-css:focus {
            border-color: #aaa;
            box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
            box-shadow: 0 0 0 3px -moz-mac-focusring;
            color: #222;
            outline: none;
        }

        .select-css option {
            font-weight: normal;
        }

        *[dir="rtl"] .select-css, :root:lang(ar) .select-css, :root:lang(iw) .select-css {
            background-position: left .7em top 50%, 0 0;
            padding: .6em .8em .5em 1.4em;
        }

            .table-box {
                max-width: 1024px;
            }
            .table-box p {
                font-size: larger;
                font-weight: bold;
            }
            table {
                width: 100%;
                border: 1px solid #ccc;
                border-collapse: collapse;

            }
            thead {
                border: 1px solid #ccc;
            }
            th, td {
                border-left: 1px solid #ccc;
                white-space: nowrap;
                padding: 5px;
            }
            td:nth-last-child(-n+2) {
                text-align: right;
            }
            @media screen and (max-width: 640px) {
                .table-box {
                    overflow-x: scroll;
                }
            }
            .big-table {
                overflow: auto;
                position: relative;
            }
            .big-table table {
                display: inline-block;
                vertical-align: top;
                max-width: 100%;
                min-width: max-content;
                overflow-x: auto;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
    </style>
</head>
<body id="app-layout">
<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="position:fixed;transition: top 0.3s;font-size:1rem">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="{{ url('/') }}"
           style="color: white;opacity:1.0;font-size:2rem">
            KaiZen
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin:auto">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active grow">
                    <a class="nav-link" href="{{ url('/') }}">Одобренные идеи
                    </a>
                </li>
            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons grow" style="margin-right:5%;">
                <li class="nav-item">
                    <a href="https://vk.com" class="nav-link" target="_blank">
                        <i class="fab fa-vk"></i>
                    </a>
                </li>
            </ul>

        </div>
{{--        <div class="collapse navbar-collapse" id="app-navbar-collapse" style=" padding-bottom:1%;">--}}
        <div class="" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->


            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right mr-auto">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="" style="margin-right: 5%;"><a href="{{ url('/login') }}" style="color:white;">Войти</a></li>
                    <li class=""><a href="{{ url('/register') }}" style="color:white;">Зарегистрироваться</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           style="color:white !important;">
                            {{ Auth::user()->name }} </span>
                        </a>

                        <ul class="dropdown-menu" role="menu" style="margin-left:-70%">
                            <li><a href="{{ url('/logout') }}" style="font-size:100%"><i class="fa fa-btn fa-sign-out"></i>Выйти</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>

    </div>
</nav>
<!-- Navbar -->
<!-- Full Page Intro -->

<!-- Full Page Intro -->
@yield('content')
<!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">


    <hr class="my-4">
    <!-- Social icons -->
    <div class="pb-4">
        <h6>Мы в соцсетях:</h6>

        <a href="https://www.facebook.com/mdbootstrap" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
        </a>

        <a href="https://twitter.com/MDBootstrap" target="_blank">
            <i class="fab fa-vk mr-3"></i>
        </a>

        <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
            <i class="fab fa-youtube mr-3"></i>
        </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        &#xA9; 2020 Copyright:
        <a href="https://admtmr.ru" target="_blank"> Администрация Тутаевского муниципального района </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
<script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/js/script1.js') }}" />
<script src="/js/script1.js"></script>

<script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/js/script2.js') }}" />
<script src="/js/script2.js"></script>

<script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/js/script3.js') }}" />
<script src="/js/script3.js"></script>

<script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/mdb.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/js/script4.js') }}" />
<script src="/js/script4.js"></script>

<script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/bundles/4.19.1/compiled-addons.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/js/script5.js') }}" />
<script src="/js/script5.js"></script>
<script>new WOW().init()</script>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/js/script6.js') }}" />
<script src="/js/script6.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/js/script7.js') }}" />
<script src="/js/script7.js"></script>

{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
