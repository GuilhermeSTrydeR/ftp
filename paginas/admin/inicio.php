<center style="margin-left: 100px; margin-top: 100px !important;">

    
    <?php

        if(!isset($_SESSION['logado']) || $_SESSION['permissao'] != '3'){
        
            header("Location: /");
        
        }
        
        $dataCadastro = gmdate("YmdHis", time());


    ?>
       
</center>
