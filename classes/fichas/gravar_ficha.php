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


        $nome = $_POST["nome"];
        $codProduto = $_POST["codProduto"];
        $dataCriacao = $_POST["dataCriacao"];
        $tipoVenda = $_POST["tipoVenda"];
        $ramo = $_POST["ramo"];
        $umidadeMinima = $_POST['umidadeMinima'];
        $umidadeMaxima = $_POST['umidadeMaxima'];
        $secador = $_POST['secador'];
           

        

        $dataCriacao = date('Y/m/d');
        $codProduto = $f->codProduto($codProduto);

        $f->gravar($nome, $codProduto, $dataCriacao, $tipoVenda, $ramo, $umidadeMinima, $umidadeMaxima, $secador);


  

?>