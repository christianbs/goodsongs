<?php
    $nome = htmlspecialchars ($_POST["nome"]);
    $cpf = htmlspecialchars ($_POST["cpf"]);
    $email = htmlspecialchars ($_POST["email"]);
    $confirmaEmail = htmlspecialchars ($_POST["confirmaEmail"]);
    $sexo = htmlspecialchars ($_POST["sexo"]);
    $dataNascimento = htmlspecialchars ($_POST["dataNascimento"]);
    $estado = htmlspecialchars ($_POST["estado"]);
    $cidade = htmlspecialchars ($_POST["cidade"]);
    $logradouro = htmlspecialchars ($_POST["logradouro"]);
    $cep = htmlspecialchars ($_POST["cep"]);
    $numero = htmlspecialchars ($_POST["numero"]);
?>
<!DOCTYPE html>
<html> 
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script  src="js/jquery.mask.min.js"></script>
        <script src="js/script.js"></script>
	</head>
	<body>
		<?php include 'menu.php';?>
        <section class="col-sm-4">
        </section>
        <section class="col-sm-4">
            <form role="form" method="post" enctype='multipart/form-data'  action='php/controles/cadastro_usuario.php' onsubmit="return validarFormulario1();">
				 <div style='margin-left:500px !important;width:500px; '>
								<fieldset style='margin:auto !important'>                                
									 <legend> Selecione uma imagem: </legend>
									<input type='hidden' name='MAX_SIZE_FILE' value='1000000'> <br />
									<input  type='file' name='ARQUIVO' id='arquivo'> <br />                              
								</fieldset>
				</div>
                <input type='hidden' class='form-control' id='nome' name='nome' value= "<?php echo $nome ?>" >
                <input type='hidden' class='form-control' id='cpf' name='cpf' value="<?php echo  $cpf ?>">
                <input type='hidden' class='form-control' id='email' name='email' value="<?php echo $email ?>">
                <input type="hidden" class="form-control" id="confirmaEmail" name="confirmaEmail" value="<?php echo $confirmaEmail; ?>">
                <input type="text" class="form-control" id="sexo" name="sexo" value="<?php echo $sexo; ?>">
                <input type="hidden" class="form-control" id="dataNascimento" name="dataNascimento" value="<?php echo $dataNascimento; ?>">
                <input type="hidden" class="form-control" id="estado" name="estado" value="<?php echo $estado; ?>">
                <input type="hidden" class="form-control" id="cidade" name="cidade" value="<?php echo $cidade; ?>">
                <input type="hidden" class="form-control" id="logradouro" name="logradouro" value="<?php echo $logradouro; ?>">
                <input type="hidden" class="form-control" id="cep" name="cep" value="<?php echo $cep; ?>">
                <input type="hidden" class="form-control" id="numero" name="numero" value="<?php echo $numero; ?>">

                <div class="form-group">
                    <label for="username">Usuário:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" id="senha" name="senha"> 
                </div>
                <div class="form-group">
                    <label for="confirmarSenha">Confirmação de Senha:</label>
                    <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha">
                </div>
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
        </section>
        <section class="col-sm-4">
        </section>
	</body>
</html>