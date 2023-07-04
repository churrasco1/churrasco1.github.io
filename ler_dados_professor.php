<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Registar</title>
</head>
<style>
    .registoprof form{
  width: 100%;
  color: white;
  display: flex;
  flex-direction: column;
}

.registoprof input{
  padding-left: 10px;
  color: white;
  border-radius: 8px;
  height: 45px;
  border: none;
  background-color: #252A34;
  margin-top: 10px;
}

.area-registoprof{
  display: flex;
  align-items: center;
  height: 82vh;
  justify-content: center;
  align-items: center;
  
}

.registoprof{
  align-items: center;
  flex-direction: column;
  display: flex;
  background-color: #F8F8FF;
  width: 355px;
  height: 690px;
  padding: 35px;
}



input::placeholder{
  font-size: 16px;
  
}

form [type="submit"] {
  background-color: #38baad;
  display: block;
  font-size: 15px;
  font-weight: bold;
}

p{
  color: #252A34; 
}
   </style>



<body>
<header>
			<h2> <a href="index.php" class="logo"><img src="img/logoazul.png"></a></h2>
			<div class="navigation">
				<a href="login.php">Admin</a>
				<a href="">Horários</a>
			<div>
	</header>
    <section class="area-registoprof">
        <div class="registoprof">
        <div class="texto_form">
              
                Registar
                <!-- <img src="img/logo.png"> -->
            </div>
            <form action='registar_professor.php' method='POST'>
                <input type='number' name='NifProf' placeholder='NIF'><br>
                <input type='text' name='Morada' placeholder='Morada'><br>
                <input type='number' name='Telemovel' placeholder='Número de telemóvel'><br>
                <input type='text' name='Email' placeholder='Email'><br>
                <input type='text' name='Codpostal' placeholder='Código Postal'><br>
                <input type='text' name='User' placeholder='Utilizador'><br>
               
                
                <input type='submit' value='Registar'>
                
            </form>
            <br>
            <a href='login_professor.php'> Login</a>
</div>
        </body>

</html>