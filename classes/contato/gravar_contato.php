<?php
    
    //aqui sera gravado no banco a funcao gravar do contato.class que no caso eh referenciada abaixo no require

    if(isset($_POST["nome"]) && !empty($_POST["nome"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["telefone"]) && !empty($_POST["telefone"])){
        

        //requer classe de conexao do banco
        require("../conexao_bd.php");

        //requer o contato.class onde o comando para gravar no banco ja esta pronto
        require("contato.class.php");

        //aqui instanciamos a classe
        $c = new Contato();

        $excluido = 0;
        
        //aqui adicionamos um nivel basico de seguranca
        $nome = addslashes($_POST["nome"]);
        $email = addslashes($_POST["email"]);
        $telefone = addslashes($_POST["telefone"]);
        $texto = addslashes($_POST["texto"]);
        $excluido = addslashes($excluido);

        //se a funcao da classe tiver as variaveis, sera gravado no banco, se nao 
        if($c->gravar($nome, $email, $telefone, $texto, $excluido) == true){

            echo "<h4>grvaou</h4>";
            // header("location: ../paginas/main/main.php");

        }

        else{

        
            // header("location: ../index.php");

        }

        if(!isset($_SESSION['logado'])){
            
            echo "<script>alert('Contato enviado!, muito obrigado pelo feedback.');</script>";
            $url = '/';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
            
        }
       

        



    }


    else{
   
        echo "<script>alert('algo deu errado!, por favor tente novamente');</script>";
        $url = '/';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  

    }

?>