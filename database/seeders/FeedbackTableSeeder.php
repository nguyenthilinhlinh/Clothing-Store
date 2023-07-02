<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeedbackTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) {
            $name = $faker->name;
            $email = $faker->email;
            $phone = $faker->phoneNumber;
            $content = $faker->paragraphs(3, true);
            $created_date = $faker->dateTimeBetween('2023-03-02 20:23:38', '2023-09-02 20:23:38');
            DB::table('feedback')->insert([
                'customer_name' => $name,
                'email' => $email,
                'phone' => $phone,
                'content' => $content,
                'created_date' => $created_date,
            ]);
        }
    }
}

