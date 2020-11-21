<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['name' => 'Starfleet Command', 'slug' => 'starfleet-command']);
        Department::create(['name' => 'Staff Department', 'slug' => 'staff-department']);
    }
}
