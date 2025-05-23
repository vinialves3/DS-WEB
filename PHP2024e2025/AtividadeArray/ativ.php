<?php


    /* PRIMEIRA ATIVIDADE */
    $estado[] = "Abacaxi";
    $estado[] = "Caqui";
    $estado[] = "Bergamota";
    $estado[] = "Fruta do Conde";
    $estado[] = "Mangostão";


    foreach ($estado as $itemvetor) {
        echo "$itemvetor";
    }


    $estado[] = "Jabuticaba";
echo "Array atualizado:";
foreach ($estado as $itemvetor) {
    echo "$itemvetor";
}


    sort($estado);
echo "Array ordenado em ordem alfabética:";
foreach ($estado as $itemvetor) {
    echo "$itemvetor";
}



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


$produtos_precos = array_combine($produtos, $precos);
print_r($produtos_precos);

$cores = ["vermelho", "azul", "verde", "amarelo", "preto"];


if (in_array("verde", $cores)) {
    echo "A cor verde está presente no array.";
} else {
    echo "A cor verde não está presente no array.";
}

$numeros = [10, 20, 30, 40, 50];


$soma = array_sum($numeros);


echo "A soma de todos os números é: $soma";


?>