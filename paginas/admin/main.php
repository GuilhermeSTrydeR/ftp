<?php
  session_start();

  if(!isset($_SESSION['logado']) || $_SESSION['permissao'] != '3'){

    header("Location: /");

  }
 


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Tecnica</title>
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../../css/ftp.css">
    <link rel="stylesheet" href="../../css/print.css">
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
  <center>
        <a href="../../classes/usuario/apagarTodosUsuarios.php" style="margin-left: -600px;">
            <img src="/imagens/navbar/x.png" onclick="" width="40" height="40" class="hiddenBtnXUsuarios" alt="sair" style="margin-left: 30px !important;">
        </a>
      </center>
    <center>
        <a href="../../classes/contato/apagarTodosContatos.php" style="margin-left: -600px;">
            <img src="/imagens/navbar/x.png" onclick="" width="40" height="40" class="hiddenBtnXContato" alt="sair" style="margin-left: 30px !important;">
        </a>
      </center>
    <center>
      <a href="../usuarios/main.php"><?$_SESSION['nome']?></a>
      <img src="/imagens/navbar/printer.png" class="hidden" onClick="window.print()" width="40" height="40" class="d-inline-block align-top" alt="imprimir" style="margin-left: 30px !important;">
    </center>
    <center>
        <a href="?pagina=inicio">
          <img src="/imagens/navbar/home.png" onclick="" width="40" height="40" class="d-inline-block align-top" alt="home" style="margin-left: 30px !important;">
        </a>
      </center>
      <center>
        <a href="/funcoes/destruir_sessao.php">
            <img src="/imagens/navbar/sair.png" onclick="" width="40" height="40" class="d-inline-block align-top" alt="sair" style="margin-left: 30px !important;">
        </a>
      </center>
  </ul>
</nav>
<div class="sidebar-container">
  <ul class="sidebar-navigation">
    <br><br><br><br>
    <li class="header"><b>Usuarios</b></li>
    <li>
      <a href="?pagina=cadastrar_usuario">
        <i class="fa fa-home" aria-hidden="true"></i> <b>Cadastrar</b> 
      </a>
    </li>
    <li>
      <a href="?pagina=../../classes/usuario/visualizar_usuario">
        <i class="fa fa-tachometer" aria-hidden="true"></i> <b>Visualizar/Editar</b>
      </a>
    </li>
    <li class="header"><b>Fichas Tecnicas</b></li>
    <li>
      <a href="?pagina=cadastrar_ficha">
        <i class="fa fa-users" aria-hidden="true"></i> <b>Cadastrar</b>
      </a>
    </li>
    <li>
    <a href="?pagina=../../classes/fichas/visualizar_fichas">
        <i class="fa fa-users" aria-hidden="true"></i> <b>Visualizar/Editar</b>
      </a>
    </li>
        <li class="header">FeedBack</li>
    <li>
      <a href="?pagina=../../classes/contato/visualizar_contato">
        <i class="fa fa-cog" aria-hidden="true"></i> <b>Contatos</b>
      </a>
    </li>
    <li>
      <a href="?pagina=../index/contato">
        <i class="fa fa-cog" aria-hidden="true"></i> <b>Registrar</b>
      </a>
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
        echo "<br>";
        include("$pagina.php");
    ?>
</body>
</html>