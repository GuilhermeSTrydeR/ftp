<?php
    

    if(isset($_POST["user"]) && !empty($_POST["user"]) && isset($_POST["pass"]) && !empty($_POST["pass"])){
        
        session_start();

        //requer classe de conexao do banco
        require("conexao_bd.php");

        //requer o Usuario.class onde o comando para buscar no banco
        require("Usuario.class.php");

        //aqui instanciamos a classe
        $u = new Usuario();
        

        $user = addslashes($_POST["user"]);
        $pass = addslashes($_POST["pass"]);


        if($u->login($user, $pass) == true){

            header("location: ../paginas/main/main.php");

        }

        else{

            echo  "Usuário ou senha invalidos!";
            // header("location: ../index.php");

        }

    }


    else{
   
        echo  "<script>alert('Usuário ou senha invalidos!');</script>";
        header("location: ../index.php");
  

    }

?>