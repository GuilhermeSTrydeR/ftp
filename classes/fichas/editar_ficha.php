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

        $id = $_POST["id"]; 
        $nome = $_POST["nome"]; 
        $codProduto = $_POST["codProduto"];
        $dataAtualizacao = date('y/m/d');
        $tipoVenda = $_POST["tipoVenda"];
        $ramo = $_POST["ramo"];
        $umidadeMinima = $_POST['umidadeMinima'];
        $umidadeMaxima = $_POST['umidadeMaxima'];
        $secador = $_POST['secador'];
      

        $codProduto = $f->codProduto($codProduto);

        $f->editar($id, $nome, $codProduto, $dataCriacao, $dataAtualizacao, $tipoVenda, $ramo, $umidadeMinima, $umidadeMaxima, $secador);


  

?>