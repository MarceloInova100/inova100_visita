<?php

namespace App\Controllers;

use App\Models\ExpositorModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ExpositorController extends BaseController
{
    
protected $expositorModel;

    public function __construct()
    {
        $this->expositorModel = new ExpositorModel();
    }

    public function index()
    {
        $dados['expositores'] = $this->expositorModel->findAll();
        return view('expositor/index', $dados);
    }

    public function novo()
    {
        return view('expositor/form');
    }

    public function salvar()
    {
        $this->expositorModel->insert($this->request->getPost());

        return redirect()->to('/expositor');
    }

    public function editar($id)
    {
        $dados['expositor'] = $this->expositorModel->find($id);

        return view('expositor/form', $dados);
    }

    public function atualizar($id)
    {
        $this->expositorModel->update($id, $this->request->getPost());

        return redirect()->to('/expositor');
    }

    public function excluir($id)
    {
        $this->expositorModel->delete($id);

        return redirect()->to('/expositor');
    }

}
