<?php

namespace App\Controllers;

use App\Models\CidadeModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CidadeController extends BaseController
{
    
protected $cidadeModel;

    public function __construct()
    {
        $this->cidadeModel = new CidadeModel();
    }

    public function index()
    {
        $dados['cidades'] = $this->cidadeModel->findAll();

        return view('cidade/index', $dados);
    }

    public function novo()
    {
        return view('cidade/form');
    }

    public function salvar()
    {
        $this->cidadeModel->insert([
            'codcidade' => $this->request->getPost('codcidade'),
            'cidade'    => $this->request->getPost('cidade'),
            'codibge'   => $this->request->getPost('codibge'),
            'uf'        => $this->request->getPost('uf')
        ]);

        return redirect()->to('/cidade');
    }

    public function editar($codcidade)
    {
        $dados['cidade'] = $this->cidadeModel->find($codcidade);

        return view('cidade/form', $dados);
    }

    public function atualizar($codcidade)
    {
        $this->cidadeModel->update($codcidade, [
            'cidade'  => $this->request->getPost('cidade'),
            'codibge' => $this->request->getPost('codibge'),
            'uf'      => $this->request->getPost('uf')
        ]);

        return redirect()->to('/cidade');
    }

    public function excluir($codcidade)
    {
        $this->cidadeModel->delete($codcidade);

        return redirect()->to('/cidade');
    }

}
