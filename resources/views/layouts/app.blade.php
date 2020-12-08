<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="https://bootstraptema.ru/snippets/element/2020/bootstrap-table.css" rel="stylesheet" />
    <script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
{{--    <script type="text/javascript" src="http://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>--}}
    <script type="text/javascript" src="https://bootstraptema.ru/snippets/element/2020/bootstrap-table.js"></script>



{{----}}



{{--    --}}


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


        @media only screen and (max-width : 320px) {

        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top fade" style="background-color: #E67E22 !important; color: white !important;">
    <div class="container" style="color:white !important;">
        <div class="navbar-header fade threed" style="padding:0 1% 0 1%">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}" style="color: white; text-align: center;opacity:1.0; padding-right: 0%">
                Laravel
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse" style=" padding-bottom:1%;">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav fade threed" style=" margin-left:10%">
                <li><a href="{{ url('/home') }}"  style="color:white;">Home</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right" >
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="fade threed"><a href="{{ url('/login') }}" style="color:white;">Login</a></li>
                    <li class="fade threed"><a href="{{ url('/register') }}" style="color:white;">Register</a></li>
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

@yield('content')

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
