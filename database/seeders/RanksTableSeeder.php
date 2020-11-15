<?php

use Illuminate\Database\Seeder;
use App\Models\Rank;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Offiziere
        Rank::create(['rank_group_id' => 1, 'name' => 'Ensign', 'short_name' => 'Ens']);
        Rank::create(['rank_group_id' => 1, 'name' => 'Lieutenant Junior Grade', 'short_name' => 'Ltjg']);
        Rank::create(['rank_group_id' => 1, 'name' => 'Lieutenant', 'short_name' => 'Lt']);
        Rank::create(['rank_group_id' => 1, 'name' => 'Lieutenant Commander', 'short_name' => 'LtCmdr']);
        Rank::create(['rank_group_id' => 1, 'name' => 'Commander', 'short_name' => 'Cmdr']);
        Rank::create(['rank_group_id' => 1, 'name' => 'Captain', 'short_name' => 'Cpt']);

        // Admiräle
        Rank::create(['rank_group_id' => 1, 'name' => 'Commodore', 'short_name' => 'COM']);
        Rank::create(['rank_group_id' => 1, 'name' => 'Rear Admiral', 'short_name' => 'RADM']);
        Rank::create(['rank_group_id' => 1, 'name' => 'Vice Admiral', 'short_name' => 'VADM']);
        Rank::create(['rank_group_id' => 1, 'name' => 'Admiral', 'short_name' => 'ADM']);
        Rank::create(['rank_group_id' => 1, 'name' => 'Fleet Admiral', 'short_name' => 'FADM']);

        // Unteroffiziere
        Rank::create(['rank_group_id' => 2, 'name' => 'Petty Officer', 'short_name' => 'PO']);
        Rank::create(['rank_group_id' => 2, 'name' => 'Chief Petty Officer', 'short_name' => 'CPO']);
        Rank::create(['rank_group_id' => 2, 'name' => 'Senior Chief Petty Officer', 'short_name' => 'SCPO']);
        Rank::create(['rank_group_id' => 2, 'name' => 'Master Chief Petty Officer', 'short_name' => 'MCPO']);
        Rank::create(['rank_group_id' => 2, 'name' => 'Warrant Officer', 'short_name' => 'WaO']);
        Rank::create(['rank_group_id' => 2, 'name' => 'Chief Warrant Officer', 'short_name' => 'CWaO']);
    }
}
