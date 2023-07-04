<?php
include('ligabd.php');

if(isset($_POST['User']) || isset($_POST['Pass'])) {

    if(strlen($_POST['User']) == 0) {
        echo "Preencha o campo Utilizador";
    } else if(strlen($_POST['Pass']) == 0) {
        echo "Preencha o campo Password";
    } else {

        $user = $mysqli->real_escape_string($_POST['User']);
        $pass = $mysqli->real_escape_string($_POST['Pass']);

        $sql_code = "SELECT * FROM administrador WHERE User = '$user' AND Pass = '$pass'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['User'] = $usuario['User'];
            $_SESSION['Pass'] = $usuario['Pass'];

            header("Location: administrador.php");

        } else {
            echo "Falha ao entrar! Utlizador ou Password incorretos";
        }

    }

}
?>