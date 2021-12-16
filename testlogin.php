<?php
session_start();
   //print_r($_REQUEST);
   if(isset($_POST['submit']) && !empty($_POST['Email']) && !empty($_POST['Senha']))
   {
       //Acessa
       include_once('config.php');
       $Email = $_POST['Email'];
       $Senha = $_POST['Senha'];

       /* print_r('Email: ' . $Email);
       print_r('<br>');
       print_r('Senha: ' . $Senha); */

       $sql = "SELECT * FROM usuarios WHERE Email = '$Email' and Senha = '$Senha'";

       $result = $conexao->query($sql);

       /* print_r($sql);
       print_r($result); */

       if(mysqli_num_rows($result) < 1)
       {
           unset($_SESSION['$Email']);
           unset($_SESSION['$Senha']);
          header('Location: login.php');
       }
       else
       {
           $_SESSION['Email'] = $Email;
           $_SESSION['Senha'] = $Senha;
           header('Location: crud.php');
       }
       
   }
   else
   {
        //Nao acessa
       header('Location: login.php');
   }
?>
    