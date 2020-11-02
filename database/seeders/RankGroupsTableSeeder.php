<?php

use Illuminate\Database\Seeder;
use App\RankGroup;

class RankGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RankGroup::create(['name' => 'Offiziere']);
        RankGroup::create(['name' => 'Unteroffiziere']);
    }
}
