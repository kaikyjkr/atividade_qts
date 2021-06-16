<?php

$db = 'ecommerce';
$user = 'root';
$pass = '';

try
{
    $conexao = new PDO("mysql:host=localhost; dbname=$db", "$user", "$pass");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
}
catch (PDOException $erro)
{
    echo "Erro de conexão:" . $erro->getMessage();
}
?>