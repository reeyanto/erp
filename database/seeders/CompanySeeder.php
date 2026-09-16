<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name'          => 'PT Mencari Cinta Sejati',
            'address'       => 'Jl. Maya No. 123, Riau',
            'email'         => 'info@mcs.com',
            'phone_number'  => '081234567890'
        ]);
    }
}
