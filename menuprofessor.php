<?php
include('protect.php');
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


/*perfil*/
.profile-info {
  position: relative;
  display: inline-block;
}

.arrow {
  display: inline-block;
  cursor: pointer;
  font-size: 12px;
  margin-left: 5px;
}

.info-box {
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #fff;
  border: 1px solid #ccc;
  padding: 10px;
  display: none;
  z-index: 1;
}

.profile-info:hover .info-box {
  display: block;
}



</style>
<body>
	<section>
		<header>
			<h2> <a href="index.php" class="logo"><img src="img/logoazul.png"></a></h2>
			<div class="navigation">
				<a href="salas.php">Horários</a>| Professor: <?php echo $_SESSION['User']; ?>
        <div class="profile-info">
  <span class="arrow">&#9660;</span>
  <div class="info-box">
    <p><strong>NIF:</strong> <?php echo $_SESSION['NifProf']; ?></p>
    
  </div>
</div>
                <br>
				<br>
                <a id="btn_sair" href="logout_professor.php">Sair</a>			
</div>		
	</header>
	<div class="content">
		<div class="info">
			<h2>Menu Professor</h2>
			<br>
			<button><a href="salas.php">Consultar Horário</a></button>
</div>
</div>
</section>
</body>
</html>
