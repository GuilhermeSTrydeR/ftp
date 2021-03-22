<?php 

    //iniciar a sessao
    session_start();

    //se ja houver uma sessao ativa, sera redirecionado para a sua sessao correspondente dependendo do nivel de permissao
    //caso permissao for 1, sera redirecionado para pagina de usuarios comuns
    if (isset($_SESSION['logado']) && $_SESSION['permissao'] == '1'){
        header("Location: paginas/comum/main.php");
        exit();
    }

    //caso permissao for 2, sera redirecionado para pagina de supervisores
    elseif (isset($_SESSION['logado']) && $_SESSION['permissao'] == '2'){
        header("Location: paginas/supervisor/main.php");
        exit();
    }

    //caso permissao for 3, sera redirecionado para pagina de administradores
    elseif (isset($_SESSION['logado']) && $_SESSION['permissao'] == '3'){
        header("Location: paginas/admin/main.php");
        exit();
    }

    //caso nao haja uma sessao, sera redirecionado para inicio afim de validar a possivel sessao
    else{
        header("Location: inicio.php");
        exit();
    }
?>