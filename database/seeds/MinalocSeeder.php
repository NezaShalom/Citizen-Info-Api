<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class MinalocSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 100; $i++) {


            $nationIDs = DB::table('citizens')->pluck('id');

            $marriage = $faker->randomElement(['single', 'married', 'widower', 'divorced']);
            $life = $faker->randomElement(['alive', 'not_alive']);
            $criminalstatus = $faker->randomElement(['jailtime', 'no_jailtime']);

            DB::table('minaloc_info')->insert([
                'citizen_id' => $nationIDs[$i],
                'marriage' => $marriage,
                'life' => $life,
                'criminalstatus' => $criminalstatus
            ]);
        }
    }
}
