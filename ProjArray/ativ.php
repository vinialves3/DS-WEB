<?php


    /* 1 */ 
    $estado[] = "Abacaxi";
    $estado[] = "Caqui";
    $estado[] = "Bergamota";
    $estado[] = "Fruta do Conde";
    $estado[] = "Mangostão";

    /* 2 */ 
    foreach ($estado as $itemvetor) {
        echo "$itemvetor";
    }
    /* 3 */ 
    $estado[] = "Jabuticaba";
echo "Array atualizado:";
foreach ($estado as $itemvetor) {
    echo "$itemvetor";
}

    /* 4 */
    sort($estado);
echo "Array ordenado em ordem alfabética:";
foreach ($estado as $itemvetor) {
    echo "$itemvetor";
}


    /* 5 */ 
echo "Informações do produto:";
$produto = ["nome" => "Teclado", "preco" => 120.50, "estoque" => 15];
foreach ($produto as $chave => $valor) {
    echo "$chave: $valor<br>";
}

echo "Atualizando o preço do produto:";
$produto["preco"] = 150.75;


echo "Informações atualizadas do produto:";
foreach ($produto as $chave => $valor) {
    echo "$chave: $valor<br>";
}

$unidades = 5;
$valor_total = $produto["preco"] * $unidades;
echo "Valor total para a venda de 5 unidades: R$ $valor_total";


$combinacao = array_slice($produtos,$precos);
print_r($combinacao);

$cores = ["vermelho", "azul", "verde", "amarelo", "preto"];

// Verificar se a cor "verde" está no array
if (in_array("verde", $cores)) {
    echo "A cor verde está presente no array.";
} else {
    echo "A cor verde não está presente no array.";
}

$numeros = [10, 20, 30, 40, 50];

// Calcular a soma
$soma = array_sum($numeros);

// Exibir o resultado
echo "A soma de todos os números é: $soma";
?>


?>