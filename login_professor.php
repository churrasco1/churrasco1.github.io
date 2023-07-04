<?php 


session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login</title>
</head>

<style>
    .loginprof form{
  width: 100%;
  color: white;
  display: flex;
  flex-direction: column;
}

.loginprof input{
  padding-left: 10px;
  color: white;
  border-radius: 8px;
  height: 45px;
  border: none;
  background-color: #252A34;
  margin-top: 10px;
}

.area-loginprof{
  display: flex;
  align-items: center;
  height: 55vh;
  justify-content: center;
  align-items: center;
  
}

.loginprof{
  align-items: center;
  flex-direction: column;
  display: flex;
  background-color: #F8F8FF;
  width: 355px;
  height: 380px;
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
				
</div>
	</header>
    <section class="area-loginprof">
        <div class="loginprof">
            <div class="texto_form">
                Login
            </div>
            <form action='verificar_professor.php' method='POST'>
                <input type='text' name='NifProf' placeholder='Nif'><br>
                <input type='text' name='User' placeholder='Nome de utilizador'><br>
                <input type='submit' value='Entrar'>
                
            </form>
            <br>
            <a href='ler_dados_professor.php'> Registar</a>        
</div>
        </body>
</html>