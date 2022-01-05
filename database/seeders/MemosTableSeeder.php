<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('ja_JP');
        for ($i = 0; $i < 10; $i++){
            $param = [
                'title' => $faker->realText(10),
                'content' => $faker->realText(20),
                'created_at' => now(),
                'updated_at' => now(),
            ];
            DB::table('memos')->insert($param);
        }
    }
}
