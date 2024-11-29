<?php
session_start();

// Destrói a sessão
session_unset();
session_destroy();

// Remove cookies
setcookie('login', '', time() -3600, '/');
setcookie('senha', '', time() -3600, '/');
setcookie(session_name(), '', time() -3600, '/');

header('Location: index.php');
exit();
?>