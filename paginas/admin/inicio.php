<center style="margin-left: 100px; margin-top: 100px !important;">

    
    <?php

        if(!isset($_SESSION['logado']) || $_SESSION['permissao'] != '3'){
        
            header("Location: /");
        
        }
        
       

        echo time();

        echo "<br>";
        echo $_SESSION['tempo'];
        

        if($_SESSION['tempo'] <= time()){

            echo "<h4>NEGADO</H4>";

        }
        else{

            echo "<h4>PERMITIDO</H4>";

        }
       
 
?>

</center>
