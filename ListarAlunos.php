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
  <h1>ATENDENTE</h1>
</center>
<hr>


<?php
include 'navbaratendente.php';
?>


<?php
include_once('../controller/controleCadastro.php');


$userController = new controleCadastro();
$lista = $userController->carregarCadastro($userController);
?>


<div class="container">
        <h1 class="display-4 text-center">Listagem de Alunos</h1>
        <hr class="my-2">


    <table class="display table table-bordered table-striped" cellspacing="0" width="100%">
        <thead>
        <tr>
            <td>ID</td>
            <td>Nome de Usuário</td>
            <td>CPF</td>
            <td>Idade</td>
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
                        <?= $l['id_cadastro']; ?>
                    </td>
                    <td>
                        <?= $l['tx_nome']; ?>
                    </td>
                    <td>
                        <?= $l['tx_cpf']; ?>
                    </td>
                    <td>
                        <?= $l['nr_idade']; ?>
                    </td>
                    <td>
                        <?= $l['statuscad']; ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-warning"
                           href="AtualizarAluno.php?id=<?= $l['id_cadastro']; ?>">Alterar Usuário</a>
                        <?php
                        if ($l['statuscad'] == 'ATIVO') {
                            ?>
                            <a class="btn btn-outline-danger"
                               href="DesativarAluno.php?id=<?= $l['id_cadastro']; ?>">Desativar Usuário</a>
                            <?php
                        } else {
                            ?>
                            <a class="btn btn-outline-success"
                               href="AtivarAluno.php?id=<?= $l['id_cadastro']; ?>">Ativar Usuário</a>
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