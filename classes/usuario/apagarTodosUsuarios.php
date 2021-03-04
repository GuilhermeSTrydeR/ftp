<?php   
        //requer classe de conexao do banco
        require("../conexao_bd.php");

        //requer o contato.class onde o comando para gravar no banco ja esta pronto
        require("usuario.class.php");

        

        //aqui instanciamos a classe
        $u = new Usuario();
        

        //aqui invocamos o metodo para marcar a coluna 'excluido' com '1' informando que esse usuario foi excluido
        $u->desativarUsuarios();
       


        //apos apagar todos os usuarios, precisamos criar outro usuario administrador, se nao, nao sera possivel acessar o sistema/
        // $u->gravarPosExcluirUsuarios('admin', 'admin@admin', 'admin', md5('admin'), '3', '1', '1', 'xxxxxxx-xxxx', 'null', 'null', '1');
       
        $url = '/paginas/admin/main.php?pagina=../../classes/usuario/visualizar_usuario';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>

    