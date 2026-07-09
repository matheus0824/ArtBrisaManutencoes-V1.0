<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'header.php';
    ?>    


    <form action="inserir.php" method="post">
        <input type="text" name="num_maquina" placeholder="Digite o ID da máquina">

        <select name="tipo_equipamento">
            <option value="Climatizador">Climatizador 160/170</option>
            <option value="Exaustor">Exaustor</option>
            <option value="Portátil">Portátil</option>
        </select>

        <input type="date" name="status">

        <button type="submit">Cadastrar</button>

    </form>
    
</body>
</html>