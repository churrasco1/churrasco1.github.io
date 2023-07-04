<?php
include('ligabd.php');

if(isset($_POST['NifProf']) || isset($_POST['User'])) {

    if(strlen($_POST['NifProf']) == 0) {
        echo "Preencha o campo NIF";
    } else if(strlen($_POST['User']) == 0) {    
        echo "Preencha o campo Utilizador";
    } else {

        $nifprof = $mysqli->real_escape_string($_POST['NifProf']);
        $user = $mysqli->real_escape_string($_POST['User']);

        $sql_code = "SELECT * FROM professor WHERE NifProf = '$nifprof' AND User = '$user'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['NifProf'] = $usuario['NifProf'];
            $_SESSION['User'] = $usuario['User'];

            header("Location: menuprofessor.php");

        } else {
            echo "Falha ao entrar! NIF ou Utilizador incorretos";
        }
    }
}
?>