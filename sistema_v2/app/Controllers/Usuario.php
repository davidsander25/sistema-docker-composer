<?php

namespace App\Controllers;
use App\Models\Conexao;
use App\Models\M_Usuario;
class Usuario extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        $conexao = new Conexao();
        $conn = $conexao->Conectar();

        $usuario = new M_Usuario($conn);

        $data = array(
            "url_base" => base_url(),
            "lista_usuario" => $usuario->ListaUsuario()
        );
        $ver = view('include/Header', $data);
        $ver .= view('Usuario');
        $ver .= view('include/Modal');
        $ver .= view('include/Footer');

        return $ver;
       
    }

    public function Cadastro(){
        $ver = null;
        if (isset($_REQUEST['enviar']) && $_REQUEST['enviar'] == '1') {
            $conexao = new Conexao();
            $conn = $conexao->Conectar();

            $usuario = new M_Usuario($conn);
            $usuario->nome = $_REQUEST['nome'];
            $usuario->setLogin($_REQUEST['login']);
            $usuario->setSenha($_REQUEST['senha']);
            $resultado = $usuario->CadastroUsuario();
            if ($resultado != false) {
                $ver = '<div class="alert alert-success">Usuário cadastrado com sucesso</div>';
                $ver .= '<meta http-equiv="refresh" content="1.5; URL=#">';
            } else {
                $ver = '<div class="alert alert-success">Erro ao cadastrar usuário</div>';
            }
        }
        return $ver;
    }

    public function Editar(){
        $ver = null;
        if (isset($_REQUEST['enviar']) && $_REQUEST['enviar'] == '1') {
            $conexao = new Conexao();
            $conn = $conexao->Conectar();

            $usuario = new M_Usuario($conn);
            $usuario->nome = $_REQUEST['nome'];
            $usuario->setLogin($_REQUEST['login']);
            $usuario->setSenha($_REQUEST['senha']);
            $usuario->setCodigo($_REQUEST['codigo']);
            if(isset($_REQUEST['status'])){ $usuario->status = 'S'; }else{ $usuario->status = 'N'; }

            $resultado = $usuario->EditarUsuario();
            if ($resultado != false) {
                $ver = '<div class="alert alert-success">Usuário atualizado com sucesso</div>';
                $ver .= '<meta http-equiv="refresh" content="1.5; URL=#">';
            } else {
                $ver = '<div class="alert alert-success">Erro ao atualizar o usuário</div>';
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

            $usuario = new M_Usuario($conn);
            $usuario->setCodigo($_REQUEST['codigo']);
            $resultado = $usuario->DeletarUsuario();
            if ($resultado != false) {
                $ver = '<div class="alert alert-success">Usuário deletado com sucesso</div>';
                $ver .= '<meta http-equiv="refresh" content="1.5; URL=#">';
            } else {
                $ver = '<div class="alert alert-success">Erro ao usuário produto</div>';
            }
        }
        return $ver;
    }
}
