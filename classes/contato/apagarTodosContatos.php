<?php   
        //requer classe de conexao do banco
        require("../conexao_bd.php");

        //requer o contato.class onde o comando para gravar no banco ja esta pronto
        require("contato.class.php");

        //aqui instanciamos a classe
        $c = new Contato();

        //aqui invocamos o metodo para marcar os contatos na coluna 'excluido' com o valor '1'
        $c->desativarContato();

        $url = '/paginas/admin/main.php?pagina=../../classes/contato/visualizar_contato';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>