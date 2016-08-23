<?php
/**
 * Created by PhpStorm.
 * User: danixoid
 * Date: 8/11/16
 * Time: 7:38 PM
 */
?>
@extends('app')

@section('title') Для бизнеса @endsection

@section('meta')

@endsection

@section('content')
    <header id="business">
        <h2>{!! option('business_title') !!}</h2>
    </header>

    <div class="guy">
        <div class="content">
            <h3>{!! option('business_subtitle') !!}</h3>
            <div>
                {!! option('business_body') !!}
            </div>

        </div>
    </div>


@endsection

@section('javascript')

@endsection