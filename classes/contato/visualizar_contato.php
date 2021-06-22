<!-- metodo para visualizar os contatos que foram anteriormente gravados no banco 
obs: dar um jeito de implementar isso dentro de contato.class!!!

-->

<center style=" margin-top: 100px !important; position: relative !important;">
    <style>

        .hiddenBtnXContato{
            display: inline-block !important;
        }
        .hidden{
            display: inline-block !important;
        }

    </style>



<?php
        if($_SESSION['permissao'] > 1){

       

            $consulta = $pdo->query('SELECT * FROM contato WHERE excluido = 0');


            $cont = 0;
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

                $cont++;

            }
            
            if($cont > 0){

        ?>


<h4>CONTATOS DE FEEDBACK</h4>
<br><br>
    <?php

        include("../../classes/conexao_bd.php");
        include("contato.class.php");

        $c = new Contato();

        
        // variavel global de conexao ao banco
        global $pdo;
    

        // aqui eh feito a consulta de todos os contatos
        $consulta = $pdo->query("SELECT * FROM contato;");

           
            echo "<table class='table table-striped table-bordered table-condensed table-hover' style='margin-left: 200px; table-layout:fixed; max-width: 900px; word-wrap: break-word; !important; position: absolute;'>";           
            echo "<thead>";
            echo "<tr>";
            echo "<div class='thead'>";
            echo "<th scope='col' style='width: 70px;'>ID</th>";
            echo "<th scope='col' style='width: 150px;'>Nome</th>";
            echo "<th scope='col' style='width: 150px;'>Email</th>";
            echo "<th scope='col' style='width: 150px;'>Telefone</th>";
            echo "<th scope='col'>Texto</th>";
            echo "</div>";
            echo "</tr>";
            echo "</thead>";
    
        
            // nesse loop eh mostrado na tela os resultados retirados do banco
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                if($linha['excluido'] == 0){
                    echo "<tr>";
                    echo  "<td> {$linha['id']} </td>  <td> {$linha['nome']}  </td> <td> {$linha['email']} </td> <td> {$linha['telefone']} </td> <td> {$linha['texto']} </td>";
                    echo "</tr>";
                }
            }
        
            echo "</table>";


        }
        else{

            echo "<h4>Ninguém enviou nenhum Feedback ainda</h4>";
            echo "<br><br><br>";
            echo "<img src='../../imagens/space.png' width=380 alt=''>";
  
    
        }

    }
    else{
        echo "<div style='margin-left: -600px !important;'>";
        include("../../paginas/index/contato_form.php");
        echo "</div>";

    }
    
    ?>
</center>
