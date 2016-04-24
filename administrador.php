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
<section class="col-sm-2">
</section>
<section class="col-sm-4">
    <h1>Foruns</h1>
    <form id="form" action="forum.php" method="post">
        <input type='hidden' id='idForum' name='idForum'>
        <input type="hidden" id="tituloForum" name="tituloForum">
        <?php
        include "php/dados/cadastro_forum_dao.php";
        listar_foruns_admin();
        ?>
    </form>
</section>
<section class="col-sm-4">
    <h1>Usuários</h1>
    <form id="formUsuario">
        <input type='hidden' id='idUsuario' name='idUsuario'>
        <?php
        include "php/dados/cadastro_usuario_dao.php";
        listar_usuarios_admin();
        ?>
    </form>
</section>
<section class="col-sm-2">
</section>
<div class="modal fade" id="modalExcluirUsuario" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Deseja excluir o usuário?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="excluirUsuario()">Sim</button>
            </div>
        </div>
    </div>
    <form class="fade" id="formExcluirUsuario" method="post" action="php/controles/excluir_usuario.php">
        <input type='hidden' id='idUsuarioExcluido' name='idUsuarioExcluido'>
    </form>
</div>
<div class="modal fade" id="modalExcluirForum" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Deseja excluir o forum?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Sim</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function excluirUsuario() {
        document.getElementById("formExcluirUsuario").submit();
    }
    function setIdUsuarioExcluido(id) {
        document.getElementById("idUsuarioExcluido").value = id;
    }
</script>
<body>
</html>