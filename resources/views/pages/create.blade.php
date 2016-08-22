<?php
/**
 * Created by PhpStorm.
 * User: danixoid
 * Date: 8/21/16
 * Time: 6:17 PM
 */?>
@extends('app')

@section('title') Новости:создать @endsection

@section('meta')

@endsection

@section('content')

    <header id="news">
        <h2><strong>&laquo;Mobile Energy&raquo;</strong> - Создание новости</h2>
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

                <form class="form form-horizontal" method="POST" action="{!! route('news.store') !!}">

                    {!! csrf_field() !!}


                    <input type="hidden" class="form-control" name="visible" value="0" />

                    <div class="form-group">
                        <label class="col-md-3 control-label">Название</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="title" value="{!! old('title') !!}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Слоган, объявление, сабтитл</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="subtitle" value="{!! old('subtitle') !!}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <div  class="checkbox">
                                <label><input type="checkbox" name="visible" value="1"
                                              @if(old('visible')) checked @endif/> Видимость</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Сообщение</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="body">{!! old('body') !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 col-md-offset-3">
                            <button class="btn btn-danger">Сохранить</button>
                            <a href="{!! \url('/news') !!}" class="btn btn-warning">Отмена</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
@endsection