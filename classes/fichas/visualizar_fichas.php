

<center style=" margin-top: 100px !important; position: relative !important;">
    
    <?php

        if(!isset($_SESSION['logado']) || $_SESSION['permissao'] != '3'){
        
            header("Location: /");
        
        }
        
        $dataCadastro = gmdate("YmdHis", time());

    ?>

    <h4>FICHAS TECNICAS</h4>
<br><br>






    <?php

        include("../../classes/conexao_bd.php");




        
        // variavel global de conexao ao banco
        global $pdo;
    

        // aqui eh feito a consulta de todos os contatos
        $consulta = $pdo->query("SELECT * FROM ficha");

    
           
            echo "<table class='table table-striped table-bordered table-condensed table-hover' style='margin-left: 200px; table-layout:fixed; max-width: 900px; word-wrap: break-word; !important; position: absolute;'>";           
            echo "<thead>";
            echo "<tr>";
            echo "<div class='thead'>";
            echo "<th scope='col' style='width: 70px;'>ID</th>";
            echo "<th scope='col' style='width: 150px;'>Nome</th>";
            echo "<th scope='col' style='width: 150px;'>Codigo do Produto</th>";
            echo "<th scope='col' style='width: 170px;'>Data de Criação</th>";
            echo "<th scope='col' style='width: 120px;'>Opções</th>";
            echo "</div>";
            echo "</tr>";
            echo "</thead>";
    
            echo "<a href='?pagina=../../paginas/cadastros/cadastrar_ficha'>";
            echo "<img src='../../imagens/navbar/plus.png' alt='botao-ativar-informativo' width='50' title='Novo Usuario'>";
            echo "</a>";
            echo "<br><br>";


            // nesse loop eh mostrado na tela os resultados retirados do banco
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                if($linha['excluido'] == 0){
                    echo "<tr>";
                    echo  "<td> {$linha['id']} </td>  <td> {$linha['nome']}  </td> <td> {$linha['codProduto']} </td> <td> {$linha['dataCriacao']} </td> ";
                    
                    echo "<td>";

                        echo "<a href='/paginas/admin/main.php?pagina=../cadastros/editar_ficha&id=" . $linha['id'] . "'><button type='button' class='btn btn-success' style='width: 100px;'>Visualizar</button></a>";
            
                    echo "</td>";


                    echo "</tr>";
                }
            }
        
            echo "</table>";
       
    
    ?>
</center>
