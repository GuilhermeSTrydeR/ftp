<center style=" margin-top: 100px !important; position: relative !important;">
    <?php

        include("../../classes/conexao_bd.php");

        global $pdo;
        
        $consulta = $pdo->query("SELECT * FROM contato;");

           
 
            echo "<table class='table table-striped table-bordered table-condensed table-hover' style='width: 900px !important';>";
            echo "<thead>";
            echo "<tr>";
            echo "<div class='thead'>";
            echo "<th scope='col'>ID</th>";
            echo "<th scope='col'>Nome</th>";
            echo "<th scope='col'>email</th>";
            echo "<th scope='col'>telefone</th>";
            echo "<th scope='col'>texto</th>";
            echo "</div>";
            echo "</tr>";
            echo "</thead>";
        
        
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo  " <td> {$linha['id']} </td>  <td> {$linha['nome']}  </td> <td> {$linha['email']} </td> <td> {$linha['telefone']} </td> <td> {$linha['texto']} </td>";
                echo "</tr>";
            }
        
            echo "</table>";

        // echo "<table class='table table-striped table-bordered table-condensed table-hover' style='width: 900px !important';>";
        // echo "<thead>";
        // echo "<tr>";
        // echo "<div class='thead'>";
        // echo "<th scope='col'>ID</th>";
        // echo "<th scope='col'>Nome</th>";
        // echo "<th scope='col'>email</th>";
        // // echo "<th scope='col'>telefone</th>";
        // // echo "<th scope='col'>texto</th>";
        // // echo "</div>";
        // // echo "</tr>";
        // // echo "</thead>";
    
    
        // while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        //     echo "<tr>";
        //     echo  " <td> {$linha['id']} </td>  <td> {$linha['nome']}  </td> <td> {$linha['email']} </td> <td> {$linha['telefone']} </td> <td> {$linha['texto']} </td>";
        //     echo "</tr>";
        // }
    
        // echo "</table>";
  
        

        
    
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
