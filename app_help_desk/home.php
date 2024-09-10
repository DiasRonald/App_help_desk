<?php
 require_once "validador_acesso.php"
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="estilo.css">

    <style>
      .card-home {
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

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                  <div class="col-6 d-flex flex-column align-items-center">
                    <a href="abrir_chamado.php">
                      <img src="formulario_abrir_chamado.png" class="mb-2" width="70" height="70" alt="Abrir Chamado">
                      <a href="abrir_chamado.php" class="btn btn-info d-block link-text">ABRIR CHAMADO</a>
                    </a>
                  </div>
                <div class="col-6 d-flex flex-column align-items-center">
                  <a href="consultar_chamado.php">
                    <img src="formulario_consultar_chamado.png" class="mb-2" width="70" height="70">
                    <a href="consultar_chamado.php" class="btn btn-info d-block link-text">CONSULTAR CHAMADO</a>
                  </a>  
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>