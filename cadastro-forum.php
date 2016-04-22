





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
<?php include 'menu.php'; ?>
<section class="col-sm-4">
</section>
<section class="col-sm-4">
    <form role="form" method="post" action="php/controles/cadastro_forum.php" onsubmit="return validarFormularioForum();">
        <h1>Cadastro de Fórum</h1>
        <div class="form-group">
            <label for="titulo">Título / Pergunta:</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="form-group">
            <label for="pergunta">Post Inicial:</label>
            <textarea class="form-control" rows="5" id="pergunta" name="pergunta"></textarea>
        </div>
        <p><button type="submit" class="btn btn-default" name="criar" style="float: right;">Criar</button></p>
    </form>
</section>
<section class="col-sm-4">
</section>
<body>
</html>