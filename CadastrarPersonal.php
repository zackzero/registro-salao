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
    include_once("../controller/controlePersonal.php");

  $user = new controlePersonal();
  $user->salvarPersonal($user);
?>

<div class="container">
        <center>
          <h3>Cadastrar Personal</h3>
        </center>
        <hr>
        <br>
        <form class="form-row" action="?new" method="post">
              <div class="col-6">
                <input type="text" name="num_cref" class="form-control" placeholder="CREF" required>
              </div>

              <div class="col-6">
                <input type="text" name="area_atuacao" class="form-control" placeholder="Especialidade" required>   
              </div>
              <br>
              <br>
              <div class="col-6">
                <input type="text" name="fk_funcionario" class="form-control" placeholder="ID de funcionário" required>   
              </div>
              </div>
            <br>
            <br>
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