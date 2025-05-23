<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection DB </title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .form-container {
            display: flex;
            gap: 20px;
            justify-content: space-between;
        }

        form {
            background-color: #fff;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 45%;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="int"],
        input[type="float"],
        input[type="varchar"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>


    <!-- CADASTRO CLIENTE -->
<form action='insertionProduto.php' method="POST">
    <label> ID </label>
    <input type="int" name="id" required>
    <br>
    <label> Nome </label>
    <input type="text" name="nome" required>
    <br>
    <label> Valor </label>
    <input type="float" name="valor" required>
    <br>
    <label> Estoque </label>
    <input type="inteiro" name="estoque" required>
    <br>
    <input type="submit">
</form>
    <br> <br> <br>


    <!-- CADASTRO CLIENTE -->
<form action='insertionCliente.php' method="POST">
    <label> ID </label>
    <input type="int" name="id" required>
    <br>
    <label> Nome </label>
    <input type="varchar" name="nome" required>
    <br>
    <label> Email </label>
    <input type="varchar" name="email" required>
    <br>
    <input type="submit">
</form>
    <br> <br> <br>

    <?php

    include_once('connectionPC.php');

    // Exibir dados dos produtos
    $sql = "SELECT * FROM produto ORDER BY id ASC";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) > 0) {
        echo "<h2>Produtos</h2>";
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<br>";
            echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . " - Valor: " . $linha['valor'] . " - Estoque: " . $linha['estoque'];
        }
    } else {
        echo "<h2>Produtos</h2>";
        echo "Nenhum registro encontrado.";
    }

    // Exibir dados dos clientes
    $sql = "SELECT * FROM cliente ORDER BY id ASC";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) > 0) {
        echo "<h2>Clientes</h2>";
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . " - Email: " . $linha['email'] . "<br>";
        }
    } else {
        echo "<h2>Clientes</h2>";
        echo "Nenhum registro encontrado.";
    }

    ?>
</body>
</html>