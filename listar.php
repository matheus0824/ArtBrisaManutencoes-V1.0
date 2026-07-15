<?php
require_once 'config/conexao.php';
include 'includes/header.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

$stmt = $conexao->prepare("SELECT * FROM equipamentos");

$stmt->execute();

$equipamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="style.css">

<?php
echo "<table>";
echo    "<tr>";
echo        "<th>Nº da Máquina</th>";
echo        "<th>Tipo Equipamento</th>";
echo        "<th>Data da última limpeza</th>";
echo        "<th>Ações</th>";
echo    "</tr>";



foreach ($equipamentos as $equipamentoIndividual) {
    echo "<tr>";

    echo "<td>" . $equipamentoIndividual['num_maquina'] . "</td>";
    echo "<td>" . $equipamentoIndividual['tipo_equipamento'] . "</td>";
    echo "<td>" . date('d/m/Y', strtotime($equipamentoIndividual['status'])). "</td>";
    
    echo "<td>";
        echo "<a href='excluir.php?id=" . $equipamentoIndividual['id'] . "' class='btn-acao btn-excluir'><img src='img/lixeira.png' alt='Excluir'></a>";

      echo "<a href='editar.php?id=" . $equipamentoIndividual['id'] . "' class='btn-acao btn-editar'><img src='img/editar.png' alt='Editar'></a>";

    echo "</tr>";
};

echo "</table>";

?>




