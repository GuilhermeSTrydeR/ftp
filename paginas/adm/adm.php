<?php

//requerimento para linkar a classe PDO de conexão do banco
require("../../classes/conexao_bd.php");

//a variavel abaixo define a pagina selecionada ao clicar nos menus
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema FTP</title>

        <!--  os scripts devem ficar nessa ordem de execucao -->
    <script src="../../js/bootstrap/jquery.min.js" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap/popper.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/ftp.css">


    

   

</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: 	#3b5998;">
        <div id="logo">
            <a href="/ftp/">FTP</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav">
            <li class="nav-item <?= ($pagina == 'inicio')?'active':'' ?>">
              <a class="nav-link" href="?pagina=inicio"><b></b></a>
            </li>
            <li class="nav-item <?= ($pagina == 'sobre')?'active':'' ?>">
              <a class="nav-link" href="?pagina=sobre"><b></b></a>
          </ul>

          <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuários
          </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="../../">Cadastrar</a>
              <a class="dropdown-item" href="#">Visualizar</a>
              <a class="dropdown-item" href="#">Excluir</a>
            </div>
          </div>

        </div>
      </nav>
    <?php
        //esse include ira colocar na tela a pagina selecionada e que foi atribuida a variavel $pagina, assim sempre que uma pagina for atribuida a variavel $pagina, ela sera incluida abaixo
        include("../../paginas/adm/$pagina.php");
    ?>
        

</body>
  <footer>
    
    <p>footer</p>

  </footer>


</html>