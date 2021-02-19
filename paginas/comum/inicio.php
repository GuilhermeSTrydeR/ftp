<center style="margin-left: 100px; margin-top: 100px !important;">

    <h4>comum</h4>
<?php


echo "<br>";
    echo "Permissão: " . $_SESSION['permissao'];
    echo "<br>";
    echo gettype($_SESSION['permissao']);
    echo "<br>";
    echo "status da sessão: " . session_status();


?>

</center>
