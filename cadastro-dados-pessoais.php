<!DOCTYPE html> 
<html> 
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include 'menu.php';?>
        <section class="col-sm-4">
        </section>
        <section class="col-sm-4">
            <form role="form" action="cadastro-dados-conta.php" method="post" >
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="confirmaEmail">Confirmar E-mail:</label>
                    <input type="email" class="form-control" id="confirmaEmail" name="confirmaEmail">
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo:</label>
                    <input type="text" class="form-control" id="sexo" name="sexo">
                </div>
                <div class="form-group">
                    <label for="dataNascimento">Data nascimento:</label>
                    <input type="text" class="form-control" id="dataNascimento" name="dataNascimento">
                </div>
                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <input type="text" class="form-control" id="estado" name="estado">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
                <p><input type="submit"  class="btn btn-default" value="Proximo" name="prosseguir"></p>
            </form>
        </section>
        <section class="col-sm-4">
        </section>
	<body>
</html>