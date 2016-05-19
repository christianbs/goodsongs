<!DOCTYPE html>
<?php
include "php/controles/validar_login.php";
?>
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
<?php
    include 'menu.php';
    include "php/dados/cadastrar_post_dao.php";
    $id = htmlspecialchars($_POST['idForum']);
    $titulo = htmlspecialchars($_POST['tituloForum']);
?>
<section class="col-sm-2">
</section>
<section class="col-sm-8">
    <h1><?php echo $titulo; ?></h1>
    <?php
        listar_posts_forum($id);
    ?>
    <hr>
    <form method="post" action="php/controles/criar_post.php" onsubmit="return validarFormularioPost();" >
        <input type="hidden" name="tituloForum" value="<?php echo $titulo; ?>">
        <input type="hidden" name="idForum" value="<?php echo $id; ?>">
        <div class="form-group">
            <label for="pergunta">Novo Post:</label>
            <textarea class="form-control" rows="5" id="post" name="post"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Criar Post</button>
    </form>
</section>
<section class="col-sm-2">
</section>
<body>
</html>