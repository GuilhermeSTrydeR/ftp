<?php

$db="localhost";
$user="root";
$pass="";
$banco="ftp";

global $pdo;

try{
    $pdo = new PDO("mysql:dbname=".$banco."; host".$db, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->query("SELECT * FROM usuarios");
    $sql->execute();

    // verificar o numero de registro cadastrados no banco
    // echo $sql->rowCount();

}catch(PDOException $e){
    echo "<h4>ERRO: ".$e->getMessage()."</h4>";
    exit;

}




?>