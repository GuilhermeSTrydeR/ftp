<center style="margin-left: 100px; margin-top: 100px !important;">
<?php

    if(!isset($_SESSION['logado']) || $_SESSION['permissao'] != '1'){

        header("Location: /");

    }

    echo "<h4>comum</h4>";
    echo "<br>";
    echo "Permissão: " . $_SESSION['permissao'];
    echo "<br>";
    echo gettype($_SESSION['permissao']);
    echo "<br>";
    echo $_SESSION['tempo'];

?>

</center>
