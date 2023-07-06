<?php
    include_once('../controller/controleFuncionarios.php');
   
    $usuario = new controleFuncionarios();
    $usuario->atualizarfuncionarios($usuario);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Funcionário| Controle de Funcionários</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>ADMINISTRADOR DO SISTEMA</h1>
  <hr>
        <h1 class="display-4">Alteração de Dados Funcionário "<?= $usuario->getTxNome(); ?>"</h1>
        <p class="lead">Informe os dados antes de continuar</p>

        <form class="form-row" action="AtualizarFuncionario.php?atualizar&id=<?= $usuario->getIdFuncionario(); ?>" method="post">
              
              <div class="col-6">
                  <input type="text" name="tx_nome" class="form-control" placeholder="Nome" required value="<?= $usuario->getTxNome(); ?>">
              </div>

              <div class="col-6">
                <input type="text" name="tx_sobrenome" class="form-control" placeholder="Sobrenome" required value="<?= $usuario->getTxSobrenome(); ?>">   
              </div>

              <div class="col-6">
                <input type="text" name="tx_rg" class="form-control" placeholder="RG" required value="<?= $usuario->getTxRg(); ?>">   
              </div> 

              <div class="col-6">
                <input type="text" name="tx_cpf" class="form-control" placeholder="CPF" required value="<?= $usuario->getTxCpf(); ?>">   
              </div>
              
              <div class="col-1">
                <input type="text" name="tx_sexo" class="form-control" placeholder="Sexo" required value="<?= $usuario->getTxSexo(); ?>">   
              </div>

              <div class="col-5">
                <input type="date" name="dt_admissao" class="form-control" required value="<?= $usuario->getDtAdmissao(); ?>" >   
              </div>

              <div class="col-3">
                <input type="text" name="tx_login" class="form-control" placeholder="Login" required value="<?= $usuario->getTxLogin(); ?>">
              </div>

              <div class="col-3">
                <input type="text" name="tx_senha"class="form-control" placeholder="Senha" required value="<?= $usuario->getTxSenha(); ?>">   
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