<?php
session_start();
include "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($result);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario'] = $usuario;
        setcookie("usuario_nome", $usuario['nome'], time() + (86400 * 30), "/");
        header("Location: index.php");
        exit();
    } else {
        $erro = "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
        <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
    </form>
</body>
</html>