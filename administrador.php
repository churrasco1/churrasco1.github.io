<?php

include('protect_admin.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="CSS/style.css" rel="stylesheet" >
<title>Menu Principal</title>
</head>

<style>
	button {  width: 150px;}

button {
  background-color: #c4968f;
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  transition-duration: 0.4s;
  cursor: pointer;
  margin: 15px 25px;

}

button {
  background-color: white; 
  color: black; 
  border: 2px solid #38baad;
  border-radius: 5.5px;
}

button a {
  color: Black;
  text-decoration: none;
}


button:hover {
  background-color: #38baad;
  color: white;
}


</style>

<body>
  	<section>
		
		<header>
			<h2> <a href="index.php" class="logo"><img src="img/logoazul.png"></a></h2>
			<div class="navigation"> 
                Administrador: <?php echo $_SESSION['User']; ?>
                <a id="btn_sair" href="logout_professor.php">Sair</a>		
</div>		
	</header>
	<div class="content">
		<div class="info">
			<h2>Menu Administrador</h2>
			<br>
			<button><a href="salasadmin.php">Consultar Horário</a></button>
			<button><a href="salaseditar.php">Editar<br>Horário</a></button>
  
      <button><a href="modelopermutas.pdf">Imprimir Ficheiro</a></button>
      
</div>
</div>
</section>
</body>
</html>
