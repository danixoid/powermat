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
        <h2>как работает <strong>&laquo;Mobile Energy&raquo;</strong></h2>
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
            <p>
                <br />
                <br />
                Беспроводная зарядная система «MOBILE ENERGY»<br />
                представляет собой комплект, состоящий из двух элементов:<br />
                база (зарядная станция) и приемник (ресивер)<br />
                <br />
                <b>БАЗА</b> интегрируется в поверхность интерьера<br />
                (столешницы столов, барные стойки, подлокотники, тумбочки, мебель)<br />
                <br />
                <b>ПРИЕМНИК</b> (ресивер) подключается к телефону<br />
                и размещается на поверхности базы<br />
                <br />
                В системах беспроводной зарядки для передачи<br />
                энергии от источника к приемнику используется явление<br />
                электромагнитной индукции<br />
                <br />
                Система беспроводной зарядки «MOBILE ENERGY»<br />
                использует стандарт Qi.<br />
                Стандарт Qi поддержали более 150 производителей

            </p>
        </div>
        <div style="clear: both;"></div>
    </div>

@endsection

@section('javascript')

@endsection