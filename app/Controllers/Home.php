<?php

namespace App\Controllers;
use App\Models\VeiculoModel;

class Home extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('principal');        
        echo view('template/footer');
    }

    public function page($page='principal'){
        echo view('template/header');
        echo view($page);        
        echo view('template/footer');   
    }

    public function veiculo(){
        $model = new VeiculoModel();

        $data = [
            'title'     =>  'Veículos',
            'veiculo'   =>  $model->getVeiculos(),
        ];

        echo view('template/header');
        echo view('veiculo', $data);
        echo view('template/footer');
    }

    public function cadastro(){
        echo view('template/header');
        echo view('cadastroveiculo');
        echo view('template/footer');
    }
    public function gravar(){
        $model = new VeiculoModel();

        $model->save([
            'id' => $this->request->getVar('id'),
            'modelo' => $this->request->getVar('modelo'),
            'marca' => $this->request->getVar('marca'),
            'ano' => $this->request->getVar('ano')
        ]);

        return redirect('veiculo');
    }

    public function excluir($id = null){
        $model = new VeiculoModel();
        $model->delete($id);
        return redirect("veiculo");
    }

    public function editar($id = null){
        $model = new VeiculoModel();

        $data = [
            'veiculo' => $model->getVeiculo($id)
        ];

        echo view('template/header');
        echo view('cadastroveiculo',$data);
        echo view('template/footer');
    }

}
