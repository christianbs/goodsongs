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
<?php include 'menu.php'; ?>
<section class="col-sm-4">
</section>
<section class="col-sm-4">
    <h1>Foruns</h1>
    <form id="form" action="forum.php" method="post">
        <input type='hidden' id='idForum' name='idForum'>
        <input type="hidden" id="tituloForum" name="tituloForum">
        <?php
        include "php/dados/cadastro_forum_dao.php";
        listar_foruns();
        ?>
    </form>
    <a href="cadastro-forum.php" class="btn btn-default">Criar Forum</a>
</section>
<section class="col-sm-4">
</section>
<script type="text/javascript">
    function carregarIdForum(id, tituloForum) {
        document.getElementById("idForum").value = id;
        document.getElementById("tituloForum").value = tituloForum;
        document.getElementById("form").submit();
    }
</script>
<body>
</html>