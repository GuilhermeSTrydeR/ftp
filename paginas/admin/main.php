<?php
  session_start();

  if(!isset($_SESSION['logado']) || $_SESSION['permissao'] != '3'){

    header("Location: /");

  }

      include("../../classes/usuario/usuario.class.php");
      include("../../classes/conexao_bd.php");
      $u = new Usuario();
 


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
  <div style='text-transform: uppercase; font-weight: 500; color: white; margin: 10px;'>
  
  <!-- nessa parte sera transformado o nome do usuario todo em maiusculo -->


    <?php

      // funcao para exibir apenas o primeiro e o ultimo nome, o nome eh buscado do banco em tempo real
      
      // o nome que esta no banco
      $nome = $u->retornaNome($_SESSION['id']);
      
      //aqui excluimos os espacos em branco
      $arr = explode(' ',trim($nome));

      //aqui printamos o primeiro e o ultimo(array_pop) elemento
      echo($arr[0] . " " . array_pop($arr));

 
    ?>


    

 
  </div>
    <a href="?pagina=../../paginas/configs/configUser">
      <img src="/imagens/navbar/engrenagem.png" onclick="" width="25" height="25" alt="config">


  <ul class="navbar-nav" id="navbar-main" style="margin-left: 700px !important;">
  



    <center>
        <a href="?pagina=inicio">
          <img src="/imagens/navbar/home.png" onclick="" width="40" height="40" class="d-inline-block align-top" alt="home" style="margin-left: 30px !important;">
      </center>
      <center>
        <a href="/funcoes/destruir_sessao.php">
            <img src="/imagens/navbar/sair.png" onclick="" width="40" height="40" class="d-inline-block align-top" alt="sair" style="margin-left: 30px !important;">
        </a>
      </center>
  </ul>
</nav>
<div class="sidebar-container">

  <p>
    <!-- <?php
      if($_SESSION['permissao'] == 1){
        $permissao = ' Comum';
      }
      elseif($_SESSION['permissao'] == 2){
        $permissao = ' Supervisor';
      }
      elseif($_SESSION['permissao'] == 3){
        $permissao = ' Administrador';
      }
      
      echo 'Nivel de Permissão: ' . $_SESSION['permissao'] . $permissao;
    ?> -->

    <!-- <a href="?pagina=../../paginas/cadastros/alterarSenha" style='border: 2px solid black; background-color: #3b5998; padding: 5px;'>Alterar Senha</a> -->

  </p>
  <ul class="sidebar-navigation" style='float: left !important; margin-left: -20px;'>
    <!-- <li class="header"><img src="../../imagens/sidebar/user.png" class="d-inline-block align-top" alt="sair" style="margin-right: 30px !important;"><b>Usuarios</b></li>
    <li>
      <a href="?pagina=../cadastros/cadastrar_usuario">
        <i class="fa fa-home" aria-hidden="true"></i><img src="../../imagens/sidebar/register.png" class="d-inline-block align-top" alt="sair" style="margin-right: 30px !important;"><b>Cadastrar</b> 
      </a>
    </li> -->
    <li>
      <a href="?pagina=../../classes/usuario/visualizar_usuario">
        <i class="fa fa-tachometer" aria-hidden="true"></i> <img src="../../imagens/sidebar/userBlack.png" class="d-inline-block align-top" alt="sair" style="margin-right: 30px !important;" width='40'><b>Usuarios</b>
      </a>
    </li>
    <!-- <li class="header"><img src="../../imagens/sidebar/file.png" class="d-inline-block align-top" alt="sair" style="margin-right: 30px !important;"><b>Fichas Tecnicas</b></li>
    <li>
      <a href="?pagina=../cadastros/cadastrar_ficha">
        <i class="fa fa-users" aria-hidden="true"></i> <img src="../../imagens/sidebar/registerForm.png" class="d-inline-block align-top" alt="sair" style="margin-right: 30px !important;"><b>Cadastrar</b>
      </a>
    </li> -->
    <li>
    <a href="?pagina=../../classes/fichas/visualizar_fichas">
        <i class="fa fa-users" aria-hidden="true"></i> <img src="../../imagens/sidebar/view.png" class="d-inline-block align-top"  width='40' alt="sair" style="margin-right: 30px !important;"><b>Fichas<br>tecnicas</b>
      </a>
    </li>
        <!-- <li class="header"><img src="../../imagens/sidebar/feedback.png" class="d-inline-block align-top" alt="sair" style="margin-right: 30px !important;"><b>FeedBack</b></li>
    <li>
      <a href="?pagina=../index/contato">
        <i class="fa fa-cog" aria-hidden="true"></i><img src="../../imagens/sidebar/registerFeedback.png" class="d-inline-block align-top" alt="sair" style="margin-right: 30px !important;"> <b>Cadastrar</b>
      </a>
    </li> -->
    <li>
      <a href="?pagina=../../classes/contato/visualizar_contato">
        <i class="fa fa-cog" aria-hidden="true"></i><img src="../../imagens/sidebar/feedblack.png" class="d-inline-block align-top"  width='40' alt="sair" style="margin-right: 30px !important;"> <b>Contato</b>
      </a>
    </li>
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