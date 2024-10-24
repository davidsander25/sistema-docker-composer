<?php

namespace App\Controllers;
use App\Models\Conexao;
use App\Models\M_Usuario;

class Login extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        $data = array(
            "url_base" => base_url()
        );
        return view('Login', $data);
    }

    public function Logar()
    {

        if (isset($_REQUEST['logar'])) {

            $login = $_REQUEST['login'];
            $senha = sha1($_REQUEST['senha']);

            $conexao = new Conexao();
            $conn = $conexao->Conectar();

            $usuario = new M_Usuario($conn);
            $usuario->setLogin($login);
            $usuario->setSenha($senha);
            $resultado = $usuario->AcessaSistema();

            if ($resultado != false) {

                $_SESSION['usuario_logado'] = $resultado[0];

                $mensagem_login = '<div class="alert alert-success">';
                $mensagem_login .= "Usuario logado com sucesso!";
                $mensagem_login .= '</div>';
                $mensagem_login .= '<meta http-equiv="refresh" content="1.5; URL=' . base_url() . '"/>';
            } else {

                unset($_SESSION['usuario_logado']);
                $mensagem_login = '<div class="alert alert-danger">';
                $mensagem_login .=  "Usuario ou senha incorretos!";
                $mensagem_login .= '</div>';
            }

            $data = array(
                'url_base' => base_url(),
                'mensagem_login' => $mensagem_login
            );

            echo view('Login', $data);
        }
    }



    public function Logout()
    {

        unset($_SESSION['usuario_logado']);

        echo '<meta http-equiv="refresh" content="0; URL=' . base_url() . '/login"/>';
    }
}
