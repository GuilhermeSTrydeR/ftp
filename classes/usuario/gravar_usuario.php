<?php
    
    //aqui sera gravado no banco a funcao gravar do contato.class que no caso eh referenciada abaixo no require

    if(isset($_POST["nome"]) && !empty($_POST["nome"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["user"]) && !empty($_POST["user"]) && isset($_POST["pass"]) && !empty($_POST["pass"]) && isset($_POST["permissao"]) && !empty($_POST["permissao"]) && isset($_POST["status"]) && !empty($_POST["status"]) && isset($_POST["tempo"]) && !empty($_POST["tempo"])){
        
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
        $permissao = addslashes($_POST["permissao"]);
        $status = addslashes($_POST['status']);
        $tempo = addslashes($_POST['tempo']);

        //aqui pegamos o tempo em horas digitadas pelo usuario e convertemos em segundos(horas [vezes] 3600), depois somamos com os segundos atuais do sistema (unix timestamp) ambos em segundos pra que depois esse valor seja comparado na hora de logar.
        $tempo = (($tempo * 3600) + time());
        
        

        $u->gravar($nome, $email, $user, $pass, $permissao, $status, $tempo);

    }



?>