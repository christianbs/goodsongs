<!DOCTYPE html>
<?php
$erro = $_GET['erro'];
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body onload="mostrarMensagemErro();">
<?php include 'menu.php'; ?>
<section class="col-sm-4">
</section>
<section class="col-sm-4">
    <div id="div-erro" class="alert alert-danger">
        <strong>Erro!</strong> Usuário ou senha inválidos.
    </div>
    <input type="hidden" id="erro" value="<?php echo $erro; ?>">
    <h1>Login</h1>
    <form method="post" action="php/controles/fazer_login.php">
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" class="form-control" id="login" name="login"/>
        </div>
        <div class="form-group">
            <label for="senha">E-mail:</label>
            <input type="password" class="form-control" id="senha" name="senha"/>
        </div>
        <button type="submit" class="btn btn-default">Login</button>
        Ainda não possui cadastro? Então <a href="cadastro-dados-pessoais.php">clique aqui.</a>
    </form>
</section>
<section class="col-sm-4">
</section>
<script type="text/javascript">
    function mostrarMensagemErro() {
        var erro = document.getElementById('erro').value;
        if (erro != 'true') {
            document.getElementById('div-erro').style.visibility = 'hidden';
        }
    }
</script>
</body>
</html>