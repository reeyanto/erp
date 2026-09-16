<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'name'          => 'HR Department',
            'description'   => null,
            'address'       => null,
            'email'         => 'hr@mcs.com',
            'phone_number'  => '0812'
        ]);
    }
}
