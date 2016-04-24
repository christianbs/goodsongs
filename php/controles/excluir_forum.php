<?php

include "../dados/cadastrar_post_dao.php";
include "../dados/cadastro_forum_dao.php";

$idForum = $_POST['idForumExcluido'];

excluir_todos_posts($idForum);
excluir_forum($idForum);

header("location:../../administrador.php");

