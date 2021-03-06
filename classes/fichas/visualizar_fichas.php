

<center style=" margin-top: 100px !important; position: relative !important;">
    
    <?php

        error_reporting(0);

        if(!isset($_SESSION['logado']) || $_SESSION['permissao'] != '3'){
        
            header("Location: /");
        
        }
        
        $dataCadastro = gmdate("YmdHis", time());

        include("../../classes/fichas/ficha.class.php");
        include("../../classes/conexao_bd.php");
        $f = new Ficha();

        $consulta = $pdo->query("SELECT * FROM ficha WHERE excluido = 0");

        $cont = 0;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

            $cont++;

        }
        
        if($cont > 0){




    ?>

    <h4>FICHAS TECNICAS</h4>
        <br><br>
    <?php
        // variavel global de conexao ao banco
        global $pdo;
    

        // aqui eh feito a consulta de todos os contatos
        $consulta = $pdo->query("SELECT * FROM ficha");

        echo "<center>";
           
            echo "<table class='table table-striped table-bordered table-condensed table-hover' style='margin-left: 200px; table-layout:fixed; max-width: 900px; word-wrap: break-word; !important; position: absolute;'>";           
            echo "<thead>";
            echo "<tr>";
            echo "<div class='thead'>";
            echo "<th scope='col' style='width: 70px;'>ID</th>";
            echo "<th scope='col' style='width: 150px;'>Nome</th>";
            echo "<th scope='col' style='width: 150px;'>Codigo do Produto</th>";
            echo "<th scope='col' style='width: 170px;'>Data de Criação</th>";
            echo "<th scope='col' style='width: 120px;' class='noPrint'>Opções</th>";
            echo "</div>";
            echo "</tr>";
            echo "</thead>";
            

            

            echo "<a href='?pagina=../../paginas/cadastros/cadastrar_ficha'>";
            echo "<img src='../../imagens/navbar/plus.png' alt='botao-ativar-informativo' width='50' title='Novo Usuario'>";
            echo "</a>";

            echo "<img src='../../imagens/navbar/printer.png' onClick='window.print()' width='50' height='50' class='d-inline-block align-top' title='Imprimir' alt='imprimir' style='margin-left: 150px !important;'>";
            
            echo "<br><br>";


            // nesse loop eh mostrado na tela os resultados retirados do banco
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

                $id = $linha['id'];
                $produto = $f->codProduto($linha['codProduto']);

                if($linha['excluido'] == 0){
                    echo "<tr>";
                    
                    echo  "<td> {$linha['id']} </td>  <td> {$linha['nome']}  </td> <td> $produto </td> <td> {$linha['dataCriacao']} </td> ";
                    
                    echo "<td class='noPrint'>";

                        echo "<a href='/paginas/admin/main.php?pagina=../cadastros/editar_ficha&id=" . $linha['id'] . "'><button type='button' class='btn btn-success' style='width: 100px;'>Editar</button></a>";
            
                        echo "<br>";
                        echo "<br>";

                        echo "<a href='/paginas/admin/main.php?pagina=../cadastros/visualizar_ficha&id=" . $linha['id'] . "'><button type='button' class='btn btn-primary' style='width: 100px;'>Visualizar</button></a>";
            
                    echo "</td>";
                  


                    echo "</tr>";
                }
            }
        
            echo "</table>";
            echo "</center>";

        }
        else{

            echo "<h4>Não há Fichas cadastradas</h4>";
            echo "<br>";
            echo "<a style='color: blue !important;' href='/paginas/admin/main.php?pagina=../../paginas/cadastros/cadastrar_ficha'>Para cadastrar uma nova <b>ficha</b>, clique aqui!</a>";
            echo "<br><br><br>";
            echo "<img src='../../imagens/space.png' width=380 alt=''>";


        }
    
    ?>
</center>
