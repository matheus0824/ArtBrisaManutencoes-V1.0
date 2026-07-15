<?php
require_once 'conexao.php';

$id = $_GET['id'];

$stmt = $conexao->prepare("SELECT * FROM equipamentos WHERE id = :id");
$stmt->execute(['id' => $id]);
$equipamento = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <?php
    include 'header.php';
    ?>    

    <div class="cadastro-container">
    <form action="atualizar.php" method="post">
        <h2>Editar Equipamento</h2>

        <div class="campo-grupo">
            <label>ID da Máquina:</label>
            <input type="hidden" name="id" value="<?php echo $equipamento['id']; ?>">
        </div>

        <div class="campo-grupo">
        <input type="text" name="num_maquina" value="<?php echo $equipamento['num_maquina']; ?>" placeholder="Digite o ID da máquina">
        
  <label>Tipo de equipamento:</label>
        <select name="tipo_equipamento">
           
            <option value="Climatizador" <?php echo ($equipamento['tipo_equipamento'] == 'Climatizador') ? 'selected' : ''; ?>>Climatizador 160/170</option>

            <option value="Exaustor" <?php echo ($equipamento['tipo_equipamento'] == 'Exaustor') ? 'selected' : ''; ?>>Exaustor</option>

            <option value="Portátil" <?php echo ($equipamento['tipo_equipamento'] == 'Portátil') ? 'selected' : ''; ?>>Portátil</option>
        </select>
</div>

        <div class="campo-grupo">
        <label>Data da limpeza:</label>
            <input type="date" name="status" value="<?php echo $equipamento['status']; ?>">
        </div>

        <button type="submit">Salvar</button>

    </form>
</div>
        
</body>
</html>