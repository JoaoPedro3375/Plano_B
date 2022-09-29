<?php
require_once "conexao2.php";
class Login
{

    public $email;
    public $senha;
    
    public function listarClientes(){
        try{
            //criar uma instancia da classe
            $bd = new Conexao();
            //criar uma variavel para receber o resultado do comando select
            $lista = $bd->executeSelect("select * from ");
            //retonro os dados para tela
            return $lista;
        }catch(PDOException $msg){
            echo "Não foi possível listar os dados dos Alunos: ".$msg->getMessage();
        }
    }
    public function login_cliente(){
        try {
            if (isset($_POST["email"]) && !empty($_POST["email"]) &&
                isset($_POST["senha"]) && !empty($_POST["senha"])) 
                {
                //preencher os campos
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                }
                $bd = new Conexao();
                $sql = "select email, senha from cliente where email = '$email' and senha = '$senha'";
                return $bd->executeSelect($sql);
            }
        catch (PDOException $msg){
                echo "Não foi possível realizar login com os dados do Cliente: " . $msg->getMessage();
            }

    }

}