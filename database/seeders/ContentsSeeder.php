<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => "tanaka",
            'hurigana' => "たなか",
            'email' => 'aa@aa',
            'tel' => "09011112222",
            'message' => "test"
        ];
DB::table('contents')->insert($param); //
    }
}
