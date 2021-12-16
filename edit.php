<?php
      include_once('config.php');
      
      if(!empty($_GET['id']))
     {

        $id = $_GET['id'];   
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
          while($user_data = mysqli_fetch_assoc($result))
          {
            $Nome = $user_data['Nome'];
            $Senha = $user_data['Senha'];
            $Email = $user_data['Email'];
            $CPF = $user_data['CPF'];
            $Apartamento = $user_data['Apartamento'];
            $Veiculo = $user_data['Veiculo'];
            $Placa = $user_data['Placa'];
             
          }
        }
        else
        {
          header('Location: crud.php');
        }
     }
     else
     {
       header('Location: crud.php');
     }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Formulario CRSA </title>
    <link rel="stylesheet" href="modelostyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
  <div class="container">
    <div class="cover">
      <div class="front">
        <div class="text">
      <div class="back">
        <div class="text">
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
            <div class="input-boxes">
              </div>
                  <div class="input-box">
              <div class="button input-box">
            </div>
        </form>
      </div>
        <div class="signup-form">
        </head>
<body>
<div class="d-flex">
   <a href="crud.php"><i class="fas fa-arrow-left"></i></a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
          <div class="title">Cadastro de Moradores</div>
          <br>
            <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="Nome" id="Nome" placeholder="Nome Completo" class="inputUser" value="<?php echo $Nome ?>" required>
                <label for="Nome" class="labelInput"> </label>
                </div>
            <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="text" name="Senha" id="Senha" placeholder="Senha" class="inputUser" value="<?php echo $Senha ?>" required>
                <label for="Senha" class="labelInput"> </label>
          </div>
            <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="" name="Email" id="Email" placeholder="Email" class="inputUser" value="<?php echo $Email ?>" required>
                    <label for="Email" class="labelInput"></label>
          </div>
            <div class="input-box">
              <i class="fas fa-wallet"></i>
              <input type="CPF" name="CPF" id="CPF" placeholder="CPF" class="inputUser" value="<?php echo $CPF ?>" required>
                    <label for="CPF" class="labelInput"></label>
          </div>
            <div class="input-box">
              <i class="fas fa-house-user"></i>
              <input type="Apartamento" name="Apartamento" id="Apartamento" placeholder="Apartamento" class="inputUser" value="<?php echo $Apartamento ?>" required>
                    <label for="Apartamento" class="labelInput"></label>
          </div>

            <div class="input-box">
              <p>Você possui algum veiculo?</p>
              </div>
              <input type="radio" id="Não" name="Veiculo" value="Não" <?php echo ($Veiculo == 'Não') ? 'checked' : '' ?> required>
              <label for="Não">Não</label>
          </div>
              <input type="radio" id="Sim" name="Veiculo" value="Sim" <?php echo ($Veiculo == 'Sim') ? 'checked' : '' ?> required>
                <label for="Sim">Sim</label>
          </div>
              <br>
              <div class="inputBox">    
              <p>Insira abaixo a placa do veiculo.</p>
                <i class="fas fa-gas-pump"></i>
                <input type="option" id="Sim" name="Placa" placeholder="Caso não possua deixe em branco." value="<?php echo $Placa ?>">
                <label for="Caso não possua deixe em branco."></label>  
          <div class="button input-box">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update" value="Enviar">
          </div>
              <div class="text sign-up-text">Já tem uma conta? <a href="login.php">Conecte-se agora</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>          