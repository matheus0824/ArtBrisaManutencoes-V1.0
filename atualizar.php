<?php
require_once 'conexao.php';

$id = $_POST['id'];
$num_maquina = $_POST['num_maquina'];
$tipo_equipamento = $_POST['tipo_equipamento'];
$status = $_POST['status'];

$stmt = $conexao->prepare("UPDATE equipamentos SET num_maquina = :num_maquina, tipo_equipamento = :tipo_equipamento, status = :status WHERE id = :id");

$stmt->execute([
    'id' => $id,
    'num_maquina' => $num_maquina,
    'tipo_equipamento' => $tipo_equipamento,
    'status' => $status
    ]);

    header("Location: listar.php");
    exit();