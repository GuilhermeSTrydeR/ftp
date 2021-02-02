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

  $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : '/adm';

?>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: 	#3b5998;">
        <div id="logo">
            <a href="/ftp">FTP</a>
        </div>
        <ul class="navbar-nav" id="navbar-main">
            <li class="nav-item <?= ($pagina == 'inicio')?'active':'' ?>" style="">
              <a class="nav-link" href="?pagina=adm"><b>Página Inicial</b></a>
            </li>
            <li class="nav-item <?= ($pagina == 'sobre')?'active':'' ?>">
              <a class="nav-link" href="/ftp"><b>Sair</b></a>
            </li>
        </ul>
</nav>

    <?php
        //esse include ira colocar na tela a pagina selecionada e que foi atribuida a variavel $pagina, assim sempre que uma pagina for atribuida a variavel $pagina, ela sera incluida abaixo
        // include("./paginas/main/$pagina.php");
        include("../main/$pagina.php");
    ?>


</body>
</html>