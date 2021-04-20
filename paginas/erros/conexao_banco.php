<!--essa tela sera exibida se o sistema nao conseguir se conectar ao banco de dados -->

<body style="background-color: #dfe3ee;">
    <center style="border: 2px solid red; border-radius: 10px; background-color: #ffffcc;">

        <img src="imagens/danger.png" alt="danger" width="100px" height="100px">

        <h4 style="color: red;">Não foi possivel se conectar ao banco de dados!</h4>
        <h3>Possiveis causas:</h3>
        <p>*o banco de dados esta offline</p>
        <p>*o usuario ou senha de conexao foram trocados</p>
        <p>*o banco de dados não existe ou foi renomeado</p>
        <p>*o arquivo de conexão com o banco de dados está corrompido, arquivo: ('classes/conexao_bd')</p>
        <p>*esta pagina pode estar em cache e você está sem internet, com isso não é possivel se conectar ao banco de dados</p>
        
        
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