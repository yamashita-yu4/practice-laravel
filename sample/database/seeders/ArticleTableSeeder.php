<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->delete();

        $faker = \Faker\Factory::create('ja_JP');

        $data = [
            [
                'title' => $faker->title,
                'body' => $faker->realText,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('articles')->insert($data);
    }
}
