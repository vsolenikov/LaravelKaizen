<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel</title>

    <!-- Fonts -->

    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
    <link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-addons-4.19.1.min.css">

    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="https://bootstraptema.ru/snippets/element/2020/bootstrap-table.css" rel="stylesheet" />
    <script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
{{--    <script type="text/javascript" src="http://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>--}}
    <script type="text/javascript" src="https://bootstraptema.ru/snippets/element/2020/bootstrap-table.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
        .vertus{
            margin-bottom: 5px;
            background-color: #ccc;
            color: #333;
            padding: 10px;
            text-align: center;
            width: 60%;
            height:2%;

            text-indent: 0px;
            border: 1px solid #888;
            -moz-transition: all 3s ease-out;
            -o-transition: all 3s ease-out;
            -webkit-transition: all 3s ease-out;
            cursor: pointer;}

        #box4:hover {
            background-color: #97CE68;
            color: #000;
            -webkit-transform: scale(2);
            -moz-transform: scale(2);
            -o-transform: scale(2);
        }
        .centered-naz{
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size:100px;
            color: white;
            font-family:"East Sea Dokdo";
        }
        .centered-text{
            position: absolute;
            top: -10%;
            left: 70%;
            width:40%;
            transform: translate(-50%, 130%);
            background: white;
            border-radius: 10px;
            margin-top: -10%;
            padding: 3%;
            opacity:1;
            text-align: center;

        }

        .kz{
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
        h1{
            animation: shadow  2s infinite ease-in-out;
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
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
        /* Navbar animation */
        .navbar {
            background-color: rgba(0, 0, 0, 0.3); }

        .top-nav-collapse {
            background-color: #1C2331; }

        /* Adding color to the Navbar on mobile */
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331; } }

        /* Footer color for sake of consistency with Navbar */
        .page-footer {
            background-color: #1C2331; }

        .formes{
            margin-bottom: 5px;

            padding: 10px;
            text-align: center;
            -moz-transition: all 1s ease-out;
            -o-transition: all 1s ease-out;
            -webkit-transition: all 1s ease-out;
            cursor: pointer;}

        .formes:hover {


            -webkit-transform: scale(1.03);
            -moz-transform: scale(2);
            -o-transform: scale(2);
        }
table{
    width:100%;
}
        table,th,tr,td{
            font-size:100% !important;
            color:black;
        }
        table {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;

            border-radius: 10px;
            border-spacing: 0;
            text-align: center;
        }
        th {
            background: #BCEBDD;
            color: white;
            text-shadow: 0 1px 1px #2D2020;
            padding: 10px 20px;
        }
        th, td {
            border-style: solid;
            border-width: 0 1px 1px 0;
            border-color: white;
        }
        th:first-child, td:first-child {
            text-align: left;
        }
        th:first-child {
            border-top-left-radius: 10px;
        }
        th:last-child {
            border-top-right-radius: 10px;
            border-right: none;
        }
        td {
            padding: 10px 20px;
            background: #F8E391;
        }
        tr:last-child td:first-child {
            border-radius: 0 0 0 10px;
        }
        tr:last-child td:last-child {
            border-radius: 0 0 10px 0;
        }
        tr td:last-child {
            border-right: none;}
        table {width: 100%; border-collapse: separate; border-spacing: 4px;}
        table thead tr {color: #ffffff; font-weight: bold;}
        table thead tr td {border-radius: 4px 4px 0 0; background: #2e82c3;}
        table tbody tr td {border: 1px solid #2e82c3; border-radius: 4px; background: #cbdfef;}
        table tbody tr td:hover {background: #a2c3dd; transition-duration: 0.2s;}
    </style>
</head>
<body id="app-layout">
<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="{{ url('/') }}" style="color: white; text-align: center;opacity:1.0; padding-right: 0%">
            KaiZen
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <ul class="navbar-nav nav-flex-icons grow" style="margin-left:3%;">
                <li class="nav-item">
                    <a href="https://vk.com" class="nav-link" target="_blank">
                        <i class="fab fa-vk"></i>
                    </a>
                </li>
            </ul>

        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse" style=" padding-bottom:1%;">
            <!-- Left Side Of Navbar -->


            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right" >
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class=""><a href="{{ url('/login') }}" style="color:white;">Login</a></li>
                    <li class=""><a href="{{ url('/register') }}" style="color:white;">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
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

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
