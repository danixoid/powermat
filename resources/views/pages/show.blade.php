<?php
/**
 * Created by PhpStorm.
 * User: danixoid
 * Date: 8/15/16
 * Time: 1:54 PM
 */
?>
@extends('app')

@section('title') Новости @endsection

@section('meta')

@endsection

@section('content')

    <header id="news">
        <h2><strong>&laquo;Mobile Energy&raquo;</strong> - что нового...</h2>

        @if(\Auth::check())
            <a class="create btn btn-primary" href="{!! route('news.create') !!}">Новая запись</a>
        @endif

    </header>

    <div class="news">
        <div class="content">
            <h3>{!! $page->title !!}</h3>
            <p>{!! $page->subtitle !!}</p>
            <div class="well">{!! $page->body !!}</div>
            @if(\Auth::check())
                <a href="{!! route('news.edit',$page->id) !!}">Редактировать</a>
            @endif
        </div>
    </div>

@endsection