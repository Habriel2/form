<?php
    include_once('config.php');
     if(isset($_POST['submit'])){
       
        $Nome = $_POST['Nome'];
        $Senha = $_POST['Senha'];
        $Email = $_POST['Email'];
        $CPF = $_POST['CPF'];
        $Apartamento = $_POST['Apartamento'];
        $Veiculo = $_POST['Veiculo'];
        $Placa = $_POST['Placa'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(Nome, Senha, Email, CPF, Apartamento, Veiculo, Placa) 
        VALUES ('$Nome', '$Senha', '$Email', '$CPF', '$Apartamento', '$Veiculo', '$Placa')");

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
                <br>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <div class="text">
        </div>
      </div>
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
    <div class="box">
        <form action="create.php" method="POST">
          <div class="title">Cadastro de Moradores</div>
        <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="Nome" id="Nome" placeholder="Nome Completo" class="inputUser" required>
                <label for="Nome" class="labelInput"> </label>
                </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="Senha" id="Senha" placeholder="Senha" class="inputUser" required> 
                <label for="Senha" class="labelInput"> </label>   
                <!-- <button onclick="mostrarSenha()"><i class="fas fa-eye"></i></button>
    <script>
      function mostrarSenha() {
        var tipo = document.getElementById("Senha");
        if(tipo.type == "password") {
          tipo.type = "text";

        }else{
          tipo.type = "password"; {
          }
        }
      } -->
      </script>
             </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="Email" id="Email" placeholder="Email" class="inputUser" required>
                    <label for="Email" class="labelInput"></label>
              </div>
              <div class="input-box">
              <i class="fas fa-wallet"></i>
              <input type="CPF" name="CPF" id="CPF" placeholder="CPF" class="inputUser" required>
                    <label for="CPF" class="labelInput"></label>
              </div>
              <div class="input-box">
              <i class="fas fa-house-user"></i>
              <input type="Apartamento" name="Apartamento" id="Apartamento" placeholder="Apartamento" class="inputUser" required>
                    <label for="Apartamento" class="labelInput"></label>
              </div>

              <div class="input-box">
              <p>Você possui algum veiculo?</p>
              </div>
              <input type="radio" id="Não" name="Veiculo" value="Não" required>
              <label for="Não">Não</label>
            </div>
              <input type="radio" id="Sim" name="Veiculo" value="Sim" required>
                <label for="Sim">Sim</label>
              </div>
              <br>
                <div class="inputBox">    
                <p>Insira abaixo a placa do veículo. </p>
                <i class="fas fa-gas-pump"></i>
                <input type="option" id="Sim" name="Placa" placeholder="Caso não possua deixe em branco." value="">
                <label for="Caso não possua deixe em branco."></label>  
              <div class="button input-box">
                <input type="submit" name="submit" id="submit"value="Enviar">
              </div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>          