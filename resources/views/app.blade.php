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

    <meta name="description" content="{!! option('meta_desc') !!}">
    <meta name="author" content="Saumbayev Daniyar @danixoid">
    <meta name="keywords" content="{!! option('meta_keywords') !!}">

    <meta name='yandex-verification' content='{!! option('yandex-verification') !!}' />
    <meta name="google-site-verification" content="{!! option('google-site-verification') !!}" />

    <title>{!! option('meta_title') !!} - @yield('title')</title>

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
                <li {!! (strpos(request()->url(),"/products") !== false ? 'class="active"' : '') !!}><a href="{!! url('/products') !!}">Продукты</a></li>
                <li {!! (strpos(request()->url(),"/business") !== false ? 'class="active"' : '') !!}><a href="{!! url('/business') !!}">Для бизнеса</a></li>
                <li {!! (strpos(request()->url(),"/news") !== false ? 'class="active"' : '') !!}><a href="{!! url('/news') !!}">Новости</a></li>
                <li {!! (strpos(request()->url(),"#contacts") !== false ? 'class="active"' : '') !!}><a href="#contacts">Контакты</a></li>
                @if(\Auth::check())
                    <li {!! (strpos(request()->url(),"/options") !== false ? 'class="active"' : '') !!}><a href="{!! url('/options') !!}">Настройки</a></li>
                    <li><a href="{!! url('/auth/logout') !!}">Выход</a></li>
                @endif
            </ul>
        </div>
    </nav>

    @if(strpos(request()->url(),"/location") === false)
        <a href="{!! url('/location') !!}"><img class="marker" src="{!! url('/img/marker.png') !!}"/></a>
    @else
        <a href="{!! url('/location') !!}"><img class="marker-slide" src="{!! url('/img/marker.png') !!}"/></a>
    @endif

    <img class="corner" src="{!! url('/img/corner.png') !!}" />
    <a href="{!! url('/') !!}">
        <img class="logo" src="{!! url('/img/logo_home.png') !!}" />
    </a>
    @yield('content')

    <footer id="contacts">
        <div  class="content">
            <table>
                <tr>
                    <td width="40px"><i class="fa fa-map-marker"></i></td><td>{!! option('address') !!}</td>
                </tr>
                <tr>
                    <td><i class="fa fa-phone"></i></td><td>{!! option('phone') !!}</td>
                </tr>
                <tr>
                    <td><i class="fa fa-at"></i></td><td>{!! option('email') !!}</td>
                </tr>
            </table>

            <div class="social">
                <a target="_blank" href="{!! option('vk') !!}"><i class="fa fa-square-o fa-vk"></i></a>
                <a target="_blank" href="{!! option('facebook') !!}"><i class="fa fa-facebook-square"></i></a>
                <a target="_blank" href="{!! option('twitter') !!}"><i class="fa fa-twitter-square"></i></a>
                <a target="_blank" href="{!! option('instagram') !!}"><i class="fa fa-instagram"></i></a>
            </div>
        </div>


        <div class="year">
            2016
        </div>
    </footer>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">

    // = Вешаем событие прокрутки к нужному месту
    //	 на все ссылки якорь которых начинается на #
    $('nav li a[href^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();

        var target = this.hash,
                $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });


    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });

</script>
@yield('javascript')

</body>