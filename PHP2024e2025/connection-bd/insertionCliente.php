<?php

include_once("connection.php");


    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];


    // Iniciando a inserção Cliente
    $sql = "INSERT INTO cliente (id, nome, email) VALUES ('$id', '$nome','$email')";
    if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('location: index.php');
    } else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
    }
    ?>