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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Manaus Fit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="CadastrarFuncionarios.php">Cadastro de Funcionarios<span class="sr-only">(current)</span></a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="CadastrarPersonal.php">Cadastrar Personal<span class="sr-only">(current)</span></a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ListarFuncionarios.php">Listar Funcionarios<span class="sr-only">(current)</span></a>
        
      </li>
    </ul>
    <div class="my-2 my-sm-0">
            <a href="logout.php" class="btn btn-danger">Sair</a>
        </div>
  </div>
</nav>

  <script src="css/bootstrap.min.css"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
  <?php
include_once('../controller/controleFuncionarios.php');


$userController = new controleFuncionarios();
$lista = $userController->carregarFuncionarios($userController);
?>


<div class="container">
        <h1 class="display-4 text-center">Listagem de Funcionários</h1>

    <table class="display table table-bordered table-striped" cellspacing="0" width="100%">
        <thead>
        <tr>
            <td>ID</td>
            <td>Nome de Usuário</td>
            <td>CPF</td>
            <td>Login</td>
            <td>Status</td>
            <td>Opções</td>

        </tr>
        </thead>

        <tbody>
        <?php
        if ($lista->rowCount() == 0) {
            ?>
            <tr>
                <td colspan="6">Nenhum dado a ser exibido. Volte mais tarde.</td>
            </tr>
            <?php
        } else {
            foreach ($lista as $l) {
                ?>
                <tr>
                    <td>
                        <?= $l['id_funcionario']; ?>
                    </td>
                    <td>
                        <?= $l['tx_nome']; ?>
                    </td>
                    <td>
                        <?= $l['tx_cpf']; ?>
                    </td>
                    <td>
                        <?= $l['tx_login']; ?>
                    </td>
                    <td>
                        <?= $l['status']; ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-warning"
                           href="AtualizarFuncionario.php?id=<?= $l['id_funcionario']; ?>">Alterar Usuário</a>
                        <?php
                        if ($l['status'] == 'ATIVO') {
                            ?>
                            <a class="btn btn-outline-danger"
                               href="DesativarFuncionario.php?id=<?= $l['id_funcionario']; ?>">Desativar Usuário</a>
                            <?php
                        } else {
                            ?>
                            <a class="btn btn-outline-success"
                               href="AtivarFuncionario.php?id=<?= $l['id_funcionario']; ?>">Ativar Usuário</a>
                            <?php
                        }
                        ?>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>      
<br>
<br>
<br>       