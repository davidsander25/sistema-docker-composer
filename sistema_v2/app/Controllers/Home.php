<?php

namespace App\Controllers;
use App\Models\Conexao;
use App\Models\M_Produto;
use App\Models\M_Usuario;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        $conexao = new Conexao();
        $conn = $conexao->Conectar();

        $usuario = new M_Usuario($conn);
        $produto = new M_Produto($conn);
        $data = array(
            "url_base" => base_url(),
            "produto" => $produto->TotalProduto(),
            "usuario" => $usuario->TotalUsuario(),
        );
        $ver = view('include/Header', $data);
        $ver .= view('Home_inicio');
        $ver .= view('include/Footer');

        return $ver;
    }
}
