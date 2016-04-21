<?php

include "../regras/cadastro_forum_rn.php";
include "../regras/cadastro_post_rn.php";

$titulo = $_POST['titulo'];
$pergunta = $_POST['pergunta'];

$id_forum = inserir_forum_rn(1, $titulo);
$id_post = inserir_post_rn($id_forum, 1, $pergunta);
header("location:../../inicio.php");