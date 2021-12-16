<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Formulario de Login (CSRA)</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/condominio.png" >
        <div class="text">
          <span class="text-1">Seja muito <br> Bem-Vindo ao <br> Condominio Residencial <br> Santa Amelia!</span>
          <span class="text-2">Vamos nos conectar</span>
        </div>
        <div class="text">	
        </div>
      </div>
    </div>
    <form action="testlogin.php" method="POST">
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="Email" placeholder="Digite seu email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="Senha" placeholder="Digite sua senha" required>
              </div>
              <!-- <div class="text"><a href="#">Esqueceu a senha?</a></div> -->
              <div class="button input-box">
                <input type="submit" name="submit" value="Enviar">
              </div>
              <div class="text sign-up-text">Não tem uma conta? <a href="modelo.php"> Cadastre-se agora</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>