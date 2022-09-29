<?php
require_once "conexao2.php";
class Login
{
    public $CRP;
    public $curso;
    public $dtformacao;
    public $localformacao;
    public $imgcrp;
    public $imgdiploma;
    public $imgidentificacao;


    public function inserir(){
        try {
            // var_dump($_POST); die();

                $this->CRP = $_POST["numero_crp"];
                $this->curso = $_POST["curso"];
                $this->dtformacao = $_POST["ano_formacao"];
                $this->localformacao = $_POST["local_formacao"];
                $this->imgcrp = $_FILES["imgcrp"];
                $this->imgdiploma = $_FILES["imgdiploma"];
                $this->imgidentificacao = $_FILES["imgidentificacao"];
                $nomeFinal = time().'.jpg';
                $tamanhoImg = filesize($nomeFinal);
                $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
                // $this->$agora = new DateTime('Y/m/d H:i'); // Pega o momento atual

                $bd = new Conexao();

                $comandoInsert = "insert into pscicologo (id,crp,dt_formacao,local_formacao,crp_img,diploma_img,identidade,img,pessoa_id) 
                values(null,'{$this->crp}','{$this->curso}','{$this->dtformacao}','{$this->localformacao}','{$this->imgcrp}','{$this->imgdiploma}','{$this->imgidentidade}',1)";
                echo $comandoInsert;
                return $bd->executeQuery($comandoInsert);


        }catch(PDOException $msg){
            echo "Não foi possível inserir os dados dos Cliente: ".$msg->getMessage();
        }
    }

}