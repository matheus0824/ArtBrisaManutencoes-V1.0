<?php
require_once "conexao.php";

$num_maquina = $_POST['num_maquina'];
$tipo_equipamento = $_POST['tipo_equipamento'];
$data_limpeza = $_POST['status'];

$sql = "INSERT INTO equipamentos (num_maquina, tipo_equipamento, status) VALUES (:num_maquina, :tipo, :status)";

$stmt = $conexao->prepare($sql);

$stmt->execute([
    ':num_maquina' =>$num_maquina,
    ':tipo' => $tipo_equipamento,
    ':status' => $data_limpeza
]);

header("Location: cadastro.php?sucesso=1");
exit;