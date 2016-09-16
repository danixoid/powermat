<?php
/**
 * Created by PhpStorm.
 * User: danixoid
 * Date: 8/23/16
 * Time: 21:45 PM
 */
?>
@extends('app')

@section('title') Настройки @endsection

@section('meta')

@endsection

@section('content')
    <header id="news">
        <h2><strong>&laquo;Mobile Energy&raquo;</strong> - Настройки</h2>
        @if(\Auth::check())
            <a class="create btn btn-primary" href="{!! route('options.create') !!}">Новая настройка</a>
        @endif

    </header>

    <div class="news">
        <div class="content">

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

            <form class="form-horizontal">
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="input-group">
                            <input type="search" value="{!! request('query') !!}" name="query"
                                   class="form-control" placeholder="Введите ключ">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="submit">Найти</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>

            @if($options->count() > 0)
            <table class="table table-bordered">
                @foreach($options as $option)
                <tr>
                    <td>
                        <a href="{!! route('options.edit',$option->id) !!}">{!! $option->key !!}</a>
                    </td>
                    <td>
{{--                        {{ $option->val }}--}}
                        {!!  $option->val !!}
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $options->render() !!}
            @else
                <label class="label-danger">Ничего не найдено</label>
            @endif
        </div>
    </div>


@endsection

@section('javascript')

@endsection