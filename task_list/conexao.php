<?php

class Conexao{

    private $host = 'localhost';
    private $dbname = "task_list";
    private $user = 'root';
    private $pass = '';

    public function conectar(){
        try{
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );
            
            return $conexao;

        } catch (PDOException $e) {
            echo $e->getMessege();    
        }

    }

}

?>