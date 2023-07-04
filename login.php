
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<style>
    .login form{
  width: 100%;
  color: white;
  display: flex;
  flex-direction: column;
}

.login input{
  padding-left: 10px;
  color: white;
  border-radius: 8px;
  height: 45px;
  border: none;
  background-color: #252A34;
  margin-top: 10px;
}

.area-login{
  display: flex;
  align-items: center;
  height: 60vh;
  justify-content: center;
  align-items: center;
  
}

.login{
  align-items: center;
  flex-direction: column;
  display: flex;
  background-color: #F8F8FF;
  width: 355px;
  height: 440px;
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


 
    </style>
<body>
<header>
			<h2> <a href="index.php" class="logo"><img src="img/logoazul.png"></a></h2>
			<div class="navigation">
				<a href="login_professor.php">Professor</a>
				
				
        
				
			<div>
	</header>
    <section class="area-login">
        <div class="login">
        <div class="texto_form">
                Admin
                
            </div>
            <form action='verificar.php' method='POST'>
                <input type='text' name='User' placeholder='Utilizador'><br>
                <input type='password' name='Pass' placeholder='Password'><br>
                <input type='submit' value='Entrar'>
                
            </form>
            

            
</div>
        </body>

</html>