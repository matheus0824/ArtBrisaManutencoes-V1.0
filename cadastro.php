<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'includes/header.php';
    ?>  

<div class="cadastro-container">
    <h2>Cadastro de Equipamentos</h2>

    <form action="inserir.php" method="post">
        
    <div class="campo-grupo">
        <label> ID da Máquina:</label>
        <input type="text" name="num_maquina" placeholder="Digite o ID da máquina">
    </div>
    
        <div class="campo-grupo">
            <label>Tipo de Equipamento:</label>
        <select name="tipo_equipamento">
            <option value="Climatizador">Climatizador 160/170</option>
            <option value="Exaustor">Exaustor</option>
            <option value="Portátil">Portátil</option>
        </select>
        </div>

        <div class="campo-grupo">
        <label>Data da última limpeza:</label>
        <input type="date" name="status" placeholder="Digite a data da última limpeza">
        </div>

        <button type="submit">Cadastrar</button>

    </form>
</div>

    
    
</body>
</html>