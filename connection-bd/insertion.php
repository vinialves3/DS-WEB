<?php

    // Incluindo conexão com BD
    include_once("connection.php");


    $id = $_POST['id']
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $estoque = $_POST['estoque'];


    // Iniciando a inserção dos BDs
    $sql = "INSERT INTO produto (id, nome, valor, estoque) VALUES ('$id', '$nome','$valor', '$estoque')";
    if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('location: index.php');
    } else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
    }
    ?>