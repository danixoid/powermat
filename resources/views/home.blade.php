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


        <div class="content">
            <ul class="bxslider">

                @foreach(\App\Location::all() as $location)
                    <li><img src="{!! url('/location/' . $location->id . '?photo=logo') !!}"
                             alt="{!! $location->name !!}" title="{!! $location->name !!}"/></li>
                @endforeach
            </ul>
            <a href="#" class="btn btn-block">{!! option('home_invite') !!}</a>
        </div>
    </div>

    <div class="about">
        <div class="content">
            {!! option('home_about') !!}

            <div class="watch">
                <p>{!! option('home_watch') !!}</p>
                <button type="button"  data-toggle="modal" data-target="#video"
                        class="btn btn-watch" data-theVideo="{!! option('video') !!}"><i class="fa fa-play"></i></button>

            </div>
        </div>
    </div>

    <div class="mobile">
        <div class="content">
            <h3>{!! option('home_mobile') !!}</h3>
            <div class="download">
                <a href="#"><img src="{!! url('/img/appstore.png') !!}" /></a>
                <a href="https://play.google.com/store/apps/details?id=kz.bapps.mobileenergy"><img src="{!! url('/img/googleplay.png') !!}" /></a>
            </div>
        </div>
    </div>


@endsection

@section('meta')

    <link href="{{ asset('/js/jquery.bxslider.css') }}" rel="stylesheet">
@endsection


@section('javascript')


    <!-- Modal -->
    <div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="videoLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe width="100%" height="315" src="" frameborder="0" allowfullscreen></iframe>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script src="{!! asset('/js/jquery.bxslider.min.js') !!}"></script>
    <script src="{!! asset('/js/plugins/jquery.easing.1.3.js') !!}"></script>
    <script src="{!! asset('/js/plugins/jquery.fitvids.js') !!}"></script>
    <script type="text/javascript">

        $(document).ready(function(){

            $('.bxslider').bxSlider({
                minSlides: 6,
                maxSlides: 6,
                slideWidth: 110,
                slideMargin: 5,
                ticker: true,
                speed: 24000
            });


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