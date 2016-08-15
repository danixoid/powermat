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
        <h2><strong>&laquo;Mobile Energy&raquo;</strong> бизнес предложение</h2>
    </header>

    <div class="guy">
        <div class="content">
            <h3>Получай <strong>прибыль!</strong></h3>
            <div>
                Вы получаете установленный 1 комплект <br />
                беспроводной зарядной системы под ключ по цене <b>28 000</b><br />
                1 комплект состоит:

                <ul>
                    <li>Зарядная станция</li>
                    <li>2 приемника</li>
                    <li>1 адаптер и кабель</li>
                </ul>
                Бесплатно предоставляется тейбл-тент и рекламные буклеты
                <br />
                <br />
                <br />
                Как правило, в одно заведение устанавливается МИНИМУМ 3-4 комплекта. <br />
                Рекомендованная стоимость услуги составляет 500 тенге.<br />
                Соответственно, 500 тг. х 30 дней = <b>15 000</b> тенге <br />
                МИНИМАЛЬНО в месяц (с 1 комплекта) <br />
                либо 500 тг. х 4 шт. х 30 дней = <b>60 000</b> тенге <br />
                МИНИМАЛЬНО в месяц (с 4 комплектов) <br />
                <br />
                <br />
                Срок окупаемости 4 комплектов составляет<br />
                1.8 месяца = 112 000 тенге / 60 000 тенге.<br />
                По истечении 1,7 месяца вы зарабатываете<br />
                ЕЖЕМЕСЯЧНО МИНИМУМ по <b>60 000</b> тенге с 4 комплектов<br />
                или с 10 комплектов  - 150 000 тенге в месяц чистого дохода.<br />
                <br />
                <br />
                Соответственно, ВАШ ДОХОД за 1 месяц<br />
                МИНИМУМ составит<br />
                <br />

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <img width="90%" src="{!! url('/img/box_x4.png') !!}" />
                            <div style="margin-top: 10px;"><strong>60 000</strong> тенге</div>
                        </div>
                        <div class="col-xs-4 text-center">
                            <img width="90%" src="{!! url('/img/box_x10.png') !!}" />
                            <div style="margin-top: 10px;"><strong>150 000</strong> тенге</div>
                        </div>
                        <div class="col-xs-4 text-center">
                            <img width="90%" src="{!! url('/img/box_x20.png') !!}" />
                            <div style="margin-top: 10px;"><strong>300 000</strong> тенге</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

@section('javascript')

@endsection