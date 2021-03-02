<center style="margin-left: 100px; margin-top: 100px !important;">

    
    <?php

        if(!isset($_SESSION['logado']) || $_SESSION['permissao'] != '3'){
        
            header("Location: /");
        
        }
        
        $dataCadastro = gmdate("YmdHis", time());

        

        echo time();

        echo "<br>";
        echo $_SESSION['tempo'];
        echo "<br>";
        echo $_SESSION['nome'];
        echo "<br>";
        echo $dataCadastro;
        echo "<br>";
        echo "ID: " . $_SESSION['id'];
       
        

        if($_SESSION['tempo'] <= time()){

            echo "<h4>NEGADO</H4>";

        }
        else{

            echo "<h4>PERMITIDO</H4>";

        }
       
 
?>

</center>
