<?php
$nome = htmlspecialchars ($_POST["nome"]);
$cpf = htmlspecialchars ($_POST["cpf"]);
$email = htmlspecialchars ($_POST["email"]);
$confirmaEmail = htmlspecialchars ($_POST["confirmaEmail"]);
$sexo = htmlspecialchars ($_POST["sexo"]);
$dataNascimento = htmlspecialchars ($_POST["datanascimento"]);
$estado = htmlspecialchars ($_POST["estado"]);
$cidade = htmlspecialchars ($_POST["cidade"]);
?>
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
            <form role="form">
                <div class="form-group">
                    <div class="form-group">

                        <input type="hidden" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>">
                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" id="cpf" name="cpf" value="<?php echo $cpf; ?>">
                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" id="confirmaEmail" name="confirmaEmail" value="<?php echo $confirmaEmail; ?>">
                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" id="sexo" name="sexo" value="<?php echo $sexo; ?>">
                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" id="dataNascimento" value="<?php echo $dataNascimento; ?>">
                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" id="estado" name="estado" value="<?php echo $estado; ?>">
                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" id="cidade" name="cidade" value="<?php echo $cidade; ?>">
                    </div>


                    <label for="email">Usuário:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Senha:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">Confirmação de Senha:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">Lembre-me</label>
                </div>
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
        </section>
        <section class="col-sm-4">
        </section>
	<body>
</html>