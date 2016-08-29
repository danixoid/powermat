<?php
/**
 * Created by PhpStorm.
 * User: danixoid
 * Date: 8/21/16
 * Time: 6:17 PM
 */?>
@extends('app')

@section('title') Локации:правка @endsection

@section('meta')

@endsection

@section('content')

    <header id="map">
        <h2><strong>&laquo;Mobile Energy&raquo;</strong> - Редакирование локации</h2>
    </header>

    <div class="news">
        <div class="content">
            <div class="container">

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

                <form class="form form-horizontal" method="POST" enctype="multipart/form-data"
                      action="{!! route('location.update',$location->id) !!}">

                    {!! csrf_field() !!}
                    {!! method_field("PUT") !!}

                    <input type="hidden" name="lat" id="lat" value="{!! $location->lat !!}" />
                    <input type="hidden" name="lng" id="lng" value="{!! $location->lng !!}" />

                    <div class="form-group">
                        <label class="col-md-3 control-label">Наименование</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" value="{!! $location->name !!}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Количество зарядных точек</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" name="spots" value="{!! $location->spots !!}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Адрес</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="address" value="{!! $location->address !!}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Телефон</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="phone" value="{!! $location->phone !!}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Лого</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="logo_file" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Картинка</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="img_file" />
{{--                            <img src="{!! url('/location/') !!}">--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Описание</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="about">{!! $location->about !!}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3 col-md-offset-3">
                            <button class="btn btn-danger">Сохранить</button>
                            <a href="{!! \url('/location') !!}" class="btn btn-warning">Отмена</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="ymap" class="map">
    </div>

@endsection

@section('javascript')

    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <script type="text/javascript">

        ymaps.ready(function () {

            var center = [$('[name=lat]').val(), $('[name=lng]').val()];
            var myMap = new ymaps.Map('ymap', {
                center: center,
                zoom: 13
            }, {
                searchControlProvider: 'yandex#search'
            });

            var marker = new ymaps.Placemark(center, {}, {
                iconLayout: 'default#image',
                iconImageHref: '{!! url('/img/marker.png') !!}',
                iconImageSize: [28, 42],
                iconImageOffset: [-3, -42],
                draggable: true
            });

            marker.events.add('dragend', function (e) {
                changeCoords(e);
            });

            myMap.geoObjects.add(marker);

            myMap.events.add('click', function (e) {
                changeCoords(e);
            });

            var changeCoords = function(e) {
                coords = e.get('coords');
                marker.geometry.setCoordinates(coords);
                $("#lat").val(marker.geometry.getCoordinates()[0]);
                $("#lng").val(marker.geometry.getCoordinates()[1]);
            };


            $("#lat").val(marker.geometry.getCoordinates()[0]);
            $("#lng").val(marker.geometry.getCoordinates()[1]);
        });

    </script>
@endsection