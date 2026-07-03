<?php
require_once 'conexao.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

$stmt = $conexao->prepare("SELECT * FROM equipamentos");

$stmt->execute();

$equipamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($equipamentos as $equipamentoIndividual) {
    echo $equipamentoIndividual['num_maquina'] . " - ";
    echo $equipamentoIndividual['tipo_equipamento'] . " - ";
    echo $equipamentoIndividual['status'] . "<br>";
};





