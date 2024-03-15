<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class addressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'id' => '22091397004',
            'id_contact' => 1,
            'street' => 'Pekarungan',
            'city' => 'Sidoarjo',
            'province' => 'Jawa Timur',
            'country' => 'Indonesia',
            'postal_code' => '61258'
        ]);

    }
}