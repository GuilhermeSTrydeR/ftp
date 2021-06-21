<?php

    error_reporting(0);
    
    session_start();
       
        //requer classe de conexao do banco
        require("../conexao_bd.php");

        //requer o contato.class onde o comando para gravar no banco ja esta pronto
        require("usuario.class.php");

        //configuracoes basicas, nesse caso, configuracoes de fuso horario
        require("../../config/config.php");


        //aqui instanciamos a classe
        $u = new Usuario();


        if(isset($_POST["pass"]) && !empty($_POST["pass"])){
            
        // //data em gmt da hora do cadastro
        // $dataCadastro = gmdate("YmdHis", time() + $fusoHorario);

        // //timestamp em segundos unix(unix timestamp)
        // $dataCadastroUnix = time();

        //essa variavel irá gravar o ID do responsavel por fazer o cadastro
        $idAdm = $_SESSION['id'];

        //essa variavel vai controlar se o usuario foi excluido, no caso '0' ele não está excluido
        $excluido = 0;

        //aqui adicionamos um nivel basico de seguranca
        $id = addslashes($_POST['id']);
        $nome = addslashes($_POST["nome"]);
        $email = addslashes($_POST["email"]);
        $user = addslashes($_POST["user"]);
        $pass = addslashes(md5($_POST["pass"]));
        $permissao = addslashes($_POST["permissao"]);
        $status = addslashes($_POST['status']);
        $tempo = addslashes($_POST['tempo']);
        $telefone = addslashes($_POST['telefone']);
        $setor = addslashes($_POST['setor']);
        $nasc = addslashes($_POST['nasc']);
        // $ativo = addslashes($_POST['ativo']);
        // $dataCadastro = addslashes($dataCadastro);
        // $dataCadastroUnix = addslashes($dataCadastroUnix);
        $idAdm = addslashes($idAdm);
        $excluido = addslashes($excluido);

        

        if($tempo < 0){

            echo "<script>alert('por favor digite um tempo válido!');</script>";
            $url = '../../paginas/admin/main.php?pagina=../cadastros/cadastrar_usuario';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

        }

  

            //aqui pegamos o tempo em horas digitadas pelo usuario e convertemos em segundos(horas [vezes] 3600), depois somamos com os segundos atuais do sistema (unix timestamp) ambos em segundos pra que depois esse valor seja comparado na hora de logar.
            $tempo = (($tempo * 3600) + time());
            
            if($tempo > time()){
                
                $status = 2;
                
            }

            elseif($tempo <= time()){
                $status = 1;
            }
     
            $u->editar($id, $nome, $email, $pass, $permissao, $status, $tempo, $telefone, $idAdm, $excluido, $setor, $nasc);

        }
        else{

            //aqui adicionamos um nivel basico de seguranca
            $id = addslashes($_POST['id']);
            $nome = addslashes($_POST["nome"]);
            $email = addslashes($_POST["email"]);
            $user = addslashes($_POST["user"]);

            $permissao = addslashes($_POST["permissao"]);
    
            $telefone = addslashes($_POST['telefone']);
            $setor = addslashes($_POST['setor']);
            $nasc = addslashes($_POST['nasc']);
            // $ativo = addslashes($_POST['ativo']);
            // $dataCadastro = addslashes($dataCadastro);
            // $dataCadastroUnix = addslashes($dataCadastroUnix);
            // $idAdm = addslashes($idAdm);
            // $excluido = addslashes($excluido);

            $u->editarSemSenhaDigitada($id, $nome, $email, $permissao, $telefone, $setor, $nasc);

        }


            


            

            
        

    

?>