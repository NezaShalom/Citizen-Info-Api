<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RecoverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 100; $i++) {


            $nationIDs = DB::table('citizens')->pluck('id');
            $reportstatus = $faker->randomElement(['yes', 'no']);

            DB::table('recovery_info')->insert([
                'citizen_id' => $nationIDs[$i],
                'IDreportedlost' => $reportstatus
            ]);
        }
    }
}
