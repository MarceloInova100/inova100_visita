<?php

namespace App\Controllers;

use App\Models\VisitaModel;

class VisitaController extends BaseController
{
    protected $visitaModel;

    public function __construct()
    {
        $this->visitaModel = new VisitaModel();
    }

    public function index()
    {
        $dados['visitas'] = $this->visitaModel->findAll();

        return view('visita/index', $dados);
    }

    public function novo()
    {
        return view('visita/form');
    }

    public function salvar()
    {
        $this->visitaModel->insert([
            'Id_visita'   => $this->request->getPost('Id_visita'),
            'Id_Pessoa'   => $this->request->getPost('Id_Pessoa'),
            'data_visita' => $this->request->getPost('data_visita')
        ]);

        return redirect()->to('/visita');
    }

    public function editar($id)
    {
        $dados['visita'] = $this->visitaModel->find($id);

        return view('visita/form', $dados);
    }

    public function atualizar($id)
    {
        $this->visitaModel->update($id, [
            'Id_Pessoa'   => $this->request->getPost('Id_Pessoa'),
            'data_visita' => $this->request->getPost('data_visita')
        ]);

        return redirect()->to('/visita');
    }

    public function excluir($id)
    {
        $this->visitaModel->delete($id);

        return redirect()->to('/visita');
    }
}
