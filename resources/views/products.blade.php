<?php
/**
 * Created by PhpStorm.
 * User: danixoid
 * Date: 8/11/16
 * Time: 7:38 PM
 */
?>
@extends('app')

@section('title') Продукты @endsection

@section('meta')

@endsection

@section('content')
    <header id="products">
        <h2>{!! option('products_title') !!}</h2>
        <img class="mob" src="{!! url('/img/dood_mobile.png') !!}">
        <img class="charger" src="{!! url('/img/dood_charger.png') !!}">
    </header>

    <div class="connecting">
        <div class="content">
            <img src="{!! url('/img/connecting.png') !!}" />
        </div>
    </div>

    <div class="charging">
        <div class="content">
            <img src="{!! url('/img/charging.png') !!}" />
            {!! option('products_body') !!}
        </div>
        <div style="clear: both;"></div>
    </div>

@endsection

@section('javascript')

@endsection