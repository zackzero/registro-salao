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

  $user = new controleCadastro();
  $user->salvarCadastro($user);
?>
<div class="container">
	<center>
		<h3>Cadastro de Alunos</h3>
	</center>
	<hr>
	<br>
	<form action="?new" method="post">
		<div class="form-row">
        <div class="col-6 form-group">
          <input type="text" name="tx_nome" class="form-control" placeholder="Nome">
        </div>

        <div class="col-6 form-group">
          <input type="text" name="tx_sobrenome" class="form-control" placeholder="Sobrenome">   
        </div>
    </div>		
		<div class="form-row">
      <div class="col-3 form-group">
        <input type="text" name="tx_rg" class="form-control" placeholder="RG">   
      </div>

      <div class="col-3 form-group">
        <input type="text" name="tx_cpf" class="form-control" placeholder="CPF">   
      </div>   

      <div class="col-3 form-group">
        <input type="number" name="nr_idade" class="form-control" placeholder="Idade">   
      </div>

      <div class="col-3 form-group">
        <input type="text" name="tx_sexo" class="form-control" placeholder="Sexo">   
      </div>
    </div>
		<div class="form-row">
      <div class="col-6 form-group">
        <input type="text" name="tx_endereco" class="form-control" placeholder="Endereço">
        </div>
      <div class="col-6 form-group">
        <input type="text" name="nr_telefone" class="form-control" placeholder="Telefone">   
      </div>
    </div>
		<div class="container">
			<br>
			<br>
		  <h3>Planos</h3>
        <hr>
        <div class="custom-control custom-radio-inline">
          <input type="radio" class="form-control-input"  name='fk_plano' value='2'>
          <label class="form-control-label" for="inlineUnchecked">Plano Mensal</label>
        </div>
        
        <div class="custom-control custom-radio-inline">
          <input type="radio" class="form-control-input"  name='fk_plano' value='1'>
          <label class="form-control-label" for="inlineChecked">Plano Anual</label>
        </div>
		</div>

		<div class="container">
            <hr>
            <h3>Atividade Recomendada</h3>
            <br>
            <div class="custom-control custom-radio-inline">
              <input type="radio" class="form-control-input"  name='fk_atividades' value='1'>
              <label class="form-control-label" for="inlineUnchecked">Musculação</label>
            </div>
            <div class="custom-control custom-radio-inline">
              <input type="radio" class="form-control-input"  name='fk_atividades' value='2'>
              <label class="form-control-label" for="inlineUnchecked">Dança</label>
            </div>
            <div class="custom-control custom-radio-inline">
              <input type="radio" class="form-control-input"  name='fk_atividades' value='3'>
              <label class="form-control-label" for="inlineUnchecked">Aerobica</label>
            </div>
    </div>

		<div>

			<br>
			<br>

			<center>
				<input type="submit" value="Finalizar">
			</center>

			<br>
			<br>
			<br>  
		</div> 

	</form> 

</body>
</html>