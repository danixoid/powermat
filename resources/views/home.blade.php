<?php
/**
 * Created by PhpStorm.
 * User: danixoid
 * Date: 8/11/16
 * Time: 7:38 PM
 */
?>
@extends('app')

@section('title') Главная @endsection

@section('meta')

@endsection

@section('content')
    <header id="main">
        <img src="{!! url('/img/slogan.png') !!}" class="slogan"/>
        <h2>Беспроводные зарядные системы стандарта Qi</h2>
    </header>

    <div class="guys">
        <div class="content">
            <div class="offer">Предоставляем вам возможность стать частью динамичного интересного проекта</div>
            <h3><span>Будущее</span><br />уже наступило!</h3>
        </div>
    </div>

    <div class="invite">
        <a href="#" class="btn btn-block">Становитесь нашим партнером</a>
    </div>

    <div class="about">
        <div class="content">
            <h3>Mobile energy - будущее зарядных устройств</h3>
            <p>Заряжайте без проводов, больше не нужны неудобные кабеля.</p>
            <p>Просто положи свой телефон на зарядный круг для зарядки.</p>

            <div class="watch">
                <p>Смотри на видео<br />как это работает</p>
                <button class="btn btn-watch"><i class="fa fa-play"></i></button>
            </div>
        </div>
    </div>

    <div class="mobile">
        <div class="content">
            <h3>Чтобы начать, скачайте приложение <br /> для вашего смартфона</h3>
            <div class="download">
                <a href="#"><img src="{!! url('/img/appstore.png') !!}" /></a>
                <a href="#"><img src="{!! url('/img/googleplay.png') !!}" /></a>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
@endsection