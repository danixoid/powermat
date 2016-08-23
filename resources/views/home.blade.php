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
        <h2>{!! option('home_title') !!}</h2>
    </header>

    <div class="guys">
        <div class="content">
            <div class="offer">{!! option('home_offer1') !!}</div>
            <h3>{!! option('home_offer2') !!}</h3>
        </div>
    </div>

    <div class="invite">
        <a href="#" class="btn btn-block">{!! option('home_invite') !!}</a>
    </div>

    <div class="about">
        <div class="content">
            {!! option('home_about') !!}

            <div class="watch">
                <p>{!! option('home_watch') !!}</p>
                <button class="btn btn-watch"><i class="fa fa-play"></i></button>
            </div>
        </div>
    </div>

    <div class="mobile">
        <div class="content">
            <h3>{!! option('home_mobile') !!}</h3>
            <div class="download">
                <a href="#"><img src="{!! url('/img/appstore.png') !!}" /></a>
                <a href="#"><img src="{!! url('/img/googleplay.png') !!}" /></a>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
@endsection