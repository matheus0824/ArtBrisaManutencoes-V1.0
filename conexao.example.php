<?php
$host = "localhost";
$db   = "NOME_DO_BANCO_AQUI"; 
$user = "SEU_USUARIO_AQUI";   
$pass = "SUA_SENHA_AQUI";     

try {
    $conexao = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados.";
}