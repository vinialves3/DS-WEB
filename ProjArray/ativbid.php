<?php 

/* SEGUNDA ATIVIDADE */
    /* PRODUTOS */

$produtos = array(
    array('nomeprod' => 'PinhoSol', 'precinho' => 30000, 'estoqueprod' => 3),
    array('nomeprod' => 'Hersheys', 'precinho' => 0.13, 'estoqueprod' => 5),
    array('nomeprod' => 'GodzillaEnergeticos', 'precinho' => 20, 'estoqueprod' => 7),

foreach ($produtos as $prod) {
    $total = $prod['precinho'] * $prod['estoqueprod'];
    echo 'Produto: ' . $prod['nomeprod'] . ' - Total: ' . $total . '<br><br><br>';
}



/* NOTAS ALUNOS */
$alunos = array(
    array('nome' => 'Ana', 'matematica' => 8, 'portugues' => 7),
    array('nome' => 'Bruno', 'matematica' => 6, 'portugues' => 9),
    array('nome' => 'Carlos', 'matematica' => 7, 'portugues' => 8)
);

foreach ($alunos as $aluno) {
    $total = ($aluno['matematica'] + $aluno['portugues']) / 2;
    echo 'Nome do aluno: ' . $aluno['nome'] . ' - Média do aluno: ' . $total . '<br>';
}



?>