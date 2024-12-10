<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['usuario']['nome']; ?>!</h1>
    <a href="logout.php">Sair</a>
    <a href="usuarios.php">Gerenciar Usuários</a>
    <a href="produtos.php">Gerenciar Produtos</a>
</body>
</html>
