<?php
session_start();
include_once('config.php');
/* print_r($_SESSION); */
if((!isset($_SESSION['Email']) == true) and (!isset($_SESSION['Senha']) == true))
{
    unset($_SESSION['$Email']);
    unset($_SESSION['$Senha']);
    header('Location: crud.php');
}
  $logado = $_SESSION['Email'];

  $sql = "SELECT * FROM usuarios ORDER BY id DESC";

  $result = $conexao->query($sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.3/datatables.min.css"/>
    <title>Sistema</title>
    <link rel="stylesheet" href="nav.css">
    </head>
    <style>
        
         body{
            background: #FF9F5B;
            text-align: center;
        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 0px 0px 0 0;
        }
</style>
  <body>
      <header>
          <nav>
            <ul class="nav-area">
                <li><a href="home.php">Home</a></li>
                <li><a href="crud.php">Visualização</a></li>
        
        </ul>
    </nav>
    <a href="login.php" class="btn-area">Sair</a>
    </header>
    <div class="container-fluid">
    <h2 class="text-center">Bem-Vindo ao Crud do sistema!</h2>
    <p class="datatable design text-center">Ainda em Desenvolvimento...</p>
<div class="container">
<button class="btn btn-primary my-1"><a href="create.php" class="text-light">Create</a>
    </div>
<?php 
      ?>
      <div class="m-5">
        <table class="table text-white table-bg">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Senha</th>
                <th scope="col">Email</th>
                <th scope="col">CPF</th>
                <th scope="col">Apartamento</th>
                <th scope="col">Veiculo</th>
                <th scope="col">Placa</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['Nome']."</td>";
                    echo "<td>".$user_data['Senha']."</td>";
                    echo "<td>".$user_data['Email']."</td>";
                    echo "<td>".$user_data['CPF']."</td>";
                    echo "<td>".$user_data['Apartamento']."</td>";
                    echo "<td>".$user_data['Veiculo']."</td>";
                    echo "<td>".$user_data['Placa']."</td>";
                    echo "<td>
                    <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                echo "</tr>";
                }
                ?>
            </tbody>
        </table>
      </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.3/datatables.min.js"></script>

  </body>
</html>
