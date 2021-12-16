<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'condominio';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//if($conexao->connect_errno)
// {
//     echo "Ocorreu um Erro.";
//}
//else{
//     echo "Conexão efetuada com exito.";
//}
?>