<?php
require_once 'config/conexao.php';
include 'includes/header.php';
?>

<div class="cadastro-container">
    <form action="inserir_produto.php" method="POST" enctype="multipart/form-data">

<div class="campo-grupo">
        <label> Nome do Produto:</label>
        <input type="text" name="nome_produto" placeholder="Digite o ID da máquina">
    </div>
    
        <div class="campo-grupo">
            <label>Tipo de Equipamento:</label>
        <select name="tipo_equipamento">
            <option value="limpeza">Limpeza</option>
            <option value="pecas_menores">Peças Menores</option>
            <option value="pecas_maiores">Peças Maiores</option>
        </select>
        </div>

        <div class="campo-grupo">
        <label>Foto do Produto:</label>
        <input type="file" name="foto" accept="image/*">
        </div>

        <button type="submit">Cadastrar</button>
    </form>
</div>