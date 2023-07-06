<?php
  session_start();
  if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true) and (!isset($_SESSION['nome']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        echo "<script>alert('Você não está logado. Tente novamente!'); window.location = 'Login.php';</script>";
    }

?>
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="datatables/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="datatables/css/dataTables.bootstrap4.min.css">
    <script src="datatables/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready( function () {
            $('table.display').DataTable(
                {
                    "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                    }
                }
            );
        } );
    </script>
    <title>Manaus Fit</title>

</head>

<body>
<center>
  <h1>ADMINISTRADOR DO SISTEMA</h1>
</center>
<hr>

<?php
include_once 'navbaradm.php' 
?> 

<?php
    include_once '../controller/controleFuncionarios.php';

  $user = new controleFuncionarios();
  $user->salvarFuncionarios($user);
?>

<div class="container">
  <br>
        <center>
          <h3>Cadastrar Funcionário</h3>
        </center>
        <hr>
        <br>
        <form class="form-row" action="?new" method="post">        
              <div class="col-6">
                <input type="text" name="tx_nome" class="form-control" placeholder="Nome" required>
              </div>
              <div class="col-6">
                <input type="text" name="tx_sobrenome" class="form-control" placeholder="Sobrenome" required>   
              </div>
              <br>
              <br>
              <div class="col-3">
                <input type="text" name="tx_rg" class="form-control" placeholder="RG" required>   
              </div> 

              <div class="col-3">
                <input type="text" name="tx_cpf" class="form-control" placeholder="CPF" required>   
              </div>
              
              <div class="col-2">
                <input type="text" name="tx_sexo" class="form-control" placeholder="Sexo" required>   
              </div>

              <div class="col-4">
                <input type="date" name="dt_admissao" class="form-control"  required>   
              </div>
              <br>
              <br>
              <div class="col-6">
                <input type="text" name="tx_login" class="form-control" placeholder="Login" required>
              </div>

              <div class="col-6">
                <input type="text" name="tx_senha"class="form-control" placeholder="Senha" required>   
              </div>
            </div>
            <br>
            <br>
           
            <div class= "col-12 d-flex justify-content-center ">
          
                <input class="btn btn-success" type="submit" value="Salvar">
              
            </div> 
        <br>
        <br>
        <br>
      </form>
</div>     