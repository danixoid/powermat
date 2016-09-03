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
        <div class="col-xs-12">
            <div class="bx-wrapper" style="max-width: 1550px;">
                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 69px;"><ul class="bxslider" style="width: 7215%; position: relative; transition-duration: 30s; transform: translate3d(-619.938px, 0px, 0px); transition-timing-function: linear;">

                        <li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;"><img src="//images.contentful.com/np1rm4s03ztm/1U8ALjCUUkayS8Ysc6WWwU/869278a6517b21309a2cdef24f8dc79b/indiana_logo.png" alt="Indiana State University" title="Indiana State University"></li>

                        <li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;"><img src="//images.contentful.com/np1rm4s03ztm/5teV6MOBdSYOOk8ugmq0Gm/96446fc81e6cabf70748d9d1867d4e94/StanfordCourt.png" alt="standford-court" title="standford-court"></li>

                        <li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;"><img src="//images.contentful.com/np1rm4s03ztm/1Jur038EgUeIwYIoMCYsk4/74e5d7fba61219c6d4d036fefde7effd/gotan_l.png" alt="Café Gotan" title="Café Gotan"></li>

                        <li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;"><img src="//images.contentful.com/np1rm4s03ztm/qecosjebxmC8QsAsCAugQ/f12edd77458f4bec35fa4345226900d7/logo_black.png" alt="SETTLEMENT CO" title="SETTLEMENT CO"></li>

                        <li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;"><img src="//images.contentful.com/np1rm4s03ztm/6O7v1ajrwc6Ca8Gi2KS28E/65ee0656a5075abb0ad9107ed06a99f2/fsu.png" alt="FSU" title="FSU"></li>

                        <li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;"><img src="//images.contentful.com/np1rm4s03ztm/2lXnf3LmoIm6awKs0wQMIe/5b891dd98a14715d69281a17b0a1c1bb/CSUSB.png" alt="CSUSB" title="CSUSB"></li>

                        <li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;"><img src="//images.contentful.com/np1rm4s03ztm/7kRvxflrsAcMKuIs6Uqiuu/98d2c20da0f2a5631d17a694e2bcb21d/Powermat-starbucks-logo-oct6-01.png" alt="STARBUCKS" title="STARBUCKS"></li>

                        <li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;" class="bx-clone"><img src="//images.contentful.com/np1rm4s03ztm/1U8ALjCUUkayS8Ysc6WWwU/869278a6517b21309a2cdef24f8dc79b/indiana_logo.png" alt="Indiana State University" title="Indiana State University"></li><li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;" class="bx-clone"><img src="//images.contentful.com/np1rm4s03ztm/5teV6MOBdSYOOk8ugmq0Gm/96446fc81e6cabf70748d9d1867d4e94/StanfordCourt.png" alt="standford-court" title="standford-court"></li><li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;" class="bx-clone"><img src="//images.contentful.com/np1rm4s03ztm/1Jur038EgUeIwYIoMCYsk4/74e5d7fba61219c6d4d036fefde7effd/gotan_l.png" alt="Café Gotan" title="Café Gotan"></li><li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;" class="bx-clone"><img src="//images.contentful.com/np1rm4s03ztm/qecosjebxmC8QsAsCAugQ/f12edd77458f4bec35fa4345226900d7/logo_black.png" alt="SETTLEMENT CO" title="SETTLEMENT CO"></li><li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;" class="bx-clone"><img src="//images.contentful.com/np1rm4s03ztm/6O7v1ajrwc6Ca8Gi2KS28E/65ee0656a5075abb0ad9107ed06a99f2/fsu.png" alt="FSU" title="FSU"></li><li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;" class="bx-clone"><img src="//images.contentful.com/np1rm4s03ztm/2lXnf3LmoIm6awKs0wQMIe/5b891dd98a14715d69281a17b0a1c1bb/CSUSB.png" alt="CSUSB" title="CSUSB"></li><li style="float: left; list-style: none; position: relative; width: 63.5714px; margin-right: 25px;" class="bx-clone"><img src="//images.contentful.com/np1rm4s03ztm/7kRvxflrsAcMKuIs6Uqiuu/98d2c20da0f2a5631d17a694e2bcb21d/Powermat-starbucks-logo-oct6-01.png" alt="STARBUCKS" title="STARBUCKS"></li></ul></div></div>
        </div>
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

        $(document).ready(function(){

            $('.bxslider').bxSlider();


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