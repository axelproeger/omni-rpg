<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create(['name' => 'Oberbefehlshaber der Sternenflotte', 'short_name' => 'CO', 'slug' => 'oberbefehlshaber-der-sternenflotte']);
        Position::create(['name' => 'Stabschef der Sternenflotte', 'short_name' => 'CS', 'slug' => 'stabschef-der-sternenflotte']);
        Position::create(['name' => 'Kommandierender Offizier', 'short_name' => 'KO', 'slug' => 'kommandierender-offizier']);
        Position::create(['name' => 'Erster Offizier', 'short_name' => 'XO', 'slug' => 'erster-offizier']);
        Position::create(['name' => 'OPS Offizier', 'short_name' => 'OPS', 'slug' => 'ops-offizier']);
        Position::create(['name' => 'Leitender Wissenschaftsoffizier', 'short_name' => 'LWO', 'slug' => 'leitender-wissenschaftsoffizier']);
        Position::create(['name' => 'Wissenschaftsoffizier', 'short_name' => 'WO', 'slug' => 'wissenschaftsoffizier']);
        Position::create(['name' => 'Leitender Medizinischer Offizier', 'short_name' => 'LMO', 'slug' => 'leitender-medizinischer-offizier']);
        Position::create(['name' => 'Medizinischer Offizier', 'short_name' => 'MO', 'slug' => 'medizinischer-offizier']);
        Position::create(['name' => 'Chef der Sicherheit', 'short_name' => 'SC', 'slug' => 'chef-der-sicherheit']);
        Position::create(['name' => 'Sicherheitsoffizier', 'short_name' => 'SO', 'slug' => 'sicherheitsoffizier']);
        Position::create(['name' => 'Taktischer Offizier', 'short_name' => 'TO', 'slug' => 'taktischer-offizier']);
        Position::create(['name' => 'Chefingenieur', 'short_name' => 'CI', 'slug' => 'chefingenieur']);
        Position::create(['name' => 'Ingenieur', 'short_name' => 'I', 'slug' => 'ingenieur']);
        Position::create(['name' => 'Counselor', 'short_name' => 'CNS', 'slug' => 'counselor']);
    }
}
