<?php


  if(empty($_POST['titulo']) ||  empty($_POST['pergunta']))  {
        
     
        echo "CAMPOS VAZIOS </br> ";
        echo "<input type='button' class='btn btn-default' id='voltar' name='voltar' value='voltar' onclick='history.go(-1)'> ";
        exit;
        
        
    }else{

            include "../regras/cadastro_forum_rn.php";
            include "../regras/cadastro_post_rn.php";

            $titulo = htmlspecialchars( $_POST['titulo']);
            $pergunta = htmlspecialchars($_POST['pergunta']);

            $id_forum = inserir_forum_rn(1, $titulo);
            $id_post = inserir_post_rn($id_forum, 1, $pergunta);
            header("location:../../inicio.php");
  }