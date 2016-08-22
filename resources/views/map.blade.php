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
        <h2><strong>Карта</strong> установленных зарядных устройств</h2>
    </header>
    <div id="ymap" class="map">
        <div class="balloon hide">
            <a href="javascript:$('.balloon').addClass('hide')"><i class="fa fa-remove fa-2x"></i></a>
            <img src="{!! url('/img/point_1.jpg') !!}" />
            <p id="name"><strong></strong></p>
            <p id="about">about</p>
            <p id="address">about</p>
            <p id="spots">Количество зарядных устройств: <strong></strong></p>
        </div>
    </div>

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
                    });

            $.ajax({
                'url' : '{!! route('location.index') !!}',
                'method' : 'get',
                'dataType' : 'JSON',
                'data' : [],
                'success' : function(points) {
                    points.forEach(function(point,i,arr) {

                        var marker = new ymaps.Placemark([point.lat, point.lng], {
//                            balloonContent: '<strong>' + point.name + '</strong> <hr />' + point.about,
                            hintContent: points[i].name
                        }, {
                            iconLayout: 'default#image',
                            iconImageHref: '{!! url('/img/logo.png') !!}',
                            iconImageSize: [42, 42],
                            iconImageOffset: [-3, -42],
                        });

                        marker.events.add('click', function (e) {
                            $(".balloon img").attr('src',(point.logo != '' ? point.logo
                                    : '{!! url('/img/point_1.jpg') !!}'));
                            $(".balloon > p#name > strong").html(point.name);
                            $(".balloon > p#about").html(point.about);
                            $(".balloon > p#address").html(point.address);
                            $(".balloon > p#spots > strong").text(point.spots);
                            $(".balloon").removeClass("hide");
                        });

                        myMap.geoObjects.add(marker);
                    });
                },
                'error' : function($data) {
                    alert(JSON.stringify($data));
                },
                'complete' : function (data) {
                    //
                }
            });


        });
    </script>
@endsection
