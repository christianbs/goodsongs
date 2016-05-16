<?php
include "php/controles/validar_login.php";
include "php/dados/cadastro_forum_dao.php";
$titulo = carregar_forum_para_update($_POST["idForumAlterar"]);
$idForum = $_POST["idForumAlterar"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>

    <script src="js/script.js"></script>

</head>
<body>
<?php include 'menu.php'; ?>
<section class="col-sm-4">
</section>
<section class="col-sm-4">
    <form role="form" enctype='multipart/form-data' action="php/controles/atualiza_forum.php" method="post">

        <div class="form-group">
            <label for="nome">Titulo:</label>
            <input type="text" class="form-control" value="<?php echo $titulo ?>" id="titulo" name="titulo"/>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" value="<?php echo $idForum ?>" id="idForum" name="idForum">
        </div>

        <p><input type="submit" class="btn btn-default" value="concluir" name="concluir"/></p>
    </form>
</section>
</body>
</html>