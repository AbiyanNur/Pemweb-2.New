<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class penulisSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Tomy Syafrudin',
                'address' => 'Jl Gus Dur no 150 Jombang',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'name' => 'Agus Setiawan',
                'address' => 'JL. Merdeka no 140 Jombang',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'name' => 'Kang Dedi',
                'address' => 'Jl Pattimura no 151 Jombang',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'name' => 'Mitsuki',
                'address' => 'Jl Light Cone no 149 Jombang',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'name' => 'Clara',
                'address' => 'Jl Astrall Express no 148 Jombang',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ]


        ];

        //$faker = \Faker\Factory::create('id_ID');
        //for ($i = 0; $i < 100; $i++) {

        // $data = [
        //'name' => $faker->name,
        //'address' => $faker->address,
        //'created_at' => Time::createFromTimestamp($faker->unixTime()),
        //'updated_at' => Time::now()
        //];
        //$this->db->table('penulis')->insert($data);
        //}





        //simple Queries
        //$this->db->query('INSERT INTO Penulis (name, address, created_at, updated_at) VALUES(:name:, :address:, :created_at:, :updated_at:)', $data);

        //Using Query Builder
        $this->db->table('penulis')->insertBatch($data);
    }
}
