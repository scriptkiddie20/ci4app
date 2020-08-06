<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class Tb_temanSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'NamaTeman'    => $faker->name,
                'Alamat'       => $faker->address,
                'JenisKelamin' => 'perempuan',
                'created_at'   => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'   => Time::now(),
            ];
            $this->db->table('tb_teman')->insert($data);
        }

        // Simple Queries
        // $this->db->query(
        //     "INSERT INTO users (username, email) VALUES(:username:, :email:)",
        //     $data
        // );

        // Using Query Builder
    }
}
