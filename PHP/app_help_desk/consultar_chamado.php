
<?php
require_once "validador_acesso.php";

 $chamados = [];

 $arquivo = fopen('../app_help_desk/registro.txt' , 'r');

 while(!feof($arquivo)){
    $registro = fgets($arquivo); 
    $chamados[] = $registro;
  }

  fclose($arquivo);
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php foreach($chamados as $chamado){ ?>

                 <?php $chamado_dados = explode('|', $chamado); 

                //Para validar que só será exibido um novo card se possuir todos os valores preenchidos
                  if(count($chamado_dados) < 6){
                    continue; }
                
                //Valida primeiro se o perfil é de usuário, depois se o usuário for diferente passa pro próximo
                if($_SESSION['perfil'] === 'user'){
                  if($chamado_dados[0] != $_SESSION['id'] ){
                    continue; }
                  }
               
                ?>
              
              <div class="card mb-3 bg-light">
                <div class="card-body">

                  <h5 class="card-title"></h5><?php echo $chamado_dados[3] ?>

                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamado_dados[4] ?></h6>
                  <p class="card-text"><?php echo $chamado_dados[5] ?></p>

                </div>
              </div>

                <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php">
                  <button class="btn btn-lg btn-warning btn-block"  link ="home.php">Voltar</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
