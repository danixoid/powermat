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

    <style>
        #exampleModal .modal-body img {
            width: 100%;
        }
    </style>
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
            <div class="wells">{!! $page->body !!}</div>
            @if(\Auth::check())
                <a href="{!! route('news.edit',$page->id) !!}">Редактировать</a>
            @endif
        </div>
    </div>

@endsection

@section('javascript')

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <img />
                </div>
            </div>
        </div>
    </div>

    <script language="javascript">

        $(function(){

            $('.wells img').click(function(e) {

                var src = $(this).attr('src');

                $('#exampleModal').modal('toggle');
                $('#exampleModal .modal-body img').attr('src',src);
            });
        });


    </script>
@endsection