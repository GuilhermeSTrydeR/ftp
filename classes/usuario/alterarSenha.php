<?php
    session_start();
    if(!isset($_POST['user']) && !isset($_POST['pass'])){

        header("Location: /");

    }
    //aqui sera gravado no banco a funcao gravar do contato.class que no caso eh referenciada abaixo no require

    if(isset($_POST["pass"]) && !empty($_POST["pass"])){
        
        //requer classe de conexao do banco
        require("../conexao_bd.php");

        //requer o contato.class onde o comando para gravar no banco ja esta pronto
        require("usuario.class.php");

        //configuracoes basicas, nesse caso, configuracoes de fuso horario
        require("../../config/config.php");


        //aqui instanciamos a classe
        $u = new Usuario();

        $pass = addslashes(md5($_POST["pass"]));
 
        $u->alterarSenha($pass);


    }
    
?>