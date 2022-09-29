<?php

class Conexao
{

    private $server = "localhost";
    private $bd = "plano_a";
    private $user = "root";
    private $password = "";
    private $conn = "";

    // metodos // funcao // procedimento
    public function __construct() 
    {
    
        try{
            $this->conn = new PDO("mysql:host={$this->server};dbname={$this->bd};charset=utf8",$this->user, $this->password);
        }catch(PDOException $msg){ // se der erro na tentativa de conexao
            echo "Não foi possível conectar com o servidor: " . $msg->getMessage();
        }
    }

    // metodo para executar comandos (insert / delete/ update)
    public function executeQuery($comando){
        try{
            //criar uma variavel para receber o comando sql
            $sql = $this->conn->prepare($comando);
            // executar o comando no servidor
            $sql->execute();
            // testar se deu certo o comando, baseando-se no retorno de quantidade de linhas
            if($sql->rowCount() > 0 ){
                return $sql; // retornar o comando para tela
            }else{ // deu erro na execucao do comando
                return $sql->errorInfo(); // retornar o erro para tela
            }
        }catch(PDOException $msg){
            echo "Não foi possível executar o comando: " . $msg->getMessage();
        }
    }


    public function executeSelect($comando){
        try{

            $sql = $this->conn->prepare($comando);

            $sql->execute();

            if($sql->rowCount() > 0 ){

                return $sql->fetchAll(PDO::FETCH_CLASS);
            }else{
                return 0;
            }
        }catch(PDOException $msg){
            echo "Não foi possível executar o comando: " . $msg->getMessage();
        }
    }

}

?>