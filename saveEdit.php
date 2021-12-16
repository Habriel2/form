<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
{

    $id = $_POST['id'];
    $Nome = $_POST['Nome'];
    $Senha = $_POST['Senha'];
    $Email = $_POST['Email'];
    $CPF = $_POST['CPF'];
    $Apartamento = $_POST['Apartamento'];
    $Veiculo = $_POST['Veiculo'];
    $Placa = $_POST['Placa'];

    $sqlInsert = "UPDATE usuarios 
    SET Nome='$Nome',Senha='$Senha',Email='$Email',CPF='$CPF',Apartamento='$Apartamento',Veiculo='$Veiculo', Placa='$Placa'
    WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: crud.php');

    ?>
