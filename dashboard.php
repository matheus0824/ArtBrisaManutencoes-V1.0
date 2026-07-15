<?php
require_once 'config/conexao.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

$stmt = $conexao->prepare("SELECT * FROM equipamentos ORDER BY status DESC, id DESC");

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
echo    "</tr>";



foreach ($equipamentos as $equipamentoIndividual) {
    $data_manutencao = new DateTime($equipamentoIndividual['status']);
    $hoje = new DateTime();

    $diferenca = $data_manutencao->diff($hoje);

    $total_meses = ($diferenca->y * 12) + $diferenca->m;

    if ($total_meses >= 3) {
        $classe_bolinha = "vermelha";
    } else {
        $classe_bolinha = "verde";
    }

    $data_formatada = $data_manutencao->format('d/m/Y');

    echo "<tr>";

    echo "<td>" . $equipamentoIndividual['num_maquina'] . "</td>";

    echo "<td>" . $equipamentoIndividual['tipo_equipamento'] . "</td>";


    echo "<td>
        <div class='status-container'>
            <span class='bolinha $classe_bolinha'></span>
            $data_formatada
        </div>
    </td>";
    

    echo "</tr>";
};

echo "</table>";

?>




