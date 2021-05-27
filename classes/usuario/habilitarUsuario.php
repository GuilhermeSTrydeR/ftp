
<?php   
        //requer classe de conexao do banco
        require("../conexao_bd.php");

        //requer o contato.class onde o comando para gravar no banco ja esta pronto
        require("usuario.class.php");

        

        //aqui instanciamos a classe
        $u = new Usuario();
        
        $id = $_GET['id'];

        //aqui invocamos o metodo para marcar a coluna 'excluido' com '1' informando que esse usuario foi excluido
        $u->habilitarUsuario($id);

        $url = '/paginas/admin/main.php?pagina=../cadastros/editar_usuario&id=' . $id;
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>
