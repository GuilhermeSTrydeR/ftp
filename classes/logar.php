<?php

    if(isset($_POST["user"]) && !empty($_POST["user"]) && isset($_POST["pass"]) && !empty($_POST["pass"])){
        
        require("conexao_bd.php");
        require("Usuario.class.php");

        $u = new Usuario();
        

        $user = addslashes($_POST["user"]);
        $pass = addslashes($_POST["pass"]);

        if($u->login($user, $pass) == true){

            header("location: ../paginas/testeLoginOK.php");

        }

        else{

            header("location: ../index.php");

        }

    }


    else{

        header("location: ftp/index.php");

    }

?>