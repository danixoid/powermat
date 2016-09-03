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
            <span class="span-top">{!! option('product_connect_top') !!}</span>
            <span class="span-bottom">{!! option('product_connect_bottom') !!}</span>
            <img src="{!! url('/img/connecting_new.png') !!}" />
        </div>
    </div>

    <div class="charging">
        <div class="content">
            <img class="hidden-xs" src="{!! url('/img/charging.png') !!}" />
            <img class="visible-xs" src="{!! url('/img/charging_new.png') !!}" />
            {!! option('products_body') !!}
        </div>
        <div style="clear: both;"></div>
    </div>

@endsection

@section('javascript')

@endsection