<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     
     * @return void
     */
    public function run()
    {
        $this->call([CitizenSeeder::class]);
        $this->call([RecoverySeeder::class]);
        $this->call([DriveTemporarySeeder::class]);
        $this->call([MinalocSeeder::class]);
    }
}
