<?php
require_once 'config/conexao.php';

$name = $_POST['nome_produto'];
$categoria = $_POST['tipo_equipamento'];

$nome_foto_unico = time() . '_' . $_FILES['foto']['name'];
$caminho_final = 'uploads/' . $nome_foto_unico;

move_uploaded_file($_FILES['foto']['tmp_name'], $caminho_final);

$sql = "INSERT INTO produtos_catalogo (nome, categoria, foto) VALUES (:nome, :categoria, :foto)";
$stmt = $conexao->prepare($sql);

$stmt->execute([':nome' => $name, ':categoria' => $categoria, ':foto' => $caminho_final]);

header('Location: listar_produtos.php');
?>