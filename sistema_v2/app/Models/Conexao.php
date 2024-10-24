<?php

namespace App\Models;

use \CodeIgniter\Model;



class Conexao extends Model
{
    public function Conectar()
    {

        try {
            $username = "root";
            $password = '12345678';
            $banco = 'app_david';

            $conn = new \PDO('mysql:host=banco_sistema_teste;dbname=' . $banco . '', $username, $password);
           
            return $conn;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }
}
