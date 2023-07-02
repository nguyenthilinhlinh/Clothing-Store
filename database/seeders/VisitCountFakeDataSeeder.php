<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VisitCountFakeDataSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            DB::table('visit_count')->insert([
                'ip' => $faker->ipv4,
                'sessionkey' => $faker->regexify('[A-Za-z0-9]{40}'),
                'created_at' => $faker->dateTimeBetween('2023-03-15', '2023-03-07')->format('Y-m-d H:i:s')
            ]);
        }
    }
}

