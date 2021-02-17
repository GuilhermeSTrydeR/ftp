<?php
  session_start();

  if(!isset($_SESSION['logado'])){

    header("Location: inicio.php");

  }

  elseif(isset($_SESSION['logado']) && $_SESSION['permissao'] === 1){

    header("Location: paginas/comum/main.php");

  }


  elseif(isset($_SESSION['logado']) && $_SESSION['permissao'] === 2){

    header("Location: paginas/supervisor/main.php");

  }


  elseif(isset($_SESSION['logado']) && $_SESSION['permissao'] === 3){

    header("Location: paginas/adm/main.php");

  }

  else{

    header("Location: /");

  }


?>