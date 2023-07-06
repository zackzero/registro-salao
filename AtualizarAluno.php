<?php
    include_once('../controller/controleCadastro.php');
   
    $usuario = new controleCadastro();
    $usuario->atualizarCadastro($usuario);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Aluno| Controle de Aluno</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Atendente</h1>
  <hr>
        <h1 class="display-4">Alteração de Dados Aluno "<?= $usuario->getTxNome(); ?>"</h1>

        <form class="form-row" action="AtualizarAluno.php?atualizar&id=<?= $usuario->getIdCadastro(); ?>" method="post">
        <div class="col-6 form-group form-group">
          <input type="text" name="tx_nome" class="form-control" placeholder="Nome" value="<?= $usuario->getTxNome(); ?>" >
        </div>

        <div class="col-6 form-group">
          <input type="text" name="tx_sobrenome" class="form-control" placeholder="Sobrenome" value="<?= $usuario->getTxSobrenome(); ?>" >   
        </div>		
		
      <div class="col-3 form-group">
        <input type="text" name="tx_rg" class="form-control" placeholder="RG" value="<?= $usuario->getTxRg(); ?>" >   
      </div>

      <div class="col-3 form-group">
        <input type="text" name="tx_cpf" class="form-control" placeholder="CPF" value="<?= $usuario->getTxCPF(); ?>" >   
      </div>   

      <div class="col-3 form-group">
        <input type="number" name="nr_idade" class="form-control" placeholder="Idade" value="<?= $usuario->getNrIdade(); ?>" >   
      </div>

      <div class="col-3 form-group">
        <input type="text" name="tx_sexo" class="form-control" placeholder="Sexo" value="<?= $usuario->getTxSexo(); ?>" >   
      </div>
    
		<div class="form-row">
      <div class="col-6 form-group">
        <input type="text" name="tx_endereco" class="form-control" placeholder="Endereço" value="<?= $usuario->getTxEndereco(); ?>" >
      </div>

      <div class="col-6 form-group">
        <input type="text" name="nr_telefone" class="form-control" placeholder="Telefone" value="<?= $usuario->getNrTelefone(); ?>" >   
      </div>
    </div>

		<div class="container">

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

    <div class="col-12 text-center">
      <input type="submit" value="Atualizar Informações" class="btn btn-outline-success">
    </div>

	</form>
        
    </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>