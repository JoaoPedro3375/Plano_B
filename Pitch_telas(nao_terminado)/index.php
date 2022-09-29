<?php
header("Content-type:text/html; charset=utf8");
require_once "CLASSES/Login.php";

$msg= "";

if(isset($_POST["btn_enter"])){
  $result = $Login->Login_cliente();
// var_dump($result);
  if($result != 0 ){
      header('location: cadastro_paciente_inicial.php');
  }else{
      echo "Email ou Senha invalidos" .$msg->getMessager();
  }

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <title>Plano B - Faça Login</title>
</head>
<body>

    <main style="margin-left: 40%">
        <div class="container">
          <div>
            <div class="col-md-6">
  
             
              <div class="card-body">
                <form>
                    <img src="IMG/logo.png" style="margin-left: -15%;">

                  <div class="form-group-row" style="margin-left: -15%;">
                    <div class="col-md-10">
                      <input id="email" type="email" class="form-control shadow p-2 mb-4 rounded" placeholder="Email" name="email">
                    </div>
                  </div>
  
                  <div class="form-group-row"  style="margin-left: -15%;">
                    <div class="col-md-10">
                      <input id="senha" type="password" class="form-control shadow p-2 mb-4 rounded" placeholder="Senha" name="senha">
                      <a class="h6" href="#" >Esqueci minha senha</a>
                    </div>
                  </div>
  
                  <div class="button-box p-4 mb-2" style="margin-left: 14%;">
                    <button id="btn-enter" class="btn-enter" type="submit">Entrar</button> 
                  </div>
                  <p class="senha_perdida"> Não Tem uma conta? <a href="cadastro_paciente_inicial.php">Cadastre-se!</a></p>

                  <div style="margin-left: 18%;">
                    <p>ou entre com</p>
                    <img class="img" src="IMG/Gmail.PNG" href="gmail.com"><img src="IMG/Facebook.PNG" href="facebook.com">
                  </div>

                  
               
                </form>
              </div>
              
            </div>
          </div>
        </div>
  
      </main>

    
</body>
</html>