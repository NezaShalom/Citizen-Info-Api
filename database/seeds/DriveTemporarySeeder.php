<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DriveTemporarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 50; $i++) {

            $nationIDs = DB::table('citizens')->pluck('id');
            $reportstatus = $faker->randomElement(['yes', 'no']);

            DB::table('drive_temporary_permit')->insert([
                'citizen_id' => $nationIDs[$i],
                'drivepermit_id' => rand(1000000000, 9999999999),
                'drivepermit_reportedstatus' => $reportstatus
            ]);
        }
    }
}
