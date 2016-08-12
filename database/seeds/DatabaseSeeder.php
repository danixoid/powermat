<?php

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
//         $this->call(UsersTableSeeder::class);
         $this->call(PagesTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
    /**
     *
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        User::create([
            'name' => 'Администратор',
            'email' => "danixoid@bapps.kz",
            'password' => bcrypt('123456')
        ]);
    }
}


class PagesTableSeeder extends Seeder
{
    /**
     *
     */
    public function run()
    {
        //
//        User::create([
//            'name' => 'Администратор',
//            'email' => "danixoid@bapps.kz",
//            'password' => bcrypt('123456')
//        ]);
    }
}