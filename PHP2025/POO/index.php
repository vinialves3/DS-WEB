<?php

$usuario = "aluno";
$senha = "sesi";

if ( $usuario == "aluno"  &&  $senha == "sesi" ) {
    echo "Login efetuado com sucesso!";
} else{
    echo "O login não pôde ser efetuado";
}

echo "<br><br><button onclick='history.back()'>Voltar</button>";