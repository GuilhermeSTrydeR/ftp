<?php
    session_start();

    //aqui sera gravado no banco a funcao gravar do contato.class que no caso eh referenciada abaixo no require

    
        //requer classe de conexao do banco
        require("../conexao_bd.php");

        //requer o contato.class onde o comando para gravar no banco ja esta pronto
        require("ficha.class.php");

        //configuracoes basicas, nesse caso, configuracoes de fuso horario
        require("../../config/config.php");


        //aqui instanciamos a classe
        $f = new Ficha();

        $id = $_POST['id'];
        
        // a data de atualizacao recebe a data e hora atual para gravar sua atualizacao
       

        $nome = $_POST['nome'];
        $codProduto = $_POST['codProduto'];
        $tipoVenda = $_POST['tipoVenda'];
        $ramo = $_POST['ramo'];
        $umidadeMinima = $_POST['umidadeMinima'];
        $umidadeMaxima = $_POST['umidadeMaxima'];
        $secador = $_POST['secador'];
        $dataAtualizacao = $_POST['dataAtualizacao'];

       

        $dataAtualizacao = date('d/m/y');


        $f->editar($id, $dataAtualizacao, $nome, $codProduto, $tipoVenda, $ramo, $umidadeMinima, $umidadeMaxima, $secador);
        echo "<script>alert('Ficha alterada com sucesso!');</script>";
        $url = '/paginas/admin/main.php?pagina=../../classes/fichas/visualizar_fichas';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

  

?>