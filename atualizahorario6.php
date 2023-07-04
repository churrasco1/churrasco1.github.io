<?php
include('ligabd.php');

$Nrsala= $_POST['Nrsala'];
$Codhora= $_POST['Codhora'];
$segunda= $_POST['segunda'];
$terca= $_POST['terca'];
$quarta= $_POST['quarta'];
$quinta= $_POST['quinta'];
$sexta= $_POST['sexta'];

$sql="UPDATE horarios1 SET segunda='$segunda', terca='$terca', quarta='$quarta', 
quinta='$quinta', sexta='$sexta' WHERE Nrsala='$Nrsala' AND Codhora LIKE '12:40-13:25'";
 if(mysqli_query($mysqli, $sql)) {
        echo "<p>Atualizado com sucesso!";
        echo "<p><a href='administrador.php'>Voltar</a>";
    } else {
        echo "Erro ao atualizar os dados: " . mysqli_error($mysqli);
    }
?>

