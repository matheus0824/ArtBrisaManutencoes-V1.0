<?php
require_once 'conexao.php';
include 'header.php';
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
        echo " <a href='excluir.php?id=" . $equipamentoIndividual['id'] . "'>Excluir</a> |";

        echo " <a href='editar.php?id=" . $equipamentoIndividual['id'] . "'>Editar</a>";
        echo "</td>";

    echo "</tr>";
};

echo "</table>";

?>




