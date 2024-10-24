<?php

namespace App\Models;

use \CodeIgniter\Model;

class M_Usuario extends Model
{

    private $conexao;
    private $codigo;
    private $login;
    private $senha;
    public $nome;
    public $status;


    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function ListaUsuario()
    {

        $sql = "
            select 
                MD5(codigo) as codigo,
                nome,
                login,
                substr(senha, 2, 6) as senha,
                status
            from
                usuario as u
        ";
        $stmt = $this->conexao->prepare($sql);
        if ($stmt->execute()) {
            $retorno = $stmt->fetchAll();
        } else {
            $retorno = 0;
        }
        return $retorno;
    }
    public function TotalUsuario()
    {

        $sql = "
            select 
                count(*) as total
            from
                usuario as u
        ";
        $stmt = $this->conexao->prepare($sql);
        if ($stmt->execute()) {
            $retorno = $stmt->fetchAll()[0]['total'];
        } else {
            $retorno = 0;
        }
        return $retorno;
    }

    public function CadastroUsuario()
    {
        $sql = "INSERT INTO usuario (nome, login, senha) values (:nome, :login, SHA1(:senha))";
        $dados = array(
            ':nome' => $this->nome,
            ':login' => $this->login,
            ':senha' => $this->senha,
        );
        $query = $this->conexao->prepare($sql);
        if ($query->execute($dados)) {
            $retorno = true;
        } else {
            $retorno = false;
        }
        return $retorno;
    }


    public function EditarUsuario()
    {
        if ($this->ConfirmarSenha() != 1) {
            $sql = "
                UPDATE usuario SET
                nome = :nome,
                login = :login,
                senha = SHA1(:senha),
                status = :status
                where MD5(codigo) = :codigo
            ";
            $dados = array(
                ':nome' => $this->nome,
                ':login' => $this->login,
                ':senha' => $this->senha,
                ':codigo' => $this->codigo,
                ':status' => $this->status
            );
        } else {
            $sql = "
                UPDATE usuario SET
                nome = :nome,
                login = :login,
                status = :status
                where MD5(codigo) = :codigo
            ";
            $dados = array(
                ':nome' => $this->nome,
                ':login' => $this->login,
                ':codigo' => $this->codigo,
                ':status' => $this->status
            );
        }
        $query = $this->conexao->prepare($sql);
        if ($query->execute($dados)) {
            $retorno = true;
        } else {
            $retorno = false;
        }
        return $retorno;
    }

    private function ConfirmarSenha()
    {
        $sql = "
            select 
                count(*) as total
            from
                usuario as u
            where 
            MD5(codigo) = :codigo
            and substr(senha, 2, 6) = :senha
        ";
        $dados = array(
            ':codigo' => $this->codigo,
            ':senha' => $this->senha,
        );
        $stmt = $this->conexao->prepare($sql);

        if ($stmt->execute($dados)) {
            $retorno = $stmt->fetchAll()[0]['total'];
        } else {
            $retorno = false;
        }
        return $retorno;
    }

    public function DeletarUsuario()
    {
        $sql = "DELETE FROM usuario where MD5(codigo) = :codigo";
        $dados = array(
            ':codigo' => $this->codigo,
        );
        $query = $this->conexao->prepare($sql);
        if ($query->execute($dados)) {
            $retorno = true;
        } else {
            $retorno = false;
        }
        return $retorno;
    }

    public function AcessaSistema()
    {
        $sql = "
        select 
            MD5(codigo) as codigo,
            nome,
            status
        from
            usuario as u
        where login = :login
        and senha = :senha
        ";
        $dados = array(
            ':login' => $this->login,
            ':senha' => $this->senha,
        );
        $stmt = $this->conexao->prepare($sql);

        if ($stmt->execute($dados)) {
            if($stmt->rowCount() == 1){
                $retorno = $stmt->fetchAll();
            }else{
                $retorno = false;
            }
        } else {
            $retorno = false;
        }
        return $retorno;

    }
}
