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
    <div class="header">
        <img src="{!! url('/img/slogan.png') !!}" class="slogan"/>
        <img src="{!! url('/img/marker.png') !!}" class="marker"/>
        <h2>Беспроводные зарядные системы стандарта Qi</h2>
    </div>

    <div class="guys">
        <div class="offer">Предоставляем вам возможность стать частью динамичного интересного проекта</div>
        <h3><span>Будущее</span><br />уже наступило!</h3>
    </div>

    <div class="invite">
        <a href="#" class="btn btn-block">Становитесь нашим партнером</a>
    </div>

    <div class="about">
        <h3>Mobile energy - будущее зарядных устройств</h3>
        <p>Заряжайте без проводов, больше не нужны неудобные кабеля.</p>
        <p>Просто положи свой телефон на зарядный круг для зарядки.</p>
    </div>
@endsection

@section('javascript')

@endsection