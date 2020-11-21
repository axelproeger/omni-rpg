<?php

use Database\Seeders\SettingsSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RankGroupsTableSeeder::class);
        $this->call(RanksTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(UnitGroupSeeder::class);
        $this->call(PositionSeeder::class);
    }
}
