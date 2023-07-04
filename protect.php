<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['NifProf'])) {
    die("Não possível acessar esta página pois não está logado.<p><a href=\"login_professor.php\">Entrar</a></p>");
}


?>