<?php
/**
 * Created by PhpStorm.
 * User: danixoid
 * Date: 8/11/16
 * Time: 7:38 PM
 */
?>
@extends('app')

@section('title') Главная @endsection

@section('meta')

@endsection

@section('content')
    <header id="main">
        <img src="{!! url('/img/slogan.png') !!}" class="slogan"/>
        <h2>{!! option('home_title') !!}</h2>
    </header>

    <div class="guys">
        <div class="content">
            <div class="offer">{!! option('home_offer1') !!}</div>
            <h3>{!! option('home_offer2') !!}</h3>
        </div>
    </div>

    <div class="invite">
        <a href="#" class="btn btn-block">{!! option('home_invite') !!}</a>
    </div>

    <div class="about">
        <div class="content">
            {!! option('home_about') !!}

            <div class="watch">
                <p>{!! option('home_watch') !!}</p>
                <button type="button"  data-toggle="modal" data-target="#myModal"
                        class="btn btn-watch" data-theVideo="https://www.youtube.com/embed/MF1FIY9ypro"><i class="fa fa-play"></i></button>

            </div>
        </div>
    </div>

    <div class="mobile">
        <div class="content">
            <h3>{!! option('home_mobile') !!}</h3>
            <div class="download">
                <a href="#"><img src="{!! url('/img/appstore.png') !!}" /></a>
                <a href="#"><img src="{!! url('/img/googleplay.png') !!}" /></a>
            </div>
        </div>
    </div>


@endsection

@section('javascript')


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe width="100%" height="315" src="" frameborder="0" allowfullscreen></iframe>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script type="text/javascript">

        $(function() {
            var trigger = $("body").find('[data-toggle="modal"]');
            trigger.click(function() {
                var theModal = $(this).data( "target" ),
                        videoSRC = $(this).attr( "data-theVideo" ),
                        videoSRCauto = videoSRC+"?autoplay=1" ;
                $(theModal+' iframe').attr('src', videoSRCauto);
                $(theModal+' iframe').attr('height', $(window).height()-100);
                $(theModal).on('hidden.bs.modal', function () {
                    $(theModal+' iframe').attr('src', videoSRC);
                })
            });
        });
    </script>
@endsection