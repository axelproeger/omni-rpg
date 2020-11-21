<?php

namespace Database\Seeders;

use App\Models\UnitGroup;
use Illuminate\Database\Seeder;

class UnitGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnitGroup::create(['name' => 'Alpha Fleet', 'slug' => 'alpha-fleet']);
        UnitGroup::create(['name' => 'Beta Fleet', 'slug' => 'beta-fleet']);
    }
}
