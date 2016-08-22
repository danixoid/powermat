<?php

use App\Location;
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

    }


    private function randomCoord($l) {
        $step = 10000;
        $min = ($l - 0.03) * $step; // было 0.1
        $max = ($l + 0.1) * $step;
        return (mt_rand($min, $max)) / $step;
    }
}