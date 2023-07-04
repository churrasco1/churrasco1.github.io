<?php
$nifprof=$_POST['NifProf'];
$morada=$_POST['Morada'];
$telemovel=$_POST['Telemovel'];
$email=$_POST['Email'];
$codpostal=$_POST['Codpostal'];
$user=$_POST['User'];

//liga e seleciona a base de dados
include('ligabd.php');

//inicio das açoes sobre a BD
$existe="select * from professor where NifProf='".$nifprof."'";
$faz_existe=mysqli_query($mysqli, $existe);
$jaexiste=mysqli_num_rows($faz_existe);

//verificar de esta registado
if($jaexiste==0) {
    $insere="insert into professor values('".$nifprof."', '".$morada. "', '".$telemovel. "', '".$email. "', '".$codpostal. "', '".$user. "') ";
    $faz_insere=mysqli_query($mysqli, $insere);
    echo "Contacto registado com sucesso";
    echo '<br><a href="login_professor.php">Login</a>';
}

else {  
    echo "o contacto já se encontra registado!";
    echo '<br><a href="login_professor.php">Login</a>';
}
?>