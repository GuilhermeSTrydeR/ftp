<?php 
    session_start();
    //se ja houver uma sessao ativa, sera redirecionado para a pagna de listagem dos boletos
    if (isset($_SESSION['logado'])){

        header("Location: paginas/adm/main.php");
        exit();
    }

    else{
        //caso nao haja uma sessao, ira para inicio afim de validar a possivel sessao
        header("Location: inicio.php");
        exit();

    }
?>