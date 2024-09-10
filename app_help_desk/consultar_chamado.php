<?php
 require_once "validador_acesso.php"
?>

<?php

$chamados = array();

$arquivo = fopen('../../app_help_desk/arquivo.hd','r');

  while(!feof($arquivo)) {
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            Sair
            <i class="fa fa-sign-out"></i></button>
          </a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php 
                if (empty($chamados) || count(array_filter($chamados)) == 0) { ?>
                  <div class="alert alert-info" role="alert">
                      Não há nenhum chamado aberto.
                  </div>
              <?php } ?> 

              <?php foreach($chamados as $chamado) { ?>

              <?php 
                $chamado_dados = explode('#', $chamado);
                

                if($_SESSION['perfil_id'] == 2)
                  if($_SESSION['id'] != $chamado_dados[0]) {
                    continue;
                  }
                

                if(count($chamado_dados) < 3){
                  continue;
                }
              ?>    

                  <div class="card mb-3 bg-light">
                    <div class="card-body">
                      <h5 class="card-title"><?=$chamado_dados[1]?></h5>
                      <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                      <p class="card-text"><?=$chamado_dados[3]?></p>

                      <?php if($_SESSION['perfil_id'] == 1) { ?>
                        <form method='POST' action='excluir_chamado.php'>
                          <input type="hidden" name="chamado_id" value="<?= $chamado_dados[0] ?>">
                          <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>  
                      <?php } ?>

                    </div>
                  </div>
                <?php } ?>   
              


              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>