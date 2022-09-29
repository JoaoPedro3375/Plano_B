<?php
header("Content-type:text/html; charset=utf8");
require_once "CLASSES/Cadastromedico.php";

if(isset($_POST["btn_medico"])){

  header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">



  <title>Plano B - Cadastro de Profissional</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="CSS/cadastro.css"> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>

  <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

  <!-- Styles -->
</head>


<body style="background-color: #FFF8F9;">

 

    <main class="" style="margin-left: 40%">
      <div class="container">
        <div class="">
          <div class="col-md-6">

           
            <div class="card-body">
              <form nome="cadastro_psicologo" action="" method="POST" enctype="multipart/form-data">
                <b>
                 <h1>Cadastro:</h1>
                <div class="form-group-row">
                  <label for="numero_crp" class="col-md-6 col-form-label">Número certificado CRP:</label>
                  <div class="col-md-8">
                    <input id="numero_crp" type="text" class="form-control shadow p-2 mb-4 rounded" placeholder="CRP:" name="numero_crp" autofocus>
                  </div>
                </div>

                <div class="form-group-row">
                  <label for="curso" class="col-md-4 col-form-label">Curso:</label>
                  <div class="col-md-8">
                    <input id="curso" type="text" class="form-control shadow p-2 mb-4 rounded" placeholder="Nome Curso:" name="curso">
                  </div>
                </div>

                <div class="form-group-row">
                  <label for="ano_formacao" class="col-md-4 col-form-label">Ano Formação:</label>
                  <div class="col-md-8">
                    <input id="ano_formacao" type="date" class="form-control shadow p-2 mb-4 rounded" name="ano_formacao">
                  </div>
                </div>

                <div class="form-group-row">
                  <label for="local_formacao" class="col-md-6 col-form-label">Local de Formação:</label>
                  <div class="col-md-8">
                    <input id="local_formacao" type="text" class="form-control shadow p-2 mb-4 rounded" placeholder="Local de Formação" name="local_formacao">
                  </div>
                </div>

                <div class="form-row">
                  <label for="anexo" class="col-md-6 col-form-label">Anexo PDF Documentos</label>
                  <div class="col-md-12">
                    <a class="btn button">+ CRP</a>
                    <input type="file" name="imgcrp">
                    <a class="btn button" name="imgdiploma" style="background-color: rgb(185, 184, 184);">+ Diploma</a>
                    <input type="file" >
                    <a class="btn button" name="imgidentificacao" style="background-color: rgb(185, 184, 184); ">+ Identificação</a>
                    <input type="file" >
                    
                  </div>
                </div>
                <div class="button-box">
                  <button id="btn-medico" name="btn_medico" class="btn-medico" type="submit">Cadastrar Como Psicólogo</button>
                </div>
                
                </b>
              </form>
            </div>
            
          </div>
        </div>
      </div>

    </main>


</body>

</html>