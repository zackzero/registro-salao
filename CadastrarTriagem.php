
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
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
  include_once '../controller/controleTriagem.php';

  $user = new controleTriagem();
  $user->salvarTriagem($user);
?>

<div class="container">

  <center>
		<h3>Triagem</h3>
	</center>
  
<form action="?new"  class="form-row" method="post">
    <div class="col-3 form-group">
    <input type="text" name='fk_aluno' class="form-control" placeholder="Id do aluno">   
    </div>
    <div class="col-3 form-group">
    <input type="text" name='tx_altura' class="form-control" placeholder="Altura">   
    </div>
    <div class="col-3 form-group">
    <input type="text" name='tx_peso' class="form-control" placeholder="peso">   
    </div>
    <div class="col-3 form-group">
    <input type="text" name='tx_braco' class="form-control" placeholder="braço">   
    </div>
    <div class="col-3 form-group">
    <input type="text" name='tx_cintura' class="form-control" placeholder="cintura">   
    </div>
    <div class="col-3 form-group">
    <input type="text" name='tx_panturrilha' class="form-control" placeholder="panturrilha">   
    </div>
    <div class="col-3 form-group">
    <input type="text" name='tx_coxa' class="form-control" placeholder="coxa">   
    </div>
  </div>
 <br>
 <br>
  <div class= "col-12 d-flex justify-content-center ">
    <input class="btn btn-success" type="submit" value="Finalizar">
  </div> 
  </div>
</form>
</div>
</body>
</html>
  
    