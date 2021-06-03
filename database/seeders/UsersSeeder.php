<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'lastname' => 'admin',
            'address' => 'Calle Amapola',
            'city' => 'Garrucha',
            'movil' => '663867369',
            'dni' => '78025774E',
            'role_id' => '1',
            'email' => 'ismaelfloressanchez@gmail.com',
            'password' => Hash::make('Iflores01!'),
            'profile_photo_path' => "profile-photos/corona.png",
        ]);
    }
}
