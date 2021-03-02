<!--essa tela sera exibida se o sistema nao conseguir executar/localizar o arquivo de conexao do banco de dados -->

<body style="background-color: #dfe3ee;">
    <center style="border: 2px solid red; border-radius: 10px; background-color: #ffffcc;">

        <img src="imagens/danger.png" alt="danger" width="100px" height="100px">

        <h4 style="color: red;">Não foi possivel se conectar ao banco de dados!</h4>
        <h3>Possiveis causas:</h3>
        <p>*o arquivo de conexão com o banco de dados está corrompido, com outro nome ou não existe no diretorio: ('classes/conexao_bd')</p>
        
    </center>

    <br><br>

    <center style="border: 2px solid red; border-radius: 10px; background-color: #ffffcc;">
            
        <?php
            echo "Descrição do erro:";
            echo "<br>";
            echo "<h4>".$e->getMessage()."</h4>";
        ?>
        
    </center>



</body>