<?php

use App\Location;
use App\Option;
use App\Page;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AllTablesSeeder::class);
    }
}


class AllTablesSeeder extends Seeder
{
    /**
     *
     */
    protected $lat = 43.228999;
    protected $lng = 76.906483;

    public function run()
    {
        $user = User::create([
            'name' => 'Администратор',
            'email' => "admin@bapps.kz",
            'password' => bcrypt('123456')
        ]);

        for($i = 0; $i < 10; $i++) {
        }

        for($i = 0; $i < 10; $i++) {
            $location = Location::create([
                'name' => 'Точка №' . $i,
                'spots' => rand(2, 10),
                'address' => 'ул.Неизвестная, ' . rand(0, 100) . ' - ' . rand(10, 500),
                'phone' => '+7750000' . $i . rand(100, 999),
                'logo' => '',
                'img' => '',
                'about' => 'Немного истории ни о чем',
                'lat' => $this->randomCoord($this->lat),
                'lng' => $this->randomCoord($this->lng),
            ]);

            Page::create([
                'owner_id' => $user->id,
                'visible' => true,
                'title' => 'Новая точка номер ' . $i,
                'subtitle' => $location->address,
                'body' => 'Звоните ' . $location->phone . '<br /> ' . $location->about,
            ]);
        }


        //home
        Option::create(['key' => 'home_title','val' => 'Беспроводные зарядные системы стандарта Qi']);
        Option::create(['key' => 'home_offer1','val' => 'Предоставляем вам возможность стать частью динамичного интересного проекта']);
        Option::create(['key' => 'home_offer2','val' => '<span>Будущее</span><br />уже наступило!']);
        Option::create(['key' => 'home_invite','val' => 'Становитесь нашим партнером']);
        Option::create(['key' => 'home_about','val' => '<h3>Mobile energy - будущее зарядных устройств</h3>'.
                '<p>Заряжайте без проводов, больше не нужны неудобные кабеля.</p>'.
                '<p>Просто положи свой телефон на зарядный круг для зарядки.</p>']);
        Option::create(['key' => 'home_watch','val' => 'Смотри на видео<br />как это работает']);
        Option::create(['key' => 'home_mobile','val' => 'Чтобы начать, скачайте приложение <br /> для вашего смартфона']);

        //footer
        Option::create(['key' => 'address','val' => 'Адрес: Республика Казахстан, г.Алматы']);
        Option::create(['key' => 'phone','val' => 'Телефон: +7 775 969 3 999 / +7 776 469 3 999']);
        Option::create(['key' => 'email','val' => 'email: mobile_energy@ramlbler.ru']);
        Option::create(['key' => 'vk','val' => 'https://new.vk.com/mobileenergy']);
        Option::create(['key' => 'facebook','val' => 'https://www.facebook.com/Mobilenergy']);
        Option::create(['key' => 'twitter','val' => 'https://twitter.com/Mobile__Energy']);
        Option::create(['key' => 'instagram','val' => 'https://www.instagram.com/mobile.energy/']);

        //products
        Option::create(['key' => 'products_title','val' => 'как работает <strong>&laquo;Mobile Energy&raquo;</strong>']);
        Option::create(['key' => 'products_body','val' => '<p>'.
            '<br />'.
            '<br />'.
            'Беспроводная зарядная система «MOBILE ENERGY»<br />'.
            'представляет собой комплект, состоящий из двух элементов:<br />'.
            'база (зарядная станция) и приемник (ресивер)<br />'.
            '<br />'.
            '<b>БАЗА</b> интегрируется в поверхность интерьера<br />'.
            '(столешницы столов, барные стойки, подлокотники, тумбочки, мебель)<br />'.
            '<br />'.
            '<b>ПРИЕМНИК</b> (ресивер) подключается к телефону<br />'.
            'и размещается на поверхности базы<br />'.
            '<br />'.
            'В системах беспроводной зарядки для передачи<br />'.
            'энергии от источника к приемнику используется явление<br />'.
            'электромагнитной индукции<br />'.
            '<br />'.
            'Система беспроводной зарядки «MOBILE ENERGY»<br />'.
            'использует стандарт Qi.<br />'.
            'Стандарт Qi поддержали более 150 производителей'.
            '</p>']);

        //products
        Option::create(['key' => 'business_title','val' => '<strong>&laquo;Mobile Energy&raquo;</strong> бизнес предложение']);
        Option::create(['key' => 'business_subtitle','val' => 'Получай <strong>прибыль!</strong>']);
        Option::create(['key' => 'business_body','val' =>
            'Вы получаете установленный 1 комплект <br />' .
            'беспроводной зарядной системы под ключ по цене <b>28 000</b><br />' .
            '1 комплект состоит:' .
            '<ul>' .
            '   <li>Зарядная станция</li>' .
            '   <li>2 приемника</li>' .
            '   <li>1 адаптер и кабель</li>' .
            '</ul>' .
            'Бесплатно предоставляется тейбл-тент и рекламные буклеты<br />' .
            '<br />' .
            '<br />' .
            'Как правило, в одно заведение устанавливается МИНИМУМ 3-4 комплекта. <br />' .
            'Рекомендованная стоимость услуги составляет 500 тенге.<br />' .
            'Соответственно, 500 тг. х 30 дней = <b>15 000</b> тенге <br />' .
            'МИНИМАЛЬНО в месяц (с 1 комплекта) <br />' .
            'либо 500 тг. х 4 шт. х 30 дней = <b>60 000</b> тенге <br />' .
            'МИНИМАЛЬНО в месяц (с 4 комплектов) <br />' .
            '<br />' .
            '<br />' .
            'Срок окупаемости 4 комплектов составляет<br />' .
            '1.8 месяца = 112 000 тенге / 60 000 тенге.<br />' .
            'По истечении 1,7 месяца вы зарабатываете<br />' .
            'ЕЖЕМЕСЯЧНО МИНИМУМ по <b>60 000</b> тенге с 4 комплектов<br />' .
            'или с 10 комплектов  - 150 000 тенге в месяц чистого дохода.<br />' .
            '<br />' .
            '<br />' .
            'Соответственно, ВАШ ДОХОД за 1 месяц<br />' .
            'МИНИМУМ составит<br />' .
            '<br />' .

            '<div class="container-fluid">' .
                '<div class="row">' .
                    '<div class="col-xs-4 text-center">' .
                        '<img width="90%" src="/img/box_x4.png" />' .
                        '<div style="margin-top: 10px;"><strong>60 000</strong> тенге</div>' .
                    '</div>' .
                    '<div class="col-xs-4 text-center">' .
                        '<img width="90%" src="/img/box_x10.png" />' .
                        '<div style="margin-top: 10px;"><strong>150 000</strong> тенге</div>' .
                    '</div>' .
                    '<div class="col-xs-4 text-center">' .
                        '<img width="90%" src="/img/box_x20.png" />' .
                        '<div style="margin-top: 10px;"><strong>300 000</strong> тенге</div>' .
                    '</div>' .
                '</div>' .
            '</div>']);
    }


    private function randomCoord($l) {
        $step = 10000;
        $min = ($l - 0.03) * $step; // было 0.1
        $max = ($l + 0.1) * $step;
        return (mt_rand($min, $max)) / $step;
    }
}