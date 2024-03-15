<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'first_name' => 'Anna',
            'last_name' => 'Berttria',
            'email' => 'annaberttria.22004@mhs.unesa.ac.id',
            'phone' => '081217234228'
        ]);

    
    }
}