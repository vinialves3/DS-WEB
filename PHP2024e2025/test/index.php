<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #6e7c7e, #4b5867);
}

/* Estilo para o container de login */
.login-container {
    width: 100%;
    max-width: 400px;
    background-color: #2c3e50;
    border-radius: 10px;
    padding: 40px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
}

/* Estilo do título */
h2 {
    color: white;
    margin-bottom: 20px;
    font-size: 24px;
}

/* Estilo para os campos de input */
.input-group {
    margin-bottom: 20px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 15px;
    background-color: #34495e;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
    transition: background-color 0.3s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
    background-color: #1abc9c;
    outline: none;
}

/* Estilo do botão de login */
.login-btn {
    width: 100%;
    padding: 15px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.login-btn:hover {
    background-color: #2980b9;
}
    </style>
</head>

<body>
    <div class="clientes">
        <h2>Cadastro</h2>
        <form action="root.php" method="POST">
            <label for="nome-cliente">Nome:</label>
            <input type="text" id="nome-cliente" name="nome" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>