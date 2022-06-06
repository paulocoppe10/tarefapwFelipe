<?php

namespace App\Models;

use CodeIgniter\Model;

class VeiculoModel extends Model{
    protected $table = 'tb_carros';
        protected $primaryKey = 'id';
        protected $allowedFields = ['modelo', 'marca', 'ano'];

        public function getVeiculos(){
            return $this->findAll();
        }

        public function getVeiculo($id){
            return $this->asArray()->where(['id'=>$id])->first();
        }
}
