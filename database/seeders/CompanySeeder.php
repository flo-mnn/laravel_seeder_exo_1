<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'Coeur De Beurre',
                'address' => 'Hearts Avenue, 5 1000 Brussels',
                'phone' => '+32494123456',
                'email' => 'coeurdeBeurre@gmail.com',
                'contact_surname' => 'en Chef',
                'contact_first' => 'Coeur de Beurre',
                'image' => '/img/img-01.jpg'
            ],
            [
                'name' => 'Poupouille',
                'address' => 'Hearts Avenue, 5 1000 Brussels',
                'phone' => '+32494123456',
                'email' => 'coeurdeBeurre@gmail.com',
                'contact_surname' => 'Mister',
                'contact_first' => 'Poupouille',
                'image' => '/img/img-02.jpg'
            ],
            [
                'name' => 'Mon amour',
                'address' => 'Hearts Avenue, 5 1000 Brussels',
                'phone' => '+32494123456',
                'email' => 'coeurdeBeurre@gmail.com',
                'contact_surname' => 'De Moi',
                'contact_first' => 'Mon amour',
                'image' => '/img/img-03.jpg'
            ],
            [
                'name' => 'Hubby',
                'address' => 'Hearts Avenue, 5 1000 Brussels',
                'phone' => '+32494123456',
                'email' => 'coeurdeBeurre@gmail.com',
                'contact_surname' => 'Best Ever',
                'contact_first' => 'Hubby',
                'image' => '/img/img-04.jpg'
            ],
            [
                'name' => 'Pimpinou',
                'address' => 'Hearts Avenue, 5 1000 Brussels',
                'phone' => '+32494123456',
                'email' => 'coeurdeBeurre@gmail.com',
                'contact_surname' => 'The Queen',
                'contact_first' => 'Pimpinou',
                'image' => '/img/img-05.jpg'
            ],
            [
                'name' => 'Hearts',
                'address' => 'Hearts Avenue, 5 1000 Brussels',
                'phone' => '+32494123456',
                'email' => 'coeurdeBeurre@gmail.com',
                'contact_surname' => 'Lots of',
                'contact_first' => 'Heart',
                'image' => '/img/img-06.jpg'
            ],
        ]);
    }
}
