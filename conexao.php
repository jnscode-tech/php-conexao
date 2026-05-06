<?php

$host="localhost";
$banco="biblioteca2";
$usuario="root";
$senha="";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){

    //die - parar a execução do script
    die ("Erro na conexão: " . $e->getMessage());
}
?>
