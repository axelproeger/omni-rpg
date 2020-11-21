<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppSettings;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppSettings::create(['key' => 'app-active', 'value' => '1']);
        AppSettings::create(['key' => 'app-title', 'value' => 'Omni-RPG']);
        AppSettings::create(['key' => 'app-subtitle', 'value' => 'Rollenspiel neu gedacht.']);
        AppSettings::create(['key' => 'rs-timediff', 'value' => '370']);
    }
}
