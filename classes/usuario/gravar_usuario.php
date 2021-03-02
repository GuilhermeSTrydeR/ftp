<?php
    
    //aqui sera gravado no banco a funcao gravar do contato.class que no caso eh referenciada abaixo no require

    if(isset($_POST["nome"]) && !empty($_POST["nome"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["user"]) && !empty($_POST["user"]) && isset($_POST["pass"]) && !empty($_POST["pass"]) && isset($_POST["permissao"]) && !empty($_POST["permissao"]) && isset($_POST["status"]) && !empty($_POST["status"]) && isset($_POST["telefone"]) && !empty($_POST["telefone"]) ){
        
        //requer classe de conexao do banco
        require("../conexao_bd.php");

        //requer o contato.class onde o comando para gravar no banco ja esta pronto
        require("usuario.class.php");

        //configuracoes basicas, nesse caso, configuracoes de fuso horario
        require("../../config/config.php");

        //aqui instanciamos a classe
        $u = new Usuario();

        //data em gmt da hora do cadastro
        $dataCadastro = gmdate("YmdHis", time() + $fusoHorario);

        //timestamp em segundos unix(unix timestamp)
        $dataCadastroUnix = time();

        //aqui adicionamos um nivel basico de seguranca
        $nome = addslashes($_POST["nome"]);
        $email = addslashes($_POST["email"]);
        $user = addslashes($_POST["user"]);
        $pass = addslashes(md5($_POST["pass"]));
        $permissao = addslashes($_POST["permissao"]);
        $status = addslashes($_POST['status']);
        $tempo = addslashes($_POST['tempo']);
        $telefone = addslashes($_POST['telefone']);
        $dataCadastro = addslashes($dataCadastro);
        $dataCadastroUnix = addslashes($dataCadastroUnix);

        if($tempo <= 0){

            echo "<script>alert('por favor digite um tempo válido!');</script>";
            $url = '../../paginas/admin/main.php?pagina=cadastrar_usuario';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


        }
        elseif($u->duplicidade($user) == false){

            //aqui pegamos o tempo em horas digitadas pelo usuario e convertemos em segundos(horas [vezes] 3600), depois somamos com os segundos atuais do sistema (unix timestamp) ambos em segundos pra que depois esse valor seja comparado na hora de logar.
            $tempo = (($tempo * 3600) + time());

            $u->gravar($nome, $email, $user, $pass, $permissao, $status, $tempo, $telefone, $dataCadastro, $dataCadastroUnix);

        }

        else{
            ?>

            <script>
                var user = "<?php echo $user ?>";
                alert("o usuario " + user + " já consta cadastrado!\npor favor selecione outro.");
            </script>

            <?php
             $url = '../../paginas/admin/main.php?pagina=cadastrar_usuario';
             echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

        }
    }
    else{
        echo "<script>alert('Algo deu errado!, por favor tente novamente.');</script>";
        $url = '../../paginas/admin/main.php?pagina=cadastrar_usuario';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

    }
?>