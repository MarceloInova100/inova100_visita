<?php

namespace App\Controllers;

use App\Models\PessoasModel;

class PessoaController extends BaseController
{
    protected $pessoaModel;

    public function __construct()
    {
        $this->pessoaModel = new PessoasModel();
    }

    public function index()
    {
        $dados['pessoas'] = $this->pessoaModel->findAll();

        return view('pessoa/index', $dados);
    }

    public function novo()
    {
        return view('pessoa/form');
    }

    public function salvar()
    {
        $this->pessoaModel->insert([
            'catvisitante'   => $this->request->getPost('catvisitante'),
            'cidade'         => $this->request->getPost('cidade'),
            'cod_tra'        => $this->request->getPost('cod_tra'),
            'codpessoa'      => $this->request->getPost('codpessoa'),
            'nome'           => $this->request->getPost('nome'),
            'cpf'            => $this->request->getPost('cpf'),
            'rg'             => $this->request->getPost('rg'),
            'datanascimento' => $this->request->getPost('datanascimento'),
            'sexo'           => $this->request->getPost('sexo'),
            'telefone'       => $this->request->getPost('telefone'),
            'email'          => $this->request->getPost('email'),
            'estado'         => $this->request->getPost('estado'),
            'expositor'      => $this->request->getPost('expositor'),
            'empresa'        => $this->request->getPost('empresa'),
            'cargo'          => $this->request->getPost('cargo'),
            'endereco'       => $this->request->getPost('endereco'),
            'bairro'         => $this->request->getPost('bairro'),
            'cep'            => $this->request->getPost('cep'),
            'codcidade'      => $this->request->getPost('codcidade'),
            'codestado'      => $this->request->getPost('codestado'),
            'codpais'        => $this->request->getPost('codpais'),
            'codvendedor'    => $this->request->getPost('codvendedor'),
            'codexpositor'   => $this->request->getPost('codexpositor'),
            'codcategoria'   => $this->request->getPost('codcategoria'),
            'codsetor'       => $this->request->getPost('codsetor'),
            'situcliente'    => $this->request->getPost('situcliente')
        ]);

        return redirect()->to('/pessoa');
    }

    public function editar($id)
    {
        $dados['pessoa'] = $this->pessoaModel->find($id);

        if (!$dados['pessoa']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('pessoa/form', $dados);
    }

    public function atualizar($id)
    {
        $this->pessoaModel->update($id, [
            'catvisitante'   => $this->request->getPost('catvisitante'),
            'cidade'         => $this->request->getPost('cidade'),
            'cod_tra'        => $this->request->getPost('cod_tra'),
            'nome'           => $this->request->getPost('nome'),
            'cpf'            => $this->request->getPost('cpf'),
            'rg'             => $this->request->getPost('rg'),
            'datanascimento' => $this->request->getPost('datanascimento'),
            'sexo'           => $this->request->getPost('sexo'),
            'telefone'       => $this->request->getPost('telefone'),
            'email'          => $this->request->getPost('email'),
            'estado'         => $this->request->getPost('estado'),
            'expositor'      => $this->request->getPost('expositor'),
            'empresa'        => $this->request->getPost('empresa'),
            'cargo'          => $this->request->getPost('cargo'),
            'endereco'       => $this->request->getPost('endereco'),
            'bairro'         => $this->request->getPost('bairro'),
            'cep'            => $this->request->getPost('cep'),
            'codcidade'      => $this->request->getPost('codcidade'),
            'codestado'      => $this->request->getPost('codestado'),
            'codpais'        => $this->request->getPost('codpais'),
            'codvendedor'    => $this->request->getPost('codvendedor'),
            'codexpositor'   => $this->request->getPost('codexpositor'),
            'codcategoria'   => $this->request->getPost('codcategoria'),
            'codsetor'       => $this->request->getPost('codsetor'),
            'situcliente'    => $this->request->getPost('situcliente')
        ]);

        return redirect()->to('/pessoa');
    }

    public function excluir($id)
    {
        $this->pessoaModel->delete($id);

        return redirect()->to('/pessoa');
    }
}