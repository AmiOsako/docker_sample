<?php

namespace Database\Seeders;

use Database\Factories\DepartmentFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Department::factory()->count(3)->create();
    }
}
