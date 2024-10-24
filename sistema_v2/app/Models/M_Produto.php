<?php

namespace App\Models;

use \CodeIgniter\Model;

class M_Produto extends Model
{

    private $conexao;
    public $produto;
    public $marca;
    public $valor;
    public $status;
    private $codigo;


    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function ListaProduto()
    {

        $sql = "
            select 
                MD5(codigo) as codigo,
                desc_produto,
                marca,
                valor,
                status
            from
                produto as p
        ";
        $stmt = $this->conexao->prepare($sql);
        if ($stmt->execute()) {
            $retorno = $stmt->fetchAll();
        } else {
            $retorno = 0;
        }
        return $retorno;
    }
    public function TotalProduto()
    {

        $sql = "
            select 
                count(*) as total
            from
                produto as p
        ";
        $stmt = $this->conexao->prepare($sql);
        if ($stmt->execute()) {
            $retorno = $stmt->fetchAll()[0]['total'];
        } else {
            $retorno = 0;
        }
        return $retorno;
    }

    public function CadastroProduto(){
        $sql = "INSERT INTO produto (desc_produto, marca, valor) values (:produto, :marca, :valor)";
        $dados = array(
            ':produto' => $this->produto,
            ':marca' => $this->marca,
            ':valor' => $this->valor,
        );
        $query = $this->conexao->prepare($sql);
        if ($query->execute($dados)) {
            $retorno = true;
        } else {
            $retorno = false;
        }
        return $retorno;
    }

    public function EditarProduto(){
        $sql = "
            UPDATE produto SET
            desc_produto = :produto,
            marca = :marca,
            valor = :valor,
            status = :status
            where MD5(codigo) = :codigo
        ";
        $dados = array(
            ':produto' => $this->produto,
            ':marca' => $this->marca,
            ':valor' => $this->valor,
            ':codigo' => $this->codigo,
            ':status' => $this->status
        );
        $query = $this->conexao->prepare($sql);
        if ($query->execute($dados)) {
            $retorno = true;
        } else {
            $retorno = false;
        }
        return $retorno;
    }
    public function DeletarProduto(){
        $sql = "DELETE FROM produto where MD5(codigo) = :codigo";
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
}
