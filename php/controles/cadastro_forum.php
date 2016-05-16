<?php
if (empty($_POST['titulo']) || empty($_POST['pergunta'])) {
    include '../../menu.php';
    echo "CAMPOS VAZIOS </br> ";
    echo "<input type='button' class='btn btn-default' id='voltar' name='voltar' value='voltar' onclick='history.go(-1)'> ";
    exit;
} else {
    include "../regras/cadastro_forum_rn.php";
    include "../regras/cadastro_post_rn.php";
    
    $titulo = htmlspecialchars($_POST['titulo']);
    $pergunta = htmlspecialchars($_POST['pergunta']);

    session_start();
    $codigo = $_SESSION['codigo'];
    $id_forum = inserir_forum_rn($codigo, $titulo);
    $id_post = inserir_post_rn($id_forum, $codigo, $pergunta);
    header("location:../../inicio.php");
}