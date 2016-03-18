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