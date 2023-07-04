<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['User'])) {
    die("Não possível acessar esta página pois não está logado.<p><a href=\"login.php\">Entrar</a></p>");
}


?>