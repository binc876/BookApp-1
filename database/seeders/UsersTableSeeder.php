<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $tami = User::create(array(
            'name'         => 'Tami',
            'email'         => 'tami24tami@gmail.com',
            'password' =>  'testing',
            'phone_number' => '+260966567855',
            'role' => 'author'
        ));
        $mutaminwa = User::create(array(
            'name'         => 'Mutaminwa',
            'email'         => 'mutaminwac@gmail.com',
            'password' =>  'password',
            'phone_number' => '+260966567855',
            'role' => 'reader'
        ));
        User::create(array(
            'name'         => Str::random(10),
            'email'         => Str::random(10).'@gmail.com',
            'password' =>  'password',
            'phone_number' => Str::random(10),
            'role' => 'reader'
        ));
    }
}
