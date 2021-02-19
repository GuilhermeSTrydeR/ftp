<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Tecnica</title>
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../../css/ftp.css">
</head>
<body>

<?php

  $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';

?>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: 	#3b5998;">
        <div id="logo">
            <a href="/">FTP</a>
        </div>
        <ul class="navbar-nav" id="navbar-main">
            <li class="nav-item <?= ($pagina == 'inicio')?'active':'' ?>" style="">
              <a class="nav-link" href="?pagina=inicio"><b>Página Inicial</b></a>
            </li>
            <li class="nav-item <?= ($pagina == 'sobre')?'active':'' ?>">
              <a class="nav-link" href="../../funcoes/destruir_sessao.php"><b>Sair</b></a>
            </li>
        </ul>
</nav>
<div class="sidebar-container">
  <ul class="sidebar-navigation">
    <!-- <li class="header">Usuarios</li> -->
    <!-- <li> -->
      <!-- <a href="?pagina=cadastrar_usuario">
        <i class="fa fa-home" aria-hidden="true"></i> Cadastrar
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Visualizar/Editar
      </a> -->
    </li>
    <li class="header">Fichas Tecnicas</li>
    <li>
      <a href="#">
        <i class="fa fa-users" aria-hidden="true"></i> Visualizar
      </a>
    </li>
    <li>
    <!-- <a href="?pagina=inicio">
        <i class="fa fa-users" aria-hidden="true"></i> Editar
    </a> -->
    </li>
        <li class="header">FeedBack</li>
    <li>
      <!-- <a href="?pagina=../../classes/contato/listar_contato">
        <i class="fa fa-cog" aria-hidden="true"></i> Formulario de Contato
      </a> -->
    </li>
  </ul>
</div>
<div class="content-container">

  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
   
    </div>
  </div>
</div>

    <?php
        //esse include ira colocar na tela a pagina selecionada e que foi atribuida a variavel $pagina, assim sempre que uma pagina for atribuida a variavel $pagina, ela sera incluida abaixo
        // include("./paginas/main/$pagina.php");
        include("$pagina.php");
    ?>
</body>
</html>