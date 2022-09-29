<?php
header("Content-type:text/html; charset=utf8");


?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/cadastro_inicial.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Dancing+Script" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <title>Plano B - Ínicio</title>
</head>
<body>
    <main style="margin-left: 37%;">
        <p class="p-welcome">Seja bem vindo!</p>
        <div class="container">
          <div>
            <div class="col-md-6">
  
             
              <div class="card-body">
                <p class="text-center" style="margin-left: -12%;"><b>
                    Nós da Plano B ficamos felizes por te <br> 
                    receber e fazer parte da sua caminhada para uma saúde mental melhor!
                    Para começar, queremos saber quem você é e como se apresenta... 
                </b>
                </p>
                <form action="cadastro_paciente.php" method="post">
                    <b>
                    <img>

                  <div class="form-group-row">
                    <label for="name" class="name col-md-6 col-form-label">Nome Completo:</label>
                    <div class="col-md-10">
                      <input id="name" type="text" class="form-control shadow p-2 mb-4 rounded" placeholder="Nome Completo {nascimento ou social}" name="name">
                    </div>
                  </div>
  
                  <div class="form-group-row">
                    <label for="pronomes" class="lbl-pronome col-md-6 col-form-label">Pronomes:</label>
                    <div class="col-md-10">
                      <select id="pronomes" class="select-pronome shadow p-2 mb-4 rounded"  name="pronomes">
                        <option value=" "></option>
                        <option value="1">Ele/Dele</option>
                        <option value="2">Ela/Dela</option>
                        <option value="3">Elu/Delu</option>
                      </select>
                    </div>
                  </div>
  
                  <div class="button-box p-4 mb-2" style="margin-left: 23%;">
                    <button id="btn-enter" class="btn-enter" ><a href="cadastro_paciente.php">Continuar</a></button> 
                  </div>
                  </b>
                </form>
              </div>
              
            </div>
          </div>
        </div>
  
</body>
</html>