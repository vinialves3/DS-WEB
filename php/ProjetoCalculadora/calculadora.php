<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form method="post" action="">
        <label>Primeiro valor</label><br> <!-- INSERÇÃO PRIMEIRO VALOR -->
            <input type="number" name="valor1" required><br>

        <label>Segundo valor</label><br> <!-- INSERÇÃO TERCEIRO VALOR -->
            <input type="number" name="valor2" required><br>

        <select name="operacao"> <!-- INSERÇÃO OPERAÇÃO COM OPÇÕES -->
            <option value="">Selecione</option> <!-- OPÇÃO SEM VALOR POIS É NEUTRA -->
                <option value="adi">Adição</option>
                    <option value="sub">Subtração</option>
                        <option value="mult">Multiplicação</option>
                            <option value="div">Divisão</option>
                                </select>
        
        <input type="reset" name="Limpar"> <!-- CRIAÇÃO BOTÃO RESET -->
            <input type="submit" value="Calcular"> <!-- CRIAÇÃO BOTÃO CALCULAR -->
                </form>

    <?php
    if ($_SERVER["PHP_SELF"] == "POST") { 
        $valor1 = (int) $_POST['valor1']; /* ATRIBUIÇÃO VARIÁVEIS */
            $valor2 = (int) $_POST['valor2'];
                $operacao = $_POST['operacao'];
                    $resultado = 0;

        switch ($operacao) { /* SWITCH PARA SELEÇÃO DE OPERAÇÃO A SER EFETUADA (ADIÇÃO) */
            case "adi":
                $resultado = $valor1 + $valor2;
                break;

                    case "sub": /* SWITCH PARA SELEÇÃO DE OPERAÇÃO A SER EFETUADA (SUBTRAÇÃO) */
                        $resultado = $valor1 - $valor2;
                            break;

                                case "mult": /* SWITCH PARA SELEÇÃO DE OPERAÇÃO A SER EFETUADA (MULTIPLICAÇÃO) */
                                    $resultado = $valor1 * $valor2;
                                        break;

                                            case "div": /* SWITCH PARA SELEÇÃO DE OPERAÇÃO A SER EFETUADA (DIVISÃO) */
                                                if ($valor2 != 0) {
                                                    $resultado = $valor1 / $valor2;
                                                        } else {
                                                            $resultado = "ERRO."; /* MENSAGEM DE ERRO CASO HAJA DIVISÃO COM ZERO */
                                                                }
                                                                    break;
                                                                            }
        echo "Resultado: " . $resultado; /* ORINT DO RESULTADO */
    }
    ?>
</body>
</html>