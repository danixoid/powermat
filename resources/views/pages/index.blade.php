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
    </header>

    @if(count($pages) > 0)
        @foreach($pages as $page)
            <div class="news">
                <div class="content">

                </div>
            </div>
        @endforeach
    @else
        <div class="alert alert-danger">Новостей не найдено!</div>
    @endif

@endsection