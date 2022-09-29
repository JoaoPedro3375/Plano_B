<?php
require_once "conexao2.php";

class Cadastropaciente
{

    public $apelido;
    public $nome;
    public $pronome;
    public $email;
    public $senha;
    public $senha2;

    public function listarTodos(){
        try{
            $bd = new Conexao();
            $lista = $bd->executeSelect("select * from pessoa");
            return $lista;
        }catch(PDOException $msg){
            echo "Não foi possível listar os dados do usuario: ".$msg->getMessage();
        }
    }
    public function inserirCadastro(){
        try {
         //var_dump($_POST); die();
            if(isset($_POST["btn_confirmar"])) {

                //preencher os campos
                $this->apelido = $_POST["apelido"];
                $this->nome = $_POST["nome"];
                $this->pronome = $_POST["pronome"];
                $this->email = $_POST["email"];
                // $this->senha = $_POST["senha"];
                // $this->agora = new DateTime('Y/m/d H:i'); // Pega o momento atual

                //criar uma instancia da classe
                $bd = new Conexao();
                //variavel para receber o comando insert
                $comandoInsert = "insert into pessoa (id,nome_completo,pronomes_id,apelido,email,usuario_id) 
                values(null,'{$this->nome}','{$this->pronome}','{$this->apelido}','{$this->email}',1);";

                echo $comandoInsert;
                return $bd->executeQuery($comandoInsert);
            }

        }catch(PDOException $msg){
            echo "Não foi possível inserir os dados dos Cliente: ".$msg->getMessage();
        }
    }

}