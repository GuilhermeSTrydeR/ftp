<?php
    session_start();
    if(!isset($_SESSION['user']) && !isset($_SESSION['pass'])){

        header("Location: /");

    }
    //aqui sera gravado no banco a funcao gravar do contato.class que no caso eh referenciada abaixo no require

    if(isset($_POST["nome"]) && !empty($_POST["nome"])){
        
        //requer classe de conexao do banco
        require("../conexao_bd.php");

        //requer o contato.class onde o comando para gravar no banco ja esta pronto
        require("usuario.class.php");

        //configuracoes basicas, nesse caso, configuracoes de fuso horario
        require("../../config/config.php");

        //aqui instanciamos a classe
        $u = new Usuario();

        $u->alterarNome($_POST['nome']);


    }

    else{
        header("Location: /");
    }
    
?>