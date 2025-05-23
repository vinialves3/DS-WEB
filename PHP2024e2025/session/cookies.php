<?php   
    setcookie("usuario", "Alves", time() + 7*24*(60*60), '/');



    setcookie("usuarioAntigo", "Alvess", time() + 7*24*(60*60), '/');
    print_r($_COOKIE);
?>
