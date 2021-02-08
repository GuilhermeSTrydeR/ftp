<?php
    session_start();
?>

<center style="margin-left: 100px;">

    <h4>comum</h4>
<?php

    
    echo $_SESSION['permissao'];
    echo "<br>";
    echo session_status();


?>


</center>
