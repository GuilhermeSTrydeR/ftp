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
        
        $_SESSION['tempo'] = $u->tempo($user);
        $_SESSION['permissao'] = $u->permissao($user);

        if($u->login($user, $pass) == true && $u->permissao($user) == 1 && $u->status($user) == 1){
            
            $_SESSION['logado'] = 1;
            header("location: ../../paginas/comum/main.php");
            
        }
        elseif($u->login($user, $pass) == true && $u->permissao($user) == 1 && $u->status($user) == 2){

            if($u->tempo($user) <= time()){

                echo "<script>alert('Conta Expirada! por favor contate o adminsitrador do sistema.');</script>";
                $url = '../../index.php';
                echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

            }
            else{
                $_SESSION['logado'] = 1;
                header("location: ../../paginas/admin/main.php");
            }

        }
        elseif($u->login($user, $pass) == true && $u->permissao($user) == 1 && $u->status($user) == 3){
            
            echo "<script>alert('Conta Desativada, por favor entre em contato com o Administrador do sistema');</script>";
            $url = '../../index.php';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
            
        }

        elseif($u->login($user, $pass) == true && $u->permissao($user) == 2 && $u->status($user) == 1){

            $_SESSION['logado'] = 1;
            header("location: ../../paginas/supervisor/main.php");
            
        }
        elseif($u->login($user, $pass) == true && $u->permissao($user) == 2 && $u->status($user) == 2){

            if($u->tempo($user) <= time()){

                echo "<script>alert('Conta Expirada! por favor contate o adminsitrador do sistema.');</script>";
                $url = '../../index.php';
                echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

            }
            else{
                $_SESSION['logado'] = 1;
                header("location: ../../paginas/admin/main.php");
            }
        }
        elseif($u->login($user, $pass) == true && $u->permissao($user) == 2 && $u->status($user) == 3){
            
            echo "<script>alert('Conta Desativada, por favor entre em contato com o Administrador do sistema');</script>";
            $url = '../../index.php';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
            
        }



        elseif($u->login($user, $pass) == true && $u->permissao($user) == 3 && $u->status($user) == 1){
            
            $_SESSION['logado'] = 1;
            header("location: ../../paginas/admin/main.php");
            
        }
        elseif($u->login($user, $pass) == true && $u->permissao($user) == 3 && $u->status($user) == 2){

            if($u->tempo($user) <= time()){

                echo "<script>alert('Conta Expirada! por favor contate o adminsitrador do sistema.');</script>";
                $url = '../../index.php';
                echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

            }
            else{
                $_SESSION['logado'] = 1;
                header("location: ../../paginas/admin/main.php");
            }
        }
        elseif($u->login($user, $pass) == true && $u->permissao($user) == 3 && $u->status($user) == 3){
            
            echo "<script>alert('Conta Desativada, por favor entre em contato com o Administrador do sistema');</script>";
            $url = '../../index.php';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
            
        }

        else{
   
            echo "<script>alert('Usuário ou senha invalidos! por favor digite novamente.');</script>";
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
