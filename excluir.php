<?php
require_once 'config/conexao.php';

$id = $_GET['id'];

$stmt = $conexao->prepare("DELETE FROM equipamentos WHERE id = :id");
$stmt->execute(['id' => $id]);

header("Location: listar.php");
exit();