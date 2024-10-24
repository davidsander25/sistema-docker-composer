<?php

namespace App\Controllers;

use App\Models\Conexao;
use App\Models\M_Produto;

class Produto extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        $conexao = new Conexao();
        $conn = $conexao->Conectar();

        $produto = new M_Produto($conn);

        $data = array(
            "url_base" => base_url(),
            "lista_produto" => $produto->ListaProduto()
        );
        $ver = view('include/Header', $data);
        $ver .= view('Produto');
        $ver .= view('include/Modal');
        $ver .= view('include/Footer');

        return $ver;
    }

    public function cadastro()
    {
        $ver = null;
        if (isset($_REQUEST['enviar']) && $_REQUEST['enviar'] == '1') {
            // $ver = '<pre>';
            // $ver .= print_r($_REQUEST);
            // $ver .= '</pre>';
            // }
            $conexao = new Conexao();
            $conn = $conexao->Conectar();

            $produto = new M_Produto($conn);
            $produto->produto = $_REQUEST['produto'];
            $produto->valor = $_REQUEST['valor'];
            $produto->marca = $_REQUEST['marca'];
            $resultado = $produto->CadastroProduto();
            if ($resultado != false) {
                $ver = '<div class="alert alert-success">Produto cadastrado com sucesso</div>';
                $ver .= '<meta http-equiv="refresh" content="1.5; URL=#">';
            } else {
                $ver = '<div class="alert alert-success">Erro ao cadastrar produto</div>';
            }
        }
        return $ver;
    }

    public function Editar()
    {
        $ver = null;
        if (isset($_REQUEST['enviar']) && $_REQUEST['enviar'] == '1') {
            $conexao = new Conexao();
            $conn = $conexao->Conectar();

            $produto = new M_Produto($conn);
            $produto->produto = $_REQUEST['produto'];
            $produto->valor = $_REQUEST['valor'];
            $produto->marca = $_REQUEST['marca'];
            if(isset($_REQUEST['status'])){ $produto->status = 'S'; }else{ $produto->status = 'N'; }
            $produto->setCodigo($_REQUEST['codigo']);
            $resultado = $produto->EditarProduto();
            if ($resultado != false) {
                $ver = '<div class="alert alert-success">Produto editado com sucesso</div>';
                $ver .= '<meta http-equiv="refresh" content="1.5; URL=#">';
            } else {
                $ver = '<div class="alert alert-success">Erro ao editado produto</div>';
            }
        }
        return $ver;
    }
    public function Deletar()
    {
        $ver = null;
        if (isset($_REQUEST['enviar']) && $_REQUEST['enviar'] == '1') {
            $conexao = new Conexao();
            $conn = $conexao->Conectar();

            $produto = new M_Produto($conn);
            $produto->setCodigo($_REQUEST['codigo']);
            $resultado = $produto->DeletarProduto();
            if ($resultado != false) {
                $ver = '<div class="alert alert-success">Produto deletado com sucesso</div>';
                $ver .= '<meta http-equiv="refresh" content="1.5; URL=#">';
            } else {
                $ver = '<div class="alert alert-success">Erro ao deletar produto</div>';
            }
        }
        return $ver;
    }
}
