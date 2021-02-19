<?php
    session_start();

    if(!isset($_POST['user']) && !isset($_POST['pass'])){

        header("Location: /");

    }

    if(isset($_POST["user"]) && !empty($_POST["user"]) && isset($_POST["pass"]) && !empty($_POST["pass"])){
        
        

        //requer classe de conexao do banco
        require("../conexao_bd.php");

        //requer o Usuario.class onde o comando para buscar no banco
        require("usuario.class.php");

        //aqui instanciamos a classe
        $u = new Usuario();

        $pass = addslashes($_POST["pass"]);
        $user = $_POST['user'];


        $permissao = $u->permissao($user);

        $_SESSION['permissao'] = $permissao;

        if($u->login($user, $pass) == true && $permissao == 1){
            
            $_SESSION['logado'] = 1;
            header("location: ../../paginas/comum/main.php");
            
        }

        if($u->login($user, $pass) == true && $permissao == 2){

            $_SESSION['logado'] = 1;
            header("location: ../../paginas/supervisor/main.php");
            
        }

        
        if($u->login($user, $pass) == true && $permissao == 3){
            
            $_SESSION['logado'] = 1;
            header("location: ../../paginas/admin/main.php");
            
        }

        

        else{
            echo "<script>alert('Usuário ou senha inválidos!, por favor digite novamente');</script>";
                $url = '../../index.php';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
        }

    }

    else{
   
        echo "<script>alert('algo deu errado!, entre em contato com o administrador do sistema');</script>";
        $url = '../../index.php';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

    }

?>