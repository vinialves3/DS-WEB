<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>

    <form action="exclusao.php" method="POST">
        <button type="submit" name="exclusao">Encerrar sessão</button>
    </form>

    <form action="" method="POST">
        <button type="submit" name="salvandocookie">Salvar cookies</button>
    </form>

    <?php
    // Lógica PHP após o conteúdo HTML, mas garantido que a sessão seja manipulada antes
    session_start();

    // Exigência 1: Verifique se a sessão ou o cookie já existe
    if (isset($_SESSION['login']) && isset($_SESSION['senha'])) {
        // Exigência 2: Redireciona automaticamente para a página de login se a sessão ou cookie existir
        header('Location: index.php');
        exit();
    }

    $logincerto = 'alves';
    $senhacerta = '123';

    // Se o formulário de login for enviado, verifique as credenciais
    if (isset($_POST['login'])) {
        if ($logincerto == $_POST['login'] && $senhacerta == $_POST['senha']) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['senha'] = $_POST['senha'];
        }
    }

    if (isset($_POST['salvandocookie'])) {
        setcookie('login', $_SESSION['login'], time() + 3600, '/'); // Cookie válido por 1 hora
        setcookie('senha', $_SESSION['senha'], time() + 3600, '/'); // Cookie válido por 1 hora
        echo "Dados salvos nos cookies."; // Mensagem de feedback
    }

    if (isset($_SESSION['login']) && isset($_SESSION['senha'])) {
        echo '<br>';
        echo $_SESSION['login'];
        echo '<br>';
        echo $_SESSION['senha'];
    } else {
        header('Location: index.php');
    }
    ?>

</body>
</html>