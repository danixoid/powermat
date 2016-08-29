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

        @if(\Auth::check())
            <a class="create btn btn-primary" href="{!! route('location.create') !!}">Новая точка</a>
        @endif

    </header>

    @if(Session::has('warning'))
        <div class="alert alert-warning">
            <h3>{{ Session::get('warning') }}</h3>
        </div>
    @endif

    @if(Session::has('message'))
        <div class="alert alert-success">
            <h3>{{ Session::get('message') }}</h3>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Внимание!</strong> Обнаружены ошибки при заполнении полей.<br><br>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div id="ymap" class="map">
        <div class="balloon hide">
            <a href="javascript:$('.balloon').addClass('hide')"><i class="fa fa-remove fa-2x"></i></a>
            <img src="{!! url('/location') !!}" />
            <p id="name"><strong></strong></p>
            <p id="about">about</p>
            <p id="address">about</p>
            <p id="spots">Количество зарядных устройств: <strong></strong></p>
            <p id="distance">Дистанция: <strong></strong></p>

            @if(\Auth::check())
                <p><a href="/" class="edit">Редактировать точку</a></p>
            @endif

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

            myMap.geoObjects.add(new ymaps.Placemark([43.228999, 76.906483], {
                hintContent: 'Моё местоположение'
            }, {
                iconLayout: 'default#image',
                iconImageHref: '{!! url('/img/marker.png') !!}',
                iconImageSize: [32, 42],
                iconImageOffset: [-3, -42],
            }));

            $.ajax({
                'url' : '{!! route('location.index') !!}',
                'method' : 'get',
                'dataType' : 'JSON',
                'data' : {'lat' : 43.228999, 'lng' : 76.906483},
                'success' : function(points) {
                    points.forEach(function(point,i,arr) {

                        var marker = new ymaps.Placemark([point.lat, point.lng], {
                            balloonContent: '<img width="50px" src="{!! url('/location') !!}/' + point.id + '?photo=logo" />',
                            hintContent: points[i].name
                        }, {
                            iconLayout: 'default#image',
                            iconImageHref: '{!! url('/img/logo.png') !!}',
                            iconImageSize: [42, 42],
                            iconImageOffset: [-3, -42],
                        });

                        marker.events.add('click', function (e) {
                            $(".balloon img").attr('src',
                                    '{!! url('/location') !!}/' + point.id + '?photo=img');
                            $(".balloon > p#name > strong").html(point.name);
                            $(".balloon > p#about").html(point.about);
                            $(".balloon > p#address").html(point.address);
                            $(".balloon > p#spots > strong").text(point.spots);
                            $(".balloon > p#distance > strong").text(point.distance);
                            $(".balloon > p > a.edit").attr('href','{!! url('/location') !!}/' + point.id + '/edit');
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
