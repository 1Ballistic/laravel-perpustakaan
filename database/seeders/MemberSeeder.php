<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            "unique_num" => "560",
            "name" => "Yayang Risky",
            "phone" => "089898989877",
            "address" => "afdadsfdasfad",
        ]       
        );
    }
}
