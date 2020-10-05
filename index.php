<?php

//a variavel abaixo define a pagina selecionada ao clicar nos menus
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema FTP</title>

    <!--  bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/ftp.css">

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
              <a class="nav-link" href="?pagina=inicio"><b>Início</b></a>
            </li>
            <li class="nav-item <?= ($pagina == 'sobre')?'active':'' ?>">
              <a class="nav-link" href="?pagina=sobre"><b>Sobre</b></a>
            </li>
            <li class="nav-item <?= ($pagina == 'contato')?'active':'' ?>">
              <a class="nav-link" href="?pagina=contato"><b>Contato</b></a>
            </li>

            <div id="form_login">
            <form action="/action_page.php">
              <input type="text" placeholder="Usuário" name="username">
              <input type="password" placeholder="Senha" name="psw">
              <button type="submit">Logar</button>
            </form>
            </div>

          </ul>

        </div>
      </nav>
    
    <?php
        //esse include ira colocar na tela a pagina selecionada e que foi atribuida a variavel $pagina, assim sempre que uma pagina for atribuida a variavel $pagina, ela sera incluida abaixo
        include("./paginas/$pagina.php");
    ?>
        

</body>
  <footer>
    
    <p>footer</p>

  </footer>


</html>