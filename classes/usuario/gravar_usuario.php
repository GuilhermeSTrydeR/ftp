<?php
    
    //aqui sera gravado no banco a funcao gravar do contato.class que no caso eh referenciada abaixo no require

    if(isset($_POST["nome"]) && !empty($_POST["nome"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["user"]) && !empty($_POST["user"]) && isset($_POST["pass"]) && !empty($_POST["pass"])){
        

        //requer classe de conexao do banco
        require("../conexao_bd.php");

        //requer o contato.class onde o comando para gravar no banco ja esta pronto
        require("usuario.class.php");

        //aqui instanciamos a classe
        $u = new Usuario();
        
        //aqui adicionamos um nivel basico de seguranca
        $nome = addslashes($_POST["nome"]);
        $email = addslashes($_POST["email"]);
        $user = addslashes($_POST["user"]);
        $pass = addslashes(md5($_POST["pass"]));

        //se a funcao da classe tiver as variaveis, sera gravado no banco, se nao 
        if($u->gravar($nome, $email, $user, $pass) == true){

            echo "<h4>grvaou</h4>";
            // header("location: ../paginas/main/main.php");

        }

        else{

            // header("location: ../index.php");

        }

    }


    else{
   
        echo  "<script>alert('Usuário ou senha invalidos!');</script>";
        header("location: ../index.php");
  

    }

?>