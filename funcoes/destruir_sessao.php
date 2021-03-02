<!-- esse script eh usado apenas para destruir a sessao do usuario atual e consequentemente direcionar para  o index do sistema-->
<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: /")
?>