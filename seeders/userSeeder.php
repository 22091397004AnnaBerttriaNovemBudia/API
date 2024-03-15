<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id_user' => '22091397004',
            'username' => 'Anna_Berttria_Novem_Budia',
            'password' => bcrypt('secret'),
            'name' => 'Anna Berttria'
        ]);

    }
}