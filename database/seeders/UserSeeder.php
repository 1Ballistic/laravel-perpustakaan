<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Yayang Riski",
            "username" => "yayangrisky",
            "password" => bcrypt('12345')
        ]       
        );

        User::create([
                "name" => "ari irfansyah",
                "username" => "ariirfansyah",
                "password" => bcrypt('12345')
        ]);
        User::create([
            "name" => "gian arci",
            "username" => "gianarci",
            "password" => bcrypt('12345')
    ]);
    User::create([
        "name" => "arsana dewanto",
        "username" => "arsanadewanto",
        "password" => bcrypt('12345')
]);
User::create([
    "name" => "viki riski",
    "username" => "vikiriski",
    "password" => bcrypt('12345')
]);
    }
}
