<center style="margin-left: 100px; margin-top: 100px !important; position: relative !important;">
        <style>

        .hiddenBtnXUsuarios{
            display: inline-block !important;
        }
        .hidden{
            display: inline-block !important;
        }

        </style>
            <h4>USUARIOS</h4>
<br><br>


        <?php

 

        //include para acessar as confguracoes definidas
        include("../../config/config.php");

        global $pdo;
        $consulta = $pdo->query("SELECT * FROM usuarios;");

     
        echo "<table class='table table-striped table-bordered table-condensed table-hover' style='margin-left: 100px; table-layout:fixed; max-width: 900px; word-wrap: break-word; !important; position: absolute;'>";
        
        echo "<thead>";
        echo "<tr>";
        echo "<div class='thead'>";
        echo "<th scope='col' style='width: 40px;'>ID</th>";
        echo "<th scope='col' style='width: 150px;'>Nome</th>";
        echo "<th scope='col' style='width: 120px;'>Usuário</th>";
        echo "<th scope='col' style='width: 120px;'>Permissão</th>";
        echo "<th scope='col' style='width: 70px;'>Status</th>";
        echo "<th scope='col' style='width: 150px;'>Tempo</th>";
        echo "<th class='noPrint' scope='col' style='width: 100px;'>Opções</th>";
        echo "</div>";
        echo "</tr>";
        echo "</thead>";
        
        echo "<a href='?pagina=../../paginas/cadastros/cadastrar_usuario'>";
        echo "<img src='../../imagens/navbar/plus.png' alt='botao-ativar-informativo' width='50' title='Novo Usuario'>";
        echo "</a>";
      
        echo "<img src='/imagens/navbar/printer.png' class='hidden' onClick='window.print()' width='40' height='40' class='d-inline-block align-top' title='Imprimir' alt='imprimir' style='margin-left: 150px !important;'>";

        echo "<br><br>";
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            
            //nessa parte verificamos se o status do usuario é diferente de 2, ou seja ele não é temporario
            if($linha['status'] != 2){
                //caso nao for temporario eh atrelado 'sem limite' mostrando que ele tem acesso vitalicio(sem limite de tempo)
                $linha['tempo'] = "Sem Limite";

            }
            else{

                //caso for temporario, eh somado o tempo atual ao tempo que foi registrado a ele no banco.
                $linha['tempo'] = (($linha['tempo'] - time()));

                //aqui sao retirados os dias restantes e sao convertidos para inteiro
                $dias = ($linha['tempo'] / 86400 % 86400);
                $dias = intval($dias);

                //aqui sao retirados as horas restantes e sao convertidos para inteiro
                $horas = ($linha['tempo'] / 3600 % 24);
                $horas = intval($horas);

                //aqui sao retirados os minutos restantes e sao convertidos para inteiro
                $minutos = ($linha['tempo'] /60 %60);
                $minutos = intval($minutos);

                //aqui sao retirados os restos da divisao por 60, ou seja, os segundos e convertido para inteiro
                $segundos = ($linha['tempo'] % 60);
                $segundos = intval($segundos);

                $diaFinal = ($linha['tempo'] + time());
                $diaFinal = gmdate("d/m/y á\s\ H:i:s", ($diaFinal + $fusoHorario));
                
                //caso o tempo acabe, eh atrelado "tempo esgotado" mostrando que o usuario nao pode mais logar no sistema
                if($linha['tempo'] <= 0){

                    $linha['tempo'] = "Tempo Esgotado";

                }
                //caso nao tenha acabado o tempo, eh mostrado na tela no formato (M:S) o tempo restante
                else{

                    $linha['tempo'] = ("Tempo restante: " .$dias." dias, ". $horas . ":" . $minutos . ":" . $segundos . " Acesso Garantido até: " . $diaFinal);

                }
            }

            //estrutura 'switch case' para printar ao usuario se a conta esta ativa, desativada ou se eh temporaria
            switch ($linha['status']) {
                case 1:
                    $linha['status'] = 'Permanente';
                    break;
                case 2:
                    $linha['status'] = 'Temporario';
                    break;
                case 3:
                    $linha['status'] = 'Desativado';
                    break;
            }

            //estrutura 'switch case' para printar ao usuario se a conta eh comum, supervisor ou administrador
            switch ($linha['permissao']) {
                case 1:
                    $linha['permissao'] = 'Comum';
                    break;
                case 2:
                    $linha['permissao'] = 'Supervisor';
                    break;
                case 3:
                    $linha['permissao'] = 'Administrador';
                    break;
            }

            if($linha['excluido'] == 0){
                echo "<tr>";
                echo  " <td> {$linha['id']} </td>  <td> {$linha['nome']}  </td> <td> {$linha['user']} </td> <td> {$linha['permissao']} </td> <td>". $linha['status'] ."</td> <td>". $linha['tempo'] ."</td> ";

                echo "<td class='noPrint'>";

                echo "<a href='/paginas/admin/main.php?pagina=../cadastros/editar_usuario&id=" . $linha['id'] . "'><button type='button' class='btn btn-success' style='width: 100px;'>Editar</button></a>";
        
                echo "</td>";


                echo "</tr>";

                
            }
        }
        
        echo "</table>";

    ?>
</center>
