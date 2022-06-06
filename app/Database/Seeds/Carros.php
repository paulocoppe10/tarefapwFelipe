<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Carros extends Seeder
{
    public function run()
    {
        for($x = 0; $x < 5; $x++){
            $data = [
                'modelo' => 'corola',
                'marca'    => 'toyota',
                'ano'=> 2020,           
            ];
        }
        $this->db->table('tb_carros')->insert($data);     
    }
}
