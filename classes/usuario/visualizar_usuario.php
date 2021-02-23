<center style="margin-left: 100px; margin-top: 100px !important; position: relative !important;">
    <?php

        include("../../classes/conexao_bd.php");

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
        echo "<th scope='col'>status</th>";
        echo "</div>";
        echo "</tr>";
        echo "</thead>";
    
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
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
            echo  " <td> {$linha['id']} </td>  <td> {$linha['nome']}  </td> <td> {$linha['user']} </td> <td> {$linha['permissao']} </td> <td>". $linha['status'] ."</td>";
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
