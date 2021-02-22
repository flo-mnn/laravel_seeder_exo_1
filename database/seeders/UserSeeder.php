<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Coeur De Beurre',
            'age' => 22,
            'email' => 'coeurdeBeurre@gmail.com',
            'phone' => '+32494123456'
            ],
            [
            'name' => 'Anis de moi',
            'age' => 22,
            'email' => 'coeurdeBeurre@gmail.com',
            'phone' => '+32494123456'
            ],
            [
            'name' => 'Mon Poupouille',
            'age' => 22,
            'email' => 'coeurdeBeurre@gmail.com',
            'phone' => '+32494123456'
            ],
            [
            'name' => 'Mon amour',
            'age' => 22,
            'email' => 'coeurdeBeurre@gmail.com',
            'phone' => '+32494123456'
            ]
        
        ]);
    }
}
