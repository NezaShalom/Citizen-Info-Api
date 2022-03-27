<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;

class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 101; $i++) {

            $year = rand(1950, 2006);
            $month = rand(1, 12);
            $day = rand(1, 28);

            $date = Carbon::create($year, $month, $day);
            $gender = $faker->randomElement(['male', 'female']);

            DB::table('citizens')->insert([
                'nid' => rand(1000000000000000, 9999999999999999),
                'birthcertificateid' => rand(1000000000, 9999999999),
                'name' => $faker->name,
                'dob' => $date->format('Y-m-d'),
                'gender' => $gender,
            ]);
        }
    }
}
