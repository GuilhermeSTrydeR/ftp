<center style="margin-left: 100px; margin-top: 100px !important; position: relative !important;">
    <?php

        //include para acessar o banco
        include("../../classes/conexao_bd.php");

        //include para acessar as confguracoes definidas
        include("../../config/config.php");

        global $pdo;
        $consulta = $pdo->query("SELECT * FROM usuarios;");

        echo "<table class='table table-striped table-bordered table-condensed table-hover'>";
        echo "<thead>";
        echo "<tr>";
        echo "<div class='thead'>";
        echo "<th scope='col'>ID</th>";
        echo "<th scope='col'>Nome</th>";
        echo "<th scope='col'>Usuário</th>";
        echo "<th scope='col'>Permissão</th>";
        echo "<th scope='col'>Status</th>";
        echo "<th scope='col'>Tempo</th>";
        echo "</div>";
        echo "</tr>";
        echo "</thead>";
    
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            
            //nessa parte verificamos se o status do usuario é diferente de 2, ou seja ele não é temporario
            if($linha['status'] != 2){
                //caso nao for temporario eh atrelado 'sem limite' mostrando que ele tem acesso vitalicio(sem limite de tempo)
                $linha['tempo'] = "Sem Limite";

            }
            else{

                //caso for temporario, eh somado o tempo atual ao tempo que foi registrado a ele no banco.
                $linha['tempo'] = (($linha['tempo'] - time()));

                $horas = ($linha['tempo'] / 3600);
                $horas = intval($horas);
                
                //aqui sao retirados os minutos restantes e sao convertidos para inteiro
                $minutos = ($linha['tempo'] / 60);
                $minutos = intval($minutos);

                //aqui sao retirados os restos da divisao por 60, ou seja, os segundos e convertido para inteiro
                $segundos = ($linha['tempo'] % 60);
                $segundos = intval($segundos);

                
                $diaFinal = ($linha['tempo'] + time());
                $diaFinal = gmdate("d/m/y á\s\ h:i:s", ($diaFinal + $fusoHorario));
                
               

                //caso o tempo acabe, eh atrelado "tempo esgotado" mostrando que o usuario nao pode mais logar no sistema
                if($linha['tempo'] <= 0){

                    $linha['tempo'] = "Tempo Esgotado";

                }
                //caso nao tenha acabado o tempo, eh mostrado na tela no formato (M:S) o tempo restante
                else{

                    $linha['tempo'] = ("Tempo restante: " . $horas . ":" . $minutos . ":" . $segundos . " Acesso Garantido até: " . $diaFinal);

                }
            }

            //estrutura 'switch case' para printar ao usuario se a conta esta ativa, desativada ou se eh temporaria
            switch ($linha['status']) {
                case 1:
                    $linha['status'] = 'Ativo';
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

            echo "<tr>";
            echo  " <td> {$linha['id']} </td>  <td> {$linha['nome']}  </td> <td> {$linha['user']} </td> <td> {$linha['permissao']} </td> <td>". $linha['status'] ."</td> <td>". $linha['tempo'] ."</td> ";
            echo "</tr>";
            
        }
        
        echo "</table>";
  
        

        
    
    //   <tr>
    //     <th scope="col">Nome</th>
    //     <th scope="col">Data Vencimento</th>
    //     <th scope="col">Valor</th>
    //     <th scope="col">Situação</th>
    //     <th scope="col">Boleto</th>
    //   </tr>
    // </thead>
    // <tbody>
    //   <tr>
    //     <td>Guilherme Pereira de Mello Silva</td>
    //     <td>31/01/2021</td>
    //     <td>R$ 1258,75</td>
    //     <td>Em dia</td>
    //     <td>
    
    ?>
</center>
