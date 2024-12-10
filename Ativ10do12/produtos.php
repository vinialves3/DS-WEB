<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
include "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $query = "INSERT INTO produtos (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
    mysqli_query($conexao, $query);
}

$query = "SELECT * FROM produtos";
$result = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gerenciar Produtos</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <textarea name="descricao" placeholder="Descrição" required></textarea>
        <input type="number" step="0.01" name="preco" placeholder="Preço" required>
        <button type="submit">Cadastrar</button>
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
        </tr>
        <?php while ($produto = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $produto['id']; ?></td>
            <td><?php echo $produto['nome']; ?></td>
            <td><?php echo $produto['descricao']; ?></td>
            <td><?php echo $produto['preco']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>