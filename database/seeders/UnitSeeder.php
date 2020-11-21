<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create(['name' => 'U.S.S. Entheus NX-10522', 'slug' => 'uss-entheus-nx-10522', 'unit_group_id' => 1]);
        Unit::create(['name' => 'U.S.S Lynden-Bell NCC-42882-A', 'slug' => 'uss-lynden-bell-ncc-42882-a', 'unit_group_id' => 1]);
        Unit::create(['name' => 'U.S.S. Arcadia NCC-71825', 'slug' => 'uss-arcadia-ncc-71825', 'unit_group_id' => 1]);
        Unit::create(['name' => 'U.S.S. Hyperion NCC-74914', 'slug' => 'uss-hyperion-ncc-74914', 'unit_group_id' => 1]);
        Unit::create(['name' => 'U.S.S. Xīng Wěi NCC-80109', 'slug' => 'uss-xing-wei-ncc-80109', 'unit_group_id' => 1]);
        Unit::create(['name' => 'Deep Space Nine', 'slug' => 'deep-space-nine', 'unit_group_id' => 1]);

        Unit::create(['name' => 'Deep Space Ten', 'slug' => 'deep-space-ten', 'unit_group_id' => 2]);
        Unit::create(['name' => 'U.S.S. Ulysses NCC-46131', 'slug' => 'uss-ulysses-ncc-46131', 'unit_group_id' => 2]);
        Unit::create(['name' => 'U.S.S. Shenandoah NCC-74721', 'slug' => 'uss-shenandoah-ncc-74721', 'unit_group_id' => 2]);
    }
}
