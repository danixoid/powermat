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

    @if(count($pages) > 0)
        @foreach($pages as $page)
            <div class="news">
                <div class="content">
                    <h3>{!! $page->title !!}</h3>
                    <p>{!! $page->subtitle !!}</p>
                    <div class="well">{!! $page->body !!}</div>
                    @if(\Auth::check())
                        <a href="{!! route('news.edit',$page->id) !!}">Редактировать</a>
                        <p><a href="javascript:deletePage({!! $page->id !!});" class="delete">Удалить</a></p>
                    @endif
                </div>
            </div>
        @endforeach
        <div class="paginate text-center">{!! $pages->render() !!}</div>
    @else
        <div class="alert alert-danger">Новостей не найдено!</div>
    @endif


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

            $('.well img').click(function(e) {

                var src = $(this).attr('src');

                $('#exampleModal').modal('toggle');
                $('#exampleModal .modal-body img').attr('src',src);
            });
        });

        var deletePage = function (id) {

            if(!confirm('Вы действительно хотите удалить запись номер ' + id + '?')) {
                return;
            }

            $.ajax({
                'url': '{!! url('news') !!}/' + id,
                'method': 'delete',
                'dataType': 'JSON',
                'success': function (response) {
                    alert(response.message);
                    location.href = '{!! url('/news') !!}';
                }
            });
        }

    </script>
@endsection