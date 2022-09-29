<?php
header("Content-type:text/html; charset=utf8");
require_once "CLASSES/Cadastropaciente.php";

$nome = "";
$pronome = 0;
if(isset($_POST["name"]) &&  !empty($_POST["name"])
&& isset($_POST["pronomes"]) && !empty($_POST["pronomes"])){

  $nome = $_POST["name"];
  $pronome = $_POST["pronomes"];
}

// echo "". $nome ." -- ". $pronome;

if(isset($_POST["btn_confirmar"])){
  $Cadastropaciente = new Cadastropaciente();
  $result = $Cadastropaciente->inserirCadastro();
  header('location: index.php');


}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Plano B - Cadastro</title>
    <link rel="stylesheet" href="CSS/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    
</head>
<body>
    <!-- method="POST" action="" -->
    <div id="main-div">
        <form id="form-registro" method="POST" action="">
         <h1>Cadastro:</h1>
          <div id="name-box">
            <b><label for="name" class="name">Apelido:</label></b><br>
            <input type="name" name="apelido" id="name" placeholder="Apelido ">
          </div>
          <div id="email-box">
            <b><label for="email" class="email">E-mail:</label></b><br>
            <input type="email" name="email" id="email" placeholder="Exemplo: jose@gmail.com">
          </div>
          <div id="password-box">
            <b><label for="senha" class="senha">Senha:</label></b><br>
            <input type="password" name="senha" id="senha" placeholder="Digite uma senha">
          </div>
          <div id="password-box-2">
             <b><label for="senha" class="senha-2">Confirmação de Senha:</label></b><br>
            <input type="password" name="senha" id="senha" placeholder="Confirme a senha">
           
          </div>
          <br>
          <div id="button-box">
            <button id="btn-confirmar" class="btn-confirmar" name="btn_confirmar" type="submit">Cadastrar Como Paciente</button><br>
            <a id="btn-medico" class="btn btn-medico" href="cadastro_medico.php" >Cadastrar Como Psicólogo</a>
          </div>
        </form>
    </div>

    
</body>
</html>