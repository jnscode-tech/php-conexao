<?php
$host = "localhost";
$banco= "biblioteca2";
$usuario="root";
$senha="usbw";
 
try {
    $pdo = new PDO("mysql:host=127.0.0.1;port=3310;dbname=$banco;charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexão realizada com sucesso!";
} catch (PDOException $e) {
    die("Erro ao conectar: ".$e->getMessage());
}
 
?>