<?php

$frutas = ["Maçã", "Banana", "Laranja", "Manga", "Abacaxi"];

foreach ($frutas as $fruta) {
    echo $fruta . "\n";
}

$frutas[] = "Uva";
print_r($frutas);

sort($frutas);
print_r($frutas);

$produto = [
    "nome" => "Teclado",
    "preco" => 120.50,
    "estoque" => 15
];

foreach ($produto as $chave => $valor) {
    echo "$chave: $valor\n";
}

$produto["preco"] = 150.00;

foreach ($produto as $chave => $valor) {
    echo "$chave: $valor\n";
}

$unidades = 5;
$valor_total = $produto["preco"] * $unidades;
echo "Valor total da venda de $unidades unidades: R$ $valor_total\n";

$nomes = ["Teclado", "Mouse", "Monitor"];
$precos = [150.00, 80.00, 1200.00];

$produtos = array_combine($nomes, $precos);
print_r($produtos);

$numeros = [10, 20, 30, 40, 50];

$soma = array_sum($numeros);
$media = $soma / count($numeros);

echo "Soma: $soma\n";
echo "Média: $media\n";

?>