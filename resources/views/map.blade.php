<?php
/**
 * Created by PhpStorm.
 * User: danixoid
 * Date: 8/15/16
 * Time: 3:55 PM
 */?>

@extends('app')

@section('title') Карта @endsection

@section('meta')
@endsection

@section('content')
    <header id="map">
        <h2>Карта <strong>&laquo;Mobile Energy&raquo;</strong></h2>
    </header>
    <div id="ymap" class="map"></div>

@endsection

@section('javascript')

    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <script type="text/javascript">
        ymaps.ready(function () {

            var myMap = new ymaps.Map('ymap', {
                        center: [43.228999, 76.906483],
                        zoom: 13
                    }, {
                        searchControlProvider: 'yandex#search'
                    }),
                    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                        hintContent: 'Собственный значок метки',
                        balloonContent: 'Это красивая метка'
                    }, {
                        // Опции.
                        // Необходимо указать данный тип макета.
                        iconLayout: 'default#image',
                        // Своё изображение иконки метки.
                        iconImageHref: '{!! url('/img/logo.png') !!}',
                        // Размеры метки.
                        iconImageSize: [42, 42],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).
                        iconImageOffset: [-3, -42]
                    });

            myMap.geoObjects.add(myPlacemark);
        });
    </script>
@endsection
