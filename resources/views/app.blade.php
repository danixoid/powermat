<?php
/**
 * Created by PhpStorm.
 * User: danixoid
 * Date: 8/11/16
 * Time: 7:14 PM
 */

?><!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">

    <title>&laquo;Mobile Energy&raquo; - @yield('title')</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the pages via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    @yield('meta')

</head>


<body>


<div class="wrapper">

    <nav class="navbar navbar-main navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li {!! (strpos(Request::url(),"/products") !== false ? 'class="active"' : '') !!}><a href="{!! url('/products') !!}">Продукты</a></li>
                <li {!! (strpos(Request::url(),"/business") !== false ? 'class="active"' : '') !!}><a href="{!! url('/business') !!}">Для бизнеса</a></li>
                <li {!! (strpos(Request::url(),"/news") !== false ? 'class="active"' : '') !!}><a href="{!! url('/news') !!}">Новости</a></li>
                <li {!! (strpos(Request::url(),"#business") !== false ? 'class="active"' : '') !!}><a href="#contacts">Контакты</a></li>
            </ul>
        </div>
    </nav>

    <a href="{!! url('/') !!}">
        <img class="logo" src="{!! url('/img/logo_home.png') !!}" />
    </a>
    @yield('content')

    <footer id="contacts">
        <div  class="content">
            <table>
                <tr>
                    <td width="40px"><i class="fa fa-map-marker"></i></td><td>Адрес: Республика Казахстан, г.Алматы</td>
                </tr>
                <tr>
                    <td><i class="fa fa-phone"></i></td><td>Телефон: +7 775 969 3 999 / +7 777 469 3 999</td>
                </tr>
                <tr>
                    <td><i class="fa fa-at"></i></td><td>email: mobile_energy@ramlbler.ru</td>
                </tr>
            </table>

            <div class="social">
                <a target="_blank" href="https://new.vk.com/mobileenergy"><i class="fa fa-square-o fa-vk"></i></a>
                <a target="_blank" href="https://www.facebook.com/Mobilenergy"><i class="fa fa-facebook-square"></i></a>
                <a target="_blank" href="https://twitter.com/Mobile__Energy"><i class="fa fa-twitter-square"></i></a>
                <a target="_blank" href="https://www.instagram.com/mobile.energy/"><i class="fa fa-instagram"></i></a>
            </div>
        </div>


        <div class="year">
            2016
        </div>
    </footer>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

@yield('javascript')

</body>